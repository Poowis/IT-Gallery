@extends('layouts.main')

@section('header')
    <div class="container header">
      <h3>Add Admin</h3>
      <hr>
    </div>
@endsection

@section('content')
    <div class="container">
        <form class="form-group" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="name" class="col-lg-2 col-form-label">Name</label>
                <div class="col-lg-10">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-lg-2 col-form-label">E-Mail Address</label>
                <div class="col-lg-10">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
            <div class="form-group row">
                <label for="password-confirm" class="col-lg-2 col-form-label">Confirm Password</label>
                <div class="col-lg-10">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <div class="form-group row justify-content-end">
                <div class="col-lg-10">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
