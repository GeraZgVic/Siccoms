@extends('layout.servicio')

@section('titulo', 'Consultoría Tecnológica')

@section('description')
    Consultoría Tecnológica Siccoms
@endsection

@section('contenido')
    <div class="relative bg-white overflow-hidden h-[60vh]">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover"
                src="{{asset('img/consultoria-tecnologica.jpg')}}"
                alt="Consultoría Tecnológica">
            <div class="absolute inset-0 bg-indigo-600 mix-blend-multiply" aria-hidden="true"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-16 px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-white tracking-wide uppercase">Servicios Siccoms</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Consultoría Tecnológica
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-200 lg:mx-auto">
                    Brindamos soluciones tecnológicas adaptadas a las necesidades de tu negocio.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-white py-16 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="mt-10">
                <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-8">
                    <div class="flex flex-col items-center text-center">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-green-500" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <rect x="4" y="4" width="16" height="16" rx="2" />
                                <path d="M9 12l2 2l4 -4" />
                            </svg>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Consultoría Especializada</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Soluciones personalizadas para optimizar tus procesos tecnológicos.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-blue-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="23 4 23 10 17 10" />
                                <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10" />
                            </svg>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Análisis y Diagnóstico</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Evaluamos y diagnosticamos el estado de tus sistemas para mejorar su rendimiento.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>

                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Implementación de Soluciones</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Integración de nuevas tecnologías para mantener tu negocio a la vanguardia.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Soporte Continuo</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Aseguramos el funcionamiento óptimo de tus sistemas con soporte técnico constante.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-blue-500" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path
                                    d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                            </svg>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Ciberseguridad</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Protección integral de tus datos y sistemas frente a amenazas cibernéticas.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col items-center text-center">
                        <div class="flex-shrink-0">
                            <svg class="h-8 w-8 text-orange-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <polyline points="17 11 19 13 23 9" />
                            </svg>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Optimización y Mantenimiento</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Servicios continuos para asegurar el máximo rendimiento y disponibilidad de tus sistemas
                                tecnológicos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-indigo-600 py-16 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-base font-semibold text-white tracking-wide uppercase">Listo Para Transformar Tu Negocio?</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                Contáctanos Hoy Mismo
            </p>
            <p class="mt-4 text-xl text-gray-200">
                Obtén una consulta gratuita y descubre cómo podemos ayudarte a alcanzar tus objetivos tecnológicos.
            </p>
            <div class="mt-8">
                <a href="https://wa.me/9932910217" 
                target="_blank" 
                rel="noopener noreferrer"
                aria-label="Enviar WhatsApp"
                title="Enviar mensaje de WhatsApp" class="inline-block bg-white text-indigo-600 font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-gray-100">Solicitar Consulta</a>
            </div>
        </div>
    </div>
    
@endsection
