<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Movies</title>
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h3>Tilte:</h3>
                <p>{{ $movie->title }}</p>
                @if ($movie->title !== $movie->original_title)
                    <h3>Original Title:</h3>
                    <p>{{ $movie->original_title }}</p>
                @endif
                <h3>Nationality:</h3>
                <p>{{ $movie->nationality }}</p>
                <h3>Year:</h3>
                <p>{{ $year = DateTime::createFromFormat('Y-m-d', $movie->date)->format('Y') }}</p>
                <h3>Vote:</h3>
                <p>{{ $movie->vote }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
