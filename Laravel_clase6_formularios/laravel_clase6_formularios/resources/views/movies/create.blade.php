@extends('movies.template_movies')


@section('title','Crear Pelicula')

@section('titular')
  <h1>Agregar Pelicula</h1>
@endsection

@section('content')

  <div class="">
    <ul>
      @forelse ($errors->all() as $oneError)
          <li>{{$oneError}}</li>
      @empty

      @endforelse

    </ul>

  </div>


    <div class="form-group">
  <form method="post" action="/movies" >
    @csrf
  <div>
    <label>Titulo</label>
    <input type="text" name="title"  class="form-control" value="{{ old('title') }}">
  </div>
  <div>
    <label>Rating</label>
    <input type="text" name="rating" class="form-control" value="{{ old('rating') }}" >
  </div>
  <div>
    <label>Premios</label>
    <input type="text" name="awards" class="form-control" value="{{ old('awards') }}" >
  </div>
  <div>
    <label>Duracion</label>
    <input type="text" name="length" class="form-control" value="{{ old('length') }}">
  </div>
  <div>
    <label>Generos</label>
    <select name="genre_id" class="form-control" value="{{ old('genre_id') }}">


        <option value=""></option>

    </select>

  </div>
  <div>
    <label>Fecha de Estreno</label> <br>
    <i>Año: </i>
    <select name="year" class="form-control" value="{{ old('year') }}">

        <option value=""></option>

    </select>
    <i>Mes: </i>
    <select name="month" class="form-control" value="{{ old('month') }}">

        <option value=""></option>

    </select>
    <i>Día: </i>
    <select name="day" class="form-control" value="{{ old('day') }}">

        <option value=""></option>

    </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Guardar película</button>
</form>

</div>



@endsection
