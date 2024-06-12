@extends('layout.servicio')

@section('titulo')
Servicio de desarrollo web y sistemas
@endsection

@section('description')
Servicio de desarrollo personalizado
@endsection

@section('contenido')
<section class="flex flex-col md:flex-row items-center px-6 h-[100vh]">
    <div class="md:w-1/2">
        <div
            class="capitalize text-xs font-bold text-gray-500 mb-2 bg-gray-300 p-1 inline-block rounded-md animate-right">
            ¡Bienvenidos a SICCOMS!</div>
        {{-- <livewire:text-animation texto="Nuestra Área de Desarrollo" /> --}}
        <h1 class="pb-4 text-3xl md:text-4xl lg:text-6xl mb-2 md:m-0 font-mulish-bold text-gray-800 animate-top">Área de
            Desarrollo</h1>

        <h2 class="text-lg text-gray-700 mb-6 animate-bottom animate-duration-[2000ms]">
            <span class="font-mulish-bold text-gray-900">¡Hola mundo!</span> ¿Estás buscando un equipo de expertos en
            desarrollo web y desarrollo de sistemas que pueda llevar tu proyecto al siguiente nivel? ¡No busques
            más!
        </h2>
    </div>
    <div class="md:w-1/2">
        <img src="{{ asset('img/hero-desarrollo2.jpg') }}" alt="Desarrollo"
            class="w-full h-full object-cover rounded-lg shadow-md animate-left animate-duration-[2000ms]">
    </div>
</section>


<div
    class="px-6 pt-16 md:py-14 mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-between bg-black">
    <section>
        <h2 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-mulish-bold border-teal-400 text-white animate-top">
            Disponemos
            de las herramientas esenciales para impulsar
            tu éxito</h2>
        <p class="text-2xl text-gray-400 animate-bottom">Nuestras poderosas y revolucionarias soluciones están
            específicamente diseñadas para potenciar el desarrollo web y optimizar sistemas, garantizando que tu
            negocio prospere en el entorno digital.</p>
    </section>
    <div>
        <img src="{{ asset('img/content-desarrollo1.jpg') }}" alt="Desarrollo Web"
            class="object-center object-cover animate-left animate-duration-[5000ms]">
    </div>
</div>


<div class="container py-12 mx-auto">
    <!-- Desarrollo Web -->
    <div class="grid md:grid-cols-2 mb-12">
        <div class="w-full p-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4 animate-bottom">Desarrollo Web</h3>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 9.75h4.5m-4.5 3h4.5m-9 7.5h14.5a2 2 0 002-2V6.5a2 2 0 00-2-2H4.25a2 2 0 00-2 2v11.5a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">Diseño Personalizado</p>
                        </div>
                        <p class="animate-right">Creamos sitios web únicos y memorables que reflejan tu marca y atraen a
                            tu audiencia.</p>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8.25h18m-18 7.5h18M9.75 3v18m4.5-18v18"></path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">Responsive Design</p>
                        </div>
                        <p class="animate-right">Aseguramos un sitio web perfecto en todos los dispositivos, fácil de
                            navegar.
                        </p>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.25 7.5h13.5m-13.5 4.5h13.5M5.25 16.5h13.5"></path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">SEO Optimizado</p>
                        </div>
                        <p class="animate-right">Mejoramos tu visibilidad en Google con SEO para aumentar oportunidades
                            de negocio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-4">
            <img src="{{ asset('img/content-desarrollo2.jpg') }}" alt="Desarrollo Web"
                class="w-full h-full object-cover rounded-lg shadow-md animate-right animate-duration-[3000ms]">
        </div>
    </div>

    <!-- Desarrollo de Sistemas -->
    <div class="grid md:grid-cols-2 mb-12">
        <div class="w-full order-2 md:order-1 p-4">
            <img src="{{ asset('img/content-desarrollo3.jpg')}}" alt="Desarrollo de Sistemas"
                class="w-full h-full object-cover rounded-lg shadow-md animate-left animate-duration-[3000ms]">
        </div>

        <div class="w-full order-1 md:order-2 p-4">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4 animate-bottom">Desarrollo de Sistemas</h3>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.25 6.75h7.5m-10.5 7.5h13.5m-13.5-7.5v7.5m0-7.5h13.5v7.5H4.25v7.5"></path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">Sistemas a Medida</p>
                        </div>
                        <p class="animate-left">Soluciones personalizadas para tu negocio, optimizando procesos y
                            aumentando la eficiencia.
                        </p>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 8.25h12m-12 3.75h12m-12 3.75h12"></path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">Integraciones</p>
                        </div>
                        <p class="animate-left">Integración de sistemas para simplificar y optimizar procesos.</p>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 15.75h12m-12-7.5h12M6 8.25h12"></path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">Automatización</p>
                        </div>
                        <p class="animate-left">Automatizamos tareas para liberar tiempo en actividades estratégicas.
                        </p>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.75 4.75h14.5v14.5H4.75V4.75z"></path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">Seguridad y Cumplimiento</p>
                        </div>
                        <p class="animate-left">Garantizamos la protección de tus datos con medidas avanzadas de
                            seguridad.</p>
                    </div>
                    <div>
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 3v18m9-9H3"></path>
                            </svg>
                            <p class="text-lg font-semibold animate-top">Soporte Continuo</p>
                        </div>
                        <p class="animate-left">Brindamos mantenimiento y soporte técnico para asegurar el
                            funcionamiento óptimo de tus sistemas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-200">
    <section class="text-center py-12">
        <h2 class="text-sm font-semibold text-blue-500 mb-2 animate-top">NUESTRAS INTEGRACIONES DE SOFTWARE</h2>
        <h3 class="text-3xl font-bold mb-4 animate-top">Todas las herramientas que necesitas para el diseño y la
            automatización</h3>
        <p class="text-lg text-gray-700 mb-8 animate-bottom">Nuestra plataforma ofrece las mejores herramientas para el
            diseño y la
            automatización de sistemas y sitios web.</p>

        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 sm:px-6 lg:px-8 animate-top animate-duration-[3000ms]">
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-laravel.webp')}}" alt="Laravel" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">Laravel</h4>
                <p class="text-gray-600">Framework</p>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-codeigniter.webp')}}" alt="CodeIgniter" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">CodeIgniter</h4>
                <p class="text-gray-600">Framework</p>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-yii2.webp')}}" alt="Yii2" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">Yii2</h4>
                <p class="text-gray-600">Framework</p>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-php.webp')}}" alt="PHP" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">PHP</h4>
                <p class="text-gray-600">Lenguaje de programación</p>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-tailwind.webp')}}" alt="Tailwind" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">Tailwind</h4>
                <p class="text-gray-600">Framework de CSS</p>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-html.webp')}}" alt="HTML" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">HTML</h4>
                <p class="text-gray-600">HyperText Markup Language</p>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-css.webp')}}" alt="CSS" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">CSS</h4>
                <p class="text-gray-600">Lenguaje de hoja de estilos</p>
            </div>
            <div
                class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                <img src="{{ asset('img/content-javascript.webp')}}" alt="JavaScript" class="h-12 mx-auto mb-4">
                <h4 class="font-semibold">JavaScript</h4>
                <p class="text-gray-600">Lenguaje de programación</p>
            </div>
        </div>
    </section>

</div>
@endsection