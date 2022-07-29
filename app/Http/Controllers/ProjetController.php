<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Models\Specialite;
use Exception;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupération des projets
        $projets = Projet::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        // Affichage
        return view('dashboard.pages.projets.index', compact('projets', 'result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Récupération des spécialités
        $specs = Specialite::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        // Affichage
        return view('dashboard.pages.projets.create', compact('specs', 'result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjetRequest $request)
    {

        $data = $request->all();

        // Validation de la requête
        $request->validate([
            'titre_projet' => 'required',
            'nom_solution_projet' => 'required',
            'domaine_projet' => 'required',
            'description_projet' => 'required',
        ]);

        // Vérifier si l'enregistrement est déjà dans la base de données
        $existant = Projet::where('titre_projet', $data['titre_projet'])->first();
        if ($existant != null) { // Si 'enregistrement existe déjà
            if ($existant->deleted_at == null) {
                // Message au cas où l'enregistrement existe déjà...
                $result['state'] = 'warning';
                $result['message'] = 'Ce projet existe déjà.';
            } else { // Au cas ou l'enregistrement avait été supprimé...'
                $existant->description_projet = $data['description_projet'];
                $existant->deleted_at = null;
                $existant->deleted_by = null;
                $existant->created_at = now();
                $existant->save();
                // Message de success
                $result['state'] = 'success';
                $result['message'] = 'Le projet a bien été enregistré.';
            }
        } else { // Si l'enregistrement n'existe pas alors on le crée
            try {
                // Création d'un nouvel enregistrement
                $projet = new Projet;
                $projet->titre_projet = $data['titre_projet'];
                $projet->nom_solution_projet = $data['nom_solution_projet'];
                $projet->domaine_projet = $data['domaine_projet'];
                $projet->description_projet = $data['description_projet'];
                if (isset($data['img_projet']) && !empty($data['img_projet']))
                    $projet->img_projet = 'img/projets/projet_' . date('d_m_Y_H_i_s') . '.png';
                $projet->created_at = now();
                $projet->save(); // Sauvegarde
                //Enregistrement de l'image s'il y'en a
                if (isset($data['img_projet']) && !empty($data['img_projet'])) {
                    $img_projet = Image::make($data['img_projet']);
                    //$img_projet->resize(300, 300);  // redimensionner les images
                    $img_projet->save(public_path('/' . $projet->img_projet));
                }

                // Message de success
                $result['state'] = 'success';
                $result['message'] = 'Le projet a bien été enregistré.';
            } catch (Exception $exc) { // ! En cas d'erreur
                $result['state'] = 'error';
                $result['message'] = $exc->getMessage();
                $result['img_path'] = $data['img_projet'] ?? null;
            }
        }
        //dd($result);
        // Redirection
        return redirect()->route('dashboard.pages.projets.create')->with('result', $result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $projet = Projet::find($id);
        $specs = Specialite::where('deleted_at', null)->get();
        $result = session()->get('result');
        return view('dashboard.pages.projets.edit', compact('projet', 'specs', 'result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjetRequest  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(int $id, UpdateProjetRequest $request)
    {
        $data = $request->all();

        // Validation de la requête
        $request->validate([
            'titre_projet' => 'required',
            'nom_solution_projet' => 'required',
            'domaine_projet' => 'required',
            'description_projet' => 'required',
        ]);

        try {
            // Création d'un nouvel enregistrement
            $projet = Projet::find($id);
            $projet->titre_projet = $data['titre_projet'];
            $projet->nom_solution_projet = $data['nom_solution_projet'];
            $projet->domaine_projet = $data['domaine_projet'];
            $projet->description_projet = $data['description_projet'];
            $projet->updated_at = now();
            $projet->save(); // Sauvegarde
            //Enregistrement de l'image s'il y'en a
            if (isset($data['img_projet']) && !empty($data['img_projet'])) {
                $img_projet = Image::make($data['img_projet']);
                //$img_projet->resize(300, 300);  // redimensionner les images
                $img_projet->save(public_path('/' . $projet->img_projet));
            }

            // Message de success
            $result['state'] = 'success';
            $result['message'] = 'Le projet a bien été modifié.';
        } catch (Exception $exc) { // ! En cas d'erreur
            $result['state'] = 'error';
            $result['message'] = $exc->getMessage();
            $result['img_path'] = $data['img_projet'] ?? null;
        }
        //dd($result);
        // Redirection
        return redirect()->route('dashboard.pages.projets.index')->with('result', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function delete(int $id)
    {
        try {
            Projet::find($id)->delete();
            $result['state'] = 'success';
            $result['message'] = 'Le projet a bien été supprimé.';
        } catch (Exception $exc) {
            $result['state'] = 'danger';
            $result['message'] = 'Echec de la suppression.';
        }
        return redirect()->route('dashboard.pages.projets.index')->with('result', $result);
    }
}

/* code with an issue

    public function store(StoreProjetRequest $request)
    {
        // Validation de la requête
        $request->validate([
            'titre_projet' => 'required',
            'domaine_projet' => 'required',
            'description_projet' => 'required',
        ]);

        // Vérifier si l'enregistrement est déjà dans la base de données
        /*$existant = Projet::where('titre_projet', $data['titre_projet'])->first();
        if ($existant != null) { // Si 'enregistrement existe déjà
            if ($existant->deleted_at == null) {
                // Message au cas où l'enregistrement existe déjà...
                $result['state'] = 'warning';
                $result['message'] = 'Ce projet existe déjà.';
            } else { // Au cas ou l'enregistrement avait été supprimé...'
                $existant->description_projet = $data['description_projet'];
                $existant->deleted_at = null;
                $existant->deleted_by = null;
                $existant->created_at = now();
                $existant->save();
                // Message de success
                $result['state'] = 'success';
                $result['message'] = 'Le projet a bien été enregistré.';
            }
        } else { // Si l'enregistrement n'existe pas alors on le crée
            try {
                // Création d'un nouvel enregistrement
                $projet = new Projet;
                $projet->titre_projet = $data['titre_projet'];
                $projet->domaine_projet = $data['domaine_projet'];
                $projet->description_projet = $data['description_projet'];
                // Enregistrement de l'image s'il y'en a
                // if (isset($data['img_projet']) && !empty($data['img_projet'])) {
                //     $projet->img_prod = 'img/projets/' . $data['img_projet'];
                //     $img_prod = Image::make($data['img_prod']->getRealPath());
                //     //$img_prod->resize(300, 300);
                //     $img_prod->save(public_path('/img/projets/' . $data['img_projet']->getClientOriginalName()));
                // }
                $projet->created_at = now();
                $projet->save(); // Sauvegarde
                // Message de success
                $result['state'] = 'success';
                $result['message'] = 'Le projet a bien été enregistré.';
            } catch (Exception $exc) { // ! En cas d'erreur
                $result['message'] = $exc->getMessage();
            }
        }
        // Redirection
        return redirect()->route('dashboard.pages.projets.index');
    }
*/
