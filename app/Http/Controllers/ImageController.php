<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreImageRequest;

class ImageController extends Controller {



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

            // Save large image.
            // $filename = $this->makeUniqueFilenameLg($imageFile);
            // $imageLg = $this->resizeImageLg(image: $imageFile);
            // // $path = $imageFile->storeAs($folder, $filename);
            // Storage::disk('public')->put($pathLg = $folder . '/' . $filename, (string) $imageLg->encode());
            // Media::create([
            //     'file_name' => $imageFile->getClientOriginalName(),
            //     'mime_type' => $imageFile->getClientMimeType(),
            //     'file_size' => $imageFile->getSize(),
            //     'path' => $pathLg,
            //     'image_name' => $filename
            // ]);

            // Save medium image.
            $filename = $this->makeUniqueFilenameMd($imageFile);
            $imageMd = $this->resizeImageMd(image: $imageFile);
            Storage::disk('public')->put($pathMd = $folder . '/' . $filename, (string) $imageMd->encode());
            Media::create([
                'file_name' => $imageFile->getClientOriginalName(),
                'mime_type' => $imageFile->getClientMimeType(),
                'file_size' => $imageFile->getSize(),
                'path' => $pathMd,
                'image_name' => $filename
            ]);

            // // Save small image.
            // $filename = $this->makeUniqueFilenameSm($imageFile);
            // $imageSm = $this->resizeImageSm(image: $imageFile);
            // Storage::disk('public')->put($pathSm = $folder . '/' . $filename, (string) $imageSm->encode());
            // Media::create([
            //     'file_name' => $imageFile->getClientOriginalName(),
            //     'mime_type' => $imageFile->getClientMimeType(),
            //     'file_size' => $imageFile->getSize(),
            //     'path' => $pathSm,
            //     'image_name' => $filename
            // ]);
        }

        return redirect(route('images.index'));
    }

    // public function makeUniqueFilenameLg($file) {
    //     $originalName = $file->getClientOriginalName();
    //     $info = pathinfo($originalName);
    //     $slugged = Str::slug($info['filename'])
    //         . "_600x450"
    //         . "." . $info['extension'];
    //     return $slugged;
    // }

    public function makeUniqueFilenameMd($file) {
        $originalName = $file->getClientOriginalName();
        $info = pathinfo($originalName);
        $slugged = Str::slug($info['filename'])
            . "_400x300"
            . "." . $info['extension'];
        return $slugged;
    }

    // public function makeUniqueFilenameSm($file) {
    //     $originalName = $file->getClientOriginalName();
    //     $info = pathinfo($originalName);
    //     $slugged = Str::slug($info['filename'])
    //         . "_150x112"
    //         . "." . $info['extension'];
    //     return $slugged;
    // }


    // public function resizeImageLg($image) {
    //     $image = ImageManager::imagick()->read($image->getRealPath());
    //     $image->cover('600', '450', 'center');
    //     return $image;
    // }
    public function resizeImageMd($image) {
        $image = ImageManager::imagick()->read($image->getRealPath());
        $image->cover('400', '300', 'center');
        return $image;
    }

    // public function resizeImageSm($image) {
    //     $image = ImageManager::imagick()->read($image->getRealPath());
    //     $image->cover('150', '112', 'center');
    //     return $image;
    // }
}
