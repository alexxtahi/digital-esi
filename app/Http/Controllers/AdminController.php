<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projet;
use App\Models\BlogArticle;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Récupération du personnel
        $personnel_nb = count(User::where('deleted_at', null)->where('role_user', 'Directeur')->orWhere('role_user', 'Directeur des études')->orWhere('role_user', 'Enseignant')->get());
        // Récupération des étudiants
        $etudiants_nb = count(User::where('deleted_at', null)->where('role_user', 'Etudiant')->get());
        // Récupération des étudiants
        $projets_nb = count(Projet::where('deleted_at', null)->get());
        // Récupération des articles de blog
        $articles_nb = count(BlogArticle::where('deleted_at', null)->get());
        // Affichage
        return view('dashboard.admin-index', compact('personnel_nb', 'etudiants_nb', 'projets_nb', 'articles_nb'));
    }
}
