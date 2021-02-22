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
        <a href="/" class="display-3 text-dark mr-3">laravel-seeds</a>
    </header>
    <nav class="p-3 d-flex justify-content-around bg-dark text-white text-uppercase font-bold">
        <a href="{{ route('companies.index') }}"
            class="{{ Route::is('companies.index') ? 'active' : '' }}">Companies</a>
        <a href="{{ route('employees.index') }}"
            class="{{ Route::is('employees.index') ? 'active' : '' }}">Employees</a>
        <a href="/">Departments</a>
    </nav>
    @yield('content')
</body>

</html>
