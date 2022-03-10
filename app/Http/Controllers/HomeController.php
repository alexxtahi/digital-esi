<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Models\Projet;
use App\Models\Specialite;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(array $previousResult = null)
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Récupération des spécialités
        $specs = Specialite::where('deleted_at', null)->get();
        // Récupération des projets
        $projets = Projet::where('deleted_at', null)->get();
        // Récupération des résultats d'une précédente requête
        $result = $previousResult;
        // Affichage
        return view('home', compact('blog_articles', 'specs', 'projets', 'result'));
    }
    // Page des contacts
    public function contacts()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Affichage
        return view('contacts', compact('blog_articles'));
    }
    // Page du personnel
    public function personnel()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Affichage
        return view('personnel', compact('blog_articles'));
    }
}
