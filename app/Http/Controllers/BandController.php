<?php

namespace App\Http\Controllers;

use App\Models\Band;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BandController extends Controller {
    public function index(): View {
        $bands = Band::with(['city', 'state'])->get();
        return view('bands.index', ['bands' => $bands]);
    }

    public function show($id): View {
        $band = Band::find($id);
        return view('bands.show', ['band' => $band]);
    }


    public function insertMany() {
        DB::table('bands')->insertGetId(
            [
                'name' => 'Annex',
                'fullname' => 'Annex',
                'excerpt' => "Walk into an annex show and get smacked with a wall of sound. This is a rock band from Green Bay. The Marshalls are dialed high, the Les Pauls are cranked!",
                'bio' => "annex bio here ",
                'city_id' => 3,
                'state_id' => 1,
                'website_url' => 'x',
                'thumbnail_img' => 'ur;',
                'banner_img' => 'xx'
            ],
        );
    }
}
