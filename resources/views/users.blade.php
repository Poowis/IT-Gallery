@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h3>Admin view</h3>
    </div>
  @endsection

  @section('content')
    <div class="container content">
      @foreach ($users as $user)
        <div class="row cards">
          <div class="col-lg-6 col-xl-8">
              <h5>{{$user->name}}
                @if ($user->approved)
                   APPROVED
                @endif
              </h5>
              <p>Email : {{$user->email}}</p>
              <p>Created at : {{$user->created_at}}</p>
              @if ($user->approved)
                <p>Approved by : {{$user->approved_by}}</p>
              @endif
          </div>
        </div>
      @endforeach
    </div>
  @endsection
