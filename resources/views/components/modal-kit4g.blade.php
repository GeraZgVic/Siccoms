<div x-data="{ modalIsOpen: false }" class="relative w-full">
    <button @click="modalIsOpen = true" type="button" class="w-full h-full">
        <div class="bg-slate-800 p-4 rounded-lg shadow-lg transition hover:scale-105 duration-300">
            <h3 class="text-xl font-semibold text-gray-100 mb-2 text-center">Amplificadores 4G</h3>
            <img src="{{ asset('img/kit_amplificador_4g.webp') }}" alt="Amplificadores 4G"
                class="w-full h-auto object-cover rounded-lg shadow-sm">
        </div>
    </button>
    <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
        @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false"
        class="fixed inset-0 z-50 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8"
        role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
        <!-- Modal Dialog -->
        <div x-show="modalIsOpen"
            x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            class="flex flex-col gap-4 overflow-hidden rounded-xl border border-slate-300 bg-white text-slate-700 w-full max-w-xl">
            <!-- Dialog Header -->
            <div class="flex items-center justify-between border-b border-slate-300 bg-slate-100/60 p-4">
                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black">KIT AMPLIFICADOR EPCOM
                    EP20-TB-4GV2</h3>
                <button @click="modalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                        fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="container mx-auto p-4 max-h-[calc(100vh-6rem)] overflow-y-scroll">
                <h3 class="text-2xl font-bold mb-4">Características principales:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>Multiusuario, tribanda y multitecnologías.</li>
                    <li>Amplifica la intensidad de señal de tres bandas de frecuencia simultáneamente.</li>
                    <li>Repite y amplifica la señal celular para mejorar la voz y los datos del 4G LTE y 3G.</li>
                    <li>Reduce las llamadas perdidas y entrecortadas.</li>
                    <li>Cubre de 1 a 5 habitaciones o hasta 1000 metros cuadrados.</li>
                    <li>Incrementa el nivel de señal y extiende la carga de la batería.</li>
                    <li>Soporta múltiples dispositivos simultáneamente.</li>
                    <li>Muy fácil y sencillo de instalar.</li>
                    <li>El kit incluye prácticamente todo lo necesario para mejorar o crear una zona celular.</li>
                </ul>

                <h3 class="text-2xl font-bold my-4">Componentes del Kit:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>Amplificador de Triple Banda que amplifica B5 (850 MHz), B2/25 (1900 MHz) y B4/66 (2100 MHz).
                    </li>
                    <li>Antena logarítmica para exterior.</li>
                    <li>Antena omnidireccional tipo domo para interior.</li>
                    <li>Jumper coaxial con cable tipo LMR-300 de 15 metros y conectores N macho.</li>
                    <li>Jumper coaxial con cable tipo LMR-300 de 5 metros y conectores N macho.</li>
                    <li>Fuente de alimentación para el amplificador.</li>
                    <li>Amplificador con display LCD para observar la intensidad de señal de entrada y salida.</li>
                </ul>

                <h3 class="text-2xl font-bold my-4">Especificaciones Principales:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>Bandas de frecuencia que amplifica: 850 MHz, 1900+ MHz y 2100+ MHz (Bandas 5, 2/25 y 4/66).</li>
                    <li>Rango de frecuencia Down Link: 869-894 MHz, 1930-1995 MHz y 2110-2180 MHz.</li>
                    <li>Rango de frecuencia Up Link: 824-849 MHz, 1850-1915 MHz y 1710-1780 MHz.</li>
                    <li>Ganancia: 70 dB ± 2 dB.</li>
                    <li>Potencia de salida: 20 dBm ± 2 dBm.</li>
                    <li>Consumo: &lt;24W.</li>
                    <li>Voltaje de operación: 12 Vcc, 3A.</li>
                    <li>Rango de temperatura: -10°C ~ +55°C.</li>
                    <li>Conectores: N hembra.</li>
                    <li>Dimensiones del amplificador: 253 x 178 x 59 mm.</li>
                    <li>Peso: &lt;2.4 kg.</li>
                </ul>
            </div>


        </div>
    </div>
</div>
