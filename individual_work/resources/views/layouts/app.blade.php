<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

<header class="site-header">
    Электронный вариант ведения домашних заданий в школе
</header>

<div class="container">
<main>
    @yield('content')
</main>

<footer>
    <p>© {{ date('Y') }} Ceaplinschi Roman, Frameworks</p>
</footer>
</div>

</body>
</html>
