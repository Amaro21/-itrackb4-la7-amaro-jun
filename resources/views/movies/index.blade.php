<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Movie List</title>
</head>
<body>
    <h1>My Movie List</h1>
    <p>Prepaired by: Jun Amaro</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
        </tr>

        @foreach ($movies as $movies)
        <tr>
            <td>{{ $movies['title'] }}</td>
            <td>{{ $movies['genre'] }}</td>
            <td>{{ $movies['rating'] }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
