<?php

use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RenseignementController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;
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
// Page du personnel
Route::get('/personnel', [HomeController::class, 'personnel'])->name('personnel');
// Page de la galerie
Route::get('/galerie', [HomeController::class, 'galerie'])->name('galerie');
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
Route::group(['prefix' => 'dashboard'], function () {
    // Admin homepage
    Route::get('/', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard.index');

    // Gestion des articles
    Route::get('/articles', [BlogArticleController::class, 'dashIndex'])->middleware(['auth'])->name('dashboard.pages.actualites.index');
    Route::get('/articles/add', [BlogArticleController::class, 'create'])->middleware(['auth'])->name('dashboard.pages.actualites.create');
    Route::post('/articles', [BlogArticleController::class, 'store'])->middleware(['auth'])->name('dashboard.pages.actualites.store');

    // Gestion des projets
    Route::get('/projets', [ProjetController::class, 'index'])->middleware(['auth'])->name('dashboard.pages.projets.index');
    Route::get('/projets/add', [ProjetController::class, 'create'])->middleware(['auth'])->name('dashboard.pages.projets.create');
    Route::post('/projets', [ProjetController::class, 'store'])->middleware(['auth'])->name('dashboard.pages.projets.store');
    Route::get('/projets/edit/{id}', [ProjetController::class, 'edit'])->middleware(['auth'])->name('dashboard.pages.projets.edit');
    Route::put('/projets', [ProjetController::class, 'update'])->middleware(['auth'])->name('dashboard.pages.projets.udpate');
    Route::delete('/projets/delete/{id}', [ProjetController::class, 'delete'])->middleware(['auth'])->name('dashboard.pages.projets.delete');
});
