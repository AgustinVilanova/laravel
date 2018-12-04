<?php

namespace App\Http\Controllers;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function generos(){

      $generos= Genre::all();
      return view('genres.genres')->with(compact('generos'));

    }


}
