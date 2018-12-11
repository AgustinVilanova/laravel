<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        return view('movies.index')->with(compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $genres= Genre::all();
        return view('movies.create')->with(compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      var_dump($request->all());
      $this->validate($request,[
        'title' => 'required | alpha', //tendria que que poner una validacion para poder poner espacios entre palabras con una expresion regular
        'rating' => 'required | numeric',
        'awards' => 'required | integer' ,
        'length' => 'required | integer',
        'genre_id' => 'required | integer',
        'year' => 'required | integer',
        'month' => 'required | integer',
        'day' => 'required | integer'
      ], [
        'required' => 'Este campo es obligatorio',
        'numeric' => 'Este campo debe contener numeros',
        'alpha' => 'Este campo solo debe contener letras',
        'integer' => 'Este campo debe contener numeros enteros'
      ]
        );
        $release_date= $request->year."-".$request->month."-".$request->day;
        $movie= Movie::create(['title'=>$request->title,'rating'=>$request->rating, 'awards'=>$request->awards, 'release_date'=>$release_date, 'length'=>$request->length, 'genre_id'=>$request->genre_id]);
        return redirect('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie= Movie::find($id);
        return view('movies.show')->with(compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie= Movie::find($id);
        $genres=Genre::all();
        $release_date = $movie->release_date;
        $release_date= explode("-", $release_date );

        return view('movies.edit')->with(compact('movie','genres','release_date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      var_dump($request->all());
      $this->validate($request,[
        'title' => 'required ', //tendria que que poner una validacion para poder poner espacios entre palabras con una expresion regular
        'rating' => 'required | numeric',
        'awards' => 'required | integer' ,
        'length' => 'required | integer',
        'genre_id' => 'required | integer',
        'year' => 'required | integer',
        'month' => 'required | integer',
        'day' => 'required | integer'
      ], [
        'required' => 'Este campo es obligatorio',
        'numeric' => 'Este campo debe contener numeros',
        'alpha' => 'Este campo solo debe contener letras',
        'integer' => 'Este campo debe contener numeros enteros'
      ]
        );
        $release_date= $request->year."-".$request->month."-".$request->day;
        $movie= Movie::find($id);
        $movie->title=$request->title;
        $movie->rating=$request->rating;
        $movie->awards=$request->awards;
        $movie->release_date=$release_date;
        $movie->length=$request->length;
        $movie->genre_id=$request->genre_id;
        $movie->save();
        return redirect('movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $movie = Movie::find($id);
      $movie->delete();
      return redirect('movies');
    }
}
