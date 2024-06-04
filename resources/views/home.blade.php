@extends('layout.app')

@section('titulo')
Principal
@endsection


@section('contenido')
<div
    class="nuestros-servicios relative flex flex-col justify-center h-[60vh] items-center px-6 sm:flex-row sm:justify-around box-decoration-slice bg-gradient-to-r from-blue-800 via-blue-00 to-blue-800 ">

    <div class="pt-6 text-center mb-6 sm:mb-0 sm:mr-10 md:mr-20 lg:mr-24 xl:mr-32">
        <h2
            class="font-mulish-normal text-3xl sm:text-4xl lg:text-5xl 2xl:text-7xl font-serif font-bold text-gray-100 mb-4 text-center lg:text-left drop-shadow-md">
            Haciendo realidad tus objetivos
        </h2>
        <div class="h-1 w-20 bg-sky-300 mt-2 mx-auto"></div>
    </div>
    <div class="text-center sm:text-left">
        <p
            class="text-white font-mulish-normal text-lg sm:text-xl lg:text-2xl 2xl:text-3xl font-medium text-center lg:text-left">
            Con la experiencia y calidad de SICCOMS Tabasco, ofrecemos soluciones integrales en desarrollo de software,
            tecnologías de la información, seguridad y automatización electrónica, asegurando <a
                href="#trabajos-destacados"
                class="text-white hover:text-sky-300 border-b-2 border-b-gray-300 hover:border-b-sky-300">excelencia en
                cada proyecto,</a>
            Ven y contáctanos.
        </p>
    </div>
</div>



{{-- <livewire:card-component /> --}}
<div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0">
    <div class="container xl:max-w-7xl mx-auto px-4">
        <!-- Heading start -->
        <div class="text-center mx-auto mb-12 lg:px-20">
            <h2 class="text-3xl leading-normal mb-2 font-bold text-black font-serif">Algunos Servicios Destacados</h2>

            <p class="text-gray-00 leading-relaxed font-light text-xl mx-auto pb-2">En Siccoms Ofrecemos todo tipo de
                servicios, tenemos la solución a lo que estás buscando.</p>
        </div>

        <!-- row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Primer bloque de servicio -->
            <div class="w-full md:max-w-sm overflow-hidden bg-white rounded-lg shadow-lg">
                <img class="object-cover object-center w-full h-56" src="{{ asset('img/gps_rastreo.jpg') }}"
                    alt="Imagen GPS">

                <div class="flex items-center px-6 py-3 bg-gray-900">
                    <svg aria-label="location pin icon" class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                    </svg>
                    <strong class="mx-3 text-lg font-semibold text-white">GPS</strong>
                </div>

                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Servicio de Instalaciones GPS</h3>

                    <p class=" text-gray-700 mt-2">¿Quieres tener el control total de tus vehículos, SICCOMS Tabasco Te
                        ofrecemos nuestro servicio de instalaciones GPS, la solución perfecta para ti.
                        Contamos con dispositivos GPS de última generación que permiten rastrear y monitorear la
                        ubicación de tus vehículos en tiempo real.</p>

                    <div class="flex items-center mt-4 text-gray-700 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                        </svg>
                        <p class="px-2 text-sm">Precisión y Confiabilidad</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>

                        <p class="px-2 text-sm">Gestión de Flotas</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                        <p class="px-2 text-sm">Soporte Técnico</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('servicios.gps')}}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:max-w-sm overflow-hidden bg-white rounded-lg shadow-lg">
                <img class="object-cover object-center w-full h-56" src="{{ asset('img/cctv_home.jpg') }}"
                    alt="CCTV Videovigilancia">

                <div class="flex items-center px-6 py-3 bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>

                    <strong class="mx-3 text-lg font-semibold text-white">CCTV</strong>
                </div>

                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Instalaciones de Videovigilancia</h3>

                    <p class=" text-gray-700 mt-2">¿Deseas mejorar la seguridad de tu hogar o negocio? Nuestro servicio
                        de
                        instalaciones CCTV de videovigilancia es la solución ideal para ti.
                        En SICCOMS Tabasco, proveemos sistemas de cámaras de última generación que te permiten
                        monitorear y grabar todas las actividades en tus instalaciones.</p>

                    <div class="flex items-center mt-4 text-gray-700 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0 1 18 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0 1 18 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 0 1 6 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                        </svg>
                        <p class="px-2 text-sm">Alta Calidad de Imagen</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        <p class="px-2 text-sm">Acceso Remoto</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                        </svg>
                        <p class="px-2 text-sm">Almacenamiento Seguro</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('servicios.cctv')}}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:max-w-sm overflow-hidden bg-white rounded-lg shadow-lg">
                <img class="object-cover object-center w-full h-56" src="{{ asset('img/desarrollo.jpg') }}"
                    alt="Imagen Desarrollo Web">

                <div class="flex items-center px-6 py-3 bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    <strong class="mx-3 text-lg font-semibold text-white">Desarrollo Web y Software</strong>
                </div>

                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Desarrollo Web y Sistemas
                    </h3>

                    <p class=" text-gray-700 mt-2">¿Buscas una solución digital que se ajuste perfectamente a las
                        necesidades de tu negocio? Nuestro servicio de desarrollo web y sistemas a tu medida es justo lo
                        que necesitas.
                        En SICCOMS Tabasco, creamos sitios web y aplicaciones personalizadas que impulsan tu negocio
                        hacia el éxito.</p>

                    <div class="flex items-center mt-4 text-gray-700 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
                        </svg>
                        <p class="px-2 text-sm">Diseño Personalizado</p>
                    </div>

                    {{-- <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                        </svg>
                        <p class="px-2 text-sm">Buenas prácticas en programación</p>
                    </div> --}}

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                        </svg>
                        <p class="px-2 text-sm">Funcionalidad a Medida</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                        <p class="px-2 text-sm">Soporte Continuo</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('servicios.desarrollo')}}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:max-w-sm overflow-hidden bg-white rounded-lg shadow-lg">
                <img class="object-cover object-center w-full h-56" src="{{ asset('img/alarma_incendio.jpg') }}"
                    alt="Imagen Sistema de emergencia">

                <div class="flex items-center px-6 py-3 bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                    </svg>
                    <strong class="mx-3 text-lg font-semibold text-white">Alarmas Comerciales</strong>
                </div>

                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Instalaciones de Alarmas
                    </h3>

                    <p class=" text-gray-700 mt-2">¿Quieres proteger tu hogar o negocio de posibles amenazas?
                        Nuestro servicio de instalaciones de alarmas residenciales y comerciales, realizado por SICCOMS
                        Tabasco, es la solución ideal para garantizar tu seguridad. Ofrecemos sistemas de alarma
                        avanzados que te brindan tranquilidad y protección las 24 horas del día.</p>

                    <div class="flex items-center mt-4 text-gray-700 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <p class="px-2 text-sm">Máxima Seguridad</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>
                        <p class="px-2 text-sm">Instalación Profesional</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                        </svg>
                        <p class="px-2 text-sm">Tecnología Avanzada</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('servicios.alarmas')}}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:max-w-sm overflow-hidden bg-white rounded-lg shadow-lg">
                <img class="object-cover object-center w-full h-56" src="{{ asset('img/barrera_vehicular.jpg') }}"
                    alt="Barrera Vehicular">
                <div class="flex items-center px-6 py-3 bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                    <strong class="mx-3 text-lg font-semibold text-white">Acceso vehicular</strong>
                </div>

                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Instalaciones de Controles de Acceso
                    </h3>

                    <p class="text-gray-700 mt-2">¿Necesitas gestionar de forma eficiente el acceso de vehículos a tu
                        propiedad? Nuestro servicio de instalaciones de controles de acceso vehicular,
                        realizado por SICCOMS Tabasco, es la solución perfecta para ti.
                        Implementamos sistemas avanzados que te permiten autorizar y monitorear la entrada y salida de
                        vehículos de manera segura y eficaz.</p>

                    <div class="flex items-center mt-4 text-gray-700 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                        </svg>
                        <p class="px-2 text-sm">Barreras Vehiculares con Tecnología LPR o RFID</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>
                        <p class="px-2 text-sm">Seguridad Personalizada</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>
                        <p class="px-2 text-sm">Gestión Eficiente</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('servicios.seguridadVehicular')}}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:max-w-sm overflow-hidden bg-white rounded-lg shadow-lg">
                <img class="object-cover object-center w-full h-56" src="{{ asset('img/cerca_electrica.jpg') }}"
                    alt="Imagen GPS">

                <div class="flex items-center px-6 py-3 bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>
                    <strong class="mx-3 text-lg font-semibold text-white">Cercos eléctricos</strong>
                </div>

                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">Instalaciones de Cercos Eléctricos
                    </h3>

                    <p class=" text-gray-700 mt-2">¿Deseas proteger tu propiedad de intrusos de manera efectiva?
                        Nuestro servicio de instalaciones de cercos eléctricos, realizado por SICCOMS Tabasco,
                        es la solución ideal. Instalamos sistemas de seguridad perimetral que disuaden
                        y detectan intentos de intrusión, brindándote tranquilidad y protección las 24 horas.</p>

                    <div class="flex items-center mt-4 text-gray-700 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m6.115 5.19.319 1.913A6 6 0 0 0 8.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 0 0 2.288-4.042 1.087 1.087 0 0 0-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 0 1-.98-.314l-.295-.295a1.125 1.125 0 0 1 0-1.591l.13-.132a1.125 1.125 0 0 1 1.3-.21l.603.302a.809.809 0 0 0 1.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 0 0 1.528-1.732l.146-.292M6.115 5.19A9 9 0 1 0 17.18 4.64M6.115 5.19A8.965 8.965 0 0 1 12 3c1.929 0 3.716.607 5.18 1.64" />
                        </svg>
                        <p class="px-2 text-sm">Seguridad Perimetral</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12.75 19.5v-.75a7.5 7.5 0 0 0-7.5-7.5H4.5m0-6.75h.75c7.87 0 14.25 6.38 14.25 14.25v.75M6 18.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <p class="px-2 text-sm">Alarmas a control remoto y Wi-Fi</p>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        <p class="px-2 text-sm">Asesoramiento Personalizado</p>
                    </div>
                    <div class="mt-3">
                    <a href="{{route('servicios.seguridadPerimetral')}}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>

    <div class="flex justify-end mx-6 mt-4 seccion">
        <a href="{{ route('servicios.index') }}"
            class="inline-block bg-gradient-to-r
        from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
            Ver más
        </a>
    </div>

    <div class="mt-10 bg-gradient-to-br from-blue-950 via-blue-800 to-blue-500 py-28 relative seccion">
        <div
            class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center items-center">
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer ">
                <h3 class="filter drop-shadow-lg text-cyan-200 font-bold text-4xl md:text-5xl ">1000+</h3>
                <p class="font-serif text-white font-semibold text-xl md:text-2xl">Ordenes de Servicio</p>
                <p class="font-light text-gray-200 text-lg md:text-xl">Realizadas</p>
            </div>
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer">
                <h3 class="filter drop-shadow-lg text-cyan-200  font-bold text-4xl md:text-5xl">189+</h3>
                <p class="font-serif filter drop-shadow-lg text-white font-semibold text-xl md:text-2xl">Clientes</p>
                <p class="filter drop-shadow-lg font-light text-gray-200 text-lg md:text-xl">Satisfechos</p>
            </div>
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer">
                <h3 class="filter drop-shadow-lg text-cyan-200  font-bold text-4xl md:text-5xl">10+</h3>
                <p class="font-serif filter drop-shadow-lg text-white font-semibold text-xl md:text-2xl">Proyectos</p>
                <p class="filter drop-shadow-lg font-light text-gray-200 text-lg md:text-xl">Ejecutados</p>
            </div>
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer">
                <h3 class="filter drop-shadow-lg text-cyan-200  font-bold text-4xl md:text-5xl">1500+</h3>
                <p class="font-serif filter drop-shadow-lg text-white font-semibold text-xl md:text-2xl">Productos</p>
                <p class="filter drop-shadow-lg font-light text-gray-200 text-lg md:text-xl">Ofertados</p>
            </div>
            <!-- Primer círculo decorativo -->
            <div
                class="absolute bottom-3 left-3 h-16 w-16 rounded-full bg-white bg-gradient-to-b from-white to-indigo-600 opacity-20">
            </div>
            <!-- Segundo círculo decorativo -->
            <div
                class="absolute top-4 left-1/2 transform -translate-x-1/2 h-20 w-20 rounded-full bg-white bg-gradient-to-b from-white to-indigo-600 opacity-20">
            </div>
            <!-- Tercer círculo decorativo -->
            <div
                class="absolute bottom-2 right-8 h-12 w-12 rounded-full bg-white bg-gradient-to-b from-white to-indigo-600 opacity-20">
            </div>

        </div>
    </div>


    <div class="my-10 grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-2" id="trabajos-destacados">
        <div class=" w-full overflow-hidden bg-white rounded-lg shadow-lg">
            <img class="object-cover object-center object- w-full h-[50vh]" src="{{ asset('img/mundo-siccoms.jpg') }}"
                alt="Mundo Siccoms">
            <div class="flex items-center px-6 py-3 bg-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
                <strong class="mx-3 text-lg font-semibold 2xl:text-2xl text-white">Contectando El Mundo</strong>
            </div>

            <div class="px-6 py-4">
                <h3 class="text-xl font-semibold text-gray-800 2xl:text-3xl">SICCOMS, Conectando ideas, potenciando
                    negocios: Tu socio en consultoría, comercialización y servicios integrales.</h3>

                <p class="py-2 text-gray-700 2xl:text-lg">En el vasto lienzo del panorama tecnológico global, SICCOMS
                    emerge
                    como el artífice de la integración, tejiendo las complejas redes de computadoras con la destreza
                    de
                    un maestro. Desde el cableado estructurado hasta la ingeniería de software, la seguridad
                    electrónica
                    y la automatización, nuestro compromiso se extiende más allá de la eficiencia técnica para
                    abrazar
                    la visión de un mundo interconectado. Con cada conexión, iluminamos el camino hacia un futuro
                    donde
                    la tecnología se convierte en un puente hacia la innovación y la excelencia.</p>
            </div>
        </div>

        <div class="md:col-span-1">
            <div class="px-4 py-6 bg-white rounded-lg shadow-md">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold mb-4 font-serif text-center">Algunos de
                    nuestros
                    Trabajos
                </h2>
                <p class="text-base md:text-lg text-gray-700 mb-6">Descubre nuestra galería de fotos para conocer
                    nuestros proyectos más destacados.</p>
                <livewire:image-gallery />
                {{-- <x-full-gallery /> --}}

            </div>
        </div>
    </div>




    {{-- Clientes --}}
    <div class="my-10 seccion">
        <div class="max-w-4xl mx-auto px-8 py-9 text-center font-mulish-normal">
            <h2 class="text-4xl font-semibold mb-4 capitalize font-serif">Algunos de Nuestros Clientes
            </h2>

        </div>
        <livewire:slide-infinito />
    </div>
    @endsection

    @push('script')
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                iniciarApp();
            });

            function iniciarApp() {
                navegacionFija();
            }

            function navegacionFija() {
                const barraNavegacion = document.querySelector('.navegacion');
                const servicios = document.querySelector('.nuestros-servicios');

                window.addEventListener('scroll', () => {
                    // Obtener la posición vertical del borde inferior del apartado de servicios
                    const serviciosBottom = servicios.getBoundingClientRect().bottom;

                    // Si el borde del apartado de servicios está arriba de la parte superior de la ventana
                    if (serviciosBottom < 0) {
                        barraNavegacion.classList.add('fixed', 'top-0', 'z-40', 'bg-blue-950', 'w-full');
                    } else {
                        barraNavegacion.classList.remove('fixed', 'top-0', 'z-40', 'bg-blue-950', 'w-full');

                    }
                })
            }
        </script>
    @endpush