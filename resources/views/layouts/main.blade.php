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
        <a class="link" href="/home">IT-Gallery</a>
        <a class="link" href="/list">List of albums</a>
        <a class="link" href="/about">About us</a>
        @guest
        <div class="btn-group float-right">
            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <h6 class="dropdown-header">Admin login</h6>
                    <form class="form-item" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember Me</span>
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </form>
            </div>
        </div>
        @else
        <div class="btn-group float-right">
            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <h6 class="dropdown-header">Admin menu</h6>
                <a class="dropdown-item" href="/admin/view">Admin view</a>
                <a class="dropdown-item" href="/admin/upload">Upload album</a>
                <a class="dropdown-item" href="/admin/delete">Delete album</a>
                <a class="dropdown-item" href="/admin/register">Add admin</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        @endguest
    </div>
    @yield('header')
    @yield('popup')
    @yield('content')
    <footer>
      <p>This project is a part of ITF Subject</p>
    </footer>
    <script src="{{ asset('js/jquery-3.2.1.slim.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
  </body>
</html>