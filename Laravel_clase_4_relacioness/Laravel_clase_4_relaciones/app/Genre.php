<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  protected $guarded= [];

  public function genresMovies(){

    return $this->belongsTo(Movie::class);
  }
}
