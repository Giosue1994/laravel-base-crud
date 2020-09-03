@extends('layouts.app')

@section('main_content')
  <div>
    <h1>{{ $movie->title }}</h1>
    <p><b>Anno:</b> {{ $movie->year }}</p>
    <p><b>Rating:</b> {{ $movie->rating }}</p>
    <p><b>Descrizione:</b> {{ $movie->description }}</p>

    <p>
      <a href="{{ route('movies.index') }}">Torna alla home</a>
    </p>
  </div>
@endsection
