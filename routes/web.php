<?php

use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RenseignementController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnqueteController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\OffreEmploiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// require auth routes
require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//! --- HOME ---
// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/renseignement', [RenseignementController::class, 'store'])->name('renseignement.store');
Route::post('/', [NewsletterController::class, 'store'])->name('newsletter.store');

//! --- CONTACTS ---
// Page des contacts
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
// Page des formations
Route::get('/formations', [HomeController::class, 'formations'])->name('formations');
// Page de la galerie
Route::get('/galerie', [HomeController::class, 'galerie'])->name('galerie');
// Page de l'à propos
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
// Page des services
Route::get('/services', [HomeController::class, 'services'])->middleware(['auth'])->name('services');

//! --- BLOG ---
// Page de détails d'un article
Route::get('/blog-details', [BlogArticleController::class, 'detailsArticle'])->name('blog-details');
// Poster un commentaire
Route::post('/commentaire', [CommentaireController::class, 'store'])->name('post-commentaire');

//! --- STAGES ET EMPLOIS ---
Route::group(['prefix' => 'stages-et-emplois'], function () {
    Route::get('/', [OffreEmploiController::class, 'index'])->middleware(['auth'])->name('stages-et-emplois');
    Route::get('/filtres', [OffreEmploiController::class, 'indexWithFilters'])->middleware(['auth'])->name('stages-et-emplois.filtres');
    Route::get('/offre-details', [OffreEmploiController::class, 'detailsOffre'])->middleware(['auth'])->name('offre-details');
    Route::post('/candidate', [OffreEmploiController::class, 'candidate'])->middleware(['auth'])->name('candidate-to-an-offer');
});

//! --- ENQUETES ---
Route::group(['prefix' => 'enquetes'], function () {
    Route::get('/', [EnqueteController::class, 'index'])->middleware(['auth'])->name('enquetes');
    Route::get('/enquete-details', [EnqueteController::class, 'detailsEnquete'])->middleware(['auth'])->name('enquete-details');
    Route::post('/comment', [EnqueteController::class, 'comment'])->middleware(['auth'])->name('comment-an-enquete');
});

//! --- BIBLIOTHEQUE ---
Route::group(['prefix' => 'bibliotheque'], function () {
    Route::get('/', [LivreController::class, 'index'])->middleware(['auth'])->name('bibliotheque');
    Route::get('/livre-details', [LivreController::class, 'detailsLivre'])->middleware(['auth'])->name('livre-details');
    // Route::post('/candidate', [OffreEmploiController::class, 'candidate'])->name('candidate-to-an-offer');
});

//! --- CVTHEQUE ---
Route::group(['prefix' => 'cvtheque'], function () {
    Route::get('/', [EtudiantController::class, 'cvtheque'])->middleware(['auth'])->name('cvtheque');
    Route::get('/filtres', [EtudiantController::class, 'cvthequeWithFilters'])->middleware(['auth'])->name('cvtheque.filtres');
});


//! --- DIPLÔMÉS ---
Route::get('/etudiants-diplomes', [EtudiantController::class, 'nosEtudiantsDiplomesIndex'])->middleware(['auth'])->name('etudiants-diplomes');

//! --- DASHBOARD ---
Route::group(['prefix' => 'dashboard'], function () {
    // Admin homepage
    Route::get('/', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard.index');

    // Gestion des articles
    Route::get('/articles', [BlogArticleController::class, 'dashIndex'])->middleware(['auth'])->name('dashboard.pages.articles.index');
    Route::get('/articles/add', [BlogArticleController::class, 'create'])->middleware(['auth'])->name('dashboard.pages.articles.create');
    Route::post('/articles', [BlogArticleController::class, 'store'])->middleware(['auth'])->name('dashboard.pages.articles.store');
    Route::get('/articles/edit/{id}', [BlogArticleController::class, 'edit'])->middleware(['auth'])->name('dashboard.pages.articles.edit');
    Route::put('/articles/update/{id}', [BlogArticleController::class, 'update'])->middleware(['auth'])->name('dashboard.pages.articles.update');
    Route::delete('/articles/delete/{id}', [BlogArticleController::class, 'delete'])->middleware(['auth'])->name('dashboard.pages.articles.delete');

    // Gestion des projets
    Route::get('/projets', [ProjetController::class, 'index'])->middleware(['auth'])->name('dashboard.pages.projets.index');
    Route::get('/projets/add', [ProjetController::class, 'create'])->middleware(['auth'])->name('dashboard.pages.projets.create');
    Route::post('/projets', [ProjetController::class, 'store'])->middleware(['auth'])->name('dashboard.pages.projets.store');
    Route::get('/projets/edit/{id}', [ProjetController::class, 'edit'])->middleware(['auth'])->name('dashboard.pages.projets.edit');
    Route::put('/projets/update/{id}', [ProjetController::class, 'update'])->middleware(['auth'])->name('dashboard.pages.projets.update');
    Route::delete('/projets/delete/{id}', [ProjetController::class, 'delete'])->middleware(['auth'])->name('dashboard.pages.projets.delete');
    // Gestion des projets
    Route::get('/profil', [UserController::class, 'profilIndex'])->middleware(['auth'])->name('dashboard.pages.profil.index');
    Route::post('/profil', [UserController::class, 'updateCV'])->middleware(['auth'])->name('dashboard.pages.profil.updateCV');
    // Gestion des enquêtes
    Route::get('/enquetes', [EnqueteController::class, 'dashIndex'])->middleware(['auth'])->name('dashboard.pages.enquetes.index');
    Route::get('/enquetes/add', [EnqueteController::class, 'create'])->middleware(['auth'])->name('dashboard.pages.enquetes.create');
    Route::post('/enquetes', [EnqueteController::class, 'store'])->middleware(['auth'])->name('dashboard.pages.enquetes.store');
    Route::get('/enquetes/edit/{id}', [EnqueteController::class, 'edit'])->middleware(['auth'])->name('dashboard.pages.enquetes.edit');
    Route::put('/enquetes/update/{id}', [EnqueteController::class, 'update'])->middleware(['auth'])->name('dashboard.pages.enquetes.update');
    Route::delete('/enquetes/delete/{id}', [EnqueteController::class, 'delete'])->middleware(['auth'])->name('dashboard.pages.enquetes.delete');
    // Gestion des livres
    Route::get('/livres', [LivreController::class, 'dashIndex'])->middleware(['auth'])->name('dashboard.pages.livres.index');
    Route::get('/livres/add', [LivreController::class, 'create'])->middleware(['auth'])->name('dashboard.pages.livres.create');
    Route::post('/livres', [LivreController::class, 'store'])->middleware(['auth'])->name('dashboard.pages.livres.store');
    Route::get('/livres/edit/{id}', [LivreController::class, 'edit'])->middleware(['auth'])->name('dashboard.pages.livres.edit');
    Route::put('/livres/update/{id}', [LivreController::class, 'update'])->middleware(['auth'])->name('dashboard.pages.livres.update');
    Route::delete('/livres/delete/{id}', [LivreController::class, 'delete'])->middleware(['auth'])->name('dashboard.pages.livres.delete');
});
