<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Band;

class BandController extends Controller {
    public function show(): View {
        return view('bands', ['bands' => Band::all()]);
    }

    public function find($id): View {
        $band = Band::find($id);
        return view('band', ['band' => $band]);
    }
}
