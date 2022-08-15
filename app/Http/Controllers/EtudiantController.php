<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Models\Classe;
use App\Models\Filiere;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nosEtudiantsDiplomesIndex()
    {
        // Datas fetching
        $etudiants_diplomes = Etudiant::join('users', 'users.id', '=', 'etudiants.id_user')
            ->where([['etudiants.deleted_at', null], ['etudiants.est_diplome', true]])
            ->select('etudiants.*', 'users.nom_user', 'users.prenom_user', 'users.tel_user')
            ->get();
        $filieres = Filiere::where('deleted_at', null)->get();
        // Display
        return view('services.etudiants-diplomes', compact('etudiants_diplomes', 'filieres'));
    }

    public function cvtheque()
    {
        $etudiants = Etudiant::join('users', 'users.id', '=', 'etudiants.id_user')
            ->join('classes', 'classes.id', '=', 'etudiants.id_classe')
            ->join('filieres', 'filieres.id', '=', 'classes.id_filiere')
            ->where([['etudiants.cv_path', '!=', null], ['etudiants.deleted_at', null]])
            ->select('etudiants.*', 'users.nom_user', 'users.prenom_user', 'users.tel_user', 'classes.lib_classe', 'filieres.lib_filiere')
            ->orderBy('etudiants.created_at', 'DESC')
            ->get();
        $filieres = Filiere::where('deleted_at', null)->get();
        $classes = Classe::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        // Display
        return view('services.cvtheque', compact('etudiants', 'filieres', 'classes', 'result'));
    }

    public function cvthequeWithFilters(Request $request)
    {
        $etudiants = Etudiant::join('users', 'users.id', '=', 'etudiants.id_user')
            ->join('classes', 'classes.id', '=', 'etudiants.id_classe')
            ->join('filieres', 'filieres.id', '=', 'classes.id_filiere')
            ->where([['etudiants.cv_path', '!=', null], ['etudiants.deleted_at', null]])
            // Application des filtres
            ->where([$request->nom_complet != null ? ['users.nom_complet_user', 'like', '%' . $request->nom_complet . '%'] : [null]])
            ->where([$request->filiere != null ? ['filieres.id', $request->filiere] : [null]])
            ->where([$request->classe != null ? ['classes.id', $request->classe] : [null]])
            ->where([$request->statut != null ? ($request->statut == 'Etudiant' ? ['etudiants.est_diplome', 0] : ['etudiants.est_diplome', 1]) : [null]])
            // Sélection des données
            ->select('etudiants.*', 'users.nom_user', 'users.prenom_user', 'users.tel_user', 'classes.lib_classe', 'filieres.lib_filiere')
            ->orderBy('etudiants.created_at', 'DESC')
            ->get();
        // Autres données
        $filieres = Filiere::where('deleted_at', null)->get();
        $classes = Classe::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        // Display
        return view('services.cvtheque', compact('etudiants', 'filieres', 'classes', 'result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEtudiantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtudiantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEtudiantRequest  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
