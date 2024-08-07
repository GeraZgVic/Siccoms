@extends('layout.servicio')

@section('titulo', 'Mantenimiento')

@section('description')
    Servicio de mantenimiento equipo de computo
@endsection

@section('contenido')
    <section class="px-6 py-12">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4 font-mulish-bold">Mantenimiento de
                equipo de cómputo y Servidores</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">Contamos con amplia experiencia en mantenimiento de equipos
                de cómputo y servidores.</p>
        </div>

        <div class="px-6 py-16 mx-auto bg-white">
            <div class="max-w-3xl mx-auto text-center">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="p-6 border border-gray-200 rounded-lg transition duration-300 hover:scale-105 cursor-pointer">
                        <img class="object-cover object-center w-full h-56 rounded-md" src="{{ asset('img/mantenimiento_preventivo.jpg') }}"
                        alt="Mantenimiento Preventivo">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-600 my-4">Mantenimiento Preventivo</h3>
                        <p class="text-gray-700 leading-relaxed">
                            El mantenimiento preventivo es crucial para evitar fallos y maximizar la vida útil de tus
                            equipos. Realizamos inspecciones regulares y mantenimiento preventivo para asegurar un
                            rendimiento óptimo.
                        </p>
                    </div>
                    <div
                        class="p-6 border border-gray-200 rounded-lg shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                        <img class="object-cover object-center w-full h-56 rounded-md" src="{{ asset('img/mantenimiento_correctivo.jpg') }}"
                        alt="Mantenimiento Correctivo">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Mantenimiento Correctivo</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Cuando surgen problemas, nuestro equipo técnico está listo para proporcionar soluciones rápidas
                            y efectivas. Diagnosticamos y reparamos equipos de manera eficiente para minimizar tiempos de
                            inactividad.
                        </p>
                    </div>
                </div>

                <section class="my-8 px-8 mx-auto">
                    <h2 class="text-3xl tracking-tighter text-gray-700 lg:text-4xl font-bold text-center mb-8">Te brindamos
                    </h2>
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                        <!-- Card 1: Respaldo -->
                        <div class="bg-white rounded-lg shadow-lg p-6 transition duration-300 hover:bg-gray-200 hover:scale-105 cursor-pointer">
                            <h3 class="text-xl font-semibold text-gray-700 mb-2">Respaldo</h3>
                            <p class="text-gray-600">Protege tus datos importantes con un respaldo seguro y confiable.</p>
                        </div>

                        <!-- Card 2: Formateo -->
                        <div class="bg-white rounded-lg shadow-lg p-6 transition duration-300 hover:bg-gray-200 hover:scale-105 cursor-pointer">
                            <h3 class="text-xl font-semibold text-gray-700 mb-2">Formateo</h3>
                            <p class="text-gray-600">Optimiza el rendimiento de tu equipo con un formateo profesional.</p>
                        </div>

                        <!-- Card 3: Actualización -->
                        <div class="bg-white rounded-lg shadow-lg p-6 transition duration-300 hover:bg-gray-200 hover:scale-105 cursor-pointer">
                            <h3 class="text-xl font-semibold text-gray-700 mb-2">Actualización</h3>
                            <p class="text-gray-600">Mantén tu equipo al día con las últimas actualizaciones de software y
                                hardware.</p>
                        </div>
                    </div>
                    <div class="grid gap-6 md:grid-cols-2 mt-8 ">
                        <!-- Card 1: Cambio de Componentes -->
                        <div class="bg-white rounded-lg shadow-lg p-6 transition duration-300 hover:bg-gray-200 hover:scale-105 cursor-pointer">
                            <h3 class="text-xl font-semibold text-gray-700 mb-2">Cambio de Componentes</h3>
                            <p class="text-gray-600">Sustituye componentes defectuosos para prolongar la vida útil de tu
                                equipo.</p>
                        </div>

                        <!-- Card 2: Mantenimiento -->
                        <div class="bg-white rounded-lg shadow-lg p-6 transition duration-300 hover:bg-gray-200 hover:scale-105 cursor-pointer">
                            <h3 class="text-xl font-semibold text-gray-700 mb-2">Mantenimiento</h3>
                            <p class="text-gray-600">Realiza un mantenimiento preventivo para asegurar el buen
                                funcionamiento de tu equipo.</p>
                        </div>
                    </div>
                </section>


                <div class="mt-8">
                    <a href="{{ route('contacto.index') }}"
                        class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contacta
                        con Nosotros</a>
                </div>
            </div>
        </div>
    </section>



    <div class="px-6 py-16 mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-between bg-gray-100">
        <div class="lg:w-1/2 lg:pl-12 mt-6 lg:mt-0">
            <img src="{{ asset('img/mantenimiento.jpg') }}" alt="Mantenimiento de Equipos"
                class="w-auto h-auto object-cover rounded-lg shadow-md animate-right animate-duration-[3000ms]">
        </div>
        <section class="text-center lg:text-left lg:w-1/2 lg:pl-12">
            <h2 class="text-2xl md:text-3xl pl-2 my-2 border-l-4 border-teal-400 text-gray-800 font-bold animate-top">
                Optimiza el rendimiento de tu equipo con nuestro servicio de mantenimiento
            </h2>
            <p class="text-lg text-gray-700 my-4 animate-bottom">
                Nuestros técnicos especializados están equipados con las herramientas y conocimientos necesarios para
                mantener tu equipo de cómputo funcionando de manera óptima. Ya sea para PCs, laptops o servidores,
                garantizamos un servicio profesional y confiable.
            </p>
        </section>

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
                <a href="https://wa.me/9932910217" target="_blank" rel="noopener noreferrer" aria-label="Enviar WhatsApp"
                    title="Enviar mensaje de WhatsApp"
                    class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-8 rounded-lg shadow-md transition duration-300">Solicita
                    una Evaluación</a>
            </div>
        </div>
    </section>


    <section class="px-6 py-16 bg-slate-900">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-100 mb-8 text-center">Preguntas Frecuentes</h2>

            <div class="space-y-6">
                <!-- Pregunta 1 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Qué tipos de equipos de cómputo ofrecen mantenimiento?
                    </h3>
                    <p class="text-gray-200 leading-relaxed">Ofrecemos mantenimiento para computadoras de escritorio,
                        laptops, servidores y periféricos relacionados.</p>
                </div>

                <!-- Pregunta 2 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Cuáles son los beneficios de un contrato de
                        mantenimiento?</h3>
                    <p class="text-gray-200 leading-relaxed">Los contratos de mantenimiento garantizan atención prioritaria,
                        visitas periódicas de mantenimiento preventivo, y soporte técnico especializado, lo que ayuda a
                        minimizar tiempos de inactividad y reduce costos imprevistos.</p>
                </div>

                <!-- Pregunta 3 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Cómo puedo solicitar servicio de mantenimiento?</h3>
                    <p class="text-gray-200 leading-relaxed">Puedes solicitar una evaluación gratuita a través de nuestro
                        formulario en línea o contactándonos directamente por teléfono, WhatsApp o correo electrónico.</p>
                </div>

                <!-- Pregunta 4 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Qué incluye un mantenimiento preventivo?</h3>
                    <p class="text-gray-200 leading-relaxed">El mantenimiento preventivo incluye limpieza interna y externa
                        de equipos, actualización de software, verificación de hardware, y ajustes de rendimiento para
                        mantener tu equipo funcionando de manera óptima.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
