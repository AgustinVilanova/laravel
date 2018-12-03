@extends('template')
@section('title', 'Listado de Actores')

@section('content')
<h1>Actores</h1>
<ul>
  @dd($actors[13]->movies)
  @forelse ($actors as $valor)
      <li>{{ $valor->getFullName() }}
        {{-- <ul>
          @forelse ($actors->movies as $value)
            <li>{{$value->title}}</li>
          @empty

          @endforelse --}}
        </ul>
        <a href="actors/{{$valor->id}}">Detalle</a>
      </li>
  @empty
      <p>No hay Actores.</p>
  @endforelse
</ul>
@endsection
