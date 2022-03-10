<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Models\Specialite;
use Exception;
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
        // Affichage
        return view('dashboard.pages.projets.index', compact('projets'));
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
        // Affichage
        return view('dashboard.pages.projets.create', compact('specs'));
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
                //$existant->created_by = Auth::user()->id;
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
                //Enregistrement de l'image s'il y'en a
                if (isset($data['img_projet']) && !empty($data['img_projet'])) {
                    $projet->img_projet = 'img/projets/' . $data['img_projet']->getClientOriginalName();
                    $img_projet = Image::make($data['img_projet']);
                    //$img_projet->resize(300, 300);
                    $img_projet->save(public_path('/img/projets/' . $data['img_projet']->getClientOriginalName()));
                }
                $projet->created_at = now();
                //$projet->created_by = Auth::user()->id;
                $projet->save(); // Sauvegarde
                // Message de success
                $result['state'] = 'success';
                $result['message'] = 'Le projet a bien été enregistré.';
            } catch (Exception $exc) { // ! En cas d'erreur
                $result['message'] = $exc->getMessage();
                $result['img_path'] = $data['img_projet'];
            }
        }
        //dd($result);
        // Redirection
        return redirect()->route('dashboard.pages.projets.index');
    }
    /*
    public function store(StoreProjetRequest $request)
    {
        //dd($request);

        // Validation de la requête
        $request->validate([
            'titre_projet' => 'required',
            'domaine_projet' => 'required',
            'description_projet' => 'required',
        ]);

        //Enregistrement dans la bd
        Projet::create([
            'titre_projet' => $request->get('titre_projet'),
            'domaine_projet' => $request->get('domaine_projet'),
            'description_projet' => $request->get('description_projet'),
            'img_projet' => 'img/' . $request->get('img_projet')[0],
            'created_at' => now(),
        ]);

        // Redirection
        return redirect()->route('dashboard.pages.projets.index');
    }
*/

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
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjetRequest  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjetRequest $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        //
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
                //$existant->created_by = Auth::user()->id;
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
                //$projet->created_by = Auth::user()->id;
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
