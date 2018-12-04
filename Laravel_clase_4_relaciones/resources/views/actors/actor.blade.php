
@extends('template')

@section('title',$actor->getFullName())


@section('content')

  <h1>{{$actor->getFullName()}}</h1>
  <p>Rating: {{$actor->rating}}</p>
  {{-- @dd($peliFavorita); --}}
  <p>Pelicula Favorita: {{$peliFavorita? $peliFavorita->title:"No tiene Pelicula favorita"}}</p>
  <a href="/actors">Volver</a>

@endsection
