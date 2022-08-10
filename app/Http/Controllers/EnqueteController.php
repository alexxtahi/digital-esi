<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use App\Http\Requests\StoreEnqueteRequest;
use App\Http\Requests\UpdateEnqueteRequest;
use App\Models\Commentaire;
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
     * @param  \App\Http\Requests\StoreEnqueteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnqueteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function show(Enquete $enquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquete $enquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnqueteRequest  $request
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnqueteRequest $request, Enquete $enquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquete $enquete)
    {
        //
    }
}
