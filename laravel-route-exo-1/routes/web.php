<?php

use Illuminate\Support\Facades\Route;

route::get("/", function(){
    return "Bonjour chers utilisateurs";
});

route::get("/", function(){
    $nom = "gauthier";
    return "bonjour $nom";
});

route::get("/about", function(){
    return view("about");
});

