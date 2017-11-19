@extends('layouts.main')

  @section('header')
    <div class="container header">
      <h1>Admin menu</h1>
      <hr>
    </div>
  @endsection

  @section('content')
    <div class="container">
      <a href="/admin/upload">Upload album</a>
      <a href="/admin/register">Add admin</a>
    </div>
  @endsection
