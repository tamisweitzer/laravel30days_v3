<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurJob extends Model {
  use HasFactory;
  // By convention, a model called Job implies a table called job, but our table is called job_listings.The fix is to either change the model to match the table name, or to so we need to specify the table name here, in the $table variable.
  // protected $table = 'job_listings';
  protected $fillable = ['title', 'salary'];

  public function employer() {
    return $this->belongsTo(Employer::class);
  }
}
