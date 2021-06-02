<?php

use App\Http\Controllers\ImageController;
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



Route::get('/section2', function () {
    $page="section2";
    return view('section2', compact("page"));
})->name("section2");

Route::get('/section3', function () {
    $page="section3";
    return view('section3', compact("page"));
})->name("section3");


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