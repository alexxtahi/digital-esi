<?php

use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RenseignementController;
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

//! --- AUTH ---
// Page de connexion
Route::view('/login', 'login');

//! --- CONTACTS ---
// Page des contacts
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
// Page du personnel
Route::get('/personnel', [HomeController::class, 'personnel'])->name('personnel');

//! --- BLOG ---
// Page du blog
Route::get('/blog', [BlogArticleController::class, 'index'])->name('blog');
// Page de détails d'un article
Route::get('/blog-details', [BlogArticleController::class, 'detailsArticle'])->name('blog-details');
