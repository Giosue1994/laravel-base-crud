@extends('layouts.app')

@section('main_content')
  <section id="show">
    <div class="show">
      <h1>{{ $movie->title }}</h1>
      <img src="{{ asset($movie->cover) }}" alt="immagine non esistente">
      <p><b>Anno:</b> {{ $movie->year }}</p>
      <p><b>Rating:</b> {{ $movie->rating }}</p>
      <p><b>Descrizione:</b> {{ $movie->description }}</p>

      <button type="button" name="button"><a href="{{ route('movies.edit', $movie->id) }}">Modifica</a></button>
      <br><br>
      <a href="{{ route('movies.index') }}">Torna alla home</a>
    </div>
  </section>
@endsection
