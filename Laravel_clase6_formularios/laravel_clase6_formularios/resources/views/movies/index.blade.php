
{{-- @dd($movies) --}}

@extends('movies.template_movies')
@section('title','Lista de Peliculas')
@section('titular')
  <h1>Listado de Pelicuas</h1>
@endsection
@section('content')
{{-- @dd($movies) --}}
  <br>
  

  <table class="table table-dark">
    <thead>
       <tr>
         <th scope="col"></th>
         <th scope="col">Title</th>
         <th scope="col">Rating</th>
         <th scope="col">Awards</th>
         <th scope="col">Release Date</th>
         <th scope="col">Length</th>
         <th scope="col">Genre</th>
       </tr>
     </thead>

     <tbody>
       @forelse ($movies as $oneMovie)
         <tr>
            <td><a href="{{route('movies.show', $oneMovie->id)}}">Detalle</a></td>
             <td>{{$oneMovie->title}}</td>
             <td>{{$oneMovie->rating}}</td>
             <td>{{$oneMovie->awards}}</td>
             <td>{{$oneMovie->release_date}}</td>
             <td>{{$oneMovie->length}}</td>
             <td>{{$oneMovie->genre_id ? $oneMovie->genre->name : null }}</td>
         </tr>
       @empty
         <h2>No Hay Peliculas En este momento</h2>
       @endforelse
     </tbody>

  </table>


@endsection
