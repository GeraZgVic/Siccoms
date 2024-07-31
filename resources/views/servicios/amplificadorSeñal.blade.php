@extends('layout.servicio')

@section('titulo', 'Amplificadores de Señal Celular Doble Banda - Soluciones de Conectividad')

@section('description')
    Amplificadores de Señal Celular Doble Banda - Soluciones de Conectividad | Siccoms
@endsection

@section('contenido')
    <section class="px-6 py-12 bg-gray-100">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Amplificadores de Señal Celular Doble Banda</h1>
            <p class="text-lg md:text-xl leading-relaxed mb-6">
                Optimiza la cobertura de tu red celular con nuestros amplificadores de señal doble banda de alta calidad. En Siccoms, ofrecemos soluciones efectivas que mejoran la estabilidad y el alcance de la señal en áreas con cobertura deficiente.
            </p>
        </div>
    </section>
    <section class="px-6 py-16 bg-gray-900 text-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">Por qué Elegir Siccoms</h2>
            <p class="text-lg leading-relaxed mb-8">
                En Siccoms, no solo ofrecemos amplificadores de señal celular de doble banda de la más alta calidad, sino que también garantizamos una instalación profesional y un soporte técnico experto. Nuestro enfoque integral asegura una cobertura efectiva y sin interrupciones para todos tus dispositivos móviles. Además, cumplimos con todas las normativas locales para el uso de amplificadores de señal.
            </p>
            <a href="{{route('contacto.index')}}"
               class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contáctanos</a>
        </div>
    </section>

    <section class="px-6 py-16 bg-white">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Nuestros Servicios</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-12">
                Proporcionamos una gama completa de servicios para amplificadores de señal celular doble banda, desde la venta hasta la instalación profesional. Nuestros expertos aseguran que la señal de tus dispositivos sea fuerte y estable en cualquier rincón de tu hogar o negocio.
            </p>
            
            <div class="space-y-8">
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Amplificadores de Señal Doble Banda</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Nuestros amplificadores de señal celular doble banda están diseñados para operar en bandas específicas como 800 MHz y 1900 MHz, garantizando una cobertura óptima para tus dispositivos móviles. Ideales para mejorar la señal en áreas con mala recepción, estos dispositivos aseguran comunicación clara y rápida. También ofrecen beneficios como la reducción de interferencias y un aumento en la velocidad de datos.
                        </p>
                       
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://ftp3.syscom.mx/usuarios/fotos/BancoFotografiasSyscom/EPCOM/EPDB3G/EPDB3G-l.PNG" alt="Amplificadores de Señal Celular Doble Banda" class="w-full h-auto object-cover rounded-lg shadow-sm">
                    </div>
                </div>
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Instalación Profesional</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Contamos con un equipo de técnicos especializados en la instalación de amplificadores de señal. Nos aseguramos de que cada dispositivo esté correctamente configurado y optimizado para ofrecer el mejor rendimiento en tu espacio. Ofrecemos soporte continuo y mantenimiento para asegurar que tu sistema de señal siga funcionando sin problemas.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="{{asset('img/instalacion.jpg')}}" alt="Instalación Profesional" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="px-6 py-16 bg-slate-900">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-100 mb-8 text-center">Preguntas Frecuentes</h2>
    
            <div class="space-y-6">
                <!-- Pregunta 1 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Qué bandas de frecuencia cubren estos amplificadores?</h3>
                    <p class="text-gray-200 leading-relaxed">
                        Nuestros amplificadores de señal doble banda están diseñados para operar en frecuencias específicas como 800 MHz y 1900 MHz, entre otras. Esto asegura una cobertura efectiva en áreas con señal débil, optimizando la recepción para tus dispositivos móviles.
                    </p>
                </div>
    
                <!-- Pregunta 2 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Cómo se instala un amplificador de señal?</h3>
                    <p class="text-gray-200 leading-relaxed">
                        La instalación de un amplificador de señal implica colocar una antena externa en un lugar con buena recepción, conectar el amplificador y distribuir la señal amplificada mediante antenas internas. Ofrecemos servicios profesionales de instalación para asegurar el rendimiento óptimo del dispositivo.
                    </p>
                </div>
    
                <!-- Pregunta 3 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Necesito permisos especiales para usar un amplificador de señal?</h3>
                    <p class="text-gray-200 leading-relaxed">
                        En algunos países, el uso de amplificadores de señal está regulado para evitar interferencias con las redes celulares. Nos aseguramos de que nuestros dispositivos cumplan con las normativas locales para evitar cualquier problema legal.
                    </p>
                </div>
    
                <!-- Pregunta 4 -->
                <div class="bg-slate-800 rounded-lg p-6 shadow-md transition duration-300 hover:scale-105 cursor-pointer">
                    <h3 class="text-xl font-bold text-gray-100 mb-2">¿Cuál es el alcance de un amplificador de señal celular doble banda?</h3>
                    <p class="text-gray-200 leading-relaxed">
                        El alcance de un amplificador de señal celular doble banda varía según el modelo y la instalación. Generalmente, estos amplificadores pueden cubrir áreas de hasta [indicar metros cuadrados] en condiciones ideales. Para espacios más grandes, puede ser necesario usar múltiples unidades o sistemas de distribución adicionales.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
@endsection
