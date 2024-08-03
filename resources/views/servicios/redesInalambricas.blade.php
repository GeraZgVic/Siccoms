@extends('layout.servicio')

@section('titulo', 'Redes Inalámbricas')

@section('description')
    Servicios de instalación y configuración de redes inalámbricas
@endsection

@section('contenido')
    <section class="px-6 py-12">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold font-mulish-bold text-gray-800 mb-4">Redes Inalámbricas
            </h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">Ofrecemos soluciones completas para redes inalámbricas,
                incluyendo instalación, configuración y soporte de modems, tarjetas de red, puntos de acceso, routers,
                puentes Wi-Fi, repetidores y extensores.</p>
        </div>

        <div class="px-6 py-16 mx-auto bg-white">
            <div class="max-w-3xl mx-auto text-center">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="p-6 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Instalación y Configuración de Modems
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Realizamos la instalación y configuración de modems para garantizar una conexión estable y
                            rápida. Nos aseguramos de que todos los ajustes sean óptimos para tu red.
                        </p>
                    </div>
                    <div
                        class="p-6 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Tarjetas de Red y Routers</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Instalamos y configuramos tarjetas de red y routers, asegurando una conectividad sin
                            interrupciones y una red eficiente para todos tus dispositivos.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                    <div
                        class="p-6 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Puntos de Acceso y Puentes Wi-Fi</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Mejoramos el alcance y la calidad de tu red inalámbrica con la instalación de puntos de acceso y
                            puentes Wi-Fi, eliminando zonas muertas y mejorando la cobertura.
                        </p>
                    </div>
                    <div
                        class="p-6 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Repetidores y Extensores Wi-Fi</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Implementamos repetidores y extensores Wi-Fi para expandir el alcance de tu red, asegurando una
                            señal fuerte en todas las áreas de tu hogar o oficina.
                        </p>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#"
                        class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contacta
                        con Nosotros</a>
                </div>
            </div>
        </div>
    </section>

    <div class="px-6 py-16 mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-between bg-slate-900">
        <section class="text-center lg:text-left lg:w-1/2 lg:pr-12">
            <h2 class="text-2xl md:text-3xl pl-2 my-2 border-l-4 border-teal-400 text-gray-100 font-bold animate-top">
                Optimiza tu conectividad con nuestras soluciones de redes inalámbricas
            </h2>
            <p class="text-lg text-gray-100 my-4 animate-bottom">
                Como distribuidores oficiales, ofrecemos una gama completa de dispositivos para redes inalámbricas, junto
                con servicios de instalación y configuración profesional para garantizar el mejor rendimiento.
            </p>
        </section>
        <div class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0">
            <img src="{{ asset('img/hero-inalambrico.jpg') }}" alt="Redes Inalámbricas"
                class="w-full h-auto object-cover rounded-lg shadow-md animate-right animate-duration-[3000ms]">
        </div>
    </div>

    <section class="px-6 py-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Beneficios de Nuestras Soluciones de
                Redes Inalámbricas</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-gray-100 rounded-lg p-6 flex items-center shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <div class="bg-teal-500 rounded-full p-4">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 11a9 9 0 0 1 9 9" />
                            <path d="M4 4a16 16 0 0 1 16 16" />
                            <circle cx="5" cy="19" r="1" />
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Conectividad Mejorada</h3>
                        <p class="text-gray-700 leading-relaxed">Nuestros servicios aseguran una conectividad rápida y
                            estable, optimizando el rendimiento de tu red inalámbrica en todos los dispositivos.</p>
                    </div>
                </div>

                <div
                    class="bg-gray-100 rounded-lg p-6 flex items-center shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <div class="bg-teal-500 rounded-full p-4">
                        <svg class="h-8 w-8 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M5 12l5 5l10 -10" />
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Expansión de Cobertura</h3>
                        <p class="text-gray-700 leading-relaxed">Con nuestros repetidores y extensores, puedes ampliar la
                            cobertura de tu red para que cada rincón de tu espacio esté bien conectado.</p>
                    </div>
                </div>
            </div>

            <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center my-6">
                Marcas de Confianza
            </h3>
            {{-- Cards --}}
            <div class="container mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <x-modal-tplink />
                    <!-- Card 2 -->   
                    <x-modal-hikvision />
                    <!-- Card 3 -->
                    <x-modal-ubiquiti />
                    {{-- Card 4 --}}
                    <x-modal-ruijie />
                </div>
            </div>

        </div>
    </section>

    <section class="px-6 py-16 bg-gray-200">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Preguntas Frecuentes</h2>

            <div class="space-y-6">
                <!-- Pregunta 1 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Qué dispositivos ofrecen para redes inalámbricas?</h3>
                    <p class="text-gray-700 leading-relaxed">Ofrecemos modems, tarjetas de red, puntos de acceso, routers,
                        puentes Wi-Fi, repetidores y extensores Wi-Fi.</p>
                </div>

                <!-- Pregunta 2 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Cuál es la diferencia entre un punto de acceso y un
                        repetidor Wi-Fi?</h3>
                    <p class="text-gray-700 leading-relaxed">Un punto de acceso crea una nueva red inalámbrica, extendiendo
                        la cobertura en un área determinada, mientras que un repetidor amplifica una red existente para
                        extender su alcance.</p>
                </div>

                <!-- Pregunta 3 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Cómo sé si necesito un puente Wi-Fi?</h3>
                    <p class="text-gray-700 leading-relaxed">Un puente Wi-Fi es útil si necesitas conectar dos redes
                        separadas sin cables. Esto es ideal para edificios grandes o instalaciones donde el cableado es
                        impráctico.</p>
                </div>

                <!-- Pregunta 4 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Qué incluye la instalación de redes inalámbricas?</h3>
                    <p class="text-gray-700 leading-relaxed">La instalación incluye la configuración de todos los
                        dispositivos inalámbricos, la optimización del rendimiento de la red y la garantía de que todos los
                        dispositivos estén conectados y funcionando correctamente.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
