<?php

use App\Models\Event;
use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\OurJobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\RegisteredUserController;

/* To see all registered routes, run `php artisan route:list` in a terminal. */


// Auth & login.
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);


// Default site pages.
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');


// Jobs
Route::controller(OurJobController::class)->group(function () {
    Route::get('/ourjobs', 'index');
    Route::get('/ourjobs/create', 'create');
    Route::get('/ourjobs/{job}/edit', 'edit');
    Route::get('/ourjobs/{job}', 'show');
    Route::post('/ourjobs/create', 'store');
    Route::patch('/ourjobs/{job}', 'update');
    Route::delete('/ourjobs/{job}', 'destroy');
});


// Employers
Route::get('/employers', [EmployerController::class, 'index']);
Route::get('/employers/{id}', [EmployerController::class, 'show']);


// ******************************************* //


// Test route.
Route::get('/test1', [Test1Controller::class, 'show']);


// Fox Valley Live test routes.
Route::get('/bands', [BandController::class, 'index']);
Route::get('/bands/create', [BandController::class, 'create']);
Route::post('/bands/create', [BandController::class, 'store']);
Route::get('/bands/{id}', [BandController::class, 'show']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show']);

Route::get('/venues', [VenueController::class, 'index']);
Route::get('/venues/{id}', [VenueController::class, 'show']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('events/create', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/{year}/{mon}', [EventController::class, 'archivemonth']);
