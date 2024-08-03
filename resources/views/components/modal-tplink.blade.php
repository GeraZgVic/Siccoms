<div x-data="{ modalIsOpen: false }" class="relative w-full">
    <button @click="modalIsOpen = true" type="button" class="w-full h-full">
        <div
            class="bg-white shadow-md rounded-lg overflow-hidden transition duration-300 hover:scale-105 cursor-pointer">
            <img src="{{ asset('img/tplink.png') }}" alt="Tplink" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2 uppercase">Tplink</h3>
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
                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black">Tplink TL-WR840N</h3>
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
                    <li>Estándar WiFi 802.11 b/g/n</li>
                    <li>Modos de operación: Punto de Acceso, Enrutador, Repetidor y WISP</li>
                    <li>Banda de operación 2.4 GHz</li>
                    <li>Transmisión inalámbrica hasta 300 Mbps</li>
                    <li>Hasta 4 SSID</li>
                    <li>1 Puerto WAN</li>
                    <li>4 puertos LAN</li>
                    <li>2 antenas onminidireccionales</li>
                    <li>Alimentación: 9 Vcc / 0.6 A (fuente incluida)</li>
                    <li>Dimensiones: 7.2 * 5.0 * 1.4 in (182*128*35mm)</li>
                </ul>

                <h3 class="text-2xl font-bold mt-6 mb-4">Beneficios:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>Calidad en el servicio</li>
                    <li>Control de ancho de banda</li>
                    <li>VPN Cliente: PPTP, L2TP, IPSec (ESP Head)</li>
                    <li>Protección DoS</li>
                    <li>Firewall IP Address/MAC Address</li>
                    <li>Filtrado de contenido (URL´s)</li>
                    <li>Port forwarding: Servidor virtual, Port Triggering, UPnP y DMZ</li>
                </ul>

                <h3 class="text-2xl font-bold mt-6 mb-4">Aplicaciones:</h3>
                <ul class="list-disc list-inside space-y-1 text-gray-800 text-sm">
                    <li>WISP</li>
                    <li>Casas</li>
                    <li>Pequeños negocios</li>
                    <li>Tiendas pequeñas</li>
                </ul>
            </div>


        </div>
    </div>
</div>
