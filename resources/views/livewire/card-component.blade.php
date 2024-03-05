<section class="seccion mt-8">
    <h2 class="antialiased text-4xl text-center font-semibold text-blue-900 nuestros-servicios">Nuestros Servicios</h2>
    <div class="container px-6 py-4 mx-auto">
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($servicios as $index => $servicio)
                <div class="flex justify-center">
                    <div class="group h-96 w-96 perspective-1000">
                        <div class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                            <div class="absolute inset-0 bg-cover bg-center rounded-xl" style="background-image: url('{{ $servicio['imagen'] }}');">
                            </div>
                            <div class="absolute inset-0 h-full w-full rounded-xl bg-black/80 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden] transition-all duration-500 opacity-0 group-hover:opacity-100">
                                <div class="flex h-full flex-col items-center justify-center">
                                    <h1 class="text-3xl font-bold">{{ $servicio['titulo'] }}</h1>
                                    <p class="mt-2">{{ $servicio['descripcion'] }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>        
    </div>
</section>
