<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Filter</title>
</head>
<body>
    <h1>Filtered Movies</h1>
    <p>Prepared by: Jun B. Amaro</p>

    <h2>Filtered by: {{ ($genre) }}</h2>

    @foreach ($movies as $movies)
        {{ $movies['title'] }} ({{ $movies['year'] }}) - Genre: {{ $movies['genre'] }} | Rating: {{ $movies['rating'] }} <br>
    @endforeach

    <a href="{{ route('movies.index') }}">Back to Movie List</a>
</body>
</html>
