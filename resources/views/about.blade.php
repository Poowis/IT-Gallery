@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>Our team</h3>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container">
      @foreach ($names as $name)
        <div class="row cards">
          <div class="col-lg-6 col-xl-4">
            <div>
              <img src="{{ asset('/images/portraits/'.$name->portrait) }}" alt="PORTRAIT IMAGE HAS NOT BEEN UPLOAD">
            </div>
          </div>
          <div class="col-lg-6 col-xl-8">
              <h5>{{$name->name}}</h5>
              <p>IStudent ID: {{$name->student_id}}</p>
              <p>Email: {{$name->email}}</p>
              <p>Facebook: {{$name->facebook}}</p>
              <p>Line: {{$name->line}}</p>
          </div>
        </div>
      @endforeach
    </div>
  @endsection

