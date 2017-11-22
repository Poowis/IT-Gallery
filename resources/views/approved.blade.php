@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>Approve user by Email</h3>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container">
      <form action="/admin/approved" method="post">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="email" class="col-lg-2 col-form-label">Email of user</label>
          <div class="col-lg-10">
            <input type="text" name="email" class="form-control" id="email" placeholder="Email of user" required>
            @isset($emailErr)
              <span class="help-block">
                <strong>{{ $emailErr }}</strong>
              </span>
            @endisset
          </div>
        </div>
        <div class="form-group row justify-content-end">
          <div class="col-lg-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  @endsection
