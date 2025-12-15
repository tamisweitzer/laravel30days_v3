<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VenueController extends Controller {
    public function index() {
        return view('venues.index', ['venues' => Venue::all()]);
    }

    public function show($id) {
        $venue = Venue::find($id);

        $events = DB::table('events')
            ->join('bands', 'events.band_id', '=', 'bands.id')
            ->join('venues', 'events.venue_id', '=', 'venues.id')
            ->join('cities', 'venues.city_id', '=', 'cities.id')
            ->select('events.id', 'events.event_date', 'events.event_time', 'bands.name as band_name', 'venues.name as venue_name')
            ->where('venues.id', '=', $id)
            ->orderBy('events.event_date', 'DESC')
            ->get();

        return view('venues.show', [
            'venue' => $venue,
            'events' => $events
        ]);
    }
}
