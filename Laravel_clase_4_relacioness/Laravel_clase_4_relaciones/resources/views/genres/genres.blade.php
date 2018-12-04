@extends('template')
@section('title','Generos')
@section('content')

  <h1>Generos</h1>
{{-- @dd($generos[0]->genre->name) --}}
<ul>
@forelse ($generos as $oneMovie)

  <li>{{$oneMovie->title." / ".($oneMovie->genre ? $oneMovie->genre->name:"no tiene genero") }}</li>
@empty

@endforelse
</ul>
@endsection
