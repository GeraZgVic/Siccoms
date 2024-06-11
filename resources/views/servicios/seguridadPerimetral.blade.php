@extends('layout.servicio')

@section('titulo')
Servicio de cercas electricas
@endsection

@section('description')
Servicio de Cercas electricas
@endsection

@section('contenido')
<div class="flex h-screen items-center justify-center bg-gray-800">
    <div class="relative h-full w-full bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('img/hero-perimetral.jpg') }}');">
      <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm">
        <div class="p-6 text-white">
            <h1 class="pb-4 text-3xl md:text-4xl lg:text-6xl mb-2 md:m-0 font-bold text-white text-center font-mulish-bold"> Control de Acceso
                Perimetral</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Bienvenido a nuestro portal de
                    soluciones avanzadas para el Control de Acceso</p>
        </div>
      </div>
    </div>
  </div>
  

<section class="py-5 p-6 rounded-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col justify-center items-center gap-x-16 gap-y-5 xl:gap-28 lg:flex-row lg:justify-between max-lg:max-w-2xl mx-auto max-w-full">
            <div class="w-full lg:w-1/2 animate-right">
                <img src="{{asset('img/camera-faq.webp')}}" alt="Image Description" class="w-full h-auto rounded-md" />
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold text-blue-600">¿Qué Ofrecemos?</h2>

                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-800">Molinetes de Acceso</h3>
                    <p class="mt-2">Dispositivos robustos para regular la entrada y salida de personas.</p>
                    <ul class="mt-2 list-disc list-inside">
                        <li>Seguridad reforzada</li>
                        <li>Registro preciso de entradas</li>
                        <li>Prevención de acceso no autorizado</li>
                    </ul>
                </div>

                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-800">Sistemas de Tarjetas de Proximidad</h3>
                    <p class="mt-2">Acceso mediante tarjetas RFID.</p>
                    <ul class="mt-2 list-disc list-inside">
                        <li>Fácil de usar</li>
                        <li>Rápida implementación</li>
                        <li>Alta seguridad con registros detallados</li>
                    </ul>
                </div>

                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-800">Control Biométrico</h3>
                    <p class="mt-2">Acceso mediante huellas dactilares, reconocimiento facial o escaneo del iris.</p>
                    <ul class="mt-2 list-disc list-inside">
                        <li>Alta precisión</li>
                        <li>Imposible de falsificar</li>
                        <li>Comodidad para los usuarios</li>
                    </ul>
                </div>

                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-800">Sistemas de Reconocimiento Facial</h3>
                    <p class="mt-2">Identificación a través de la tecnología de reconocimiento facial.</p>
                    <ul class="mt-2 list-disc list-inside">
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
        <div class="backdrop-blur-sm bg-gray-900/90 p-6 rounded-lg shadow-lg w-full md:w-1/2 md:-mr-10 z-10">
            <h2 class="text-2xl font-mulish-bold mb-4">Beneficios Clave</h2>
            <p class="mb-4">
                Nuestro sistema de Control de Acceso Perimetral ofrece protección óptima y seguridad contra intrusos en
                cualquier instalación.</p>
            <div class="flex flex-wrap mb-4">
                <div class="mr-4 mb-2">
                    <input type="radio" id="best-team" name="option" class="hidden">
                    <label for="best-team" class="flex items-center cursor-pointer">
                        <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-300 bg-white"></span>
                        Seguridad Mejorada
                    </label>
                </div>
                <div class="mr-4 mb-2">
                    <input type="radio" id="best-quality" name="option" class="hidden">
                    <label for="best-quality" class="flex items-center cursor-pointer">
                        <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-300 bg-white"></span>
                        Eficiencia Operativa
                    </label>
                </div>
                <div class="mr-4 mb-2">
                    <input type="radio" id="best-experience" name="option" class="hidden">
                    <label for="best-experience" class="flex items-center cursor-pointer">
                        <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-300 bg-white"></span>
                        Facilidad de Uso
                    </label>
                </div>
            </div>
            <p>Utilizamos la tecnología más avanzada para garantizar la seguridad y eficiencia, adaptando nuestros
                sistemas a las necesidades específicas de cada cliente, respaldados por años de experiencia en el sector
                que nos avalan como líderes en soluciones de control de acceso, y ofrecemos soporte técnico
                especializado para resolver cualquier inconveniente.</p>
        </div>

        <!-- Image Content -->
        <div class="w-full md:w-1/2 mt-4 md:mt-0">
            <img src="https://farm5.staticflickr.com/4466/36906009863_625ce02e9f.jpg" alt="Image"
                class="rounded-lg shadow-lg">
        </div>
    </div>

</section>





@endsection