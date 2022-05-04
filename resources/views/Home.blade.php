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
        <figure class="image-block">
            <h1>{{ $movie->title }}</h1>
            <img src="https://images.pexels.com/photos/1680140/pexels-photo-1680140.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
            <figcaption>
                <h3>
                    More Info
                </h3>
                <p>Original Title: {{ $movie->original_title }}</p>
                <p>Nationality: {{ $movie->nationality }}</p>
                <p>Year: {{ $year = DateTime::createFromFormat('Y-m-d', $movie->date)->format('Y') }}</p>
                <p>Vote: {{ $movie->vote }}</p>
                <button>
                    More Info
                </button>
            </figcaption>
        </figure>
        @endforeach
    </div>
</body>
</html>
