@extends('layout.guest')

@section('titulo')
    Principal
@endsection


@section('contenido')
    <livewire:card-component />

    <div class="flex justify-end mx-6 mt-4 seccion">
        <a href="#"
            class="inline-block bg-gradient-to-r
        from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
            Ver más servicios
        </a>
    </div>

    <div class="mt-10 bg-gradient-to-br from-blue-700 via-blue-800 to-blue-500 py-28 relative seccion">
        <div
            class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center items-center">
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer ">
                <h3 class="filter drop-shadow-lg text-cyan-200 font-bold text-4xl md:text-5xl ">1000+</h3>
                <p class="text-white font-semibold text-xl md:text-2xl">Ordenes de Servicio</p>
                <p class="font-light text-gray-200 text-lg md:text-xl">Realizadas</p>
            </div>
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer">
                <h3 class="filter drop-shadow-lg text-cyan-200  font-bold text-4xl md:text-5xl">189+</h3>
                <p class="filter drop-shadow-lg text-white font-semibold text-xl md:text-2xl">Clientes</p>
                <p class="filter drop-shadow-lg font-light text-gray-200 text-lg md:text-xl">Satisfechos</p>
            </div>
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer">
                <h3 class="filter drop-shadow-lg text-cyan-200  font-bold text-4xl md:text-5xl">10+</h3>
                <p class="filter drop-shadow-lg text-white font-semibold text-xl md:text-2xl">Proyectos</p>
                <p class="filter drop-shadow-lg font-light text-gray-200 text-lg md:text-xl">Ejecutados</p>
            </div>
            <div class="px-4 mb-8 md:mb-0 text-center transition duration-300 hover:scale-110 cursor-pointer">
                <h3 class="filter drop-shadow-lg text-cyan-200  font-bold text-4xl md:text-5xl">1500+</h3>
                <p class="filter drop-shadow-lg text-white font-semibold text-xl md:text-2xl">Productos</p>
                <p class="filter drop-shadow-lg font-light text-gray-200 text-lg md:text-xl">Ofertados</p>
            </div>
            <!-- Primer círculo decorativo -->
            <div
                class="absolute bottom-3 left-3 h-16 w-16 rounded-full bg-white bg-gradient-to-b from-white to-indigo-600 opacity-20">
            </div>
            <!-- Segundo círculo decorativo -->
            <div
                class="absolute top-4 left-1/2 transform -translate-x-1/2 h-20 w-20 rounded-full bg-white bg-gradient-to-b from-white to-indigo-600 opacity-20">
            </div>
            <!-- Tercer círculo decorativo -->
            <div
                class="absolute bottom-2 right-8 h-12 w-12 rounded-full bg-white bg-gradient-to-b from-white to-indigo-600 opacity-20">
            </div>

        </div>
    </div>

    {{-- GALERIA DE IMAGENES --}}
    <div class="my-10 seccion">
        <div class="max-w-4xl mx-auto px-8 py-9 text-center">
            <h2 class="text-4xl font-semibold text-blue-900 mb-4">Nuestros Trabajos</h2>
            <p class="text-lg text-gray-700 mb-6">Una imagen vale más que mil palabras. Nos gusta realizar trabajos con tecnología de vanguardia y moderna. Explore nuestra galería de trabajos realizados antes de contratarnos.</p>
        </div>
        <livewire:image-gallery />
    </div>

    {{-- Clientes --}}
    <div class="my-10 seccion">
        <div class="max-w-4xl mx-auto px-8 py-9 text-center">
            <h2 class="text-4xl font-semibold text-blue-900 mb-4 capitalize">Algunos de Nuestros Clientes</h2>
            <p class="text-lg text-gray-700 mb-6">Una imagen vale más que mil palabras. Nos gusta realizar trabajos con tecnología de vanguardia y moderna. Explore nuestra galería de trabajos realizados antes de contratarnos.</p>
        </div>
        <livewire:slide-infinito />
    </div>

    {{-- Testimoniales --}}
    <section class="flex items-center justify-center py-8 bg-white min-w-screen">
        <div class="px-16 bg-white">
            <div class="container flex flex-col items-start mx-auto lg:items-center">
                <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-blue-500 uppercase lg:justify-center lg:items-center" data-primary="purple-500">No te conformes solo con nuestra palabra</p>
    
    
                <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block"
                    viewBox="0 0 975.036 975.036">
                    <path
                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                    </path>
                </svg>
                Descubre lo que dicen los demás</h2>
                    <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full" data-primary="purple-600"></div>
    
                <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                    <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1700&q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Víctor Zg</h4>
                                <p class="text-gray-600">CEO de Gamboys Company</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Esto es una obviedad si desea llevar su negocio al siguiente nivel. Si está buscando el conjunto de herramientas definitivo, ¡aquí lo tiene!"</blockquote>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="https://concepto.de/wp-content/uploads/2014/03/modelo-e1551453273683.jpg"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Carolina Herrera</h4>
                                <p class="text-gray-600">CTO de Lugares Seguros</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Gracias por crear este servicio. Mi vida es mucho más fácil. Gracias por crear un producto tan fantástico".</blockquote>
                    </div>
                    <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Elon_Musk_Colorado_2022_%28cropped2%29.jpg/800px-Elon_Musk_Colorado_2022_%28cropped2%29.jpg"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Elon Musk</h4>
                                <p class="text-gray-600">Creator Space X</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Repleto de contenido increíble y exactamente lo que estaba buscando. Se lo recomendaría a cualquiera".</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection
