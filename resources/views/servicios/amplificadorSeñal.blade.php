@extends('layout.servicio')

@section('titulo', 'Amplificadores de Señal - Soluciones de Conectividad')

@section('description')
    Amplificadores de Señal - Soluciones de Conectividad | Siccoms
@endsection

@section('contenido')
    <section class="px-6 py-12 bg-gray-100">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Amplificadores de Señal</h1>
            <p class="text-lg md:text-xl leading-relaxed mb-6">
                Mejora la cobertura y estabilidad de tu red con nuestros amplificadores de señal de alta calidad. En Siccoms, no solo distribuimos estos dispositivos, sino que también ofrecemos servicios de instalación profesional para asegurar un rendimiento óptimo en tu infraestructura.
            </p>
        </div>
    </section>

    <section class="px-6 py-16 bg-white">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Nuestros Servicios</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-12">
                Ofrecemos una gama completa de servicios relacionados con amplificadores de señal, desde la venta hasta la instalación. Nuestros expertos se encargan de mejorar la cobertura y calidad de la señal en tus instalaciones, garantizando un rendimiento óptimo para tus equipos.
            </p>
            <div class="space-y-8">
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Amplificadores de Señal</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Distribuimos amplificadores de señal de alta calidad para mejorar la cobertura y estabilidad de tu red. Nuestros dispositivos están diseñados para asegurar que tu señal llegue a cada rincón de tu espacio de trabajo.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://via.placeholder.com/600x400" alt="Amplificadores de Señal" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Instalación Profesional</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Nuestro equipo realiza instalaciones profesionales de amplificadores de señal, asegurando que cada dispositivo esté correctamente configurado para ofrecer el mejor rendimiento posible.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://via.placeholder.com/600x400" alt="Instalación Profesional" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 py-16 bg-gray-900 text-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">Por qué Elegir Siccoms</h2>
            <p class="text-lg leading-relaxed mb-8">
                En Siccoms, no solo ofrecemos amplificadores de señal de alta calidad, sino que también nos aseguramos de que cada instalación esté realizada por expertos. Nuestro enfoque integral garantiza que tu red funcione con la máxima eficiencia y cobertura.
            </p>
            <a href="#contact"
               class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contáctanos</a>
        </div>
    </section>
@endsection
