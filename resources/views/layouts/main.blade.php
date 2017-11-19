<!doctype html>
<html lang="en">
  <head>
    <title>IT-Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    @yield('home')
  </head>
  <body>
    <div class="jumboton cover"></div>
    <div id="navbar" class="jumboton transparent">
        <div class="container">
            <a href="/home">IT-Gallery</a>
            <a href="/list">List of albums</a>
            <a href="/about">About us</a>
            @guest
                <a href="{{ route('login') }}">Login</a>
            @else
            <a href="/admin">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
        @endguest
        </div>
    </div>
    @yield('header')
    @yield('popup')
    @yield('content')
    <footer>
      <p>This project is a part of ITF Subject</p>
    </footer>
    <script src="{{ asset('js/jquery-3.2.1.slim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
  </body>
</html>