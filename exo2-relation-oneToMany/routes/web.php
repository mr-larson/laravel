<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    $page="home";
    return view('home',compact("page"));
})->name("home");


// Commentaire
Route::resource('commentaire', CommentaireController::class);

// Articles
Route::resource('article', ArticleController::class);
Route::post("article/{id}/download", [ArticleController::class,'download']);
