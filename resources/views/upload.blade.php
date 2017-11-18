<!doctype html>
<html lang="en">
  <head>
    <title>IT-Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="jumboton cover"></div>
    <div class="jumboton header">
      <div class="jumboton nav">
        <div class="container">
          <ul>
            <a href="/home"><li>IT-Gallery</li></a>
            <a href="/list"><li>List of albums</li></a>
            <a href="/about"><li>About us</li></a>
            <button id="toggle_fullscreen">fullscreen</button>
          </ul>
        </div>
      </div>
      <div class="container name">
        <h3>Upload Album</h3>
      </div>
    </div>
    {{--<div class="container d-flex flex-wrap main">
        <form action="/upload" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="text" name="name" value={{$name}}>*{{$nameErr}}<br>
          <input type="text" name="uploader" value={{$uploader}}>*{{$uploaderErr}}<br>
          <input type="text" name="description" value={{$description}}><br>
          <input type="file" name="cover">*{{$coverErr}}<br>
          <input type="checkbox" name="show" value="True">show cover in album<br>
          <input type="file" name="files[]" multiple>*{{$filesErr}}<br>
          <input type="submit">
        </form>
    </div>--}}

    <div class="container">
      <form action="/upload" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group row">
          <label for="name" class="col-lg-2 col-form-label">Name</label>
          <div class="col-lg-10">
            <input type="text" name="name" class="form-control" id="name" placeholder="Name of album">
          </div>
        </div>
        <div class="form-group row">
          <label for="uploader" class="col-lg-2 col-form-label">Uploader</label>
          <div class="col-lg-10">
            <input type="text" name="uploader" class="form-control" id="uploader" placeholder="Name of uploader">
          </div>
        </div>
        <div class="form-group row">
          <label for="description" class="col-lg-2 col-form-label">Desscription</label>
          <div class="col-lg-10">
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Desscription of album"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-2 col-form-label">Cover image</div>
          <div class="col-lg-10">
            <label class="custom-file col-lg-10">
              <input type="file" name="cover" onchange="showcover(this)" class="custom-file-input">
              <span id="showcover" class="custom-file-control"></span>
            </label>
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
              <input type="file" name="files[]" onchange="showfiles(this)" class="custom-file-input tmp" multiple>
              <span id="showfiles" class="custom-file-control"></span>
            </label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <footer>
      This project is a part of ITF Subject
    </footer>
    <script src="{{ asset('js/jquery-3.2.1.slim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
  </body>
</html>