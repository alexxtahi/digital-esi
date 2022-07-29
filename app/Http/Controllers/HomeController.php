<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Models\Filiere;
use App\Models\Projet;
use App\Models\Specialite;
use App\Models\User;
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
        $blog_articles = BlogArticle::where('deleted_at', null)->paginate(3);
        // Récupération des filières
        $filieres = Filiere::where('deleted_at', null)->get();
        $specs = Specialite::where('deleted_at', null)->get();
        // Récupération des projets
        $projets = Projet::where('deleted_at', null)->paginate(6);
        // Récupération des résultats d'une précédente requête
        $result = $previousResult;
        // Affichage
        return view('home', compact('blog_articles', 'filieres', 'specs', 'projets', 'result'));
    }
    // Page des contacts
    public function contacts()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->paginate(3);
        // Affichage
        return view('contacts', compact('blog_articles'));
    }
    // Page du personnel
    public function personnel()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->paginate(3);
        // Récupération du personnel
        $personnel = User::where('deleted_at', null)->where('role_user', 'Directeur')->orWhere('role_user', 'Directeur des études')->get();
        // Affichage
        return view('personnel', compact('blog_articles', 'personnel'));
    }
    // Page de la galerie
    public function galerie()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->paginate(3);
        // Récupération des projets
        $projets = Projet::where('deleted_at', null)->get();
        // Affichage
        return view('galerie', compact('blog_articles', 'projets'));
    }
    // Page du services
    public function services()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->paginate(3);
        // Récupération du personnel
        $personnel = User::where('deleted_at', null)->where('role_user', 'Directeur')->orWhere('role_user', 'Directeur des études')->get();
        // Affichage
        return view('services', compact('blog_articles', 'personnel'));
    }
    // Page du apropos
    public function apropos()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->paginate(3);
        // Récupération du personnel
        $personnel = User::where('deleted_at', null)->where('role_user', 'Directeur')->orWhere('role_user', 'Directeur des études')->get();
        // Affichage
        return view('apropos', compact('blog_articles', 'personnel'));
    }
}
