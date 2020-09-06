<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Lista Movies</title>
  </head>
  <body>

    <header>
      @include('partials.header')
    </header>

    <main>
      @yield('main_content')
    </main>

    <footer>
      @include('partials.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>
