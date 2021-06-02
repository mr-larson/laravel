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

route::get('salut',function(){
    return "salut les gens";
});

Route::get("/", function(){
    $name = "gauthier";
    $nom = "elias";
    return view("index", compact("name", "nom"));
});

Route::get("/contact", function(){
    $tableau = [1, 2, 3];
    return view("contact", compact("tableau"));
});

Route::get("/{chiffre}", function($chiffre){
    return "le chiffre que j'ai ajouté est $chiffre";
});

$route = route::get("test/{slug}-{id}", function($slug, $id){
    return "Slug : $slug, ID: $id";
});

route::get("/welcome", function () {
    return view
})