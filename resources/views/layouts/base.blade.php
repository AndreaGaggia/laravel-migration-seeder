<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-migration-seeder</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header class="bg-light d-flex align-items-baseline border-bottom border-color-dark">
        <h1 class="display-3 text-dark mr-3">laravel-seeds</h1>
    </header>
    <nav class="p-3 d-flex justify-content-around bg-dark text-white text-uppercase font-bold">
        <a href="#">Companies</a>
        <a href="#">Employees</a>
        <a href="#">Departments</a>
    </nav>
    @yield('content')
</body>

</html>