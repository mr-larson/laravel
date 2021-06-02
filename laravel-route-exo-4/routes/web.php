<?php

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

Route::get('/date', function(){
    $date = date ("Y-M-D");
    $heure = date("H:i:s");
    return view("date", compact ("date","heure"));
});

Route::get('/fruits', function(){
    $Fruits = ["pomme", "fraise", "cerise", "banane"];
    return view("fruits", compact("Fruits"));
});

Route::get("/bonus", function(){
    $tableau = [1, 2, 3];
    return view("bonus", compact("tableau"));
});

/* route::get("bonus", function(){
    $nom = "gauthier";
    return "bonjour $nom";
}); */