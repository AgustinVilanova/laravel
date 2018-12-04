@extends('template')

@section('title','MovieDetail')

@section('content')
  {{-- @dd($movie) --}}
  <h1>{{$movie->title}}</h1>
  <br>
  <ul>
    <li><span>Genero: {{$movie->genre ? $movie->genre->name: '<p>No Contiene Genero</p>' }}</span></li>
    <li>Release Date: {{$movie->release_date}}</li>
    <li>Length: {{$movie->length}}</li>
    <li>Actors:
      <ul>
        @forelse ($movie->actors as $oneActor)
          <li>{{$oneActor->getFullName()}}</li>
        @empty
          <p>No Contiene Actores por el Momento</p>
        @endforelse
      </ul>
    </li>
  </ul>
@endSection
