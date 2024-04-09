<header class="font-inter antialiased bg-cover bg-center bg-blend-overlay bg-fixed bg-black/70"style="background-image: url('/img/heros.jpg')">
    <livewire:navegation-menu />
    <div class="relative min-h-screen flex flex-col justify-center ">
        <div class="w-full max-w-6xl mx-auto px-4 md:px-4 py-24">
            
            <!-- Particles animation -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
                <canvas data-particle-animation data-particle-quantity="50" data-particle-ease="40"></canvas>
            </div>
            <div class="relative text-center">
                <h1 class="font-mulish-bold py-4 inline-flex font-extrabold text-5xl md:text-6xl bg-clip-text text-transparent bg-[linear-gradient(to_right,theme(colors.sky.400),theme(colors.indigo.100),theme(colors.slate.300),theme(colors.sky.400),theme(colors.slate.300),theme(colors.indigo.100),theme(colors.sky.400))] bg-[length:200%_auto] animate-gradient">Sistemas Integrales En Consultoría</h1>
                <div class="max-w-3xl mx-auto mb-8">
                    <p class="text-lg text-slate-400">Con más de 10 años de experiencia, ofrecemos servicios integrales en consultoría, comercialización y tecnología.</p>
                </div>
                <div class="inline-flex justify-center space-x-4">
                    <div>
                        <a class="inline-flex justify-center whitespace-nowrap rounded-lg bg-blue-600 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-blue-950/10 hover:bg-blue-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-blue-300  transition-colors duration-150 group" 
                            href="{{route('servicios.index')}}">
                            Ver Servicios <span class="tracking-normal text-blue-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                        </a>
                    </div>
                    <!-- <div>
                        <a class="inline-flex justify-center whitespace-nowrap rounded-lg bg-slate-700 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-blue-950/10 hover:bg-slate-600 focus-visible:outline-none focus-visible:ring focus-visible:ring-blue-300  transition-colors duration-150" href="#0">
                            Ver más
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>    
</header>
