@extends('layouts.app')

@section('main_content')
  <div>
    <h1>{{ $movie->title }}</h1>
    <p>Anno: {{ $movie->year }}</p>
    <p>Rating: {{ $movie->rating }}</p>
    <p>Descrizione: {{ $movie->description }}</p>

    <p>
      <a href="{{ route('movies.index') }}">Torna alla home</a>
    </p>
  </div>
@endsection
