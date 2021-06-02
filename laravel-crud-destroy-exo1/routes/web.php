<?php

use App\Http\Controllers\PersonneController;
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
    return view('welcome');
});

//ALL
Route::get('/personne', [PersonneController::class, "index"])->name("personne");

//DELETE
Route::post('/personne/{id}/delete', [PersonneController::class, "destroy"]);

//EDIT
route::get("/personne/{id}/edit",[PersonneController::class, "edit"]);

//UPDATE
route::post("/personne/{id}/edit",[PersonneController::class, "update"]);