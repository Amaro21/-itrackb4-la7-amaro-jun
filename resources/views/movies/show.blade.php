<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie['title'] }} Details</title>
</head>
<body>
    <h1>Movie Details</h1>
    <p>Prepared by: Jun B. Amaro</p>

    <h2>Title: {{ $movie['title'] }}</h2>
    <p>Genre: {{ $movie['genre'] }}</p>
    <p>Rating: {{ $movie['rating'] }}</p>
    <p>Year: {{ $movie['year'] }}</p>

    <a href="{{ route('movies.index') }}">Back to Movie List</a>
</body>
</html>
