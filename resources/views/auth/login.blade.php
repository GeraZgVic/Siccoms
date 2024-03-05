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

    <title>Siccoms | Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/css.js'])

    @stack('styles')
</head>

<body class="antialiased selection:bg-sky-400 selection:text-sky-900">

    <main class="min-h-screen flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 container mx-auto px-8">
            <div class="flex items-center justify-center">

                <form 
                    action="{{route('login')}}"
                    method="POST"
                    class="w-full max-w-sm bg-white border border-gray-300 p-6 rounded-md shadow-lg">
                    @csrf

                    @if (session('mensaje'))
                        <div role="alert" class="mb-4">
                            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                Error
                            </div>
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                <p>{{ session('mensaje') }}</p>
                            </div>
                        </div>
                    @endif

                    <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-700 mb-6">Iniciar Sesión</h2>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email </label>
                        <input 
                            id="email" 
                            name="email"
                            type="text" 
                            placeholder="Escribe tu email"
                            class="mt-1 block w-full rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm p-3 border @error('email') border-red-500 @enderror"
                            value="{{old('email')}}"
                        />
                        @error('email')
                        <div class="my-2 p-3 rounded-lg shadow-md text-center font-bold bg-red-500">
                            <p class="text-white">{{ $message }}</p>
                        </div>
                         @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                        <input 
                            id="password" 
                            name="password"
                            type="password" 
                            placeholder="Escribe tu password"
                            class=" mt-1 block w-full rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm p-3 border @error('password') border-red-500 @enderror"
                           
                        />
                        @error('password')
                            <div class="my-2 p-3 rounded-lg shadow-md text-center font-bold bg-red-500">
                                <p class="text-white">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button type="submit"
                            class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Iniciar sesión
                        </button>
                    </div>
                </form>
            </div>
            <img src="{{ asset('svg/sign_up.svg') }}" alt="Siccoms" class="h-96 object-cover hidden md:block">
        </div>
    </main>

</body>

</html>
