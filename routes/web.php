<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Band;
use App\Models\City;
use App\Models\Event;



Route::get('/', function () {
    return view('home');
});

Route::get('/test1', function () {
    return view('test1');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/bands', function () {
    return view('bands', ['bands' => Band::all()]);
});

Route::get('/bands/{id}', function ($id) {
    $band = Band::find($id);
    return view('band', ['band' => $band]);
});

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
