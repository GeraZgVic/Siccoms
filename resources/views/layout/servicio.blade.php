<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="@yield('description')">
    <!-- Etiquetas OG -->
    <meta property="og:title" content="Servicio de GPS | Servicios Integrales en Consultoría, Comercialización y Servicios">
    <meta property="og:description"
        content="@yield('description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:image" content="{{asset('img/logo-siccoms.png')}}">
    <!-- Etiqueta Canonical -->
    <link rel="canonical" href="{{ Request::url() }}">

    {{-- Información de la empresa --}}
    <meta property="og:site_name"
        content="SISTEMAS INTEGRALES EN CONSULTORIA, COMERCIALIZACION Y SERVICIOS S.A DE C.V. (SICCOMS)">
    <meta property="og:locale" content="es_MX">
    <meta property="og:street-address" content="Centro">
    <meta property="og:locality" content="Villahermosa">
    <meta property="og:region" content="Tabasco">
    <meta property="og:postal-code" content="86035">
    <meta property="og:country-name" content="México">
    <meta property="og:email" content="ventas@siccoms.com">
    <meta property="og:phone_number" content="993-268-0885">

    <link rel="icon" type="ico" href="{{ asset('favicon.ico') }}">

    <title>@yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/css.js'])




    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css"
    />

    @stack('styles')
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>
    <!-- Datos estructurados JSON-LD -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Siccoms",
          "description": "Siccoms ofrece servicios integrales en consultoría, comercialización y tecnología con más de 10 años de experiencia. ¡Contáctanos para soluciones estratégicas y de calidad!",
          "url": "https://www.siccoms.com",
          "logo": "https://www.siccoms.com/img/lg-siccoms.png",
          "telephone": "993-268-0885",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Villhermosa",
            "postalCode": "86090",
            "addressCountry": "MX"
          },
          "sameAs": [
            "https://www.facebook.com/p/Siccoms-Oficial-61554231655085/"
          ]
        }
    </script>
</head>

<body class="antialiased selection:bg-sky-400 selection:text-sky-900">


    @if (Request::is('/'))
        <livewire:header />
    @else
        {{-- Todas las paginas excepto la principal --}}
        <livewire:navegation-menu-guest />
    @endif

    <main>
        @yield('contenido')
    </main>

    <livewire:footer />

    {{-- Btn WhatsApp --}}
    <div class="fixed bottom-4 ml-4 z-10"> <!-- Ajusta la posición del icono según tu preferencia -->
        <a href="https://wa.me/9932910217" target="_blank" rel="noopener noreferrer" aria-label="Enviar WhatsApp"
            title="Enviar mensaje de WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 p-2 text-white rounded-full bg-green-500"
                fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
            </svg>
        </a>
    </div>

    {{-- Btn Arrow Up --}}
    <div x-data="{
        showScrollButton: false,
        handleTop: function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }" x-init="window.addEventListener('scroll', function() {
        showScrollButton = window.scrollY > window.innerHeight / 0.30;
    })">
        <button x-show="showScrollButton" @click="handleTop"
            class="fixed bottom-4 right-5 bg-blue-800 p-2 rounded-full shadow-lg text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
            </svg>
        </button>
    </div>

    @stack('script')

</body>

</html>
