@extends('layout.servicio')

@section('titulo', 'Servicio de GPS')

@section('description')
    Servicio de monitoreo GPS para flotillas y vehículos mejora la gestión, seguridad y eficiencia de tu flota. ¡Obtén más
    información ahora!
@endsection

@section('contenido')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-6 py-12">
        <div>
            <livewire:text-animation texto="Rastreo GPS" />
            <section>
                <h2 class="text-2xl font-bold mb-4 text-gray-700 animate-fade-down animate-duration-[2000ms]">Rastreo GPS de Vehículos: Control Total de tu Flotilla</h2>
                <ul class="list-none mb-6 space-y-3 animate-fade-down animate-duration-[3000ms]">
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Control Preciso de la Ubicación en Tiempo Real</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Gestión Eficiente de Geocercas para Seguridad y
                            Eficiencia</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Planificación, Coordinación y
                            Monitoreo
                            Simplificados</span>
                    </li>
                </ul>
                <p class="text-xl font-semibold animate-fade-down animate-duration-[2400ms]">
                    ¡Contacta con nosotros
                    <span class="text-green-500 mx-1 font-extrabold text-xl relative inline-block stroke-current">
                        hoy mismo
                        <svg class="absolute -bottom-0.5 w-full max-h-1.5" viewBox="0 0 55 5"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path d="M0.652466 4.00002C15.8925 2.66668 48.0351 0.400018 54.6853 2.00002" stroke-width="2">
                            </path>
                        </svg>
                    </span>
                    y descubre cómo nuestro servicio de instalaciones GPS puede transformar tu negocio!
                </p>
            </section>
        </div>

        <div>
            <img src="{{ asset('img/hero-gps.jpg') }}" alt="GPS WEB" class="w-full h-auto rounded-lg animate-fade-down animate-duration-[2000ms]">

        </div>
    </div>

    <section
        class="bg-cover bg-fixed bg-center bg-[url('https://images.unsplash.com/photo-1520299607509-dcd935f9a839?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]">
        <div
            class="px-6 py-12 mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-between bg-black/70">
            <div class="w-full lg:w-5/12 mb-12 lg:mb-0">
                <div class="text-white text-xl md:text-2xl py-4">EPCOM GPS </div>
                <div class="bg-white rounded text-2xl md:text-3xl lg:text-4xl font-bold text-black mix-blend-screen px-10 py-5 ">
                    Administración de Flotas</div>

                <p class="mt-4 text-lg text-gray-100  font-light">Descubre la plataforma líder en gestión de flotas de
                    <a href="https://www.epcom.net/product/EPCOMGPSANUAL-EPCOM-144428.html" target="_blank"><strong
                            class="text-gray-200">EPCOM
                            GPS.</strong>
                    </a>
                    Nuestra solución innovadora te ofrece control total sobre tus operaciones vehiculares, maximizando
                    eficiencia y control.
                </p>
                <p class="mt-4 text-lg text-gray-100 font-light">El sistema de <strong class="font-normal">EPCOM GPS</strong>
                    optimiza cada aspecto de tu flota, desde reducir trabajo administrativo y costos de mantenimiento hasta
                    mejorar los hábitos de conducción y la eficiencia en el uso del combustible.</p>
            </div>
            <div class="w-full lg:w-6/12 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-500 p-2 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-checkup-list"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path d="M9 14h.01" />
                                <path d="M9 17h.01" />
                                <path d="M12 16l1 1l3 -3" />
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-semibold text-gray-700">Reportes Flexibles</h3>
                    </div>
                    <p class="text-gray-600">Herramienta flexible para generación de reportes</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 p-2 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-report"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
                                <path d="M18 14v4h4" />
                                <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
                                <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M8 11h4" />
                                <path d="M8 15h3" />
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-semibold text-gray-700">Monitoreo en Tiempo Real</h3>
                    </div>
                    <p class="text-gray-600">Monitoreo en tiempo real de indicadores clave de desempeño</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 p-2 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-route-2"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M19 7a2 2 0 1 0 0 -4a2 2 0 0 0 0 4z" />
                                <path d="M14 5a2 2 0 0 0 -2 2v10a2 2 0 0 1 -2 2" />
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-semibold text-gray-700">Optimización de Rutas</h3>
                    </div>
                    <p class="text-gray-600">Herramientas para optimización de rutas</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-500 p-2 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-report-analytics"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path d="M9 17v-5" />
                                <path d="M12 17v-1" />
                                <path d="M15 17v-3" />
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-semibold text-gray-700">Análisis de Conductores</h3>
                    </div>
                    <p class="text-gray-600">Análisis de comportamiento de conductor</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-amber-500 p-2  rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-device-mobile"
                                width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ecfeff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" />
                                <path d="M11 4h2" />
                                <path d="M12 17v.01" />
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-semibold text-gray-700">Aplicaciones Móviles</h3>
                    </div>
                    <p class="text-gray-600">Aplicaciones para iPhone y Android</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 p-2 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                                class="w-28 h-28 md:w-40 md:h-40 transition-transform transform hover:scale-110 cursor-pointer"
                                alt="Reducción de costos de combustible">
                                <path
                                    d="M22.917 12.5a4.158 4.158 0 0 0-4.167 4.167v66.666c0 2.084 2.083 4.167 4.167 4.167h37.5c2.083 0 4.166-2.083 4.166-4.167V62.5h2.084c2.083 0 2.083 2.083 2.083 2.083v8.334c0 4.166 2.083 6.25 6.25 6.25s6.25-2.084 6.25-6.25V50c0-4.167-8.333-8.333-8.333-12.5V25H68.75l-4.167-4.167v-4.166a4.158 4.158 0 0 0-4.166-4.167zm4.166 8.333H56.25V37.5H27.083zm37.5 12.5h4.167v6.25c0 4.167 8.333 8.334 8.333 12.5v20.834C77.083 75 75 75 75 75s-2.083 0-2.083-2.083V62.5c0-2.083-2.084-4.167-4.167-4.167h-4.167z"
                                    style="marker:none" color="#fff" fill="#fff" fill-opacity="1"
                                    fill-rule="nonzero" stroke="none" stroke-width="2" visibility="visible"
                                    display="inline" overflow="visible" enable-background="accumulate"
                                    class="fill-000000"></path>
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-semibold text-gray-700">Monitoreo de Combustible</h3>
                    </div>
                    <p class="text-gray-600">Monitoreo de combustible</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-600 sm:text-lg">
                <h2 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 ">
                    Rastreo de Contenedores con EPCOM GPS</h2>
                <p class="mb-4">EPCOM GPS proporciona herramientas avanzadas para rastrear contenedores, ofreciendo información en tiempo real sobre ubicación y condiciones, como temperatura y flujo de aire. Sus equipos robustos y flexibles hacen de EPCOM GPS la opción ideal para una logística eficiente y competitiva.</p>
                <ul class="list-none mb-6 space-y-3">
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-check mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M11.102 17.957c-3.204 -.307 -5.904 -2.294 -8.102 -5.957c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6a19.5 19.5 0 0 1 -.663 1.032" />
                            <path d="M15 19l2 2l4 -4" />
                          </svg>
                        <span class="text-gray-700 tracking-wide font-light capitalize">Interfaz con múltiples vistas</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-multiple mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />
                            <path d="M17 17v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                          </svg>
                        <span class="text-gray-700 tracking-wide font-light">Varias soluciones basadas en RFID</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo-sensor-3 mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M17 4h1a2 2 0 0 1 2 2v1" />
                            <path d="M20 17v1a2 2 0 0 1 -2 2h-1" />
                            <path d="M7 20h-1a2 2 0 0 1 -2 -2v-1" />
                            <path d="M4 7v-1a2 2 0 0 1 2 -2h1" />
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M12 18v2" />
                            <path d="M4 12h2" />
                            <path d="M12 4v2" />
                            <path d="M20 12h-2" />
                          </svg>
                        <span class="text-gray-700 tracking-wide font-light"> Soporte de una gran cantidad de sensores</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" />
                            <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" />
                          </svg>
                        <span class="text-gray-700 tracking-wide font-light"> Notificaciones y alarmas basadas en eventos</span>
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{asset('img/map2.webp')}}" alt=Mapa_1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{asset('img/map1.png')}}" alt="Mapa_2">
            </div>
        </div>
    </section>
@endsection
