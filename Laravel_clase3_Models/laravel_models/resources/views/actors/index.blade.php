@extends('template')
@section('title', 'Listado de Actores')

@section('content')
<h1>Actores</h1>
<ul>
  @forelse ($actors as $valor)
      <li>{{ $valor->getFullName() }} <a href="actors/{{$valor->id}}">Detalle</a></li>
  @empty
      <p>No hay Actores.</p>
  @endforelse
</ul>
@endsection
