@extends('layout.servicio')

@section('titulo')
    Servicio de Alarma
@endsection

@section('description')
    Descubre cómo nuestras soluciones de alarmas comerciales y residenciales pueden proteger tu propiedad y proporcionarte
    tranquilidad.
@endsection

@section('contenido')
    <div class="text-center px-8 pt-24 pb-16 mx-auto md:px-12 lg:px-32 max-w-7xl">
        <h1
            class="text-4xl font-semibold tracking-tighter text-gray-900 lg:text-5xl text-balance font-mulish-bold animate-fade-down animate-once">
            Alarmas comerciales y Residenciales
            <span class="text-gray-600">Sistemas de emergencia</span>
        </h1>
        <p
            class="w-1/2 mx-auto mt-4 text-base font-medium text-gray-500 text-balance animate-fade-down animate-duration-[2000ms] ">
            En Siccoms encontrarás grandes soluciones para proteger tu negocio y hogar.
        </p>

        <div class="relative h-full p-2 mt-24 overflow-hidden border rounded-3xl">
            <img src="{{ asset('img/hero-alarm.jpg') }}"
                class="object-cover h-full border shadow-2xl rounded-2xl animate-fade-down animate-duration-[3000ms]">
        </div>
    </div>
    <div class="bg-gradient-to-b from-black to-gray-800 py-24">
        <section class="px-8 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <h2
                class="animate-bottom text-3xl font-semibold tracking-tight py-2 lg:text-4xl text-center bg-gradient-to-r from-slate-200 to-neutral-400 bg-clip-text text-transparent font-mulish-bold">
                Algunos de nuestros servicios
            </h2>
            {{-- Grid --}}
            <dl class="grid grid-cols-1 gap-12 mt-12 sm:grid-cols-2 lg:grid-cols-3 text-center">
                <div class="flex flex-col items-center animate-right">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-small-off h-16 w-16"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 16h.01" />
                        <path d="M12 7v1" />
                        <path d="M3 3l18 18" />
                    </svg>
                    <dt class="mt-4 font-medium text-gray-300 text-lg font-mulish-normal">Barras de pánico</dt>
                    <dd class="mt-2 text-sm text-gray-300">
                        Las barras de pánico ofrecen una forma rápida y discreta de alertar a las autoridades en situaciones
                        de emergencia.
                    </dd>
                </div>
                <div class="flex flex-col items-center animate-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sos h-16 w-16"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 8h-3a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-3" />
                        <path d="M10 8h4v8h-4z" />
                        <path d="M17 16h3a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-2a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1h3" />
                    </svg>
                    <dt class="mt-4 font-medium text-gray-300 text-lg font-mulish-normal">Estaciones de emergencia</dt>
                    <dd class="mt-2 text-sm text-gray-300">
                        Instalamos estaciones de emergencia estratégicamente ubicadas para proporcionar acceso rápido a la
                        ayuda en caso de una emergencia.
                    </dd>
                </div>
                <div class="flex flex-col items-center animate-left">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alarm-average h-16 w-16"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 13a7 7 0 1 0 14 0a7 7 0 0 0 -14 0" />
                        <path d="M7 4l-2.75 2" />
                        <path d="M17 4l2.75 2" />
                        <path d="M8 13h1l2 3l2 -6l2 3h1" />
                    </svg>
                    <dt class="mt-4 font-medium text-gray-300 text-lg font-mulish-normal">Alarmas de zona</dt>
                    <dd class="mt-2 text-sm text-gray-300">
                        Nuestras alarmas de zona permiten una detección precisa de intrusos y una rápida respuesta ante
                        cualquier amenaza.
                    </dd>
                </div>
            </dl>
        </section>
    </div>

    <section class="my-8 px-8 md:px-12 lg:px-32 max-w-7xl mx-auto">
        <h2 class="text-3xl tracking-tighter text-gray-700 lg:text-4xl font-bold text-center mb-14">Nuestros Dispositivos de
            Emergencia</h2>
        <div class="grid gap-8 sm:grid-cols-2">

            <!-- Card 1: Pulsadores de emergencia -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden animate-right">
                <img src="{{ asset('img/pulsador_emergencia.webp') }}" alt="Pulsador de emergencia"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Pulsadores de emergencia</h3>
                    <p class="text-gray-600 leading-relaxed">Diseñados para activar alertas en situaciones críticas,
                        instalados en áreas de alta necesidad de respuesta rápida como hospitales y edificios comerciales.
                    </p>
                </div>
            </div>

            <!-- Card 2: Luces LED de emergencia -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden animate-left">
                <img src="{{ asset('img/led-emergencia.png') }}" alt="Luces LED de emergencia"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Luces LED de emergencia</h3>
                    <p class="text-gray-600 leading-relaxed">Proporcionan iluminación esencial durante cortes de energía,
                        mejorando la visibilidad y seguridad durante evacuaciones en diversos entornos.</p>
                </div>
            </div>

            <!-- Card 3: Barra de pánico -->
            <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden animate-right">
                <img src="{{ asset('img/barra-panico.png') }}" alt="Barra de pánico" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Barra de pánico</h3>
                    <p class="text-gray-600 leading-relaxed">Dispositivo de seguridad para salidas de emergencia, permite
                        abrir puertas rápidamente en situaciones de peligro.</p>
                </div>
            </div>
            <!-- Card 4: Estación de emergencia -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden animate-left">
                <img src="{{ asset('img/estacion-emergencia.png') }}" alt="Estación de emergencia"
                    class="w-full h-56 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Estación de emergencia</h3>
                    <p class="text-gray-600 leading-relaxed">Centro de control para manejar emergencias, equipada con
                        herramientas y equipos necesarios para una respuesta rápida.</p>
                </div>
            </div>
    </section>
    <div class="mt-8 text-center my-8">
        <a href="{{ route('contacto.index') }}"
            class="inline-block bg-slate-700 hover:bg-slate-900 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contacta
            con Nosotros</a>
    </div>
@endsection
