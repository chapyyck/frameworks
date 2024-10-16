<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<x-header /> <!-- компонент header -->

<main>
    @yield('content') <!-- Вставить 'content' -->
</main>

<footer>
    <p>© {{ date('Y') }} Ceaplinschi Roman, Frameworks</p>
</footer>

</body>
</html>
