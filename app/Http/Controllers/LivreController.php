<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Http\Requests\StoreLivreRequest;
use App\Http\Requests\UpdateLivreRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Exception;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        // Display
        return view('services.bibliotheque', compact('livres', 'result'));
    }

    public function detailsLivre(StoreLivreRequest $request)
    {
        $livre = Livre::where([['id', $request->get('id')], ['deleted_at', null]])->first();
        $result = session()->get('result') ?? null;

        // Affichage
        return view('services.livre-details', compact('livre', 'result'),);
    }

    public function dashIndex()
    {
        $livres = Livre::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        return view('dashboard.pages.livres.index', compact('livres', 'result'));
    }

    public function create()
    {
        $result = session()->get('result') ?? null;
        return view('dashboard.pages.livres.create', compact('result'));
    }

    public function store(StoreLivreRequest $request)
    {

        $data = $request->all();
        // Validation de la requête
        $request->validate([
            'titre' => 'required',
            'resume' => 'required',
            'auteur' => 'required',
            'fichier' => 'required',
        ]);

        // Vérifier si l'enregistrement est déjà dans la base de données
        $existant = Livre::where('titre', $data['titre'])->first();
        if ($existant != null) { // Si 'enregistrement existe déjà
            if ($existant->deleted_at == null) {
                // Message au cas où l'enregistrement existe déjà...
                $result['state'] = 'warning';
                $result['message'] = 'Ce livre existe déjà.';
            } else { // Au cas ou l'enregistrement avait été supprimé...'
                $existant->titre = $data['titre'];
                $existant->resume = $data['resume'];
                $existant->auteur = $data['auteur'];
                // TODO: Complete this
                $existant->deleted_at = null;
                $existant->deleted_by = null;
                $existant->created_at = now();
                $existant->save();
                // Message de success
                $result['state'] = 'success';
                $result['message'] = "Le livre a bien été enregistré.";
            }
        } else { // Si l'enregistrement n'existe pas alors on le crée
            try {
                // Création d'un nouvel enregistrement
                $livre = new Livre();
                $livre->titre = $data['titre'];
                $livre->resume = $data['resume'];
                $livre->auteur = $data['auteur'];
                $livre->fichier = 'documents/livres/livre_' . date('d_m_Y_H_i_s') . '.pdf';
                //Enregistrement du fichier du livre
                $uploaded_file_path = $request->file('fichier')->storeAs('livres', 'livre_' .  date('d_m_Y_H_i_s') . '.pdf');
                File::moveDirectory(storage_path('app/' . $uploaded_file_path), public_path($livre->fichier));
                // Chemin de l'image
                if (isset($data['img_couverture']) && !empty($data['img_couverture']))
                    $livre->img_couverture = 'img/livres/livre_' . date('d_m_Y_H_i_s') . '.png';
                $livre->updated_at = now();
                $livre->save(); // Sauvegarde
                //Enregistrement de l'image s'il y'en a
                if (isset($data['img_couverture']) && !empty($data['img_couverture'])) {
                    $img_couverture = Image::make($data['img_couverture']);
                    //$img_couverture->resize(300, 300);  // redimensionner les images
                    $img_couverture->save(public_path($livre->img_couverture));
                }
                // Message de success
                $result['state'] = 'success';
                $result['message'] = "Le livre a bien été enregistré.";
            } catch (Exception $exc) { // ! En cas d'erreur
                $result['state'] = 'error';
                $result['message'] = $exc->getMessage();
            }
        }
        // Redirection
        return redirect()->route('dashboard.pages.livres.create')->with('result', $result);
    }

    public function edit(int $id)
    {
        $livre = Livre::find($id);
        $result = session()->get('result');
        return view('dashboard.pages.livres.edit', compact('livre', 'result'));
    }

    public function update(int $id, UpdateLivreRequest $request)
    {
        $data = $request->all();

        // Validation de la requête
        $request->validate([
            'titre' => 'required',
            'resume' => 'required',
            'auteur' => 'required',
        ]);

        try {
            // Modification
            $livre = Livre::find($id);
            $livre->titre = $data['titre'];
            $livre->resume = $data['resume'];
            $livre->auteur = $data['auteur'];
            $livre->fichier = 'documents/livres/livre_' . date('d_m_Y_H_i_s') . '.pdf';
            //Enregistrement du fichier du livre
            if (isset($data['fichier']) && !empty($data['fichier']) && $livre->fichier == null) {
                $uploaded_file_path = $request->file('fichier')->storeAs('livres', 'livre_' .  date('d_m_Y_H_i_s') . '.pdf');
                File::moveDirectory(storage_path('app/' . $uploaded_file_path), public_path($livre->fichier));
            }
            // Chemin de l'image
            if (isset($data['img_couverture']) && !empty($data['img_couverture']) && $livre->img_couverture == null)
                $livre->img_couverture = 'img/livres/livre_' . date('d_m_Y_H_i_s') . '.png';
            $livre->updated_at = now();
            $livre->save(); // Sauvegarde
            //Enregistrement de l'image s'il y'en a
            if (isset($data['img_couverture']) && !empty($data['img_couverture'])) {
                $img_couverture = Image::make($data['img_couverture']);
                //$img_couverture->resize(300, 300);  // redimensionner les images
                $img_couverture->save(public_path($livre->img_couverture));
            }
            // Message de success
            $result['state'] = 'success';
            $result['message'] = "Le livre a bien été modifié.";
        } catch (Exception $exc) { // ! En cas d'erreur
            $result['state'] = 'error';
            $result['message'] = $exc->getMessage();
        }
        // Redirection
        return redirect()->route('dashboard.pages.livres.index')->with('result', $result);
    }

    public function delete(int $id)
    {
        try {
            Livre::find($id)->delete();
            $result['state'] = 'success';
            $result['message'] = "Le livre a bien été supprimé.";
        } catch (Exception $exc) {
            $result['state'] = 'danger';
            $result['message'] = 'Echec de la suppression.';
        }
        return redirect()->route('dashboard.pages.livres.index')->with('result', $result);
    }
}
