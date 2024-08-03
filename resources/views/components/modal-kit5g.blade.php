<div x-data="{ modalIsOpen: false }" class="relative w-full">
    <button @click="modalIsOpen = true" type="button" class="w-full h-full">
        <div class="bg-slate-800 p-4 rounded-lg shadow-lg  transition hover:scale-105 duration-300">
            <h3 class="text-xl font-semibold text-gray-100 mb-2 text-center">Amplificadores 5G</h3>
            <img src="{{ asset('img/kit_amplificador.webp') }}" alt="Amplificadores 5G"
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
                    EP-5G-PBT</h3>
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
                    <li>Cinco bandas de frecuencia: 700 MHz, 850 MHz, 1900(+) MHz, 2100(+) MHz y 2600 MHz.</li>
                    <li>Amplifica las bandas B28, B5, B2/25, B4/66 y B7 respectivamente.</li>
                    <li>70 dB de ganancia. Aumenta 70 dB la señal recibida.</li>
                    <li>20 dBm de potencia máxima.</li>
                    <li>Mejora las llamadas convencionales. Evita llamadas perdidas y entrecortadas sobre el 2G y 3G.
                    </li>
                    <li>Mejora las llamadas VoLTE. Evita llamadas perdidas y entrecortadas sobre el 4G y 5G.</li>
                    <li>Soporta los datos 5G para internet, redes sociales, gaming, video, productividad y más.</li>
                    <li>Soporta los datos 4G para internet, redes sociales, video y más.</li>
                    <li>Soporta los datos 3G para internet y redes sociales.</li>
                    <li>Soporta los datos 2G para pequeños paquetes de datos.</li>
                    <li>Soporta múltiples operadores y usuarios simultáneamente.</li>
                </ul>

                <h3 class="text-2xl font-bold my-4">Características Generales:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>Incluye todo lo necesario para su funcionamiento.</li>
                    <li>Antena exterior direccional de banda ancha tipo panel.</li>
                    <li>Antena interior sectorial de banda ancha tipo panel.</li>
                    <li>Jumpers coaxiales con cable tipo RG58 y conectores SMA macho.</li>
                    <li>Muy fácil de instalar.</li>
                    <li>No requiere configuración.</li>
                    <li>Con pantalla para ver las condiciones del amplificador.</li>
                </ul>

                <h3 class="text-2xl font-bold my-4">Especificaciones Físicas y Eléctricas del Amplificador:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>Bandas de frecuencia: 700 MHz (B28), 850 MHz (B5), 1900 MHz (B2 y B25), 2100 MHz (B4 y B66) y
                        2600 MHz (B7).</li>
                    <li>Ganancia máxima: 70 dB.</li>
                    <li>Potencia máxima: 20 dBm.</li>
                    <li>Conectores: SMA hembra.</li>
                    <li>Alimentación requerida: 5 Vcc, 4.5 A.</li>
                    <li>Consumo: &lt;22W.</li>
                    <li>Rango de temperatura: -25°C ~ +55°C.</li>
                    <li>Dimensiones del amplificador: 200 mm x 150 mm x 30 mm.</li>
                    <li>Peso: &lt;2.0 kg.</li>
                </ul>
            </div>


        </div>
    </div>
</div>
