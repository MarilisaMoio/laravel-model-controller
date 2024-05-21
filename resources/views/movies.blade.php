<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="container d-flex flex-wrap justify-content-center gap-4">
            @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-header bg-success text-white">
                    {{ $movie['title'] }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $movie['original_title'] }}</li>
                    <li class="list-group-item">{{ $movie['nationality'] }}</li>
                    <li class="list-group-item">{{ $movie['date'] }}</li>
                    <li class="list-group-item">{{ $movie['vote'] }}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </main>

</body>

</html>
