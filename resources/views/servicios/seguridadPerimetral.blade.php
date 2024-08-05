@extends('layout.servicio')

@section('titulo')
    Seguridad Perimetral
@endsection

@section('description')
    Descubre la innovación de SICCOMS para el Control de Acceso Perimetral: seguridad y comodidad incomparables en la
    gestión de accesos y restricciones.
@endsection

@section('contenido')
    <div class="flex h-screen items-center justify-center bg-gray-800">
        <div class="font-inter antialiased relative h-full w-full bg-cover bg-center bg-fixed"
            style="background-image: url('{{ asset('img/cercas-hero.jpeg') }}');">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                <div class="p-6 text-white">
                    <h1
                        class="pb-4 text-3xl md:text-4xl lg:text-6xl mb-2 md:m-0 text-white text-center font-mulish-bold animate-top">
                        Cercas Perimetrales</h1>
                    <p
                        class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-32 animate-bottom text-center">
                        Bienvenido
                        al portal de soluciones avanzadas de SICCOMS para el Control de Acceso, donde la tecnología e
                        innovación ofrecen la mejor seguridad y comodidad en la gestión de accesos y restricciones.</p>
                </div>
            </div>
        </div>
    </div>


    <section class="py-5 p-6 rounded-md">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="flex flex-col justify-center items-center gap-x-16 gap-y-5 xl:gap-28 lg:flex-row lg:justify-between max-lg:max-w-2xl mx-auto max-w-full">
                <div class="w-full order-2 md:order-1 lg:w-1/2 animate-right">
                    <img src="{{ asset('img/cercas-servicio.jpg') }}" alt="Cerca eléctrica"
                        class="w-full h-auto rounded-md" />
                </div>
                <div class="mt-8 md:order-1">
                    <h2 class="text-2xl font-mulish-bold text-gray-700 animate-left">¿Qué Ofrecemos?</h2>

                    <div class="mt-6 order-1 md:order-2">
                        <h3 class="text-xl font-semibold text-gray-700 animate-bottom">Cercos eléctricas</h3>
                        <p class="mt-2  text-gray-600 animate-top">Protege tu propiedad las 24 horas del día con nuestros cercos eléctricos
                            confiables y efectivos.</p>
                        <ul class="mt-2  text-gray-600 animate-top animate-top">
                            <li>Seguridad Inigualable</li>
                            <li>Personalización Total</li>
                            <li>Durabilidad y Resistencia</li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-xl font-semibold text-gray-700 animate-bottom">Sistemas de Tarjetas de Proximidad</h3>
                        <p class="mt-2  text-gray-600 animate-top">Acceso mediante tarjetas RFID.</p>
                        <ul class="mt-2  text-gray-600 animate-top">
                            <li>Fácil de usar</li>
                            <li>Rápida implementación</li>
                            <li>Alta seguridad con registros detallados</li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-xl font-semibold text-gray-700 animate-bottom">Control Biométrico</h3>
                        <p class="mt-2  text-gray-600 animate-top">Acceso mediante huellas dactilares, reconocimiento facial o escaneo del
                            iris.</p>
                        <ul class="mt-2  text-gray-600 animate-top">
                            <li>Alta precisión</li>
                            <li>Imposible de falsificar</li>
                            <li>Comodidad para los usuarios</li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-xl font-semibold text-gray-700 animate-bottom">Sistemas de Reconocimiento Facial</h3>
                        <p class="mt-2  text-gray-600 animate-top">Identificación a través de la tecnología de reconocimiento facial.</p>
                        <ul class="mt-2  text-gray-600 animate-top ">
                            <li>Acceso sin contacto</li>
                            <li>Rapidez</li>
                            <li>Mayor seguridad en comparación con métodos tradicionales</li>
                        </ul>
                    </div>
                </div>
    </section>

    <section class="bg-gray-800 text-white px-4">
        <div class="container mx-auto p-4 flex flex-col md:flex-row items-center justify-center">
            <!-- Text Content -->
            <div
                class="backdrop-blur-sm bg-gray-900/90 p-6 rounded-lg shadow-lg w-full md:w-1/2 md:-mr-10 z-10 animate-top">
                <h2 class="text-2xl font-mulish-bold mb-4 ">Beneficios Clave</h2>
                <p class="mb-4">
                    Nuestro sistema de Control de Acceso Perimetral ofrece protección óptima y seguridad contra intrusos en
                    cualquier instalación.</p>
                <div class="flex flex-wrap mb-4">
                    <div class="mr-4 mb-2">
                        <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-300 bg-white"></span>
                        Seguridad Mejorada
                    </div>
                    <div class="mr-4 mb-2">
                        <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-300 bg-white"></span>
                        Eficiencia Operativa

                    </div>
                    <div class="mr-4 mb-2">
                        <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-300 bg-white"></span>
                        Facilidad de Uso
                    </div>
                </div>
                <p>Utilizamos la tecnología más avanzada para garantizar la seguridad y eficiencia, adaptando nuestros
                    sistemas a las necesidades específicas de cada cliente, respaldados por años de experiencia en el sector
                    que nos avalan como líderes en soluciones de control de acceso, y ofrecemos soporte técnico
                    especializado para resolver cualquier inconveniente.</p>
            </div>

            <!-- Image Content -->
            <div class="w-full md:w-1/2 mt-4 md:mt-0 animate-left animate-duration-[3000ms]">
                <img src="{{ asset('img/content-perimetral2.jpg') }}" alt="Image" class="rounded-lg shadow-lg ">
            </div>
        </div>
    </section>
    <section class="my-8">
        <h2 class="text-2xl font-mulish-bold my-4 text-center text-gray-700">Instalación de Cerca Eléctrica</h2>
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 px-3 mx-auto container">


            <!-- Text Content -->
            <div class="w-full md:w-1/2 mt-4 md:mt-0 p-4 text-gray-600">
                <p class="mb-4">
                    Las cercas eléctricas proporcionan una solución robusta para la protección de grandes áreas. Su
                    instalación incluye el montaje de cables eléctricos que forman una barrera física y eléctrica efectiva
                    contra accesos no autorizados.
                </p>
                <p>
                    Estas cercas son duraderas y requieren un mantenimiento mínimo, haciéndolas ideales para proteger
                    propiedades residenciales y comerciales. Su diseño permite una fácil adaptación a diferentes
                    configuraciones y necesidades de seguridad.
                </p>
            </div>

            <!-- Video Content -->
            <div class="w-full md:w-1/2 mt-4 md:mt-0 animate-left animate-duration-[3000ms]">
                <div class="relative w-full h-64">
                    <video controls class="absolute inset-0 w-full h-full object-contain rounded-lg shadow-lg">
                        <source src="{{ asset('videos/instalacion-cerca.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el elemento de video.
                    </video>
                </div>
            </div>
        </div>
    </section>
@endsection
