<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Media extends Model {
    protected $fillable = [
        'file_name',
        'image_name',
        'mime_type',
        'file_size',
        'path'
    ];

    protected $appends = ['original_url'];

    protected function originalUrl(): Attribute {
        return Attribute::make(
            get: fn() => Storage::url($this->path)
        );
    }
}
