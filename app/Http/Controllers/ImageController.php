<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;

class ImageController extends Controller {

    public function makeUniqueFilename($file) {
        $originalName = $file->getClientOriginalName();
        $info = pathinfo($originalName);
        $slugged = Str::slug($info['filename'])
            . "_" . time()
            . "." . $info['extension'];
        return $slugged;
    }
    public function create() {
        return view('images.create');
    }

    public function store(StoreImageRequest $request) {
        $request->validated();

        $folder = 'images/' . date('Y/m');

        foreach ($request->file('images') as $imageFile) {

            $filename = $this->makeUniqueFilename($imageFile);
            $imageFile->storeAs($folder, $filename);
        }
    }
}
