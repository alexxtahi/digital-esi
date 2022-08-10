<?php

namespace App\Http\Controllers;

use App\Helpers\UserHelper;
use App\Models\OffreEmploi;
use App\Http\Requests\StoreOffreEmploiRequest;
use App\Http\Requests\UpdateOffreEmploiRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreEmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = OffreEmploi::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        // Display
        return view('services.stages-et-emplois', compact('offres', 'result'));
    }

    public function detailsOffre(StoreOffreEmploiRequest $request)
    {
        $offre = OffreEmploi::where([['id', $request->get('id')], ['deleted_at', null]])->first();
        $offres_similaires = OffreEmploi::where([['id', '!=', $offre->id], ['domaine', $offre->domaine], ['deleted_at', null]])->get();
        $result = session()->get('result') ?? null;

        // Affichage
        return view('services.offre-details', compact('offre', 'offres_similaires', 'result'));
    }

    public function candidate(Request $request)
    {
        try {
            $result = ['state' => 'error', 'message' => 'Une erreur est survenue'];
            $user = UserHelper::getAuthUser();
            if ($user != null && $user->role_user == 'Etudiant') {
                $cv = null;
                if ($request->cv == null) {
                    // dd(public_path($user->etudiant->cv_path));
                    $cv = File(public_path($user->etudiant->cv_path));
                } else {
                    // dd($request);
                    // $cv = File($request->cv);
                }
            }
            $result['state'] = 'success';
            $result['message'] = "Votre candidature a bien été envoyé !";
        } catch (Exception $exc) {
            $result['state'] = 'danger';
            $result['message'] = "Echec de l'envoi de la candidature.";
        }
        // dd($request);
        return redirect()->back()->with('result', $result);
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
     * @param  \App\Http\Requests\StoreOffreEmploiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOffreEmploiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OffreEmploi  $offreEmploi
     * @return \Illuminate\Http\Response
     */
    public function show(OffreEmploi $offreEmploi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OffreEmploi  $offreEmploi
     * @return \Illuminate\Http\Response
     */
    public function edit(OffreEmploi $offreEmploi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOffreEmploiRequest  $request
     * @param  \App\Models\OffreEmploi  $offreEmploi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOffreEmploiRequest $request, OffreEmploi $offreEmploi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OffreEmploi  $offreEmploi
     * @return \Illuminate\Http\Response
     */
    public function destroy(OffreEmploi $offreEmploi)
    {
        //
    }
}
