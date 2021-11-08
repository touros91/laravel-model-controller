<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    <h1>I migliori film da vedere</h1>
    @foreach ($movies as $movie)
        <ul>
            <li>Titolo: {{$movie["title"]}}</li>
            <li>Titolo Originale: {{$movie["original_title"]}}</li>
            <li>Nazionalità: {{$movie["nationality"]}}</li>
            <li>Data di uscita: {{$movie["date"]}}</li>
            <li>Voto: {{$movie["vote"]}}</li>
        </ul>
    @endforeach
</ul>
</body>
</html>