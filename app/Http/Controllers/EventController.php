<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\City;
use App\Models\Event;
use App\Models\State;
use App\Models\Venue;
use Illuminate\Http\Request;

class EventController extends Controller {
    public function index() {
        $events = Event::with(['band', 'venue', 'venue.city'])->orderBy('event_date', 'ASC')->get();

        return view('events.index', ['events' => $events]);
    }
    public function create() {
        $bands = Band::all();
        $venues = Venue::all();
        return view('events.create', ['bands' => $bands, 'venues' => $venues]);
    }

    public function store() {
        Event::create(
            [
                'name' => request('name'),
                'admin_name' => request('admin_name'),
                'band_id' => request('band'),
                'venue_id' => request('venue'),
                'event_date' => request('event_date'),
                'event_time' => request('event_time'),
                'event_details' => request('event_details'),
            ]
        );

        return redirect('/events');
    }
    public function show($id) {
        $event = Event::with(['band', 'venue'])->find($id);



        return view('events.show', ['event' => $event]);
    }

    public function archivemonth() {
        // where event date year = $year AND event date mon = $mon
        // $events = Event::all()->where();

        // For now:
        return view('events-month', ['events' => Event::all(), 'year' => $year, 'mon' => $mon]);
    }
}
