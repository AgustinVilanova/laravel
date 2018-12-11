<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Genre;

class Movie extends Model
{
    protected $guarded = [];

  public function genre(){

    return $this->belongsTo(Genre::class);
  }
}
