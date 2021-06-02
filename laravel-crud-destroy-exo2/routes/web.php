<?php

use App\Http\Controllers\BatimentController;
use Illuminate\Support\Facades\Route;

//PARTIAL
Route::get('/nav', function () {
    
    return view('nav');
})->name("nav");

Route::get('/footer', function () {
    
    return view('footer');
})->name("footer");



Route::get('/', function () {
    $page="home";
    return view('home', compact("page"));
})->name("home");



//BATIMENTS
//ALL
Route::get('/batiment', [BatimentController::class, "index"])->name("batiment");

//DELETE
Route::post('/batiment/{id}/delete', [BatimentController::class, "destroy"]);

//EDIT
Route::get("/batiment/{id}/edit",[BatimentController::class, "edit"]);

//UPDATE
Route::post("/batiment/{id}/update",[BatimentController::class, "update"]);

//CREATE
Route::get("batiment/create", [BatimentController::class, "create"]);

//STORE
Route::post("/batiment/store", [BatimentController::class, "store"]);



//ELEVES
//ALL
Route::get('/eleve', [EleveController::class, "index"])->name("eleve");

//DELETE
Route::post('/eleve/{id}/delete', [EleveController::class, "destroy"]);

//EDIT
Route::get("/eleve/{id}/edit",[EleveController::class, "edit"]);

//UPDATE
Route::post("/eleve/{id}/update",[EleveController::class, "update"]);



//FORMATIONS
//ALL
Route::get('/formation', [FormationController::class, "index"])->name("formation");

//DELETE
Route::post('/formation/{id}/delete', [FormationController::class, "destroy"]);

//EDIT
Route::get("/formation/{id}/edit",[FormationController::class, "edit"]);

//UPDATE
Route::post("/formation/{id}/update",[FormationController::class, "update"]);