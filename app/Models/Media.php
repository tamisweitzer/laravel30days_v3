<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {
    protected $fillable = [
        'file_name',
        'mime_type',
        'file_size',
        'path'
    ];
}
