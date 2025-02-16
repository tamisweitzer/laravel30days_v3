<?php

use App\Models\Event;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\OurJobController;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\VenueController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view(view: 'contact');
});

Route::get('/ourjobs', [OurJobController::class, 'index']);
Route::get('/ourjobs/create', [OurJobController::class, 'create']);
Route::post('/ourjobs/create', [OurJobController::class, 'store']);
Route::get('/ourjobs/{id}', [OurJobController::class, 'show']);

Route::get('/test1', [Test1Controller::class, 'show']);


// Fox Valley Live test routes.

Route::get('/bands', [BandController::class, 'index']);
Route::get('/bands/{id}', [BandController::class, 'show']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{id}', [CityController::class, 'show']);

Route::get('venues', [VenueController::class, 'index']);
Route::get('venues/{id}', [VenueController::class, 'show']);

Route::get('/events', function () {
    return view('events', ['events' => Event::all()]);
});
Route::get('/events/{id}', function ($id) {
    $event = Event::find($id);
    return view('event', ['event' => $event]);
});

Route::get('/events/{year}/{mon}', function ($year, $mon) {
    // where event date year = $year AND event date mon = $mon
    // $events = Event::all()->where();

    // For now:
    return view('events-month', ['events' => Event::all(), 'year' => $year, 'mon' => $mon]);
});
