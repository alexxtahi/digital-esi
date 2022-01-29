<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Models\Specialite;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Récupération des spécialités
        $specs = Specialite::where('deleted_at', null)->get();
        // Affichage
        return view('home', compact('blog_articles', 'specs'));
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
