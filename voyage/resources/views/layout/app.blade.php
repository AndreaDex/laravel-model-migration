<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('viaggi')}}">Viaggi</a>
            <a href="">Contatti</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <span>Boolean Travel &copy;</span>
    </footer>
</body>

</html>