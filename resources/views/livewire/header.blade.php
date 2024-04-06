<header class="w-full antialiased bg-cover bg-center bg-blend-overlay bg-fixed bg-black/60" style="background-image: url('/img/heros.jpg')">
    <div class="mx-auto">
        <livewire:navegation-menu />
        <div class="flex flex-col justify-center items-center h-screen px-6 text-center">
            {{-- Agregar fondo semi transparente gris oscuro --}}

            <h1 class="font-mulish-bold uppercase pb-2 text-left md:text-center text-6xl md:text-8xl font-extrabold bg-clip-text text-transparent bg-[linear-gradient(to_right,theme(colors.indigo.400),theme(colors.indigo.100),theme(colors.sky.400),theme(colors.fuchsia.400),theme(colors.sky.400),theme(colors.indigo.100),theme(colors.indigo.400))] bg-[length:200%_auto] animate-gradient">Siccoms</h1>
            {{-- <p class="font-mulish-normal text-left md:text-center text-3xl md:text-5xl font-extrabold text-white pb-2 uppercase">Tu Aliado Estratégico</p> --}}
            <p
                class="font-mulish-normal md:text-center font-serif mb-6 text-lg md:text-xl lg:text-3xl text-gray-200 md:px-24 animate-fade animate-once animate-duration-[600ms] animate-delay-200 animate-ease-in animate-normal mt-2">
                Con más de 10 años de experiencia, ofrecemos <a href="{{ route('servicios.index') }}"
                    class="underline decoration-blue-400">servicios</a> integrales en consultoría, comercialización y
                tecnología.
            </p>

        </div>
    </div>
</header>
