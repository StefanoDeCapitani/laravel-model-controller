<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="cards-grid">
                @foreach ($movies as $movie)
                    @include("movies.card")
                @endforeach
            </div>
        </div>
    </body>   
</html>