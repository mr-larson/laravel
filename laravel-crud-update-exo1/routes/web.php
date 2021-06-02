<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PortfolioController;
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



//ARTICLE
//ALL
Route::get('/article', [ArticleController::class, "index"])->name("article");

//DELETE
Route::post('/article/{id}/delete', [ArticleController::class, "destroy"]);

//EDIT
Route::get("/article/{id}/edit",[ArticleController::class, "edit"]);

//UPDATE
Route::post("/article/{id}/update",[ArticleController::class, "update"]);

//CREATE
Route::get("article/create", [ArticleController::class, "create"]);

//STORE
Route::post("/article/store", [ArticleController::class, "store"]);


//ENTREPRISE
//ALL
Route::get('/entreprise', [EntrepriseController::class, "index"])->name("entreprise");

//DELETE
Route::post('/entreprise/{id}/delete', [EntrepriseController::class, "destroy"]);

//EDIT
Route::get("/entreprise/{id}/edit",[EntrepriseController::class, "edit"]);

//UPDATE
Route::post("/entreprise/{id}/update",[EntrepriseController::class, "update"]);

//CREATE
Route::get("entreprise/create", [EntrepriseController::class, "create"]);

//STORE
Route::post("/entreprise/store", [EntrepriseController::class, "store"]);


//PORTFOLIO
//ALL
Route::get('/portfolio', [PortfolioController::class, "index"])->name("portfolio");

//DELETE
Route::post('/portfolio/{id}/delete', [PortfolioController::class, "destroy"]);

//EDIT
Route::get("/portfolio/{id}/edit",[PortfolioController::class, "edit"]);

//UPDATE
Route::post("/portfolio/{id}/update",[PortfolioController::class, "update"]);

//CREATE
Route::get("portfolio/create", [PortfolioController::class, "create"]);

//STORE
Route::post("/portfolio/store", [PortfolioController::class, "store"]);