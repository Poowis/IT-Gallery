@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>{{$album -> name_of_album}}</h3>
      <hr>
      <p>Upload by: {{$album -> uploader}}<br>Upload time: {{$album -> time_upload}}<br>{{$album -> description}}</p>
    </div>
  @endsection

  @section('popup')
    <div id="popup" onclick="this.style.display='none'">
      <img id="img">
    </div>
  @endsection

  @section('content')
    <div class="container d-flex flex-wrap content">
      @foreach ($images as $image)
        <div class="col-lg-6 col-xl-4 cards">
          <div class="card_content">
            <img src="{{ asset('storage/'.$album->name_of_album.'/'.$image) }}" onclick="popup(this)">
          </div>
        </div>
      @endforeach
    </div>
  @endsection
