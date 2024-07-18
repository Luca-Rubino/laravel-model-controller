<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    <title>@yield('page-title', 'Home')</title>
</head>
<body>
    <h1>movie list</h1>
    <section>
    @foreach($movies as $movie)
        <article>
            <p>{{ $movie['title']}}</p>
            <p>{{ $movie['original_title']}}</p>
            <p>{{ $movie['nationality']}}</p>
            <p>{{ $movie['date']}}</p>
            <p>{{ $movie['vote']}}</p>
        </article>    
    @endforeach
    </section>
</body>
</html>