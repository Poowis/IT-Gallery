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
    <div class="container d-flex flex-wrap main">
        <form action="/upload" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="text" name="name" value={{$name}}>*{{$nameErr}}<br>
          <input type="text" name="uploader" value={{$uploader}}>*{{$uploaderErr}}<br>
          <input type="text" name="description" value={{$description}}><br>
          <input type="file" name="cover">*{{$coverErr}}<br>
          <input type="file" name="files[]" multiple>*{{$filesErr}}<br>
          <input type="submit">
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