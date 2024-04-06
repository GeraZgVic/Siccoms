@extends('layout.guest')

@section('titulo')
    Principal
@endsection


@section('contenido')
    {{-- <div
        class=" nuestros-servicios bottom-0 left-0 w-full h-6 bg-[linear-gradient(to_right,theme(colors.blue.400),theme(colors.blue.100),theme(colors.sky.400),theme(colors.blue.300),theme(colors.sky.400),theme(colors.blue.100),theme(colors.blue.400))] bg-[length:200%_auto] animate-gradient ">
    </div> --}}
    <div
        class="nuestros-servicios relative flex flex-col justify-center h-[60vh] items-center px-6 sm:flex-row sm:justify-around box-decoration-slice bg-gradient-to-r from-blue-700 to-sky-600 text-white">

        <div class="pt-6 text-center mb-6 sm:mb-0 sm:mr-10 md:mr-20 lg:mr-24 xl:mr-32">
            <h2
                class="font-mulish-bold text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-gray-100 mb-4 text-center lg:text-left drop-shadow-md">
                Transformando ideas en resultados
            </h2>
            <div class="h-1 w-20 bg-teal-300 mt-2 mx-auto"></div>
        </div>
        <div class="text-center sm:text-left">
            <p class="font-mulish-normal text-lg sm:text-xl lg:text-2xl 2xl:text-3xl font-medium text-gray-100 text-center lg:text-left">
                Ofrecemos <strong class="text-teal-300 border-b-2 border-b-teal-300">soluciones integrales</strong> en
                desarrollo de software, tecnologías
                de la información, seguridad y automatización electrónica.
            </p>
        </div>
    </div>



    {{-- <livewire:card-component /> --}}
    <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0">
        <div class="container xl:max-w-7xl mx-auto px-4">
            <!-- Heading start -->
            <header class="text-center mx-auto mb-12 lg:px-20">
                <h2 class="text-3xl leading-normal mb-2 font-bold text-black font-serif">Algunos Servicios Destacados</h2>

                <p class="text-gray-00 leading-relaxed font-light text-xl mx-auto pb-2">En Siccoms Ofrecemos todo tipo de
                    servicios, tenemos la solución a lo que estás buscando.</p>
            </header>
            <!-- End heading -->
            <!-- row -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-6">
                <!-- Primer bloque de servicio -->
                <div class=" flex-shrink px-4 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <!-- service block -->
                    <a href="{{ route('servicios.index') }}">
                        <div
                            class="h-full w-full flex flex-col justify-center items-center py-8 px-12 mb-12 bg-sky-200 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 border-t-4 border-t-sky-500">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <div class="bg-sky-500 rounded-full p-1 mt-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="leading-normal mb-2 font-bold text-xl">GPS
                                </h3>
                                <p class="text-gray-500 tracking-wide">Nuestro servicio de Rastreo GPS ofrece seguimiento en
                                    tiempo real para flotas y vehículos particulares, garantizando seguridad y eficiencia en
                                    un solo lugar.</p>
                            </div>
                        </div>
                    </a>
                    <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <!-- service block -->
                    <a href="{{ route('servicios.index') }}">
                        <div
                            class="h-full w-full flex flex-col justify-center items-center py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>

                            </div>
                            <div class="text-center">
                                <h3 class="leading-normal mb-2 font-bold text-xl">Soluciones de CCTV videovigilancia
                                </h3>
                                <p class="text-gray-500">Nuestras soluciones de CCTV videovigilancia ofrecen tecnología de
                                    vanguardia para proteger su propiedad y activos. Desde sistemas CCTV Turbo e IP 4K hasta
                                    almacenamiento en la nube, brindamos seguridad confiable y eficiente en todo momento.
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <!-- service block -->
                    <a href="{{ route('servicios.index') }}">
                        <div
                            class="h-full w-full flex flex-col justify-center items-center py-8 px-12 mb-12 bg-sky-200 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 border-t-4 border-t-sky-500">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <div class="bg-sky-500 rounded-full p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="leading-normal mb-2 font-bold text-xl">Desarrollo de Sistemas de Software
                                </h3>
                                <p class="text-gray-500">Nuestros servicios de desarrollo de software ofrecen soluciones
                                    integrales, desde sistemas ERP personalizados hasta respaldo y mantenimiento de datos,
                                    asegurando la continuidad de su negocio.</p>
                            </div>
                        </div>
                    </a>
                    <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <!-- service block -->
                    <a href="{{ route('servicios.index') }}">
                        <div
                            class="h-full w-full flex flex-col justify-center items-center py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 ">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                </svg>

                            </div>
                            <div class="text-center">
                                <h3 class="leading-normal mb-2 font-bold text-xl">Alarmas residenciales y comerciales
                                </h3>
                                <p class="text-gray-500">Desde barras de pánico hasta pulsadores de emergencia, nuestras
                                    soluciones de seguridad ofrecen protección completa para su hogar o negocio. Con
                                    tecnología
                                    avanzada, garantizamos respuestas rápidas y eficaces en situaciones críticas.</p>
                            </div>
                        </div>
                    </a>
                    <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <!-- service block -->
                    <a href="{{ route('servicios.index') }}">
                        <div
                            class="h-full w-full flex flex-col justify-center items-center py-8 px-12 mb-12 bg-sky-200 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2 border-t-4 border-t-sky-500">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <div class="bg-sky-500 rounded-full p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="leading-normal mb-2 font-bold text-xl">Controles de acceso vehicular</h3>
                                <p class="text-gray-500">Ofrecemos soluciones integrales de seguridad, desde barreras
                                    vehiculares hasta portones eléctricos. Con servicios de digitalización, mantenimiento y
                                    medidas de seguridad adicionales, aseguramos tranquilidad y eficiencia en su propiedad.
                                </p>
                            </div>
                        </div>
                    </a>
                    <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 wow fadeInUp" data-wow-duration="1s"
                    style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    <!-- service block -->
                    <a href="{{ route('servicios.index') }}">
                        <div
                            class="h-full w-full flex flex-col justify-center items-center py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                                </svg>

                            </div>
                            <div class="text-center">

                                <h3 class="leading-normal mb-2 font-bold text-xl">Cercos eléctricos</h3>
                                <p class="text-gray-500">Nuestros cercos eléctricos ofrecen seguridad máxima. Desde aplicaciones residenciales hasta industriales, garantizamos protección completa con integraciones avanzadas de alarmas y Wi-Fi.</p>
                            </div>
                        </div>
                    </a>
                    <!-- end service block -->
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


    <div class="my-10 grid grid-cols-1 md:grid-cols-3 gap-8 items-center px-2">
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                <img src="{{ asset('img/mundo-siccoms.jpg') }}" alt="Mundo Siccoms" class="w-full h-80 object-cover">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl md:text-3xl font-semibold mb-2 font-serif">Conectando el Mundo: SICCOMS, la Esencia
                        de la
                        Integración Digital</h3>
                    <p class="text-lg md:text-xl mb-4">En el vasto lienzo del panorama tecnológico global, SICCOMS emerge
                        como el artífice de la integración, tejiendo las complejas redes de computadoras con la destreza de
                        un maestro. Desde el cableado estructurado hasta la ingeniería de software, la seguridad electrónica
                        y la automatización, nuestro compromiso se extiende más allá de la eficiencia técnica para abrazar
                        la visión de un mundo interconectado. Con cada conexión, iluminamos el camino hacia un futuro donde
                        la tecnología se convierte en un puente hacia la innovación y la excelencia.</p>
                </div>
            </div>
        </div>

        <div class="md:col-span-1">
            <div class="px-4 py-6 bg-white rounded-lg shadow-md">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-blue-900 mb-4 font-serif">Algunos de nuestros
                    Trabajos
                </h2>
                <p class="text-base md:text-lg text-gray-700 mb-6">Explora nuestra galería de fotos para ver nuestros
                    trabajos destacados.</p>
                <livewire:image-gallery />
            </div>
        </div>
    </div>




    {{-- Clientes --}}
    <div class="my-10 seccion">
        <div class="max-w-4xl mx-auto px-8 py-9 text-center">
            <h2 class="text-4xl font-semibold text-blue-900 mb-4 capitalize font-serif">Algunos de Nuestros Clientes</h2>

        </div>
        <livewire:slide-infinito />
    </div>

    {{-- Testimoniales --}}
    {{-- <section class="flex items-center justify-center py-8 bg-white min-w-screen">
        <div class="px-16 bg-white">
            <div class="container flex flex-col items-start mx-auto lg:items-center">
                <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-blue-900 uppercase lg:justify-center lg:items-center"
                    data-primary="purple-500">No te conformes solo con nuestra palabra</p>


                <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block"
                        viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    Descubre lo que dicen los demás
                </h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full" data-primary="purple-600"></div>

                <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                    <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="{{ asset('img/testimonio1.avif') }}" class="object-cover w-full h-full"
                                    alt="imagen-testimonio">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Víctor Zg</h4>
                                <p class="text-gray-700">CEO de Gamboys Company</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-600">"Esto es una obviedad si desea llevar su negocio al
                            siguiente nivel. Si está buscando el conjunto de herramientas definitivo, ¡aquí lo tiene!"
                        </blockquote>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="{{ asset('img/testimonio2.jpg') }}" class="object-cover w-full h-full"
                                    alt="imagen-testimonio">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Carolina Herrera</h4>
                                <p class="text-gray-700">CTO de Lugares Seguros</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-600">"Gracias por crear este servicio. Mi vida es mucho
                            más fácil. Gracias por crear un producto tan fantástico".</blockquote>
                    </div>
                    <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="{{ asset('img/testimonio3.jpg') }}" class="object-cover w-full h-full"
                                    alt="imagen-testimonio">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Elon Musk</h4>
                                <p class="text-gray-700">Creator Space X</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-600">"Repleto de contenido increíble y exactamente lo que
                            estaba buscando. Se lo recomendaría a cualquiera".</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
