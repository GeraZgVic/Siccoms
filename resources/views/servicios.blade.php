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
                        <li class="mb-2 hover:text-neon-teal">Ciberseguridad</li>
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
                        <li class="mb-2 hover:text-neon-teal">Digitalización empresarial</li>
                        <li class="mb-2 hover:text-neon-teal">Administración de Bases de Datos</li>
                        <li class="mb-2 hover:text-neon-teal">Modelado de Datos</li>
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
    
    
    
@endsection
