@extends('movies.template_movies')
@section('tite')
    {{'Editar'.$movie->title}}
@endsection
@section('titular')
  <h1>{{$movie->title}}</h1>
@endsection


@section('content')

  {{-- <div class="">
    <ul>
      @forelse ($errors->all() as $oneError)
          <li>{{$oneError}}</li>
      @empty

      @endforelse

    </ul>

  </div> --}}


    <div class="form-group">
  <form method="post" action="{{route('movies.update', $movie->id)}}" >

    @csrf
    {{method_field('PUT') }}

  <div class="row">
    <label>Titulo</label>
    <input type="text" name="title"  class="form-control {{ $errors->has('title') ? 'is-invalid' : null }}" value="{{ old('title') ?? $movie->title }}">
    <span class="invalid-feedback">
			@if ($errors->has('title'))
				{{ $errors->first('title') }}
			@endif
    </span>
  </div>
  <div class="row">
    <label>Rating</label>
    <input type="text" name="rating" class="form-control {{ $errors->has('rating') ? 'is-invalid' : null }}" value="{{ old('rating') ?? $movie->rating }}" >
    <span class="invalid-feedback">
			@if ($errors->has('rating'))
				{{ $errors->first('rating') }}
			@endif
    </span>
  </div>
  <div class="row">
    <label>Premios</label>
    <input type="text" name="awards" class="form-control {{ $errors->has('awards') ? 'is-invalid' : null }}" value="{{ old('awards') ?? $movie->awards }}" >
    <span class="invalid-feedback">
			@if ($errors->has('awards'))
				{{ $errors->first('awards') }}
			@endif
    </span>
  </div>
  <div class="row">
    <label>Duracion</label>
    <input type="text" name="length" class="form-control {{ $errors->has('length') ? 'is-invalid' : null }}" value="{{ old('length') ?? $movie->length }}">
    <span class="invalid-feedback">
			@if ($errors->has('length'))
				{{ $errors->first('length') }}
			@endif
    </span>
  </div>
  <div class="row">
    <label>Generos</label>
    <select name="genre_id" class="form-control {{ $errors->has('genre_id') ? 'is-invalid' : null }}" value="{{ old('genre_id') ?? $movie->genre_id}}">
      <option value="">Seleccione un genero</option>
      @foreach ($genres as $oneGenre):
        <option value="{{$oneGenre->id}}" {{(old('genre_id')==$oneGenre->id || $movie->genre_id == $oneGenre->id) ? 'selected' : null }}>{{$oneGenre->name}}</option>
      @endforeach
    </select>
    <span class="invalid-feedback">
			@if ($errors->has('genre_id'))
				{{ $errors->first('genre_id') }}
			@endif
    </span>
  </div>
  <div class="row">
    <label>Fecha de Estreno</label> <br>
    <i>Año: </i>
    <select name="year" class="form-control {{ $errors->has('year') ? 'is-invalid' : null }}" value="{{ old('year') ?? $movie->year }}">

      <option value="">Seleccione un año</option>
        @for($i=1900;$i<=2018;$i++)
          <option value="{{$i}}" {{ (old('year') == $i || $release_date[0] ==$i) ? 'selected' : null }}>{{$i}}</option>
        @endfor
    </select>
    <span class="invalid-feedback">
			@if ($errors->has('year'))
				{{ $errors->first('year') }}
			@endif
    </span>
    <i>Mes: </i>
    <select name="month" class="form-control {{ $errors->has('month') ? 'is-invalid' : null }}" value="{{ old('month') ?? $movie->month}}">
      <option value="">Seleccione un mes</option>
      @for($i=0;$i<=12;$i++)
        <option value="{{$i}}" {{ (old('month') == $i || $release_date[1] ==$i) ? 'selected' : null }} >{{$i}}</option>
      @endfor

    </select>
    <span class="invalid-feedback">
      @if ($errors->has('month'))
        {{ $errors->first('month') }}
      @endif
    </span>
    <i>Día: </i>
    <select name="day" class="form-control {{ $errors->has('day') ? 'is-invalid' : null }}" value="{{ old('day') ?? $movie->day}}">
      <option value="" >Seleccione un dia</option>
      @for($i=0;$i<=31;$i++)
        <option value="{{$i}}" {{ (old('day') == $i || $release_date[2] ==$i) ? 'selected' : null }} >{{$i}}</option>
      @endfor

    </select>
    <span class="invalid-feedback">
			@if ($errors->has('day'))
				{{ $errors->first('day') }}
			@endif
    </span>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Salvar Cambio</button>
</form>

</div>

{{-- @dd($errors->first('title')) --}}

@endsection
