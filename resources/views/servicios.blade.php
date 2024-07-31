@extends('layout.app')
@section('titulo')
Servicios
@endsection
@section('contenido')
{{-- <div class="relative overflow-hidden bg-gray-900 pt-16 pb-32 space-y-24">
        <div class="relative">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">

                    <div>
                        <div>
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                                    </path>
                                </svg>
                            </span>
                        </div>

                        <div class="mt-6">
                            <h2 class="text-3xl font-bold tracking-tight text-white">
                                Ingeniería TI
                            </h2>
                            <p class="mt-4 text-lg text-gray-300">
                                The AI product utilizes advanced NLP algorithms to understand and interpret human language,
                                enabling it to accurately process and analyze text-based inputs.
                            </p>
                            <div class="mt-6">
                                <a class="inline-flex rounded-lg bg-teal-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-teal-600 hover:bg-teal-700 hover:ring-teal-700"
                                    href="/login">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img loading="lazy" width="647" height="486"
                            class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                            style="color:transparent" src="https://images.unsplash.com/photo-1569144157591-c60f3f82f137">
                    </div>
                </div>
            </div>
        </div>



        <div class="relative">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 lg:col-start-2">
                    <div>
                        <div>
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-bold tracking-tight text-white">
                                Seguridad y Automatización Electrónica
                            </h2>
                            <p class="mt-4 text-lg text-gray-300">
                                The product has built-in sentiment analysis capabilities, allowing it to determine the
                                sentiment (positive, negative, or neutral) expressed in text or customer feedback.
                            </p>
                            <div class="mt-6">
                                <a class="inline-flex rounded-lg bg-teal-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-teal-600 hover:bg-teal-700 hover:ring-teal-700"
                                    href="/login">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="-ml-48 pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                            style="color:transparent" src="https://images.unsplash.com/photo-1599134842279-fe807d23316e">
                    </div>
                </div>
            </div>
        </div>



        <div class="relative">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8 ">
                <div class="mx-auto max-w-xl px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0 ">
                    <div>
                        <div>
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-8 w-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-bold tracking-tight text-white">
                                Ingenieria de Software
                            </h2>
                            <p class="mt-4 text-lg text-gray-300">
                                The AI product can generate human-like written content, summaries, or reports based on
                                structured data or analysis results.
                            </p>
                            <div class="mt-6">
                                <a class="inline-flex rounded-lg bg-teal-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-teal-600 hover:bg-teal-700 hover:ring-teal-700"
                                    href="/login">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="-mr-48 pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img loading="lazy" width="646" height="485"
                            class="w-full rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                            style="color:transparent" src="https://images.unsplash.com/photo-1483478550801-ceba5fe50e8e">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<div class="bg-slate-900 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="animate-fade-down mt-4 md:mt-0 block text-3xl font-bold text-gray-100 sm:text-4xl lg:text-5xl lg:leadin font-mug-tightlish-bold mb-4">Nuestros Servicios</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Area: Ingeniería TI -->
            <div class="bg-slate-800 rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-semibold text-gray-100 mb-4 font-mulish-bold">
                    <span class="">Ingeniería TI</span>
                </h3>
                <ul class="text-gray-200">
                    <li class="mb-2 hover:text-neon-teal">Mantenimiento de equipo de computo y
                        servidores</li>
                    <li class="mb-2 hover:text-neon-teal">Venta de equipo de computo: Hardware y
                        Software</li>
                    <li class="mb-2 hover:text-neon-teal">Cableado Estructurado</li>
                    <li class="mb-2 hover:text-neon-teal">Redes inalambricas</li>
                    <li class="mb-2 hover:text-neon-teal">Amplificador para Señal Celular</li>
                    <li class="mb-2 hover:text-neon-teal">Telefonía y Conmutadores</li>
                </ul>
            </div>

            <!-- Area: Ingeniería de Software -->
            <div class="bg-slate-800 rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-semibold text-gray-100 mb-4 font-mulish-bold">
                    <span class="">Ingeniería de Software</span>
                </h3>
                <ul class="text-gray-200">
                    <li class="mb-2 hover:text-neon-teal">Consultoría tecnológica</li>
                    <li class="mb-2 hover:text-neon-teal">Desarrollo de sistemas de software</li>
                    <li class="mb-2 hover:text-neon-teal">Desarrollo de páginas web</li>
                </ul>
            </div>

            <!-- Area: Seguridad Eléctrica y Automatización -->
            <div class="bg-slate-800 rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-semibold text-gray-100 mb-4 font-mulish-bold">
                    <span class="">Seguridad Eléctrica y Automatización</span>
                </h3>
                <ul class="text-gray-200">
                    <li class="mb-2 hover:text-neon-teal">Soluciones de CCTV videovigilancia</li>
                    <li class="mb-2 hover:text-neon-teal">Alarmas residenciales y comerciales
                        Sistemas de emergencia</li>
                    <li class="mb-2 hover:text-neon-teal">Controles de acceso y asistencia personal</li>
                    <li class="mb-2 hover:text-neon-teal">Controles de acceso vehicular</li>
                    <li class="mb-2 hover:text-neon-teal">Rastreo GPS</li>
                    <li class="mb-2 hover:text-neon-teal">Energía & UPS</li>
                    <li class="mb-2 hover:text-neon-teal">Cercos eléctricos</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-200">
    <section>
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4 font-mulish-bold">
                <span class="">Ingeniería TI</span>
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-200 h-auto md:h-full flex flex-col">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="{{ asset('img/servicios/mantenimiento.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/55 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Mantenimiento de equipo de computo y servidores</h3>
                    </a>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-200">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                        <img src="https://img.freepik.com/foto-gratis/mujeres-gesto-ganador-fondo-rosa-sostienen-computadora-portatil_343596-4049.jpg?t=st=1722463549~exp=1722467149~hmac=285d05594c86184240c7b8904b5ea71bd441767c9b8b1e8dab9480f02458563c&w=1060" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/55 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Venta de equipo de computo: Hardware y Software</h3>
                    </a>
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                        <img src="{{asset('img/kit_amplificador.webp')}}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Amplificador para Señal Celular</h3>
                    </a>
                    <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="{{ asset('img/servicios/cableado.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Cableado Estructurado</h3>
                        </a>
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="{{ asset('img/servicios/inalambricas.jpeg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Redes inalambricas</h3>
                        </a>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-gray-200 h-auto md:h-full flex flex-col">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="https://img.freepik.com/foto-gratis/hombre-casa-videollamada-familia_23-2148923828.jpg?t=st=1722463127~exp=1722466727~hmac=22871a40bfd96cd5183a61c840c0d764ab244f2350917f72016cbb7e5d3b99d0&w=740" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Telefonía y Conmutadores</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4 font-mulish-bold">
                <span class="">Ingeniería de Software</span>
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-200 h-auto md:h-full flex flex-col">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="{{ asset('img/servicios/consultoria.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Consultoría tecnológica</h3>
                    </a>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-200">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                        <img src="{{ asset('img/servicios/software.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Desarrollo de sistemas de software</h3>
                    </a>
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb">
                        <img src="{{ asset('img/servicios/web.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Desarrollo de páginas web</h3>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4 font-mulish-bold">
                <span class="">Seguridad Eléctrica y Automatización</span>
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-200 h-auto md:h-full flex flex-col">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="{{ asset('img/servicios/cctv.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-slate-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Soluciones de CCTV videovigilancia</h3>
                    </a>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-200">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                        <img src="{{ asset('img/servicios/alarma.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/60 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Alarmas residenciales y comerciales Sistemas de emergencia</h3>
                    </a>
                    <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="{{ asset('img/servicios/controlacceso.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Controles de acceso vehicular</h3>
                        </a>
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="{{ asset('img/servicios/gps.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Rastreo GPS</h3>
                        </a>
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="{{ asset('img/servicios/electricos.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/70 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Cercos eléctricos</h3>
                        </a>
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="https://ftp3.syscom.mx/usuarios/fotos/BancoFotografiasSyscom/CYBERPOWER/OLS2000A/OLS2000A-p.PNG" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 to-gray-900/5"></div>
                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Energía & UPS</h3>
                        </a>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-gray-200 h-auto md:h-full flex flex-col">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="{{ asset('img/servicios/personal.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-900/5"></div>
                        <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Controles de acceso y asistencia personal</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection