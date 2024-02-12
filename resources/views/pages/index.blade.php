@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<div class="container d-flex flex-wrap justify-content-center">
  @foreach ($movies as $movie)
    <div class="card col-3 m-3">
      <h4>{{$movie->title}}</h4>
      <h5>{{$movie->original_title}}</h5>
      <div class="info d-flex my-3 justify-content-around">
        <div class="nationality">
          {{$movie->nationality}}
        </div>
        <div class="date">
          {{$movie->date}}
        </div>
      </div>
      <div class="vote">
        {{$movie->vote}}
      </div>
    </div>
  @endforeach
</div>
@endsection

