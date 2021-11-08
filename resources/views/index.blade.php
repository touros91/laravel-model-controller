@extends('layout.base')

@section('pageContent')
<div class="container">
        @foreach ($movies as $movie)
        <div class="movie">
            <h3>Titolo: {{$movie["title"]}}</h3>
            <div>Titolo Originale: {{$movie["original_title"]}}</div>
            <div>Nazionalità: {{$movie["nationality"]}}</div>
            <div>Data di uscita: {{$movie["date"]}}</div>
            <div>Voto: {{$movie["vote"]}}</div>
        </div>
        @endforeach
</div>
@endsection