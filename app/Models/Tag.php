<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    // Specifiy many-to-many relationship to OurJobs.
    public function jobs() {
        return $this->belongsToMany(OurJob::class);
    }
}
