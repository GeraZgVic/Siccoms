<section class="seccion mt-8">
    <h2 class="antialiased text-4xl text-center font-semibold text-blue-900 nuestros-servicios">Nuestros Servicios</h2>
    <div class="container px-6 py-4 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($servicios as $index => $servicio)
                <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group {{$index == 2 ? 'hidden md:block' : ''}}"
                    style="background-image:url('{{ asset($servicio['imagen']) }}')">
                    <div class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/90 group-hover:opacity-100">
                        <h2 class="mt-4 text-xl font-bold text-white capitalize">{{ $servicio['titulo'] }}</h2>
                        <p class="mt-2 text-lg tracking-wider text-blue-300 uppercase font-light">{{ $servicio['descripcion'] }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
