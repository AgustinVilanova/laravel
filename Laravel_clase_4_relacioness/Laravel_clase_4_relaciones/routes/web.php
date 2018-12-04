<?php
use \app\http\controllers\ActorsController;
use app\http\controllers;
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

Route::get('/actors', 'ActorsController@index');
Route::get('/actors/{id}', 'ActorsController@show');
Route::get('/genres','GenerosController@generos');
Route::get('/movies/{id}', 'MoviesController@show');
