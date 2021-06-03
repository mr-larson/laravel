<?php

use App\Http\Controllers\ChiffreController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TemoignageController;
use App\Models\Chiffre;
use App\Models\Service;
use App\Models\Temoignage;
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
    $chiffres = Chiffre::all();
    $temoignages = Temoignage::all();
    $services = Service::all();
    return view('home', compact('chiffres', 'temoignages', 'services'));
});

Route::get('/dashboard', function () {
    $chiffres = Chiffre::all();
    $temoignages = Temoignage::all();
    $services = Service::all();
    return view('dashboard', compact('chiffres', 'temoignages', 'services'));
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


//Chiffre
Route::resource("/chiffre", ChiffreController::class);

//Chiffre
Route::resource("/service", ServiceController::class);

//Temoignage
Route::resource("/temoignage", TemoignageController::class);


