@extends('layout.servicio')

@section('titulo', 'Venta de equipos de cómputo')

@section('description')
    Venta de equipos de cómputo - Distribuidores | Siccoms
@endsection

@section('contenido')
    <section class="px-6 py-12">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Venta de Equipos de Cómputo</h1>
            <p class="text-lg md:text-xl leading-relaxed mb-6">
                Somos distribuidores autorizados de equipos de cómputo y soluciones tecnológicas.
            </p>
        </div>
    </section>

    <section class="px-6 py-16 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Variedad de Productos</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Ofrecemos computadoras de escritorio, laptops y servidores de marcas reconocidas, adaptados para
                        todos los usuarios y necesidades.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Soporte Técnico Especializado</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Nuestro equipo de expertos está listo para ofrecer asesoramiento y configuración personalizada de
                        equipos.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Incremento de la Productividad</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Evita interrupciones no planificadas y aumenta la eficiencia operativa con nuestros equipos
                        confiables.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 cursor-pointer">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Ahorro de Costos</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Mantenimiento regular que previene reparaciones costosas y pérdida de datos.
                    </p>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="#contact"
                    class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contáctanos</a>
            </div>
        </div>
    </section>

    <section class="px-6 py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-1/2 lg:pr-12 mb-8 lg:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 border-l-4 border-teal-400 pl-4 mb-4">
                    Optimiza el rendimiento de tu equipo con nuestro servicio de mantenimiento
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    Nuestros técnicos especializados están equipados con las herramientas y conocimientos necesarios para
                    mantener tu equipo de cómputo funcionando de manera óptima. Garantizamos un servicio profesional y
                    confiable para PCs, laptops o servidores.
                </p>
                <a href="{{ route('servicios.mantenimiento') }}"
                    class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded transition duration-300">Ver
                    más</a>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('img/content-desarrollo1.jpg') }}" alt="Mantenimiento de Equipos"
                    class="w-full h-auto object-cover rounded-lg shadow-md">
            </div>
        </div>
    </section>

    <section class="px-6 py-16 bg-gradient-to-b from-gray-800 to-gray-900 text-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Explora Nuestras Marcas y Productos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Computadoras de Escritorio"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Computadoras de Escritorio</h3>
                        <p class="text-gray-300 leading-relaxed">Explora nuestra selección de computadoras de escritorio de
                            marcas reconocidas y configuraciones personalizadas.</p>
                        <a href="#"
                            class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded transition duration-300">Ver
                            más</a>
                    </div>
                </div>
                <div class="bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Laptops y Portátiles"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Laptops y Portátiles</h3>
                        <p class="text-gray-300 leading-relaxed">Descubre nuestras laptops y portátiles ideales para
                            negocios, gaming y uso personal, de marcas líderes en el mercado.</p>
                        <a href="#"
                            class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded transition duration-300">Ver
                            más</a>
                    </div>
                </div>
           
                <div class="bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Periféricos y Accesorios"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Periféricos y Accesorios</h3>
                        <p class="text-gray-300 leading-relaxed">Amplía la funcionalidad de tus equipos con nuestra gama de
                            periféricos y accesorios como monitores, teclados, y más.</p>
                        <a href="#"
                            class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded transition duration-300">Ver
                            más</a>
                    </div>
                </div>
                <div class="bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Software y Licencias"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Software y Licencias</h3>
                        <p class="text-gray-300 leading-relaxed">Optimiza tu rendimiento con software especializado y
                            licencias legítimas para todas tus necesidades empresariales y personales.</p>
                        <a href="#"
                            class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded transition duration-300">Ver
                            más</a>
                    </div>
                </div>
                <div class="bg-gray-700 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="https://via.placeholder.com/600x400" alt="Accesorios de Red y Conectividad"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Accesorios de Red y Conectividad</h3>
                        <p class="text-gray-300 leading-relaxed">Mantén tus equipos conectados y seguros con nuestros
                            accesorios de red y soluciones de conectividad.</p>
                        <a href="#"
                            class="inline-block mt-4 bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded transition duration-300">Ver
                            más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
