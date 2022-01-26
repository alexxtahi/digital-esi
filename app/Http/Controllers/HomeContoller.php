<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use Illuminate\Http\Request;

class HomeContoller extends Controller
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
        // Affichage
        return view('home', compact('blog_articles'));
    }
}