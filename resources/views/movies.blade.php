@extends('layouts.app')

@section('main_content')
  <div>
    <h1>LISTA MOVIES</h1>

    <div>
      <button type="button" name="button"><a href="{{ route('movies.create') }}">Crea Movie</a></button>
    </div>

    <div>
      @foreach ($movies as $movie)
        <h2><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></h2>
        <p>Rating: {{ $movie->rating }}</p>
        <button type="button" name="button"><a href="{{ route('movies.edit', $movie->id) }}">Modifica</a></button>
        <button type="button" name="button"><a href="{{ route('movies.destroy', $movie->id) }}">Elimina</a></button>
        <hr>
      @endforeach
    </div>
  </div>
@endsection
