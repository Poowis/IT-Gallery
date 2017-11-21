@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>List of Albums</h3>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container d-flex flex-wrap content">
      @foreach($albums as $album)
        <div class="col-lg-6 col-xl-4 cards">
          <div class="card_content">
            <a href="/album/{{$album->name_of_album}}">
              <img src="{{ asset('storage/'.$album->name_of_album.'/'.$album->cover) }}" alt="FILE IS NOT FOUND">
            </a>
            <h5>{{$album->name_of_album}}</h5>
            <p>{{$album->description}}</p>
          </div>
        </div>
      @endforeach
    </div>
  @endsection
