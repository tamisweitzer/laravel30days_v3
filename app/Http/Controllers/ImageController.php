<?php

namespace App\Http\Controllers;

use App\Models\Media;
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

    public function index() {
        $images = Media::all();
        return view('images.index', compact('images'));
    }
    public function create() {
        return view('images.create');
    }

    public function store(StoreImageRequest $request) {
        $request->validated();

        $folder = 'images/' . date('Y/m');

        foreach ($request->file('images') as $imageFile) {

            $filename = $this->makeUniqueFilename($imageFile);
            $path = $imageFile->storeAs($folder, $filename);

            Media::create([
                'file_name' => $imageFile->getClientOriginalName(),
                'mime_type' => $imageFile->getClientMimeType(),
                'file_size' => $imageFile->getSize(),
                'path' => $path
            ]);
        }

        return to_route('images.index');
    }
}
