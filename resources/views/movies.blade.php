@extends('layouts.app')

@section('main_content')
  <div>
    <h1>LISTA MOVIES</h1>

    <div>
      @foreach ($movies as $movie)
        <h2><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a></h2>
        <p>Anno: {{ $movie->year }}</p>
        <p>Rating: {{ $movie->rating }}</p>
        <p>Descrizione: {{ $movie->description }}</p>

      @endforeach
    </div>
  </div>
@endsection
