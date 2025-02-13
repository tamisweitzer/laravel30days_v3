<?php

use App\Models\Band;
use App\Models\City;
use App\Models\Event;
use App\Models\OurJob;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\Test1Controller;



Route::get('/', function () {
    return view('home');
});

Route::get('/test1', [Test1Controller::class, 'show']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/ourjobs', function () {
    // Eager load jobs with the associated employers.
    $jobs = OurJob::with('employer')->paginate(3);
    return view('ourjobs', ['jobs' => $jobs]);
});

Route::get('/ourjobs/{id}', function ($id) {
    $job = OurJob::find($id);
    return view('ourjob', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/bands', [BandController::class, 'show']);


Route::get('/bands/{id}', [BandController::class, 'find']);

Route::get('/cities', function () {
    return view('cities', [
        'cities' => City::all()
    ]);
});

Route::get('/cities/{id}', function ($id) {
    $city = City::find($id);
    return view('city', ['city' => $city]);
});

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
