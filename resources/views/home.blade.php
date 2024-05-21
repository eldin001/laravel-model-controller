@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Movies</h1>
    <div class="container">
        @foreach ($movies as $movie)
        <div class="cards">
            <img src="{{$movie->image}}" alt="">
        </div> 
        @endforeach
    </div>
</main>
@endsection
