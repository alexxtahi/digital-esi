<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Commentaire;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use Illuminate\Support\Facades\DB;

class CommentaireController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentaireRequest $request)
    {
        //dd($request); //die and dump (Voir le contenu de la requête)
        $result = ['state' => 'error', 'message' => 'Une erreur est survenue'];
        if ($request->isMethod('POST')) {
            // Récupération de tous les résultats de la requête
            $data = $request->all();

            // Validation de la requête
            $request->validate([
                'id_article' => 'required',
                'nom_user' => 'required',
                'prenom_user' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);

            // Vérifier si l'enregistrement est déjà dans la base de données
            $user = User::where([['nom_user', $data['nom_user']], ['prenom_user', $data['prenom_user']]])->first();
            if ($user == null) { // Si l'enregistrement n'existe pas on le crée
                $user = new User;
                $user->nom_user = $data['nom_user'];
                $user->prenom_user = $data['prenom_user'];
                $user->email = $data['email'];
                $user->save();
            }
            $user_id = $user->id;
            // Enregistrement du commentaire
            $commentaire = new Commentaire;
            $commentaire->contenu_com = $data['message'];
            $commentaire->date_com = now();
            $commentaire->id_user = $user_id;
            $commentaire->id_article = $data['id_article'];
            $commentaire->created_at = now();
            $commentaire->save();
            // Redirection
            return redirect('/blog-details?id=' . $data['id_article']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentaireRequest  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentaireRequest $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        //
    }
}
