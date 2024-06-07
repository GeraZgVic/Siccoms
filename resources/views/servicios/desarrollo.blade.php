@extends('layout.servicio')

@section('titulo')
    Servicio de desarrollo web y sistemas
@endsection

@section('description')
    Servicio de desarrollo personalizado
@endsection

@section('contenido')
    <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-8 container px-6 py-12 mx-auto">
        <div>
            <livewire:text-animation texto="Área de Desarrollo" />
            <section>
                <h2 class="text-2xl font-bold mb-4 text-gray-700">¡Bienvenidos a SICCOMS!
                </h2>
                <p class="mb-8">¿Estás buscando un equipo de expertos en desarrollo web y desarrollo de sistemas que pueda
                    llevar tu proyecto al siguiente nivel? ¡No busques más!</p>
                <ul class="list-none mb-6 space-y-3">
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#0000FF" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide">Diseño Personalizado</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#0000FF" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide">Gestión Eficiente de Geocercas para Seguridad y
                            Eficiencia</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#0000FF" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide">Optimización de Procesos: Planificación, Coordinación y
                            Monitoreo
                            Simplificados</span>
                    </li>
                </ul>
                <p class="mb-8">¡Mejora la eficiencia de tu flotilla hoy mismo con nuestro servicio de Rastreo GPS!</p>
            </section>
        </div>
        <div>
            <img src="{{ asset('img/hero-desarrollo.jpg') }}" alt="GPS WEB" class="w-full h-auto rounded-lg">

        </div>
    </div> -->

    <!-- Segunda opcion -->

    <section class="flex flex-col md:flex-row items-center bg-white overflow-hidden mx-auto px-6 py-12">
        <div class="md:w-1/2">
            <div class="capitalize text-xs font-bold text-gray-500 mb-2 bg-gray-300 p-1 inline-block rounded-md">
                ¡Bienvenidos a SICCOMS!</div>
            {{-- <livewire:text-animation texto="Nuestra Área de Desarrollo" /> --}}
            <h1 class="pb-4 text-3xl md:text-4xl lg:text-6xl mb-2 md:m-0 font-bold text-gray-800">Área de Desarrollo</h1>

            <h2 class="text-lg text-gray-700 mb-6">
                <span class="font-bold text-gray-900">¡Hola mundo!</span> ¿Estás buscando un equipo de expertos en
                desarrollo web y desarrollo de sistemas que pueda llevar tu proyecto al siguiente nivel? ¡No busques
                más!
            </h2>
        </div>
        <div class="md:w-1/2">
            <img src="{{ asset('img/hero-desarrollo2.jpg') }}" alt="Forest image"
                class="w-full h-full object-cover rounded-lg shadow-md">
        </div>
    </section>


    <div class="px-6 pt-16 md:py-14 mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-between bg-black">
        <section class="">
            <h2 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-sans font-bold border-teal-400 text-white">Disponemos
                de las herramientas esenciales para impulsar
                tu éxito</h2>
            <div class="text-2xl text-gray-400 ">Nuestras poderosas y revolucionarias soluciones están
                específicamente diseñadas para potenciar el desarrollo web y optimizar sistemas, garantizando que tu
                negocio prospere en el entorno digital.</div>
        </section>
        <div class="">
            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=1738&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Desarrollo Web" class="object-center object-cover">
        </div>
    </div>


    <div class="container py-12 mx-auto">
        <!-- Desarrollo Web -->
        <div class="grid md:grid-cols-2 mb-12">
            <div class="w-full p-4">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Desarrollo Web</h3>
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 9.75h4.5m-4.5 3h4.5m-9 7.5h14.5a2 2 0 002-2V6.5a2 2 0 00-2-2H4.25a2 2 0 00-2 2v11.5a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class="text-lg font-semibold">Diseño Personalizado</p>
                            </div>
                            <p>Creamos sitios web a medida que se adaptan a la identidad de tu marca.</p>
                        </div>
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8.25h18m-18 7.5h18M9.75 3v18m4.5-18v18"></path>
                                </svg>
                                <p class="text-lg font-semibold">Responsive Design</p>
                            </div>
                            <p>Diseños que lucen increíbles en cualquier dispositivo.</p>
                        </div>
                        <div>
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.25 7.5h13.5m-13.5 4.5h13.5M5.25 16.5h13.5"></path>
                                </svg>
                                <p class="text-lg font-semibold">SEO Optimizado</p>
                            </div>
                            <p>Aumenta tu visibilidad en motores de búsqueda y atrae más tráfico orgánico.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-4">
                <img src="https://img.freepik.com/foto-gratis/experiencia-programacion-persona-que-trabaja-codigos-computadora_23-2150010125.jpg"
                    alt="Desarrollo Web" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        </div>

        <!-- Desarrollo de Sistemas -->
        <div class="grid md:grid-cols-2 mb-12">
            <div class="w-full order-2 md:order-1 p-4">
                <img src="https://img.freepik.com/foto-gratis/experiencia-programacion-persona-que-trabaja-codigos-computadora_23-2150010125.jpg"
                    alt="Desarrollo de Sistemas" class="w-full h-full object-cover rounded-lg shadow-md">
            </div>
        
            <div class="w-full order-1 md:order-2 p-4">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Desarrollo de Sistemas</h3>
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.25 6.75h7.5m-10.5 7.5h13.5m-13.5-7.5v7.5m0-7.5h13.5v7.5H4.25v7.5"></path>
                                </svg>
                                <p class="text-lg font-semibold">Sistemas a Medida</p>
                            </div>
                            <p>Soluciones diseñadas específicamente para satisfacer las necesidades únicas de tu
                                negocio.
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 8.25h12m-12 3.75h12m-12 3.75h12"></path>
                                </svg>
                                <p class="text-lg font-semibold">Integraciones</p>
                            </div>
                            <p>Conectamos tus sistemas con otras aplicaciones y plataformas para una operación más
                                fluida.
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 text-pink-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 15.75h12m-12-7.5h12M6 8.25h12"></path>
                                </svg>
                                <p class="text-lg font-semibold">Automatización</p>
                            </div>
                            <p>Mejoramos la eficiencia de tus procesos con automatización inteligente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
@endsection
