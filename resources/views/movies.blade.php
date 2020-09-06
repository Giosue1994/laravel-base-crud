@extends('layouts.app')

@section('main_content')
  <section id="movies">
    <div class="container">
      <div class="list-movies">
        @foreach ($movies as $movie)
          <div class="box-movie">
            <h2>{{ $movie->title }}</h2>
            <div class="box-img">
              <a href="{{ route('movies.show', $movie->id) }}"><img src="{{ asset($movie->cover) }}" alt="immagine non esistente"></a>
            </div>
            <div class="box-edit">
              <button type="button" name="button"><a href="{{ route('movies.edit', $movie->id) }}">Modifica</a></button>

              <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn delete" type="submit" value="Elimina">
              </form>
            </div>
          </div>

        @endforeach
      </div>
    </div>

  </section>
@endsection
