<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista Movies</title>
  </head>
  <body>

    <div>
      <h1>LISTA MOVIES</h1>

      <div>
        @foreach ($movies as $movie)
          <h2>Titolo: {{ $movie->title }}</h2>
          <p>Anno: {{ $movie->year }}</p>
          <p>Rating: {{ $movie->rating }}</p>
          <p>Descrizione: {{ $movie->description }}</p>

        @endforeach
      </div>
    </div>

  </body>
</html>
