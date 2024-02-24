<section class="seccion mt-8">
    <h2 class="antialiased text-4xl text-center font-semibold text-blue-900">Nuestros Servicios</h2>
    <div class="container px-6 py-4 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($servicios as $index => $servicio)
                <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group {{$index == 2 ? 'hidden md:block' : ''}}"
                    style="background-image:url('{{ asset($servicio['imagen']) }}')">
                    <div class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                        <h2 class="mt-4 text-xl font-semibold text-white capitalize">{{ $servicio['titulo'] }}</h2>
                        <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase">{{ $servicio['descripcion'] }}</p>
                    </div>
                </div>
            @endforeach

            @if (count($servicios) % 2 != 0)
                <!-- Agregar columna adicional con SVG solo si la cantidad total de servicios no es múltiplo de 3 -->
                <div class="relative overflow-hidden rounded-lg h-96 lg:hidden">
                    <div class="flex items-center justify-center w-full h-full">
                        <img src="{{ asset('svg/programmin.svg') }}" alt="Programmin SVG">
                        <p class="hidden md:inline-block  absolute -bottom-2 md:bottom-2 left-0 right-0 text-center font-semibold text-blue-800 text-xl filter drop-shadow-sm">Confianza y Calidad en los Servicios</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
