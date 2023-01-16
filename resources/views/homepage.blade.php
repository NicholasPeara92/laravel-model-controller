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
        <div class="container">
            <h1>FILM</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3 card m-3 p-3">
                        <h3 class="text-center">{{ $movie->title }}</h3>
                        <div class="card-body">
                            <div>Nazionalità: {{ $movie->nationality }}</div>
                            <div>Data: {{ $movie->date }}</div>
                            <div>Voto: {{ $movie->vote }}</div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </main>

</body>

</html>
