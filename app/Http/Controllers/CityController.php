<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\City;
use App\Models\Event;
use App\Models\Venue;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CityController extends Controller {
    public function index(): View {
        return view('cities.index', ['cities' => City::all()]);
    }

    public function show($id): View {
        $city = City::find($id);

        $events = DB::table('events')
            ->join('bands', 'events.band_id', '=', 'bands.id')
            ->join('venues', 'events.venue_id', '=', 'venues.id')
            ->join('cities', 'venues.city_id', '=', 'cities.id')
            ->select('events.id as event_id', 'events.event_date', 'events.event_time', 'bands.name as band_name', 'venues.name as venue_name')
            ->where('venues.city_id', '=', $id)
            ->orderBy('events.event_date', 'DESC')
            ->get();


        $venues = DB::table('venues')
            ->join('cities', 'venues.city_id', '=', 'cities.id')
            ->select('venues.id as venue_id', 'venues.name as venue_name', 'venues.address1 as venue_address1')
            ->where('venues.city_id', '=', $id)
            ->get();


        return view('cities.show', [
            'city' => $city,
            'events' => $events,
            'venues' => $venues
        ]);
    }
}
