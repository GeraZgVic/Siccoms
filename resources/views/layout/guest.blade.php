<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Siccoms ofrece servicios integrales en consultoría, comercialización y tecnología con más de 10 años de experiencia. ¡Contáctanos para soluciones estratégicas y de calidad!">
    <!-- Etiquetas OG -->
    <meta property="og:title" content="SICCOMS | Servicios Integrales en Consultoría, Comercialización y Servicios">
    <meta property="og:description"
        content="Con más de 10 años de experiencia, Siccoms ofrece servicios integrales en consultoría, comercialización y tecnología.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    {{-- <meta property="og:image" content="URL_DE_LA_IMAGEN"> --}}
    <!-- Etiqueta Canonical -->
    <link rel="canonical" href="{{ Request::url() }}">

    {{-- Información de la empresa --}}
    <meta property="og:site_name"
        content="SISTEMAS INTEGRALES EN CONSULTORIA, COMERCIALIZACION Y SERVICIOS S.A DE C.V. (SICCOMS)">
    <meta property="og:locale" content="es_MX">
    <meta property="og:street-address" content="Av. del Sol #202 Fracc. Galaxia">
    <meta property="og:locality" content="Villahermosa">
    <meta property="og:region" content="Tabasco">
    <meta property="og:postal-code" content="86035">
    <meta property="og:country-name" content="México">
    <meta property="og:email" content="ventas@siccoms.com">
    <meta property="og:phone_number" content="993-268-0885">

    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

    <title>Siccoms |@yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/css.js'])
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
