<?php

namespace App\Http\Controllers;

use App\Models\Renseignement;
use App\Http\Requests\StoreRenseignementRequest;
use App\Http\Requests\UpdateRenseignementRequest;
use App\Models\User;
use App\Models\UserDemanderRenseignement;
use Exception;

class RenseignementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    // Soumission des demandes de renseignement
    public function store(StoreRenseignementRequest $request)
    {
        dd($request); //die and dump (Voir le contenu de la requête)
        // $result = ['state' => 'error', 'message' => 'Une erreur est survenue'];
        // if ($request->isMethod('POST')) {


        //     // Récupération de tous les résultats de la requête
        //     $data = $request->all();

        //     // Validation de la requête
        //     $request->validate([
        //         'nom_user' => 'required',
        //         'prenom_user' => 'required',
        //         'email_user' => 'required',
        //         'message_rens' => 'required',
        //     ]);

        //     try {
        //         // Création d'un nouvel utilisateur
        //         $user = new User;
        //         $user->nom_user = $data['nom_user'];
        //         $user->prenom_user = $data['prenom_user'];
        //         $user->email_user = $data['email_user'];
        //         $user->save();
        //         // Création d'un nouveau renseignement
        //         $rens = new Renseignement;
        //         $rens->message_rens = $data['message_rens'];
        //         $rens->save();
        //         // Liaision avec la relation devenue table
        //         $liaison = new UserDemanderRenseignement;
        //         $liaison->id_user = $user->id;
        //         $liaison->id_rens = $rens->id;
        //         $liaison->id_spec ?? $data['spec_rens']; // récupérer l'id de la spécialité si elle est précisée
        //         $liaison->save();
        //         // Message de success
        //         $result['state'] = 'success';
        //         $result['message'] = "Nous avons bien reçu votre demande. Nous vous enverrons une réponse d'ici peu.";
        //     } catch (Exception $exc) { // ! En cas d'erreur
        //         $result['message'] = $exc->getMessage();
        //     }
        // }
        // // Redirection
        // // return redirect()->route('home', compact('result'));
        // return json_encode($result['message']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function show(Renseignement $renseignement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function edit(Renseignement $renseignement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRenseignementRequest  $request
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRenseignementRequest $request, Renseignement $renseignement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Renseignement  $renseignement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renseignement $renseignement)
    {
        //
    }
}
