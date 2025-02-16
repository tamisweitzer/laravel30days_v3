<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'fullname',
        'excerpt',
        'bio',
        'city_id',
        'state_id',
        'website_url',
        'thumbnail_img',
        'banner_img'
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }

    public function state() {
        return $this->belongsTo(State::class);
    }
}
