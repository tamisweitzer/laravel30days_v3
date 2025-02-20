<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Event;
use App\Models\State;
use Illuminate\Http\Request;

class EventController extends Controller {
    public function index() {
        return view('events.index', ['events' => Event::all()]);
    }

    public function show($id) {
        $event = Event::find($id);
        return view('events.show', ['event' => $event]);
    }

    public function archivemonth() {
        // where event date year = $year AND event date mon = $mon
        // $events = Event::all()->where();

        // For now:
        return view('events-month', ['events' => Event::all(), 'year' => $year, 'mon' => $mon]);
    }

    public function create() {
        $cities = City::all();
        $states = State::all();
        return view('events.create', ['cities' => $cities, 'states' => $states]);
    }
}
