@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>Admin view</h3>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container content">
      @foreach ($albums as $album)
        <div class="row cards">
          <div class="col-lg-6 col-xl-4">
            <div class="card_content">
              <a href="/album/{{$album->name_of_album}}">
                <img src="{{ asset('storage/'.$album->name_of_album.'/'.$album->cover) }}" alt="FILE IS NOT FOUND">
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-xl-8">
              <h5>{{$album->name_of_album}}</h5>
              <p>ID : {{$album->id}}</p>
              <p>Uploader by : {{$album->uploader}}</p>
              <p>Time upload : {{$album->time_upload}}</p>
              <p>Number of images in album : {{$album->number_of_images}}</p>
              <p>Cover : {{$album->name_of_album}}/{{$album->cover}}</p>
              <p>Description : {{$album->description}}</p>
          </div>
        </div>
      @endforeach
    </div>
  @endsection
