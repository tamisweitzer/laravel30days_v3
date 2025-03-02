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
use App\Http\Controllers\EmployerController;

// See all routes with php artisan route:list


// first way we did it.
// Route::get('/', function () {
//     return view(view: 'home');
// });

// When the route just needs to return a view, a faster syntax is to use the Route::view() method.
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');



// Jobs
Route::get('/ourjobs', [OurJobController::class, 'index']);
Route::get('/ourjobs/create', [OurJobController::class, 'create']);
Route::get('/ourjobs/{job}/edit', [OurJobController::class, 'edit']);
Route::get('/ourjobs/{job}', [OurJobController::class, 'show']);

Route::post('/ourjobs/create', [OurJobController::class, 'store']);
Route::patch('/ourjobs/{job}', [OurJobController::class, 'update']);
Route::delete('/ourjobs/{job}', [OurJobController::class, 'destroy']);


// Employers
Route::get('/employers', [EmployerController::class, 'index']);
Route::get('/employers/{id}', [EmployerController::class, 'show']);



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
