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

Route::get('/movieById/{id}', 'MoviesController@seachById');
Route::get('/movieByName/{name}', 'MoviesController@seachByName');
Route::get('/peliculas', 'MoviesController@listarPeliculas');

Route::get('/', function () {
    return view('welcome');
});
