<?php

use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\HomeContoller;
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

Route::get('/', [HomeContoller::class, 'index'])->name('home');
Route::get('/blog', [BlogArticleController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogArticleController::class, 'index2'])->name('blog-details');
Route::get('/contacts', [BlogArticleController::class, 'index3'])->name('contacts');
Route::get('/profs', [BlogArticleController::class, 'index4'])->name('profs');
