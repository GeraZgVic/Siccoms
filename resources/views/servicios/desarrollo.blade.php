@extends('layout.servicio')

@section('titulo')
    Servicio de desarrollo web y sistemas
@endsection

@section('description')
    Potencia tu éxito digital con SICCOMS. Desarrollo web y sistemas personalizados para impulsar tu negocio hacia el futuro
    digital.
@endsection

@section('contenido')
    <section class="flex flex-col md:flex-row items-center px-6 h-[100vh]">
        <div class="md:w-1/2">
            <div
                class="mt-4 md:mt-0 capitalize text-xs font-bold text-gray-500 mb-2 bg-gray-300 p-1 inline-block rounded-md animate-right">
                ¡Bienvenidos a SICCOMS!</div>
            {{-- <livewire:text-animation texto="Nuestra Área de Desarrollo" /> --}}
            <h1 class="pb-4 text-3xl md:text-4xl lg:text-6xl mb-2 md:m-0 font-mulish-bold text-gray-800 animate-top">Área de
                Desarrollo</h1>

            <h2 class="text-lg text-gray-700 mb-6 animate-bottom animate-duration-[2000ms]">
                <span class="font-mulish-bold text-gray-900">¡Hola mundo!</span> ¿Estás buscando un equipo de expertos en
                desarrollo web y desarrollo de sistemas que pueda llevar tu proyecto al siguiente nivel? <br> ¡No busques
                más!
            </h2>
        </div>
        <div class="md:w-1/2">
            <img src="{{ asset('img/hero-desarrollo2.jpg') }}" alt="Desarrollo"
                class="w-full h-full object-cover rounded-lg shadow-md animate-top animate-duration-[2000ms]">
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
                class="object-center object-cover animate-right animate-duration-[5000ms]">
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
                <img src="{{ asset('img/content-desarrollo3.jpg') }}" alt="Desarrollo de Sistemas"
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
                    <img src="{{ asset('img/content-laravel.webp') }}" alt="Laravel" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">Laravel</h4>
                    <p class="text-gray-600">Framework</p>
                </div>
                <div
                    class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                    <img src="{{ asset('img/content-codeigniter.webp') }}" alt="CodeIgniter" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">CodeIgniter</h4>
                    <p class="text-gray-600">Framework</p>
                </div>
                <div
                    class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                    <img src="{{ asset('img/content-yii2.webp') }}" alt="Yii2" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">Yii2</h4>
                    <p class="text-gray-600">Framework</p>
                </div>
                <div
                    class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                    <img src="{{ asset('img/content-php.webp') }}" alt="PHP" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">PHP</h4>
                    <p class="text-gray-600">Lenguaje de programación</p>
                </div>
                <div
                    class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                    <img src="{{ asset('img/content-tailwind.webp') }}" alt="Tailwind" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">Tailwind</h4>
                    <p class="text-gray-600">Framework de CSS</p>
                </div>
                <div
                    class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                    <img src="{{ asset('img/content-html.webp') }}" alt="HTML" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">HTML</h4>
                    <p class="text-gray-600">HyperText Markup Language</p>
                </div>
                <div
                    class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                    <img src="{{ asset('img/content-css.webp') }}" alt="CSS" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">CSS</h4>
                    <p class="text-gray-600">Lenguaje de hoja de estilos</p>
                </div>
                <div
                    class="bg-white shadow-lg rounded-lg p-6 text-center transition duration-300 hover:scale-105 cursor-pointer">
                    <img src="{{ asset('img/content-javascript.webp') }}" alt="JavaScript" class="h-12 mx-auto mb-4">
                    <h4 class="font-semibold">JavaScript</h4>
                    <p class="text-gray-600">Lenguaje de programación</p>
                </div>
            </div>
        </section>

    </div>

    <div class="bg-slate-900">
        <!-- <section class="text-center py-12">
                        <h2 class="text-3xl text-white font-bold mb-4 animate-top">Algo de lo que hacemos</h2>
                        <p class="text-lg text-gray-400 mb-8 animate-bottom">Gestión Integral y Eficiente con Nuestros Módulos
                            Especializados</p>

                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 sm:px-6 lg:px-8 animate-top animate-duration-[3000ms]">
                    </section> -->
        <div class="max-w-screen-xl text-slate-50 mx-auto py-8 px-4 lg:py-16 lg:px-6">
            <div class="text-center mb-10">
                <h2 class="text-4xl text-white tracking-tight font-bold text-primary-800">Algo de lo que hacemos</h2>
                <p class="text-lg text-gray-400 mb-8 animate-bottom">Gestión Integral y Eficiente con Nuestros Módulos
                    Especializados</p>
            </div>

            <div class="">
                <!-- can help image -->

                <!-- end can help image -->

                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    {{-- Columna 1 --}}
                    <div class="col-span-2">
                        <div x-data="{ activeSlide: 1, slideCount: 4 }" class="overflow-hidden relative rounded-lg" x-init="setInterval(() => { activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1 }, 5000)">

                            <!-- Slider -->
                            <div class="whitespace-nowrap transition-transform duration-500 ease-in-out"
                                :style="'transform: translateX(-' + (activeSlide - 1) * 100.5 + '%)'">

                                <!-- Item 1 -->
                                <div class="inline-block w-full">
                                    <img class="object-contain object-center w-full h-96"
                                        src="{{ asset('img/sistemas/clientes.jpg') }}" alt="" />
                                </div>
                                <!-- Item 2 -->
                                <div class="inline-block w-full">
                                    <img class="object-contain object-center w-full h-96"
                                        src="{{ asset('img/sistemas/catoperadores.jpg') }}" alt="" />
                                </div>
                                <!-- Item 3 -->
                                <div class="inline-block w-full">
                                    <img class="object-contain object-center w-full h-96"
                                        src="{{ asset('img/sistemas/horarios.jpg') }}" alt="" />
                                </div>
                                <!-- Item 4 -->
                                <div class="inline-block w-full">
                                    <img class="object-contain object-center w-full h-96"
                                        src="{{ asset('img/sistemas/prefacturas.jpg') }}" alt="" />
                                </div>

                            </div>

                            <!-- Prev/Next Arrows -->
                            <div class="absolute inset-0 flex items-center justify-between px-2">
                                <button @click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slideCount"
                                    class="w-[30px] h-[30px] flex items-center bg-black/20 hover:bg-black/50 text-white p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                                    </svg>
                                </button>
                                <button @click="activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1"
                                    class="w-[30px] h-[30px] flex items-center bg-black/20 hover:bg-black/50 text-white p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>

                                </button>
                            </div>

                            <!-- Dots Navigation -->
                            <div class="absolute bottom-0 left-0 right-0 flex justify-center space-x-2 p-4">
                                <template x-for="slideIndex in slideCount" :key="slideIndex">
                                    <button @click="activeSlide = slideIndex" class="h-2 w-2 rounded-full"
                                        :class="{
                                            'bg-blue-500': activeSlide === slideIndex,
                                            'bg-white/50': activeSlide !==
                                                slideIndex
                                        }">
                                    </button>
                                </template>
                            </div>
                        </div>
                    </div>
                    {{-- Columna 2 --}}
                    <div class="col-span-2 grid grid-cols-1 md:grid-cols-2">
                        <div class="w-full mb-4 px-2">
                            <div
                                class="h-full py-4 px-6 border space-y-5 border-sky-500 border-t-0 border-l-0 rounded-br-xl">
                                <h3 class="text-2xl font-bold text-md ">Clientes</h3>
                                <p class="text-sm font-bold">Administra tu base de datos de clientes de manera eficiente.
                                </p>
                                <p class="text-sm">Nuestro módulo Clientes organiza la información en una tabla que incluye
                                    identificaciones únicas, RFC, nombres, correos electrónicos y teléfonos. Con
                                    funcionalidades
                                    adicionales como edición, visualización de detalles, generación de PDF y eliminación de
                                    registros, tendrás todo lo que necesitas para mantener tus datos actualizados y
                                    accesibles.
                                </p>
                            </div>
                        </div>
                        <div class="w-full mb-4 px-2 ">
                            <div
                                class="h-full py-4 px-6 border space-y-5 border-sky-500 border-t-0 border-l-0 rounded-br-xl">
                                <h3 class="text-2xl font-bold text-md ">Catálogos: Operadores - Catálogo</h3>
                                <p class="text-sm font-bold"> Organiza y gestiona la información de tu personal con
                                    facilidad.
                                </p>
                                <p class="text-sm">El submódulo Catálogo almacena todos los datos relevantes de tus
                                    operadores,
                                    incluyendo nombres, identificaciones únicas y estatus de disponibilidad. Implementa
                                    filtros
                                    para agilizar la búsqueda y mantén un control preciso con indicaciones de estatus en
                                    colores:</p>
                                <ul class="list-disc list-inside ml-4 text-lg">
                                    <li class="text-green-500">Verde: Disponible</li>
                                    <li class="text-red-500">Rojo: Vencida</li>
                                </ul>
                            </div>
                        </div>

                        <div class="w-full mb-4 px-2 ">
                            <div
                                class="h-full py-4 px-6 border space-y-5 border-sky-500 border-t-0 border-l-0 rounded-br-xl">
                                <h3 class="text-2xl font-bold text-md ">Catálogos: Operadores - Horarios</h3>
                                <p class="text-sm">Optimiza la gestión de los horarios laborales de tu personal.</p>
                                <p class="text-sm">El submódulo Horarios calcula automáticamente las horas de trabajo
                                    basándote
                                    en los descansos registrados y visualiza el estatus de cada registro con un sistema de
                                    semáforo:</p>
                                <ul class="list-disc list-inside ml-4 text-lg">
                                    <li class="text-green-500">Verde: Disponible Con Horas</li>
                                    <li class="text-orange-500">Naranja: Esperando Cierre</li>
                                    <li class="text-red-500">Rojo: Descansando</li>
                                    <li class="text-yellow-500">Amarillo: En Viaje</li>
                                </ul>
                            </div>
                        </div>

                        <div class="w-full mb-4 px-2 ">
                            <div
                                class="h-full py-4 px-6 border space-y-5 border-sky-500 border-t-0 border-l-0 rounded-br-xl">
                                <h3 class="text-2xl font-bold text-md ">Prefacturas</h3>
                                <p class="text-sm">Controla y supervisa tus prefacturas eficientemente.</p>
                                <p class="text-sm">Administra de manera efectiva con opciones de edición, autorización,
                                    pago y
                                    generación de reportes en PDF y Excel. Mantén un registro detallado y preciso de los
                                    importes y estatus, asegurando un manejo eficiente de permisos y pagos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
            <h2 class="mb-1 text-3xl font-extrabold leading-tight text-slate-50">Optimiza la gestión de tu sistema con
                nuestros módulos especializados.</h2>
            <p class="mb-12 text-lg text-gray-500">¡Facilita tu trabajo y mejora la eficiencia de tu organización!</p>
            <div class="w-full">
                <div class="flex flex-col w-full mb-10 sm:flex-row">
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative h-full ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Módulos y Secciones
                                        Personalizadas</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Gestión Personalizada de tus Módulos y Secciones</p>
                                <p class="mb-2 text-gray-600">Nuestro sistema ofrece una gama de módulos y secciones
                                    personalizables diseñados para adaptarse a las necesidades específicas de tu
                                    organización. A continuación, te presentamos una descripción de cada uno de ellos:</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <div class="relative h-full ml-0 md:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Proveedores</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Gestiona la información de tus proveedores con eficiencia.
                                </p>
                                <p class="mb-2 text-gray-600">Almacena y organiza datos en una tabla clara y funcional, con
                                    opciones para añadir nuevos registros, aplicar filtros de búsqueda y cambiar entre
                                    páginas. Mantén un control preciso y detallado de tus proveedores para facilitar tu
                                    gestión diaria.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full mb-5 sm:flex-row">
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative h-full ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Viajes: Tickets</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Crea y gestiona tickets de viaje de manera efectiva.</p>
                                <p class="mb-2 text-gray-600">Clasifica y organiza los tickets por estatus, edita, elimina
                                    y consulta detalles fácilmente. Además, implementa funciones avanzadas como la
                                    generación de reportes en PDF y Excel, así como filtros de búsqueda para una gestión
                                    óptima.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                        <div class="relative h-full ml-0 mr-0 sm:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-400 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-yellow-400 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Administrador de viajes</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-yellow-400 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">Gestiona de manera integral los viajes de tus unidades.</p>
                                <p class="mb-2 text-gray-600">El módulo administrador de viajes permite asignar folios
                                    únicos, registrar detalles de conductores y clientes, y controlar las horas de duración
                                    y descanso. Con funcionalidades de semáforo, generación de reportes y filtros de
                                    búsqueda, tendrás un control total sobre tus operaciones logísticas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <div class="relative h-full ml-0 md:mr-10">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                            <div class="relative h-full p-5 bg-white border-2 border-sky-500 rounded-lg">
                                <div class="flex items-center -mt-1">
                                    <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Mi Perfil: Notificaciones</h3>
                                </div>
                                <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                                <p class="mb-2 text-gray-600">¡Manténte informado en todo momento! Nuestro módulo de
                                    Notificaciones te ofrece una actualización en tiempo real de los cambios en los
                                    registros del sistema. Personaliza las condiciones para recibir alertas según tus
                                    necesidades y no te pierdas ningún detalle importante, como cambios de estatus, fechas
                                    de vencimiento próximas o cierre de registros.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
