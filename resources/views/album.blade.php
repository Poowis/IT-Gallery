<!doctype html>
<html lang="en">
  <head>
    <title>IT-Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/new.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="jumboton transparent" id="navbar">
      <a href="/home">IT-Gallery</a>
      <a href="/list">List of albums</a>
      <a class="hide" href="/about">About us</a>
    </div>
    <div class="jumboton cover"></div>
    <div class="container header">
      <h1>{{$album -> name_of_album}}</h1>
      <hr>
      <p>Upload by: {{$album -> uploader}}<br>Upload time: {{$album -> time_upload}}<br>{{$album -> description}}</p>
    </div>
    <div id="popup" onclick="this.style.display='none'">
      <img id="img">
    </div>
    <div class="container d-flex flex-wrap content">
      @foreach ($images as $image)
        <div class="col-lg-6 col-xl-4 cards">
          <div class="card_content">
            <img src="{{ asset('storage/'.$album->name_of_album.'/'.$image) }}" onclick="popup(this)">
          </div>
        </div>
      @endforeach
    </div>
    <div class="jumboton">
      <footer>
        <p>This website is a part of ITF project</p>
      </footer>
    </div>
    <script src="{{ asset('js/jquery-3.2.1.slim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
  </body>
</html>