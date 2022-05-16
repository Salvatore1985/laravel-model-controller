@extends('layouts.base')


@section('main-content')
<div class="container-fluid">
  <div class="row justify-content-center p-5" >
    @foreach ($movies as $movie)
    <div class="col-3" >
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem; min-height:12rem">
          <div class="card-header">Titolo Film: {{$movie['title']}}</div>
          <div class="card-body">
            <h5 class="card-title">Titolo originale : {{$movie['original_title']}}</h5>
            <p class="card-text">data: {{$movie['date']}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>
@endsection