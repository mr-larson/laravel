<?php

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



Route::get('/section1', function () {
    $page="section1";
    return view('section1', compact("page"));
})->name("section1");

Route::get('/section2', function () {
    $page="section2";
    return view('section2', compact("page"));
})->name("section2");

Route::get('/section3', function () {
    $page="section3";
    return view('section3', compact("page"));
})->name("section3");
