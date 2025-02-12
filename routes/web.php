<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BestsellerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\GridimageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UpcomingeventController;
use Illuminate\Support\Facades\Route;


// Home
Route::get("/", [HomeController::class ,"index"]);
Route::get("/about", [HomeController::class ,"about"]);
Route::get("/about/team", [HomeController::class ,"team"]);
Route::get("/about/testimonials", [HomeController::class ,"testimonials"]);
Route::get("/contact", [HomeController::class ,"contact"]);
Route::get("/gallery", [HomeController::class ,"portfolio"]);
Route::get("/services", [HomeController::class ,"services"]);
Route::get('/upcomingevents/{id}', [UpcomingeventController::class, 'show'])->name('upcomingevent.show');
Route::get('/fetch-testimonials', [HomeController::class, 'fetchTestimonials']);
Route::get('/fetch-gridimages', [HomeController::class, 'fetchGridImages']);

// Auth
Route::get("/login", [AuthController::class ,"login"])->name('login');
Route::post("/login", [AuthController::class ,"authenticated"]);
Route::get("/logout", [AuthController::class ,"logout"]);

Route::post('/contact-form', [ContactFormController::class, 'store'])->name('contact-form.store');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
// Dashboard

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class ,'index']);

    Route::resource('sliders', SliderController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('bestsellers', BestsellerController::class);
    Route::resource('gridimages', GridimageController::class);
    Route::resource('upcomingevents', UpcomingeventController::class);
    Route::resource('contactforms', ContactFormController::class);
    
    
    Route::get('contact', [ContactController::class,'index']);
    Route::put('contact/{id}', [ContactController::class,'update']);
    
    Route::get('about', [AboutController::class,'index']);
    Route::put('about/{id}', [AboutController::class,'update']);
});
