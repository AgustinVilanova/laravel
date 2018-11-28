
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', function(){

  $peliculas = [
	['title' => 'Avatar', 'poster' => '/images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
	['title' => 'Infinity War', 'poster' => '/images/avengers.jpg' , 'genre' => 'Acción'],
	['title' => 'DeadPool', 'poster' => '/images/deadpool1.jpg' , 'genre' => 'Acción'],
	['title' => 'Dragon Ball', 'poster' => '/images/dragonball.jpg' , 'genre' => 'Animé'],
	['title' => 'Dunkerque', 'poster' => '/images/dunkirk.jpg' , 'genre' => 'Belico'],
	['title' => 'Emoji', 'poster' => '/images/emoji.jpg' , 'genre' => 'Animada'],
	['title' => 'Inception', 'poster' => '/images/inception1.jpg' , 'genre' => 'Drama'],
	['title' => 'Moana', 'poster' => '/images/moana.jpg' , 'genre' => 'Animada'],
	['title' => 'Rogue One', 'poster' => '/images/rogueone.jpg' , 'genre' => 'Acción'],
	['title' => 'Titanic','poster' => '/images/titanic.jpg' , 'genre' => 'Drama']
];

  echo "<h1>Listado de peliculas</h1>";
  echo "<div class='container'>";
  echo '<ul style="display:flex; flex-wrap:wrap; justify-content: space-around; align-items:flex-start;"';
  foreach ($peliculas as $key => $value) {
    echo '<li>
    <a href="/pelicula/'.trim($value["title"]).'">'.$value["title"].'</a>
    <br>
     <img src="'.$value["poster"].'" alt="" width="150px" heigth="150px">
    </li>';
    //echo '<img src="'.$value["poster"].'" alt="" width="150px" heigth="150px">';
  }
  echo "</ul>";
  echo "<div>";
});



Route::get('/pelicula/{titulo}', function ($titulo) {

  $peliculas = [
  ['title' => 'Avatar', 'poster' => '/images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
  ['title' => 'Infinity War', 'poster' => '/images/avengers.jpg' , 'genre' => 'Acción'],
  ['title' => 'DeadPool', 'poster' => '/images/deadpool1.jpg' , 'genre' => 'Acción'],
  ['title' => 'Dragon Ball', 'poster' => '/images/dragonball.jpg' , 'genre' => 'Animé'],
  ['title' => 'Dunkerque', 'poster' => '/images/dunkirk.jpg' , 'genre' => 'Belico'],
  ['title' => 'Emoji', 'poster' => '/images/emoji.jpg' , 'genre' => 'Animada'],
  ['title' => 'Inception', 'poster' => '/images/inception1.jpg' , 'genre' => 'Drama'],
  ['title' => 'Moana', 'poster' => '/images/moana.jpg' , 'genre' => 'Animada'],
  ['title' => 'Rogue One', 'poster' => '/images/rogueone.jpg' , 'genre' => 'Acción'],
  ['title' => 'Titanic','poster' => '/images/titanic.jpg' , 'genre' => 'Drama']
];

    $findSussecs=null;
    foreach ($peliculas as $key => $value) {
      if ($value["title"]==$titulo) {
          echo "<h1>".$value["title"]."</h1>";
          echo '<img src="'.$value["poster"].'" alt="" width="150px">';
          echo "<h3>".$value["genre"]."</h3>";
          $findSussecs=true;
          break;
      }else{
        $findSussecs=false;
      }
    }
    if (!$findSussecs) {
      echo "<h2>No se ha encontrado la pelicula</h2>";
    }

});


Route::get('/numero/{numero}/{operacion?}', function ($numero, $operacion=null) {

    if ($operacion) {
      return "<h1> El resultado es: ".$numero * $operacion."</h1>";
    }
    return ($numero%2==0)?"<h1>El numero es Par</h1>":"<h1>El numero es Impar</h1>";
});
