<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Siccoms |@yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/css.js'])
    @stack('styles')
</head>

<body class="antialiased selection:bg-sky-400 selection:text-sky-900">
    <livewire:header />
    <main class="">
        @yield('contenido')
    </main>
    <livewire:footer />
</body>

</html>
