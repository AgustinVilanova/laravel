@extends('template')
@section('title','Generos')
@section('content')

  <h1>Generos</h1>
{{-- @dd($generos[0]->movies) --}}
<ul>
@forelse ($generos as $oneGenre)

  <li><h2>{{$oneGenre->name}}</h2>
    <ul>
      @forelse ($oneGenre->movies as $oneMovie)
        <li><a href="/movies/{{$oneMovie->id}}">{{$oneMovie->title}}</a>
          <ul>
            @forelse ($oneMovie->actors as $oneActor)
              <li>{{$oneActor->getFullName()}}</li>
            @empty
              <p>Este Titulo no contiene Actores</p>
            @endforelse
          </ul>
        </li>
      @empty
        <p>Este genero No contiene titulos</p>
      @endforelse
    </ul>

  </li>
@empty
  <p>No Tiene generos</p>
@endforelse
</ul>
@endsection
