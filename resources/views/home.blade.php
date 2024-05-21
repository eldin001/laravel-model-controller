@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Movies</h1>
    <div class="container">
  <div class="row">
    @foreach ($movies as $movie)
      <div class="col-6 col-md-4 col-lg-2">  
        <div class="cards">
          <img src="{{ $movie->image }}" alt="{{ $movie->title }}"> 
        </div>
      </div>
    @endforeach
  </div>
</div>

</main>
@endsection
