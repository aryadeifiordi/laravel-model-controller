<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Movie List</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body>
    <h1>Movie List</h1>
    <div class="movie-list">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie->title }}</h2>
                <p>Original Title: {{ $movie->original_title }}</p>
                <p>Nationality: {{ $movie->nationality }}</p>
                <p>Date: {{ $movie->date }}</p>
                <p>Vote: {{ $movie->vote }}</p>
            </div>
        @endforeach
    </div>

</body>

</html>
