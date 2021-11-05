<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function(){
//     return view('welcome');
// });

// route accueil
Route::get('/', [ArticleController::class, 'index'])->name('accueil');

// route vers la liste d'articles
Route::get('/articles', [ArticleController::class, 'showListArticles'])->name('articles.liste');

// route vers un article
Route::get('/article/{n}', [ArticleController::class, 'show'])->where('n', '[0-9]+')->name('article');

// route pour la demande du formulaire
Route::get('/users', [UsersController::class, 'create'])->name('users.create');

// route pour la soumission du formulaire
Route::post('/users', [UsersController::class, 'store'])->name('users.store');