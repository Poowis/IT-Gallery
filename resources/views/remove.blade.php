@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>Remove admin by ID</h3>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container">
      <form action="/admin/remove" method="post">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="id" class="col-lg-2 col-form-label">ID of admin</label>
          <div class="col-lg-10">
            <input type="text" name="id" class="form-control" id="id" placeholder="ID of admin" required>
            @isset($idErr)
              <span class="help-block">
                <strong>{{ $idErr }}</strong>
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
