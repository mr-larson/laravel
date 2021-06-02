<?php

use App\Http\Controllers\BibliothequeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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



//user
//ALL
Route::get('/user', [UserController::class, "index"])->name("user");

//DELETE
Route::post('/user/{id}/delete', [UserController::class, "destroy"]);

//EDIT
Route::get("/user/{id}/edit",[UserController::class, "edit"]);

//UPDATE
Route::post("/user/{id}/update",[UserController::class, "update"]);

//CREATE
Route::get("user/create", [UserController::class, "create"]);

//STORE
Route::post("/user/store", [UserController::class, "store"]);


//BIBLIOTHEQUE
//ALL
Route::get('/bibliotheque', [BibliothequeController::class, "index"])->name("bibliotheque");

//DELETE
Route::post('/bibliotheque/{id}/delete', [BibliothequeController::class, "destroy"]);

//EDIT
Route::get("/bibliotheque/{id}/edit",[BibliothequeController::class, "edit"]);

//UPDATE
Route::post("/bibliotheque/{id}/update",[BibliothequeController::class, "update"]);

//CREATE
Route::get("bibliotheque/create", [BibliothequeController::class, "create"]);

//STORE
Route::post("/bibliotheque/store", [BibliothequeController::class, "store"]);


//LIVRE
//ALL
Route::get('/livre', [LivreController::class, "index"])->name("livre");

//DELETE
Route::post('/livre/{id}/delete', [LivreController::class, "destroy"]);

//EDIT
Route::get("/livre/{id}/edit",[LivreController::class, "edit"]);

//UPDATE
Route::post("/livre/{id}/update",[LivreController::class, "update"]);

//CREATE
Route::get("livre/create", [LivreController::class, "create"]);

//STORE
Route::post("/livre/store", [LivreController::class, "store"]);


//IMAGE
//ALL
Route::get('/image', [ImageController::class, "index"])->name("image");

//DELETE
Route::post('/image/{id}/delete', [ImageController::class, "destroy"]);

//EDIT
Route::get("/image/{id}/edit",[ImageController::class, "edit"]);

//UPDATE
Route::post("/image/{id}/update",[ImageController::class, "update"]);

//CREATE
Route::get("image/create", [ImageController::class, "create"]);

//STORE
Route::post("/image/store", [ImageController::class, "store"]);