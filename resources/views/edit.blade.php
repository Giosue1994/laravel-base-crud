@extends('layouts.app')

@section('main_content')
  <div>

    <h1>Modifica Movie</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="post">
      @csrf
      @method('PUT')

      <label for="title">Titolo</label>
      <br>
      {{-- @if (old('title'))
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Inserisci titolo movie">
      @else
        <input type="text" name="title" value="{{ $movie->title }}" placeholder="Inserisci titolo movie">
      @endif --}}

      {{-- operatore ternario --}}
      <input type="text" name="title" value="{{ old('title') ? old('title') : $movie->title }}" placeholder="Modifica titolo movie">
      <br><br>

      <label for="cover">Cover</label>
      <br>
      <input type="text" name="cover" value="{{ old('cover') ? old('cover') : $movie->cover }}" placeholder="Modifica immagine">
      <br><br>

      <label for="year">Anno</label>
      <br>
      <input type="text" name="year" value="{{ old('year') ? old('year') : $movie->year }}" placeholder="Modifica anno pubblicazione">
      <br><br>

      <label for="rating">Rating</label>
      <br>
      <input type="text" name="rating" value="{{ old('rating') ? old('rating') : $movie->rating }}" placeholder="Modifica un voto">
      <br><br>

      <label for="description">Descrizione</label>
      <br>
      <textarea name="description" rows="8" cols="80" placeholder="Modifica descrizione">{{ old('description') ? old('description') : $movie->description }}</textarea>
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
