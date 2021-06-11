<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RoleController;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
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

 Route::get('/fuck', function () {
    return view('fuck');
}); 


Route::get('/', function () {
    $page="home";
    $equipes = Equipe::inRandomOrder()->get();
    $equipes_europe = Equipe::inRandomOrder()->where('continent_id', "1")->get();
    $joueurs_free = Joueur::inRandomOrder()->where('equipe_id', "1")->get();
    $joueurs_equipe = Joueur::inRandomOrder()->where('equipe_id', "!=","1")->get();

    return view('home',compact("page", "equipes", "equipes_europe", "joueurs_free", "joueurs_equipe"));
})->name("home");


//Equipe
Route::resource("/equipe", EquipeController::class);

//Joueur
Route::resource('/joueur', JoueurController::class);

//Role
Route::resource('/role', RoleController::class);

//Continent
Route::resource('/continent', ContinentController::class);

//Genre
Route::resource('/genre', GenreController::class);

//Photo
Route::resource('/photo', PhotoController::class);
Route::post("photo/{id}/download", [PhotoController::class,'download']);