@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>Upload Album</h3>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container">
      <form action="/admin/upload" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="name" class="col-lg-2 col-form-label">Name of album</label>
          <div class="col-lg-10">
            <input type="text" name="name" class="form-control" id="name" placeholder="Name of album" value="{{ isset($name) ? $name : '' }}" required>
              @isset($nameErr)
                <span class="help-block">
                  <strong>{{ $nameErr }}</strong>
                </span>
              @endisset
          </div>
        </div>
        <div class="form-group row">
          <label for="description" class="col-lg-2 col-form-label">Description</label>
          <div class="col-lg-10">
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Description of album">{{ isset($description) ? $description : '' }}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-form-label">Cover image</div>
          <div class="col-lg-10">
            <label class="custom-file col-lg-10">
              <input type="file" name="cover" onchange="showcover(this)" class="custom-file-input" required>
              <span id="showcover" class="custom-file-control"></span>
            </label>
            @isset($coverErr)
              <span class="help-block">
                <strong>{{ $coverErr }}</strong>
              </span>
            @endisset
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2">Show cover</div>
          <div class="col-lg-10">
            <div class="form-check">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" name="show" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Show cover in album</span>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-form-label">Album images</div>
          <div class="col-lg-10">
            <label class="custom-file col-lg-10">
              <input type="file" name="files[]" onchange="showfiles(this)" class="custom-file-input tmp" multiple required>
              <span id="showfiles" class="custom-file-control"></span>
            </label>
            @isset($filesErr)
              <span class="help-block">
                <strong>{{ $filesErr }}</strong>
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
