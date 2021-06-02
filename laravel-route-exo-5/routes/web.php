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
    $personne = ["nom" => "dewit", "prenom" => "gauthier", "age"=> "35 ans", "date" => "31/08/85"];
    return view('welcome', compact ("personne"));
});

Route::get("/{number}", function($number){
    if (is_numeric($number)){
        return view("number", compact("number"));
    }else {
        return view("error");
    }
}