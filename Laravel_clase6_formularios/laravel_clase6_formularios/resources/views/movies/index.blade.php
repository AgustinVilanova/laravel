
{{-- @dd($movies) --}}

@extends('movies.template_movies')
@section('title','Lista de Peliculas')
@section('titular')
  <h1>Listado de Pelicuas</h1>
@endsection
@section('content')

  <br>
  <ul>
  @forelse ($movies as $oneMovie)

    <li>{{$oneMovie->title}}</li>

  @empty
    <h2>No Hay Peliculas En este momento</h2>
  @endforelse
  </ul>
@endsection
