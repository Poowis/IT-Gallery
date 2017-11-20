@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h1>Delete Album by ID</h1>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container">
      <form action="/admin/delete" method="post">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="id" class="col-lg-2 col-form-label">ID of album</label>
          <div class="col-lg-10">
            <input type="text" name="id" class="form-control" id="id" placeholder="ID of album" required>
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
