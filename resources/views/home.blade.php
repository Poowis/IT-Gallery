@extends('layouts.main')

  @section('home')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
  @endsection

  @section('content')
    <div class="jumboton home_1">
      <h1>IT Gallery</h1>
    </div>
    <div class="container header">
      <h1>Newest albums</h1>
      <hr>
    </div>
    <div class="container main d-flex flex-wrap list">
      @foreach($albums as $album)
        <div class="col-lg-6 col-xl-4 cards">
          <div class="card_content">
            <a href="album/{{$album->name_of_album}}">
              <img src="{{ asset('storage/'.$album->name_of_album.'/'.$album->cover) }}" alt="FILE IS NOT FOUND">
            </a>
            <h5 class="hidden">{{$album->name_of_album}}</h5>
            <p class="hidden">Upload by: {{$album->uploader}}<br>Upload time: {{$album->time_upload}}<br>{{$album->description}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="jumboton home_2"></div>
    <div class="container header">
      <h1>About us</h1>
      <hr>
    </div>
    <div class="container main d-flex flex-wrap about">
      @foreach($names as $name)
        <div class="col-lg-6 col-xl-4 cards">
          <div class="card_content">
            <img src="{{ asset('/images/portraits/'.$name->portrait) }}" alt="PORTRAIT IMAGE HAS NOT BEEN UPLOAD">
            <h5 class="hidden">{{$name->name}}</h5>
            <p class="hidden">Student ID: {{$name->student_id}}<br>Email: {{$name->email}}<br>Facebook: {{$name->facebook}}<br>Line: {{$name->line}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="jumboton home_3"></div>
  @endsection