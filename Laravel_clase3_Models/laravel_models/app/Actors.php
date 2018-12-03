<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
  protected $guarded=[];

  public function getActors(){
    $actors= $this::all();
    return $actors;
  }

  public function getFullName(){
    $actors= $this->first_name." ".$this->last_name;
    return $actors;
  }


  public function movies() {

    return $this->belongsToMany(Movies::class, 'actor_movie', 'actor_id', 'movie_id');

  }

}
