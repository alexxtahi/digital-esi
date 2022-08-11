<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use App\Http\Requests\StoreEnqueteRequest;
use App\Http\Requests\UpdateEnqueteRequest;
use App\Models\Commentaire;
use App\Models\Specialite;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquetes = Enquete::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        // Display
        return view('services.enquetes', compact('enquetes', 'result'));
    }

    public function detailsEnquete(StoreEnqueteRequest $request)
    {
        $enquete = Enquete::where([['id', $request->get('id')], ['deleted_at', null]])->first();
        $enquetes_similaires = Enquete::where([['id', '!=', $enquete->id], ['domaine', $enquete->domaine], ['deleted_at', null]])->get();
        $comments = Commentaire::join('users', 'users.id', '=', 'commentaires.id_user')
            ->where([['commentaires.id_enquete', $enquete->id], ['commentaires.deleted_at', null]])
            ->select('commentaires.*', 'users.nom_user', 'users.prenom_user')
            ->get();
        $result = session()->get('result') ?? null;

        // Affichage
        return view('services.enquete-details', compact('enquete', 'enquetes_similaires', 'comments', 'result'),);
    }


    public function comment(Request $request)
    {
        $result = ['state' => 'error', 'message' => 'Une erreur est survenue'];
        try {
            Commentaire::create([
                'contenu_com' => $request->commentaire,
                'date_com' => now(),
                'id_enquete' => $request->id_enquete,
                'id_user' => Auth::user()->id,
            ]);
            $result['state'] = 'success';
            $result['message'] = "Votre commentaire a été envoyé !";
        } catch (Exception $exc) {
            $result['state'] = 'danger';
            $result['message'] = "Echec de l'envoi du commentaire.";
        }
        // dd($request);
        return redirect()->back()->with('result', $result);
    }

    public function dashIndex()
    {
        $enquetes = Enquete::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        return view('dashboard.pages.enquetes.index', compact('enquetes', 'result'));
    }

    public function create()
    {
        $specs = Specialite::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        return view('dashboard.pages.enquetes.create', compact('specs', 'result'));
    }

    public function store(StoreEnqueteRequest $request)
    {

        $data = $request->all();
        // Validation de la requête
        $request->validate([
            'theme' => 'required',
            'domaine' => 'required',
            'description' => 'required',
        ]);

        // Vérifier si l'enregistrement est déjà dans la base de données
        $existant = Enquete::where('theme', $data['theme'])->first();
        if ($existant != null) { // Si 'enregistrement existe déjà
            if ($existant->deleted_at == null) {
                // Message au cas où l'enregistrement existe déjà...
                $result['state'] = 'warning';
                $result['message'] = 'Cette enquête existe déjà.';
            } else { // Au cas ou l'enregistrement avait été supprimé...'
                $existant->description = $data['description'];
                $existant->date_publication = now();
                $existant->deleted_at = null;
                $existant->deleted_by = null;
                $existant->created_at = now();
                $existant->save();
                // Message de success
                $result['state'] = 'success';
                $result['message'] = "L'enquête a bien été enregistrée.";
            }
        } else { // Si l'enregistrement n'existe pas alors on le crée
            try {
                // Création d'un nouvel enregistrement
                $enquete = new Enquete();
                $enquete->theme = $data['theme'];
                $enquete->domaine = $data['domaine'];
                $enquete->description = $data['description'];
                $enquete->date_publication = now();
                $enquete->created_at = now();
                $enquete->save(); // Sauvegarde
                // Message de success
                $result['state'] = 'success';
                $result['message'] = "L'enquête a bien été enregistrée.";
            } catch (Exception $exc) { // ! En cas d'erreur
                $result['state'] = 'error';
                $result['message'] = $exc->getMessage();
            }
        }
        // Redirection
        return redirect()->route('dashboard.pages.enquetes.create')->with('result', $result);
    }

    public function edit(int $id)
    {
        $enquete = Enquete::find($id);
        $specs = Specialite::where('deleted_at', null)->get();
        $result = session()->get('result');
        return view('dashboard.pages.enquetes.edit', compact('enquete', 'specs', 'result'));
    }

    public function update(int $id, UpdateEnqueteRequest $request)
    {
        $data = $request->all();

        // Validation de la requête
        $request->validate([
            'theme' => 'required',
            'domaine' => 'required',
            'description' => 'required',
        ]);

        try {
            // Modification
            $enquete = Enquete::find($id);
            $enquete->theme = $data['theme'];
            $enquete->domaine = $data['domaine'];
            $enquete->description = $data['description'];
            $enquete->save(); // Sauvegarde
            // Message de success
            $result['state'] = 'success';
            $result['message'] = "L'enquête a bien été modifiée.";
        } catch (Exception $exc) { // ! En cas d'erreur
            $result['state'] = 'error';
            $result['message'] = $exc->getMessage();
        }
        // Redirection
        return redirect()->route('dashboard.pages.enquetes.index')->with('result', $result);
    }

    public function delete(int $id)
    {
        try {
            Enquete::find($id)->delete();
            $result['state'] = 'success';
            $result['message'] = "L'enquête a bien été supprimée.";
        } catch (Exception $exc) {
            $result['state'] = 'danger';
            $result['message'] = 'Echec de la suppression.';
        }
        return redirect()->route('dashboard.pages.enquetes.index')->with('result', $result);
    }
}
