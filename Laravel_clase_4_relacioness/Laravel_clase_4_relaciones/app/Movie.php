<?php

namespace App;
use App\Genre;
use App\Actor;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $guarded=[];

  public function genre(){

    return $this->belongsTo(Genre::class);
  }

  public function actors(){

    return $this->belongsToMany(Actor::class);
  }
}
