<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OurJob extends Model {
  use HasFactory;
  // By convention, a model called Job implies a table called job, but our table is called -job_listings- changed to "our_jobs".The fix is to either change the model to match the table name, or to so we need to specify the table name here, in the $table variable.
  // protected $table = 'job_listings';
  protected $fillable = ['employer_id', 'title', 'salary'];

  // Instead of fillable, use $guarded to allow fillable on ALL, except for the columns passed in as an arg.
  // protected $guarded = [];

  public function employer() {
    return $this->belongsTo(Employer::class);
  }

  // Specifiy many-to-many relationship to Tags.
  public function tags() {
    return $this->belongsToMany(Tag::class);
  }
}
