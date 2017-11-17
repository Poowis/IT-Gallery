<!doctype html>
<html lang="en">
  <head>
    <title>IT-Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet" type="text/css">
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
            <button id="change_size">change size</button>
          </ul>
        </div>
      </div>
      <div class="container name">
        <h3>List of Albums</h3>
      </div>
    </div>
    <div class="main container d-flex flex-wrap ">
      @foreach($albums as $album)
        <div class="col-6 cards">
          <div class="content">
            <a href="album/{{$album->name_of_album}}">
              <img src="{{ asset('storage/'.$album->name_of_album.'/'.$album->cover) }}" alt="FILE IS NOT FOUND">
            </a>
            <h5 class="hidden">{{$album->name_of_album}}</h5>
            <p class="hidden">Upload by: {{$album->uploader}}<br>Upload time: {{$album->time_upload}}<br>{{$album->description}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <footer>
      This project is a part of ITF Subject
    </footer>
    <script src="{{ asset('js/jquery-3.2.1.slim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
  </body>
</html>