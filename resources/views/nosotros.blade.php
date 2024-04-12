@extends('layout.app')
@section('titulo')
    Nosotros
@endsection
@section('contenido')
<section id="about" class="relative bg-white overflow-hidden seccion">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-20 flex flex-col lg:flex-row items-center">
       
        <div class="lg:w-1/2">
            <div class="max-w-3xl mx-auto">
                <div class="md:text-center lg:text-left">
                    <livewire:text-animation :texto="'Sobre nosotros'" />

                    <p class="my-6 text-start font-medium tracking-tight text-gray-700 xl:mb-6">
                        En Siccoms, nos enorgullece contar con más de una década de experiencia en la prestación
                        de
                        servicios integrales de consultoría en una amplia gama de áreas, incluyendo asuntos
                        jurídicos,
                        tecnologías de la información, electrónica y automatización, desarrollo de software,
                        arquitectura
                        y construcción, bienes raíces y asesoría especializada en geociencia. Nos destacamos por
                        fortalecer
                        tanto a empresas nacionales como extranjeras, ofreciendo soluciones de alta calidad y
                        estratégicas,
                        respaldadas por un equipo de especialistas profesionales comprometidos tanto legal como
                        moralmente
                        con el éxito de nuestros clientes.
                    </p>
                    <div class="mt-10">
                        <livewire:acordion-text />
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 lg:ml-10 my-4 md:mb-0">
            <picture>
                <source srcset="{{ asset('img/imagen-siccoms.webp') }}" type="image/webp">
                <img class="h-auto w-full object-cover lg:h-full lg:w-full rounded-lg shadow-lg" 
                     src="{{ asset('img/imagen-siccoms.jpg') }}" 
                     alt="Imagen de la empresa" 
                     loading="lazy">
            </picture>
        </div>        
    </div>
</section>

    {{-- GRID DE TIMELINE --}}
    <div class="w-full bg-gray-600 border-t mt-6"></div>
    <h2 class="text-center nuestros-servicios group-date">PERFIL DE LA EMPRESA</h2>

    <section class="container mx-auto px-4 py-8 lg:py-12">

        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">

                    <span class="timeline-date">2007</span>
                    <h3 class="timeline-title">Inicio de SICCOMS</h3>
                    <p class="text-gray-600">Nace en la identificación de las necesidades del mercado local en
                        consultoría y capacitación
                        para la industria energética</p>

                </div>

            </div>
        </div>
        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">

                    <span class="timeline-date">2013</span>
                    <h3 class="timeline-title">Se consolida SICCOMS</h3>
                    <p class="text-gray-600">En alianza con la empresa Geo Development Services Ltd, de Reino Unido da
                        inicio a la
                        comercialización de soluciones tecnológicas para el sector energético.</p>

                </div>

            </div>
        </div>
        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">

                    <span class="timeline-date">2013</span>
                    <h3 class="timeline-title">Alianza en el Sector Jurídico Legal</h3>
                    <p class="text-gray-600">En alianza con la firma Viveros Romero Abogados, se logra la integración de
                        soluciones legales
                        en sus diferentes áreas en el sector Oil and Gas con soporte jurídico a empresas nacionales y
                        extranjeras.</p>

                </div>

            </div>
        </div>
        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">
                   
                        <span class="timeline-date">2014</span>
                        <h3 class="timeline-title">Alianza consultoría contratos internaciones y registro de marcas</h3>
                        <p>En alianza con especialistas en análisis y elaboración de contratos
                            internacionales así como
                            registros de marcas y propiedad intelectual.</p>
                    
                </div>
                
            </div>
        </div>
        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">
                   
                        <span class="timeline-date">2014</span>
                        <h3 class="timeline-title">Alianza bienes raíces</h3>
                        <p>Asesoría y comercialización bienes raíces (Capital Lera).</p>
                    
                </div>
               
            </div>
        </div>
        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">
                    
                        <span class="timeline-date">2018</span>
                        <h3 class="timeline-title">Alianza desarrollo inmobiliario.</h3>
                        <p>Proyectos de arquitectura y construcción (Grupo Villas)</p>
                  
                </div>
                
            </div>
        </div>
        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">
                    
                        <span class="timeline-date">2019</span>
                        <h3 class="timeline-title">Implementación de los servicios en tecnologías de la información y
                            seguridad</h3>
                        <p>La integración de soluciones tecnológicas proveyendo servicios de seguridad electrónica,
                            automatización, ingeniería de software, tecnologías de la información y soporte especializado.
                        </p>
                    
                </div>
                
            </div>
        </div>
        <div class="timeline">
            <div class="relative flex items-start">
                <div class="dot" title="Evento ocurrido">
                    <div class="dot-circle"></div>
                    <div class="dot-animation"></div>
                </div>
                <div class="pl-10">
                    
                        <span class="timeline-date">2024</span>
                        <h3 class="timeline-title">ACTUALMENTE</h3>
                        <p>SICCOMS sigue en transformación a la digitalización empresarial para optimizar todos los
                            procesos y así mejorar la calidad de servicio hacía clientes y colaboradores</p>
                   
                </div>
                
            </div>
        </div>
        

    </section>
@endsection
