<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <a href="{{ route('abouts.about') }}">go back to about</a>
    <hr>
</header>
    <main>
        @if (Route::is('contact.*'))
            <a href="{{ route('posts.index') }}">go back to contact</a>
        @elseif (Route::is('posts.*'))
            <a href="{{ route('contact.index') }}">go back to post</a>
        @endif

        <hr>
        {{ $slot }}
    </main>
</body>
</html>