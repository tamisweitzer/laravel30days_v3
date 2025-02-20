<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\City;
use App\Models\State;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller {
    public function index(): View {
        $bands = Band::with(['city', 'state'])->get();

        return view('bands.index', ['bands' => $bands]);
    }

    public function create(): View {
        $cities = City::all();
        $states = State::all();
        return view('bands.create', ['cities' => $cities, 'states' => $states]);
    }

    public function show($id): View {
        $band = Band::find($id);
        return view('bands.show', ['band' => $band]);
    }
}
