@extends('layout.guest')

@section('titulo')
    Principal
@endsection


@section('contenido')
    {{-- <div
        class=" nuestros-servicios bottom-0 left-0 w-full h-6 bg-[linear-gradient(to_right,theme(colors.blue.400),theme(colors.blue.100),theme(colors.sky.400),theme(colors.blue.300),theme(colors.sky.400),theme(colors.blue.100),theme(colors.blue.400))] bg-[length:200%_auto] animate-gradient ">
    </div> --}}
    <div
        class="nuestros-servicios relative flex flex-col justify-center h-[60vh] items-center px-6 sm:flex-row sm:justify-around box-decoration-slice bg-gradient-to-r from-blue-800 via-blue-00 to-blue-800 ">

        <div class="pt-6 text-center mb-6 sm:mb-0 sm:mr-10 md:mr-20 lg:mr-24 xl:mr-32">
            <h2
                class="font-mulish-normal text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-gray-100 mb-4 text-center lg:text-left drop-shadow-md">
                Transformando ideas en resultados
            </h2>
            <div class="h-1 w-20 bg-sky-300 mt-2 mx-auto"></div>
        </div>
        <div class="text-center sm:text-left">
            <p
                class="text-white font-mulish-normal text-lg sm:text-xl lg:text-2xl 2xl:text-3xl font-medium text-center lg:text-left">
                Ofrecemos <span
                    class="text-white hover:text-sky-300 border-b-2 border-b-gray-300 hover:border-b-sky-300">soluciones
                    integrales</span> en
                desarrollo de software, tecnologías
                de la información, seguridad y automatización electrónica.
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
                        <h3 class="text-xl font-semibold text-gray-800">Rastreo GPS</h3>

                        <p class="py-2 text-gray-700">Nuestro servicio de Rastreo GPS ofrece seguimiento en
                            tiempo real para flotas y vehículos particulares, garantizando seguridad y eficiencia en
                            un solo lugar.</p>

                        <div class="flex items-center mt-4 text-gray-700 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                            </svg>
                            <p class="px-2 text-sm">Monitoreo</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                            </svg>
                            <p class="px-2 text-sm">Alertas SOS</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                            </svg>


                            <p class="px-2 text-sm">Reportes de combustible </p>
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
                        <h3 class="text-xl font-semibold text-gray-800">Soluciones de CCTV videovigilancia</h3>

                        <p class="py-2 text-gray-700">Nuestras soluciones de CCTV videovigilancia ofrecen tecnología de
                            vanguardia para proteger su propiedad y activos. Desde sistemas CCTV Turbo e IP 4K hasta
                            almacenamiento en la nube, brindamos seguridad confiable y eficiente en todo momento.</p>

                        <div class="flex items-center mt-4 text-gray-700 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 17.25v-.228a4.5 4.5 0 0 0-.12-1.03l-2.268-9.64a3.375 3.375 0 0 0-3.285-2.602H7.923a3.375 3.375 0 0 0-3.285 2.602l-2.268 9.64a4.5 4.5 0 0 0-.12 1.03v.228m19.5 0a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3m19.5 0a3 3 0 0 0-3-3H5.25a3 3 0 0 0-3 3m16.5 0h.008v.008h-.008v-.008Zm-3 0h.008v.008h-.008v-.008Z" />
                            </svg>
                            <p class="px-2 text-sm">Almacenamiento Fisico y En la Nube</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>
                            <p class="px-2 text-sm">Integración con cobre y Fibra Óptica</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <p class="px-2 text-sm">Soluciones de Grado Industrial</p>
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
                        <h3 class="text-xl font-semibold text-gray-800">Servicios de Desarrollo Web y Software a tu Medida
                        </h3>

                        <p class="py-2 text-gray-700">Ofrecemos soluciones integrales de desarrollo de software, abarcando
                            desde sistemas ERP personalizados hasta el respaldo de datos. Además, creamos sitios web
                            estáticos o dinámicos a medida para adaptarse a sus necesidades específicas.</p>

                        <div class="flex items-center mt-4 text-gray-700 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <p class="px-2 text-sm">Mantenimiento y soporte de software</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z" />
                            </svg>
                            <p class="px-2 text-sm">Alojamiento web</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <p class="px-2 text-sm">Correos electrónicos empresariales</p>
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
                        <strong class="mx-3 text-lg font-semibold text-white">Sistemas de emergencia</strong>
                    </div>

                    <div class="px-6 py-4">
                        <h3 class="text-xl font-semibold text-gray-800">Alarmas residenciales y comerciales
                        </h3>

                        <p class="py-2 text-gray-700">Desde barras de pánico hasta pulsadores de emergencia, nuestras
                            soluciones de seguridad ofrecen protección completa para su hogar o negocio. Con
                            tecnología
                            avanzada, garantizamos respuestas rápidas y eficaces en situaciones críticas.</p>

                        <div class="flex items-center mt-4 text-gray-700 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.348 14.652a3.75 3.75 0 0 1 0-5.304m5.304 0a3.75 3.75 0 0 1 0 5.304m-7.425 2.121a6.75 6.75 0 0 1 0-9.546m9.546 0a6.75 6.75 0 0 1 0 9.546M5.106 18.894c-3.808-3.807-3.808-9.98 0-13.788m13.788 0c3.808 3.807 3.808 9.98 0 13.788M12 12h.008v.008H12V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            <p class="px-2 text-sm">Estaciones de emergencias</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                            </svg>
                            <p class="px-2 text-sm">Luces LEDs de emergencia</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                            </svg>
                            <p class="px-2 text-sm">Alarmas de zona</p>
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
                        <strong class="mx-3 text-lg font-semibold text-white">Seguridad vehicular</strong>
                    </div>

                    <div class="px-6 py-4">
                        <h3 class="text-xl font-semibold text-gray-800">Controles de acceso vehicular
                        </h3>

                        <p class="py-2 text-gray-700">Ofrecemos soluciones integrales de seguridad, desde barreras
                            vehiculares hasta portones eléctricos. Con servicios de digitalización, mantenimiento y
                            medidas de seguridad adicionales, aseguramos tranquilidad y eficiencia en su propiedad.</p>

                        <div class="flex items-center mt-4 text-gray-700 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                            </svg>
                            <p class="px-2 text-sm">Barreras Vehiculares con Tecnología LPR o RFID</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                            </svg>
                            <p class="px-2 text-sm">Portones eléctricos</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286Zm0 13.036h.008v.008H12v-.008Z" />
                            </svg>

                            <p class="px-2 text-sm">Señalizacion</p>
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
                        <h3 class="text-xl font-semibold text-gray-800">Seguridad Perimetral
                        </h3>

                        <p class="py-2 text-gray-700">Nuestros cercos eléctricos ofrecen seguridad máxima. Desde
                            aplicaciones residenciales hasta industriales, garantizamos protección completa con
                            integraciones avanzadas de alarmas y Wi-Fi.</p>

                        <div class="flex items-center mt-4 text-gray-700 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <p class="px-2 text-sm">Concertinas, alambres de púas y mallas</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <p class="px-2 text-sm">Alarmas a control remoto y Wi-Fi</p>
                        </div>

                        <div class="flex items-center mt-4 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z" />
                            </svg>
                            <p class="px-2 text-sm">Aplicación industrial, residencial, comercial y ganadera</p>
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


        <div class="my-10 grid grid-cols-1 md:grid-cols-3 gap-8 items-center px-2">
            <div class="md:col-span-2 w-full overflow-hidden bg-white rounded-lg shadow-lg">
                <img class="object-cover object-center object- w-full h-[50vh]" src="{{ asset('img/mundo-siccoms.jpg') }}"
                    alt="Mundo Siccoms">
                <div class="flex items-center px-6 py-3 bg-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>
                    <strong class="mx-3 text-lg font-semibold text-white">Contectando El Mundo</strong>
                </div>

                <div class="px-6 py-4">
                    <h3 class="text-xl font-semibold text-gray-800">SICCOMS, la
                        Esencia
                        de la
                        Integración Digital</h3>

                    <p class="py-2 text-gray-700">En el vasto lienzo del panorama tecnológico global, SICCOMS
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
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-blue-900 mb-4 font-serif">Algunos de
                        nuestros
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
                <h2 class="text-4xl font-semibold text-blue-900 mb-4 capitalize font-serif">Algunos de Nuestros Clientes
                </h2>

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
