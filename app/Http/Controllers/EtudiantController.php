<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Models\Filiere;

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
            ->get();
        $result = session()->get('result') ?? null;
        // Display
        return view('services.cvtheque', compact('etudiants', 'result'));
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
