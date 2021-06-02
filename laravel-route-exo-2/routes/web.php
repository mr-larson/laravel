<?php

use Illuminate\Support\Facades\Route;


Route::get("/{nom}/{prenom}", function($nom, $prenom){
    return view("welcome", compact("nom", "prenom"));
});
