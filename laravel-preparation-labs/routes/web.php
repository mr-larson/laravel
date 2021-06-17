<?php

use App\Http\Controllers\AboutTextController;
use App\Http\Controllers\AboutTitreController;
use App\Http\Controllers\AdresseController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Models\AboutText;
use App\Models\AboutTitre;
use App\Models\Adresse;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Link;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
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
    $hero = Hero::first();
    $abouts = AboutText::all();
    $features = Feature::all();
    $services = Service::all();
    $portfolios = Portfolio::all();
    $testimonials = Testimonial::all();
    $teams = Team::all();
    $adresses = Adresse::all();
    $links = Link::all();
    $titres = Titre::all();
    return view('home', compact( 'titres', 'links', 'adresses', 'teams', 'testimonials', 'portfolios', 'services', 'features',"abouts", "hero"));
});

Route::get('/dashboard', function () {
    $hero = Hero::first();
    $abouts = AboutText::all();
    $features = Feature::all();
    $services = Service::all();
    $portfolios = Portfolio::all();
    $testimonials = Testimonial::all();
    $teams = Team::all();
    $adresses = Adresse::all();
    $links = Link::all();
    $titres = Titre::all();
    return view('dashboard', compact( 'titres', 'links', 'adresses', 'teams', 'testimonials', 'portfolios', 'services', 'features',"abouts", "hero"));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Route pour l'email (Contact.blade.php)
Route::post("/send-mail", [MailController::class, "sendMail"]);

//Hero
Route::resource("/hero", HeroController::class)->middleware(['auth']);

//About
Route::resource("/about", AboutTextController::class)->middleware(['auth']);

//Service
Route::resource("/service", ServiceController::class)->middleware(['auth']);

//Portfolio
Route::resource("/portfolio", PortfolioController::class)->middleware(['auth']);

//Testimonial
Route::resource("/testimonial", TestimonialController::class)->middleware(['auth']);

//Adresse
Route::resource("/adresse", AdresseController::class)->middleware(['auth']);

//Link
Route::resource("/link", LinkController::class)->middleware(['auth']);

//Team
Route::resource("/team", TeamController::class)->middleware(['auth']);

//Titre
Route::resource("/titre", TitreController::class)->middleware(['auth']);