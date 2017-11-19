@extends('layouts.main')

@section('header')
    <div class="container header">
      <h1>Admin login</h1>
      <hr>
    </div>
@endsection

@section('content')
    <div class="container">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="email" class="col-lg-2 col-form-label">E-Mail Address</label>
                <div class="col-lg-10">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-lg-2 col-form-label">Password</label>
                <div class="col-lg-10">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-lg-10">
                    <div class="form-check">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Remember Me</span>
                    </label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-lg-10">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
