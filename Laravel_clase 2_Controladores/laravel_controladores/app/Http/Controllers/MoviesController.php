<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{

  private $peliculas = [
  1 => "Toy Story",
  2 => "Buscando a Nemo",
  3 => "Avatar",
  4 => "Star Wars: Episodio V",
  5 => "Up",
  6 => "Mary and Max"
  ];

  public function seachById($id){
    $pasoTitle=$this->peliculas[$id];
    return view('verPelicula')->with(compact('pasoTitle'));

  }

  public function seachByName($name){

    foreach ($this->peliculas as $key => $value) {
      if ($value==$name) {
        $pasoTitle="La Pelicula es: {$value}";
        return view('verPelicula')->with(compact('pasoTitle'));

      }else {
        $pasoTitle="No existe la peli";
      }
    }
    return view('verPelicula')->with(compact('pasoTitle'));
  }

  public function listarPeliculas(){
    $listado= $this->peliculas;
    return view('verListadoPeliculas')->with(compact('listado'));
  }

}
