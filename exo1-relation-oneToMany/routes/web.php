<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
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


// photo
Route::resource('photo', PhotoController::class);
Route::post("photo/{id}/download", [PhotoController::class,'download']);

// album
Route::resource('album', AlbumController::class);
