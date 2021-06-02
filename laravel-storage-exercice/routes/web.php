<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
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
    return view('home', compact("page"));
})->name("home");

Route::get('/nav', function () {
    
    return view('nav');
})->name("nav");

Route::get('/footer', function () {
    
    return view('footer');
})->name("footer");



//User
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

//Download
Route::post("/user/{id}/download", [UserController::class, "download"]);




//Album
//ALL
Route::get('/album', [AlbumController::class, "index"])->name("album");

//DELETE
Route::post('/album/{id}/delete', [AlbumController::class, "destroy"]);

//EDIT
Route::get("/album/{id}/edit",[AlbumController::class, "edit"]);

//UPDATE
Route::post("/album/{id}/update",[AlbumController::class, "update"]);

//CREATE
Route::get("album/create", [AlbumController::class, "create"]);

//STORE
Route::post("/album/store", [AlbumController::class, "store"]);


//Photo
//ALL
Route::get('/photo', [PhotoController::class, "index"])->name("photo");

//DELETE
Route::post('/photo/{id}/delete', [PhotoController::class, "destroy"]);

//EDIT
Route::get("/photo/{id}/edit",[PhotoController::class, "edit"]);

//UPDATE
Route::post("/photo/{id}/update",[PhotoController::class, "update"]);

//CREATE
Route::get("photo/create", [PhotoController::class, "create"]);

//STORE
Route::post("/photo/store", [PhotoController::class, "store"]);

//Download
Route::post("/photo/{id}/download", [PhotoController::class, "download"]);

//SHOW
Route::get("/photo/{id}/show", [PhotoController::class, "show"]);

