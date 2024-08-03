@extends('layout.servicio')

@section('titulo', 'Cableado Estructurado')

@section('description')
    Proveemos soluciones de cableado estructurado de alta calidad, asegurando una conectividad confiable y eficiente para tu
    empresa.
@endsection

@section('contenido')
    <div class="bg-slate-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1
                    class="mt-2 text-3xl leading-8 font-mulish-bold tracking-tight text-gray-100 sm:text-4xl hover:text-neon-teal">
                    Cableado Estructurado de Redes
                </h1>
                <p class="mt-4 max-w-2xl text-xl text-gray-200 lg:mx-auto hover:text-neon-teal">
                    Proveemos soluciones de cableado estructurado de alta calidad, asegurando una conectividad confiable y
                    eficiente para tu empresa.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div
                        class="bg-slate-800 shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 duration-300">
                        <div class="flex items-center justify-center mb-4 h-auto overflow-hidden">
                            <img class="h-full w-auto object-cover" src="{{ asset('img/diseño_redes.jpg') }}"
                                alt="Imagen de Diseño">
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-100 hover:text-neon-teal">Diseño de Redes</h3>
                        <p class="mt-2 text-base hover:text-neon-teal text-gray-200 hover:text-neon-teal">
                            Diseño y planificación de redes para maximizar el rendimiento y la eficiencia.
                        </p>
                    </div>

                    <div
                        class="bg-slate-800 shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 duration-300">
                        <div class="flex items-center justify-center mb-4 h-auto overflow-hidden">
                            <img class="h-auto w-auto object-cover" src="{{ asset('img/instalacion_cableado.jpg') }}"
                                alt="Imagen de Instalación">
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-100 hover:text-neon-teal">Instalación de Cableado
                        </h3>
                        <p class="mt-2 text-base hover:text-neon-teal text-gray-200 hover:text-neon-teal">
                            Instalación profesional de cables estructurados, asegurando una conectividad óptima.
                        </p>
                    </div>

                    <div
                        class="bg-slate-800 shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 duration-300">
                        <div class="flex items-center justify-center mb-4 h-auto overflow-hidden">
                            <img class="h-auto w-auto object-cover" src="{{ asset('img/mantenimiento_redes.jpg') }}"
                                alt="Imagen de Mantenimiento">
                        </div>
                        <h3 class="text-lg leading-6 font-medium text-gray-100 hover:text-neon-teal">Mantenimiento y Soporte
                        </h3>
                        <p class="mt-2 text-base hover:text-neon-teal text-gray-200 hover:text-neon-teal">
                            Servicios de mantenimiento y soporte para asegurar el funcionamiento continuo de tu red.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-slate-800 text-white py-12 rounded-lg shadow-lg ">
                <h3 class="text-2xl font-bold text-center mb-6 hover:text-neon-teal">Servicios Detallados de Cableado
                    Estructurado</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 px-6">
                    <div>
                        <h4 class="text-lg font-medium hover:text-neon-teal">Cableado Estructurado</h4>
                        <p class="mt-2 text-base hover:text-neon-teal">
                            Instalación de sistemas de cableado estructurado para soportar múltiples usos como datos, voz,
                            CCTV, y más.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-medium hover:text-neon-teal">Distribución de Cableado Horizontal</h4>
                        <p class="mt-2 text-base hover:text-neon-teal">
                            Soluciones de cableado horizontal tanto para interiores como exteriores, optimizadas para el
                            rendimiento y la seguridad.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-medium hover:text-neon-teal">Distribución de Cableado Vertical</h4>
                        <p class="mt-2 text-base hover:text-neon-teal">
                            Implementación de cableado vertical para edificios, garantizando una distribución eficiente y
                            ordenada.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-medium hover:text-neon-teal">Tendido Aéreo Exterior</h4>
                        <p class="mt-2 text-base hover:text-neon-teal">
                            Instalación de cables aéreos en exteriores, adecuados para entornos difíciles y de gran
                            extensión.
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-medium hover:text-neon-teal">Canalización Subterránea</h4>
                        <p class="mt-2 text-base hover:text-neon-teal">
                            Servicios de canalización subterránea para proteger el cableado de factores ambientales y
                            asegurar la durabilidad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="px-6 py-12 bg-gray-100">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Marcas de Cables para Cableado Estructurado</h2>
            <p class="text-lg md:text-xl text-gray-700 mb-12">
                Descubre algunas de las principales marcas de cables para cableado estructurado que ofrecemos. Cada marca se
                distingue por su calidad y fiabilidad en la transmisión de datos.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Panduit -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('img/cableado_panduit.webp')}}" alt="Panduit" class="w-full h-72 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Panduit</h3>
                        <p class="text-gray-700">
                            Panduit es conocido por su innovación y calidad en soluciones de cableado estructurado y
                            sistemas de
                            administración de cables.
                        </p>
                    </div>
                </div>

                <!-- LINKEDPRO BY EPCOM -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('img/cableado_epcom.png')}}" alt="LINKEDPRO BY EPCOM" class="w-full h-72 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">LINKEDPRO BY EPCOM</h3>
                        <p class="text-gray-700">
                            LINKEDPRO BY EPCOM ofrece soluciones de cableado de alta calidad con un enfoque en la fiabilidad
                            y
                            eficiencia en redes.
                        </p>
                    </div>
                </div>

                <!-- SIEMON -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('img/cableado_siemon.webp')}}" alt="SIEMON" class="w-full h-72 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">SIEMON</h3>
                        <p class="text-gray-700">
                            SIEMON es un líder en soluciones de cableado estructurado con productos que garantizan un alto
                            rendimiento
                            y durabilidad.
                        </p>
                    </div>
                </div>

                <!-- Agregar más marcas según sea necesario -->
            </div>
        </div>
    </section>



    <div class="container mx-auto p-4">
        <h3 class="text-2xl font-mulish-bold text-center my-8">Instalaciones</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Imagen Horizontal 1 -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/servicios/cableado_horizontal_1.jpg') }}" alt="Cableado Horizontal 1"
                    class="object-cover w-full h-80 md:h-64 lg:h-96 rounded-md">
            </div>

            <!-- Imagen Horizontal 2 -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/servicios/cableado_horizontal_2.jpg') }}" alt="Cableado Horizontal 2"
                    class="object-cover w-full h-80 md:h-64 lg:h-96 rounded-md">
            </div>

            <!-- Imagen Vertical 1 -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/servicios/cableado_vertical_1.jpg') }}" alt="Cableado Vertical 1"
                    class="object-cover w-full h-80 md:h-64 lg:h-96 rounded-md">
            </div>

            <!-- Imagen Vertical 2 -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/servicios/cableado_vertical_2.jpeg') }}" alt="Cableado Vertical 2"
                    class="object-cover w-full h-80 md:h-64 lg:h-96 rounded-md">
            </div>
        </div>
    </div>
@endsection
