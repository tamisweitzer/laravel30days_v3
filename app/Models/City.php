<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model {
    use HasFactory;

    protected $table = 'cities';
    protected $fillable = [
        'common_name',
        'proper_name',
        'bio',
        'thumbnail_url',
        'banner_img'
    ];

    public function bands() {
        return $this->hasMany(Band::class);
    }

    public function venues() {
        return $this->hasMany(Venue::class);
    }
}
