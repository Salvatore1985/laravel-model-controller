@extends('layouts.base')


@section('main-content')
@foreach ($movies as $movie)
    

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h1 class="card-title">Titolo Film: {{$movie['title']}}</h1>
      <h2 class="card-subtitle mb-2 text-muted">Titolo originale : {{$movie['original_title']}}</h2>
      <h3 class="card-text">data: {{$movie['date']}}</h3>

    </div>
  </div>
@endforeach
{{-- <h1 class="text-danger">
    @dump($movies)
</h1> --}}
@endsection