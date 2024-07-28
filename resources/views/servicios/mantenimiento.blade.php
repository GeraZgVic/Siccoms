@extends('layout.servicio')

@section('titulo', 'Mantenimiento')

@section('description')
    Servicio de mantenimiento equipo de computo
@endsection

@section('contenido')
    <section class="px-6 py-12">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4">Mantenimiento de equipo de cómputo</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">Contamos con amplia experiencia en mantenimiento de equipos
                de cómputo y servidores.</p>
        </div>

        <div class="px-6 py-16 mx-auto bg-white">
            <div class="max-w-3xl mx-auto text-center">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="p-6 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Mantenimiento Preventivo</h3>
                        <p class="text-gray-700 leading-relaxed">
                            El mantenimiento preventivo es crucial para evitar fallos y maximizar la vida útil de tus
                            equipos. Realizamos inspecciones regulares y mantenimiento preventivo para asegurar un
                            rendimiento óptimo.
                        </p>
                    </div>
                    <div
                        class="p-6 bg-gray-100 rounded-lg shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Mantenimiento Correctivo</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Cuando surgen problemas, nuestro equipo técnico está listo para proporcionar soluciones rápidas
                            y efectivas. Diagnosticamos y reparamos equipos de manera eficiente para minimizar tiempos de
                            inactividad.
                        </p>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#"
                        class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contacta
                        con Nosotros</a>
                </div>
            </div>
        </div>
    </section>



    <div class="px-6 py-16 mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-between bg-gray-100">
        <section class="text-center lg:text-left lg:w-1/2 lg:pr-12">
            <h2 class="text-2xl md:text-3xl pl-2 my-2 border-l-4 border-teal-400 text-gray-800 font-bold animate-top">
                Optimiza el rendimiento de tu equipo con nuestro servicio de mantenimiento
            </h2>
            <p class="text-lg text-gray-700 my-4 animate-bottom">
                Nuestros técnicos especializados están equipados con las herramientas y conocimientos necesarios para
                mantener tu equipo de cómputo funcionando de manera óptima. Ya sea para PCs, laptops o servidores,
                garantizamos un servicio profesional y confiable.
            </p>
        </section>
        <div class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0">
            <img src="{{ asset('img/content-desarrollo1.jpg') }}" alt="Mantenimiento de Equipos"
                class="w-full h-auto object-cover rounded-lg shadow-md animate-right animate-duration-[3000ms]">
        </div>
    </div>

    <section class="px-6 py-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Beneficios de Nuestro Servicio de
                Mantenimiento</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-gray-100 rounded-lg p-6 flex items-center shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <div class="bg-teal-500 rounded-full p-4">
                        <svg class="h-12 w-12 text-gray-100" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="3 17 9 11 13 15 21 7" />
                            <polyline points="14 7 21 7 21 14" />
                        </svg>
                    </div>
                    <div class="ml-6 ">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Incremento de la Productividad</h3>
                        <p class="text-gray-700 leading-relaxed">Mantener tu equipo en óptimas condiciones reduce el riesgo
                            de
                            interrupciones no planificadas y aumenta la eficiencia operativa.</p>
                    </div>
                </div>

                <div
                    class="bg-gray-100 rounded-lg p-6 flex items-center shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <div class="bg-teal-500 rounded-full p-4">
                        <svg class="h-12 w-12 text-gray-100" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                            <path d="M12 3v3m0 12v3" />
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ahorro de Costos</h3>
                        <p class="text-gray-700 leading-relaxed">Evita gastos mayores por reparaciones urgentes o pérdida de
                            datos críticos al mantener tus equipos de manera regular.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#"
                    class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-8 rounded-lg shadow-md transition duration-300">Solicita
                    una Evaluación Gratuita</a>
            </div>
        </div>
    </section>


    <section class="px-6 py-16 bg-gray-200">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8 text-center">Preguntas Frecuentes</h2>
    
            <div class="space-y-6">
                <!-- Pregunta 1 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Qué tipos de equipos de cómputo ofrecen mantenimiento?</h3>
                    <p class="text-gray-700 leading-relaxed">Ofrecemos mantenimiento para computadoras de escritorio, laptops, servidores y periféricos relacionados.</p>
                </div>
    
                <!-- Pregunta 2 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Cuáles son los beneficios de un contrato de mantenimiento?</h3>
                    <p class="text-gray-700 leading-relaxed">Los contratos de mantenimiento garantizan atención prioritaria, visitas periódicas de mantenimiento preventivo, y soporte técnico especializado, lo que ayuda a minimizar tiempos de inactividad y reduce costos imprevistos.</p>
                </div>
    
                <!-- Pregunta 3 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Cómo puedo solicitar servicio de mantenimiento?</h3>
                    <p class="text-gray-700 leading-relaxed">Puedes solicitar una evaluación gratuita a través de nuestro formulario en línea o contactándonos directamente por teléfono, WhatsApp o correo electrónico.</p>
                </div>
    
                <!-- Pregunta 4 -->
                <div class="bg-white rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">¿Qué incluye un mantenimiento preventivo?</h3>
                    <p class="text-gray-700 leading-relaxed">El mantenimiento preventivo incluye limpieza interna y externa de equipos, actualización de software, verificación de hardware, y ajustes de rendimiento para mantener tu equipo funcionando de manera óptima.</p>
                </div>
            </div>
        </div>
    </section>
    
@endsection
