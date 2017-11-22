@extends('layouts.main')

    @section('header')
        <div class="container header">
          <h3>Reset Password</h3>
          <hr>
        </div>
    @endsection

    @section('content')
        <div class="container">
            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
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
                <div class="form-group row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">
                            Send Password Reset Link
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endsection
