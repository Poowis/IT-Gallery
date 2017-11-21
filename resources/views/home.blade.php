@extends('layouts.main')

  @section('home')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
  @endsection

  @section('content')
    <div class="jumboton home_1">
      <h1>IT Gallery</h1>
    </div>
    <div class="container header">
      <h3>Newest albums</h3>
      <hr>
    </div>
    <div class="container content d-flex flex-wrap list">
      @foreach($albums as $album)
        <div class="col-lg-6 col-xl-4 cards">
          <div class="card_content">
            <a href="album/{{$album->name_of_album}}">
              <img src="{{ asset('storage/'.$album->name_of_album.'/'.$album->cover) }}" alt="FILE IS NOT FOUND">
            </a>
            <h5>{{$album->name_of_album}}</h5>
            <p>{{$album->description}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="jumboton home_2"></div>
    <div class="container header">
      <h3>Our team</h3>
      <hr>
    </div>
    <div class="container content d-flex flex-wrap about">
      @foreach($names as $name)
        <div class="col-lg-6 col-xl-4 cards">
          <div>
            <img src="{{ asset('/images/portraits/'.$name->portrait) }}" alt="PORTRAIT IMAGE HAS NOT BEEN UPLOAD">
            <h5>{{$name->name}}</h5>
          </div>
        </div>
      @endforeach
    </div>
    <div class="jumboton home_3"></div>
  @endsection