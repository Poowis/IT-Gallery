<!doctype html>
<html lang="en">
  <head>
    <title>IT-Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="jumboton header">
      <div class="jumboton nav">
        <div class="container">
          <ul>
            <a href="/home"><li>IT-Gallery</li></a>
            <a href="/list"><li>List of albums</li></a>
            <a href="/about"><li>About us</li></a>
          </ul>
        </div>
      </div> 
    </div>
    <div class="jumboton home_1">
      <h1>Newest albums</h1>
    </div>
    <div class="container list">
      <h1>Newest albums</h1>
    </div>
    <div class="container main d-flex flex-wrap list">
      @foreach($albums as $album)
        <div class="col-4 cards">
          <div class="content">
            <a href="album/{{$album->name_of_album}}">
              <img src="{{ asset('storage/'.$album->name_of_album.'/'.$album->cover) }}" alt="COVER IMAGE HAS NOT BEEN UPLOAD">
            </a>
            <h5 class="hidden">{{$album->name_of_album}}</h5>
            <p class="hidden">{{$album->uploader}}{{$album->time_upload}}<br>{{$album->description}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="jumboton home_2"></div>
    <div class="container about">
      <h1>About us</h1>
    </div>
    <div class="container main d-flex flex-wrap about">
      @foreach($names as $name)
        <div class="col-4 cards">
          <div class="content">
            <img src="{{ asset('/images/portrait/'.$name->portrait) }}" alt="PORTRAIT IMAGE HAS NOT BEEN UPLOAD">
            <h5 class="hidden">{{$name->name}}</h5>
            <p class="hidden">Student ID: {{$name->student_id}}<br>Email: {{$name->email}}<br>Facebook: {{$name->facebook}}<br>Line: {{$name->line}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="jumboton home_3"></div>
    <footer>
      This project is a part of ITF Subject
    </footer>
    <script src="{{ asset('js/jquery-3.2.1.slim.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
  </body>
</html>