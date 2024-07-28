@extends('layout.servicio')

@section('titulo', 'Ciberseguridad - Seguridad en la Red')

@section('description')
    Ciberseguridad - Seguridad en la Red | Siccoms
@endsection

@section('contenido')
    <section class="px-6 py-12 bg-gray-100">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Ciberseguridad</h1>
            <p class="text-lg md:text-xl leading-relaxed mb-6">
                Protege tu infraestructura digital con nuestras soluciones de seguridad en redes, protección con firewalls, y más. En Siccoms, nos especializamos en garantizar la seguridad de tus datos y la integridad de tu red.
            </p>
        </div>
    </section>

    <section class="px-6 py-16 bg-white">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Nuestros Servicios</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-12">
                Ofrecemos una amplia gama de servicios de ciberseguridad adaptados a tus necesidades. Desde la protección de tu red con firewalls avanzados hasta la implementación de sistemas de detección de intrusos, estamos aquí para mantener tu infraestructura digital segura y eficiente.
            </p>
            <div class="space-y-8">
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Seguridad en Redes</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Protege tus redes empresariales con nuestras soluciones de seguridad de red. Implementamos medidas avanzadas para prevenir accesos no autorizados y asegurar la comunicación interna.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://images.unsplash.com/photo-1660644807802-497b674c6ac2?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Seguridad en Redes" class="w-full h-auto object-cover rounded-lg shadow-md">
                    </div>
                </div>
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Protección con Firewalls</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Utilizamos firewalls de última generación para proteger tu red contra amenazas externas. Configuramos y gestionamos firewalls que se adaptan a tus necesidades específicas.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://ftp3.syscom.mx/usuarios/fotos/BancoFotografiasSyscom/RUIJIE/RGWALL1600Z3200S/RGWALL1600Z3200S-p.PNG" alt="Protección con Firewalls" class="w-full h-[20rem] object-cover rounded-lg shadow-md">
                    </div>
                </div>
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Detección de Intrusos</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Implementamos sistemas de detección de intrusos que monitorean constantemente tu red en busca de actividades sospechosas. Detecta y responde a amenazas en tiempo real.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://cdn.leonardo.ai/users/e9014ad2-8f64-4737-9abe-f845064b1347/generations/8538e0af-ec0b-408d-95cd-edd9fa1b65a1/Default_Create_a_hauntingly_detailed_image_of_a_futuristic_rob_0.jpg" alt="Detección de Intrusos" class="w-full h-[20rem] object-cover rounded-lg shadow-md">
                    </div>
                </div>
                <div class="flex flex-col gap-2 md:flex-row items-center bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="md:w-1/2 mb-4 md:mb-0">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Consultoría en Seguridad</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Nuestro equipo de expertos ofrece consultoría en seguridad para ayudarte a identificar vulnerabilidades y diseñar una estrategia de seguridad efectiva y personalizada.
                        </p>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://cdn.leonardo.ai/users/e9014ad2-8f64-4737-9abe-f845064b1347/generations/cf2cc9e3-9f53-4c0e-a548-7538d102f0ea/Default_Create_an_image_related_to_the_following_informationSe_2.jpg" alt="Consultoría en Seguridad" class="w-full h-[20rem] object-cover rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 py-16 bg-gray-900 text-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">Por qué Elegir Siccoms</h2>
            <p class="text-lg leading-relaxed mb-8">
                En Siccoms, nos comprometemos a ofrecer soluciones de ciberseguridad que se adaptan a las necesidades específicas de tu empresa. Nuestro enfoque proactivo y nuestras tecnologías avanzadas garantizan que tu infraestructura digital esté siempre protegida.
            </p>
            <a href="#contact"
               class="inline-block bg-teal-500 hover:bg-teal-600 text-white font-bold py-3 px-6 rounded-lg shadow-md transition duration-300">Contáctanos</a>
        </div>
    </section>
@endsection
