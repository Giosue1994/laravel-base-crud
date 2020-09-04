@extends('layouts.app')

@section('main_content')
  <div>

    <h1>Crea Movie</h1>

    <form action="{{ route('movies.store') }}" method="post">
      @csrf
      @method('POST')

      <label for="title">Titolo</label>
      <br>
      <input type="text" name="title" value="{{ old('title') }}" placeholder="Inserisci titolo movie">
      <br><br>

      <label for="cover">Cover</label>
      <br>
      <input type="text" name="cover" value="img/{{ old('cover') }}" placeholder="Inserisci immagine">
      <br><br>

      <label for="year">Anno</label>
      <br>
      <input type="text" name="year" value="{{ old('year') }}" placeholder="Inserisci anno pubblicazione">
      <br><br>

      <label for="rating">Rating</label>
      <br>
      <input type="text" name="rating" value="{{ old('rating') }}" placeholder="Inserisci un voto">
      <br><br>

      <label for="description">Descrizione</label>
      <br>
      <textarea name="description" rows="8" cols="80" value="{{ old('description') }}" placeholder="Inserisci una descrizione"></textarea>
      <br><br>

      <input type="submit" value="Aggiungi movie">
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
