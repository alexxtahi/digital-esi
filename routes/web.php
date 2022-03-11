<?php

use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RenseignementController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

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

//! --- AUTH ---
// Page de connexion
Route::view('/login', 'login');

//! --- CONTACTS ---
// Page des contacts
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
// Page du personnel
Route::get('/personnel', [HomeController::class, 'personnel'])->name('personnel');
// Page du portfolio
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
// Page de l'à propos
Route::get('/apropos', [HomeController::class, 'apropos'])->name('apropos');
// Page des services
Route::get('/services', [HomeController::class, 'services'])->name('services');

//! --- BLOG ---
// Page du blog
Route::get('/blog', [BlogArticleController::class, 'index'])->name('blog');
// Page de détails d'un article
Route::get('/blog-details', [BlogArticleController::class, 'detailsArticle'])->name('blog-details');
// Poster un commentaire
Route::post('/commentaire', [CommentaireController::class, 'store'])->name('post-commentaire');

//! --- DASHBOARD ---
Route::group(['prefix' => 'admin'], function () {
    // Admin homepage
    Route::view('/', 'dashboard.admin-index')->name('dashboard.index');

    // Gestion des articles
    Route::get('/articles', [BlogArticleController::class, 'dashIndex'])->name('dashboard.pages.articles.index');
    Route::get('/articles/add', [BlogArticleController::class, 'create'])->name('dashboard.pages.articles.create');
    Route::post('/articles', [BlogArticleController::class, 'store'])->name('dashboard.pages.articles.store');

    // Gestion des projets
    Route::get('/projets', [ProjetController::class, 'index'])->name('dashboard.pages.projets.index');
    Route::get('/projets/add', [ProjetController::class, 'create'])->name('dashboard.pages.projets.create');
    Route::post('/projets', [ProjetController::class, 'store'])->name('dashboard.pages.projets.store');
});
