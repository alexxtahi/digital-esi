<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\BlogArticle;
use App\Models\Enquete;
use App\Models\Etudiant;
use App\Models\Livre;
use App\Models\OffreEmploi;

class AdminController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::where('deleted_at', null)->get();
        $projets = Projet::where('deleted_at', null)->get();
        $articles = BlogArticle::where('deleted_at', null)->get();
        $livres = Livre::where('deleted_at', null)->get();
        $offres = OffreEmploi::where('deleted_at', null)->get();
        $enquetes = Enquete::where('deleted_at', null)->get();
        // Affichage
        return view('dashboard.admin-index', compact('etudiants', 'projets', 'articles', 'livres', 'offres', 'enquetes'));
    }
}
