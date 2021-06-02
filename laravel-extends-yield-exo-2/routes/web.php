<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $page = "Welcome";
    return view('index', compact("page"));
})->name("index");

Route::get('/nav', function () {
    
    return view('nav');
})->name("nav");

Route::get('/banner', function () {
    
    return view('banner');
})->name("banner");

Route::get('/footer', function () {
    
    return view('footer');
})->name("footer");

Route::get('/about', function () {
    $page = "About";
    return view('about', compact("page"));
})->name("about");

Route::get('/contact', function () {
    $page = "Contact";
    return view('contact', compact("page"));
})->name("contact");

Route::get('/services', function () {
    $page = "Services";
    return view('services', compact("page"));
})->name("services");