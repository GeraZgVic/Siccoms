<div x-data="{ modalIsOpen: false }" class="relative w-full">
    <button @click="modalIsOpen = true" type="button" class="w-full h-full">
        <div
            class="bg-white shadow-md rounded-lg overflow-hidden transition duration-300 hover:scale-105 cursor-pointer">
            <img src="{{ asset('img/router.png') }}" alt="Hikvision" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2 uppercase">Hikvision</h3>
            </div>
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
                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black">HIKVISION DS-3WR12C</h3>
                <button @click="modalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                        fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="container mx-auto p-4 max-h-[calc(100vh-6rem)] overflow-y-auto">
                <h3 class="text-2xl font-bold mb-4">Características principales:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>Estándar Inalámbrico IEEE 802.11/a/n/ac wave 2 @5GHz, IEEE 802.11b/g/n @2.4GHz</li>
                    <li>Rendimiento inalámbrico: Compatible con 4 × 4 MU-MIMO y Beamforming.</li>
                    <li>Antena: 4 antenas de alta ganancia</li>
                    <li>Configuración de red de invitados admitida</li>
                    <li>Ajuste de señal compatible.</li>
                    <li>Programa WiFi compatible.</li>
                    <li>Modo De Seguridad: Compatible con WPA-PSK, WPA2-PSK, WPA y WPA2</li>
                    <li>Mecanismo De Seguridad: Ocultar SSID</li>
                    <li>Método De Gestión: Interfaz WEB.</li>
                </ul>

                <h3 class="text-2xl font-bold mt-4">Características Físicas y Eléctricas:</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-800 text-sm">
                    <li>Interfaz De Red: 4 × RJ45, 10/100 Mbps</li>
                    <li>Botón de reinicio</li>
                    <li>Fuente de alimentación de 9 Vcd, 1 A. (Incluida)</li>
                    <li>Consumo Max De Energia: 9 W</li>
                    <li>Dimensión del producto: 248,40 mm × 154,80 mm × 213,34 mm</li>
                </ul>

                <h3 class="text-2xl font-bold mt-4">Modos de Operación:</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-800 text-sm">
                    <li>Modo de enrutador inalámbrico.</li>
                    <li>Modo de repetidor inalámbrico cliente + AP.</li>
                    <li>WISP</li>
                    <li>Modo AP.</li>
                    <li>Servidor DHCP compatible.</li>
                </ul>
            </div>


        </div>
    </div>
</div>
