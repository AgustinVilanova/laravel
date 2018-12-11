{{-- @dd($movie) --}}

@extends('movies.template_movies')
@section('tite')
    {{$movie->title}}
@endsection
@section('titular')
  <h1>{{$movie->title}}</h1>
@endsection

@section('content')
    <table class="table">
      <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Rating</th>
            <th scope="col">Awards</th>
            <th scope="col">Release Date</th>
            <th scope="col">Length</th>
            <th scope="col">Genre</th>
          </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{$movie->title}}</td>
            <td>{{$movie->rating}}</td>
            <td>{{$movie->awards}}</td>
            <td>{{$movie->release_date}}</td>
            <td>{{$movie->length}}</td>
            <td>{{$movie->genre_id}}</td>
        </tr>
      </tbody>
    </table>

    <div class="row">
      <form class="form-group" action="{{route('movies.destroy', $movie->id) }}" method="post">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit" name="button" class="btn btn-danger">Eliminar</button>
      </form>

      <a href="{{route('movies.edit', $movie->id)}}" class="col-1 btn btn-warning">Editar</a>

    </div>


@endsection
