@extends('layouts.app')

@section('main_content')
  <div>
    <h1>LISTA MOVIES</h1>

    <div>
      <button type="button" name="button"><a href="{{ route('movies.create') }}">Crea Movie</a></button>
    </div>
    <br>

    <div>
      @foreach ($movies as $movie)
        <h2><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></h2>
        <p><b>Descrizione:</b> {{ $movie->description }}</p>
        <button type="button" name="button"><a href="{{ route('movies.edit', $movie->id) }}">Modifica</a></button>

        <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
          @csrf
          @method('DELETE')

          <input type="submit" value="Elimina">
        </form>
        <hr>
      @endforeach
    </div>
  </div>
@endsection
