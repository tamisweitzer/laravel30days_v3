<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller {
    public function create() {
        return view('images.create');
    }

    public function store() {
        dd('store uploaded image');
    }
}
