<?php

namespace App;
use App\Movie;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
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
    //en caso se que no sigamos los estandares de Laravel para generar la base de datos
    //return $this->belongsToMany(Movie::class, 'actor_movie', 'actor_id', 'movie_id');
    return $this->belongsToMany(Movie::class);

  }
}
