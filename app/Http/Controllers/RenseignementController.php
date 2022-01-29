<?php

namespace App\Http\Controllers;

use App\Models\Renseignement;
use App\Http\Requests\StoreRenseignementRequest;
use App\Http\Requests\UpdateRenseignementRequest;
use App\Models\User;
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
        $result = ['state' => 'error', 'message' => 'Une erreur est survenue'];
        if ($request->isMethod('POST')) {

            //dd($request); //die and dump (Voir le contenu de la requête)

            // Récupération de tous les résultats de la requête
            $data = $request->all();

            // Validation de la requête
            $request->validate([
                'nom_user' => 'required',
                'prenom_user' => 'required',
                'spec_rens' => 'required',
                'tel_user' => 'required',
                'message_rens' => 'required',
            ]);

            try {
                // Création d'un nouvel utilisateur
                $user = new User;
                $user->nom_user = $data['nom_user'];
                $user->prenom_user = $data['prenom_user'];
                // Création d'un nouveau renseignement
                $rens = new Renseignement;
                $rens->message_rens = $data['message_rens'];
                $rens->code_prod = $data['code_prod'];
                $rens->designation = $data['designation'];
                $rens->prix_prod = $data['prix_prod'];
                $rens->id_cat = $data['id_cat'];
                $rens->qte_prod = $data['qte_prod'];
                $rens->description = (isset($data['description']) && !empty($data['description'])) ? $data['description'] : null;
                $rens->created_at = now();
                $rens->save(); // Sauvegarde
                // Message de success
                $result['state'] = 'success';
                $result['message'] = 'Le produit a bien été enregistré.';
            } catch (Exception $exc) { // ! En cas d'erreur
                $result['message'] = $exc->getMessage();
            }
        }
        // Redirection
        return redirect()->route('admin.pages.produits.create', compact('result'));
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
