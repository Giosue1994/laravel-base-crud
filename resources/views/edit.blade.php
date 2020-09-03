@extends('layouts.app')

@section('main_content')
  <div>

    <h1>Modifica un Movie</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="post">
      @csrf
      @method('PUT')

      <label for="title">Titolo</label>
      <br>
      <input type="text" name="title" value="{{ $movie->title }}" placeholder="Inserisci titolo movie">
      <br><br>

      <label for="year">Anno</label>
      <br>
      <input type="text" name="year" value="{{ $movie->year }}" placeholder="Inserisci anno pubblicazione">
      <br><br>

      <label for="rating">Rating</label>
      <br>
      <input type="text" name="rating" value="{{ $movie->rating }}" placeholder="Inserisci un voto">
      <br><br>

      <label for="description">Descrizione</label>
      <br>
      <textarea name="description" rows="8" cols="80" placeholder="Inserisci una descrizione">{{ $movie->description }}</textarea>
      <br><br>

      <input type="submit" value="Modifica movie">
    </form>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <p>
    <a href="{{ route('movies.index') }}">Torna alla home</a>
  </p>

@endsection
