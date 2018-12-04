@extends('template')

@section('title','MovieDetail')

@section('content')
  {{-- @dd($movie) --}}
  <h5 class="card-title">{{$movie->title}}</h5>
  <br>
  <ul>
    <li><p class="card-text">Genero: {{$movie->genre ? $movie->genre->name: '<p>No Contiene Genero</p>' }}</p></li>
    <li><p class="card-text">Release Date: {{$movie->release_date}}</p></li>
    <li><p class="card-text">Length: {{$movie->length}}</p></li>
    <li><p class="card-text">Actors:
      <ul>
        @forelse ($movie->actors as $oneActor)
          <li>{{$oneActor->getFullName()}}</li>
        @empty
          <p>No Contiene Actores por el Momento</p>
        @endforelse
      </ul></p>
    </li>
  </ul>

  <a class="btn btn-primary" href="/genres">Volver</a>
@endSection
