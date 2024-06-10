@extends('layout.servicio')

@section('titulo', 'Servicio de Barreras vehiculares')

@section('description')
¡Descubre la Eficiencia y Seguridad con Nuestro Servicio de Barreras Vehiculares!
@endsection

@section('contenido')
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-6 py-12">
    <div>
        <h1 class="pb-4 text-3xl md:text-4xl lg:text-6xl mb-2 md:m-0 font-bold text-gray-800"> Control de Acceso Vehicular</h1>
        <section>
            <h2 class="text-xl font-semibold mb-4 text-gray-700">En SICCOMS, ofrecemos soluciones de control de acceso
                vehicular para mejorar la seguridad y eficiencia en cualquier entorno.
            </h2>
            <ul class="list-none mb-6 space-y-3">
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                    <span class="text-gray-700 tracking-wide font-light">Máxima Seguridad</span>
                </li>
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                    <span class="text-gray-700 tracking-wide font-light">Tecnología Avanzada</span>
                </li>
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                    <span class="text-gray-700 tracking-wide font-light">Instalación y Mantenimiento Profesional</span>
                </li>
            </ul>
            <p class="text-xl font-semibold">
                Mejora la seguridad de tu espacio.
                <span class="text-blue-500 mx-1 font-extrabold text-xl relative inline-block stroke-current">
                    ¡Contáctanos!
                    <svg class="absolute -bottom-0.5 w-full max-h-1.5" viewBox="0 0 55 5"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0.652466 4.00002C15.8925 2.66668 48.0351 0.400018 54.6853 2.00002" stroke-width="2">
                        </path>
                    </svg>
                </span>
                para una consulta gratuita
            </p>
        </section>
    </div>

    <div>
        <img src="{{ asset('img/hero-vehicular1.jpg') }}" alt="Barrera vehicular" class="w-full h-auto rounded-lg">

    </div>
</div>

<section class="font-inter antialiased bg-cover bg-center bg-blend-overlay bg-fixed bg-black/50"
    style="background-image: url('/img/content-vehicular1.jpg')">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">¿Por Qué
            Elegir Nuestras Barreras Vehiculares?</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Nuestras barreras vehiculares
            ofrecen tecnología avanzada, seguridad robusta y fácil integración para satisfacer tus necesidades de
            control de acceso vehicular.</p>
    </div>
</section>

<section class="bg-white">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-600 sm:text-lg">
            <h2 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 ">
                Beneficios Clave</h2>
            <p class="mb-4">Nuestros servicios ofrecen una mayor seguridad, eficiencia en el control del tráfico,
                reducción de costos operativos y tranquilidad para ti y tu entorno.</p>
            <ul class="list-none mb-6 space-y-3">
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock mr-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1d4ed8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                        <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M12 12l0 2.5" />
                    </svg>
                    <span class="text-gray-700 tracking-wide font-light capitalize">Aumenta la Seguridad</span>
                </li>
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car mr-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1d4ed8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                    </svg>
                    <span class="text-gray-700 tracking-wide font-light">Mejora la Gestión del Tráfico</span>
                </li>
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-check mr-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1d4ed8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M20.925 13.163a8.998 8.998 0 0 0 -8.925 -10.163a9 9 0 0 0 0 18" />
                        <path d="M9 10h.01" />
                        <path d="M15 10h.01" />
                        <path d="M9.5 15c.658 .64 1.56 1 2.5 1s1.842 -.36 2.5 -1" />
                        <path d="M15 19l2 2l4 -4" />
                    </svg>
                    <span class="text-gray-700 tracking-wide font-light">Reducción de Costos Operativos</span>
                </li>
                <li class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing mr-2"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1d4ed8" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" />
                        <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" />
                    </svg>
                    <span class="text-gray-700 tracking-wide font-light">Confianza y Tranquilidad</span>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-2 gap-4 mt-8">
            <img class="w-full rounded-lg" src="{{asset('img/content-vehicular3.jpg')}}" alt="Barreras vehiculares">
            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/content-vehicular4.jpg')}}"
                alt="Barreras vehiculares">
        </div>
    </div>
</section>

<section class="flex flex-col md:flex-row items-center bg-gray-200 overflow-hidden mx-auto px-4">
    <div class="md:w-1/2">
        <img src="{{ asset('img/content-5.jpg') }}" alt="Forest image"
            class="w-full h-full object-cover rounded-lg shadow-md">
    </div>
    <div class="md:w-1/2 px-6 py-16">
        <h2 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 ">¿Quiénes Se Benefician de
            Nuestro Servicio?</h2>
        <h2 class="text-lg text-gray-700 mb-6">En
            <span class="font-bold text-gray-900">SICCOMS</span> Somos reconocidos como los mejores instaladores de barreras vehiculares, garantizando calidad y eficiencia en cada proyecto.
        </h2>
        <ul class="list-none mb-6 space-y-3">
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-skyscraper mr-2"
                    width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l18 0" />
                    <path d="M5 21v-14l8 -4v18" />
                    <path d="M19 21v-10l-6 -4" />
                    <path d="M9 9l0 .01" />
                    <path d="M9 12l0 .01" />
                    <path d="M9 15l0 .01" />
                    <path d="M9 18l0 .01" />
                </svg>
                <span class="text-gray-700 tracking-wide font-light">Empresas y Corporaciones</span>
            </li>
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-community mr-2"
                    width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />
                    <path d="M13 7l0 .01" />
                    <path d="M17 7l0 .01" />
                    <path d="M17 11l0 .01" />
                    <path d="M17 15l0 .01" />
                </svg>
                <span class="text-gray-700 tracking-wide font-light">Comunidades Residenciales</span>
            </li>
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-store mr-2"
                    width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l18 0" />
                    <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                    <path d="M5 21l0 -10.15" />
                    <path d="M19 21l0 -10.15" />
                    <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                </svg>
                <span class="text-gray-700 tracking-wide font-light">Centros Comerciales</span>
            </li>
            <li class="flex items-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-factory-2 mr-2"
                    width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#6f32be" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21h18" />
                    <path d="M5 21v-12l5 4v-4l5 4h4" />
                    <path
                        d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />
                    <path d="M9 17h1" />
                    <path d="M14 17h1" />
                </svg>
                <span class="text-gray-700 tracking-wide font-light">Instalaciones Industriales</span>
            </li>
        </ul>
    </div>
</section>
@endsection