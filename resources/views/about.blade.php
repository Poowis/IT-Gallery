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
        <div class="row">
          <div class="col-lg-6 col-xl-5">
            <img src="{{ asset('/images/portraits/'.$name->portrait) }}" alt="PORTRAIT IMAGE HAS NOT BEEN UPLOAD">
          </div>
          <div class="col-lg-6 col-xl-7">
            <h5>{{$name->name}}</h5>
            <p>Student ID: {{$name->student_id}}<br>Email: {{$name->email}}<br>Facebook: {{$name->facebook}}<br>Line: {{$name->line}}</p>
          </div>
        </div>
      @endforeach
    </div>
  @endsection

