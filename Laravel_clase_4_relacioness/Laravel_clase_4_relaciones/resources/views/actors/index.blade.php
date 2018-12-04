
@extends('template')
@section('title', 'Listado de Actores')

@section('content')
<h1>Actores</h1>
<ul>
  @dd($actors)
  @forelse ($actors as $oneActor)
      <li>{{ $oneActor->getFullName() }}
          {{-- <ul>
          @forelse ($oneActor->movies as $oneMovie)
            <li><b>{{$oneMovie->title}}</b></li>
          @empty
            <p>No tiene Peliculas</p>

          @endforelse
        </ul> --}}
        <a href="actors/{{$oneActor->id}}">Detalle</a>
      </li>
  @empty
      <p>No hay Actores.</p>
  @endforelse
</ul>
@endsection
