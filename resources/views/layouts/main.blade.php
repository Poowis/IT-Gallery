<!doctype html>
<html lang="en">
  <head>
    <title>IT-Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="jumboton cover"></div>
    <div id="navbar" class="jumboton transparent">
        <div class="container">
            <a href="/home">IT-Gallery</a>
            <a href="/list">List of albums</a>
            <a href="/about">About us</a>
        </div>
    </div>
    @yield('header')
    @yield('popup')
    @yield('content')
    <footer>
      This project is a part of ITF Subject
    </footer>
    <script src="{{ asset('js/jquery-3.2.1.slim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
  </body>
</html>