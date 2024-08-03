<div x-data="{ modalIsOpen: false }" class="relative w-full">
    <button @click="modalIsOpen = true" type="button" class="w-full h-full">
        <div
            class="bg-white shadow-md rounded-lg overflow-hidden transition duration-300 hover:scale-105 cursor-pointer">
            <img src="{{ asset('img/ap_ubiquiti.png') }}" alt="Ubiquiti networks" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2 uppercase">Ubiquiti</h3>
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
                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black">UBIQUITI NETWORKS UAP-AC-LR</h3>
                <button @click="modalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                        fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="container mx-auto p-4 max-h-[calc(100vh-6rem)] overflow-y-scroll">
                <h3 class="text-2xl font-bold mb-4">Características principales:</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-800 text-sm">
                    <li>Estándar: Wi-Fi 802.11a/b/g/n/ac</li>
                    <li>Doble banda: 5GHz y 2.4 GHz</li>
                    <li>Hasta 867 Mbps en 5GHz (802.11ac)</li>
                    <li>Hasta 450 Mbps en 2.4GHz y 5 GHz (802.11n)</li>
                </ul>
            
                <h3 class="text-2xl font-bold mt-6 mb-4">Características generales:</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-800 text-sm">
                    <li>1 Puerto Gigabit 10/100/1000 Mbps</li>
                    <li>Dos antenas duales de 3 dBi (Integradas)</li>
                    <li>Alimentación de entrada: PoE pasivo 24V 0.5 A y 802.3af</li>
                    <li>Potencia de salida en 5 GHz: 150 mW</li>
                    <li>Potencia de salida en 2.4 GHz: 250 mW</li>
                    <li>Consumo máximo de energía: 6.5 W</li>
                    <li>Soporta hasta 4 SSID por banda</li>
                    <li>Soporta los modos de seguridad WEP, WPA-PSK, WPA-Enterprise (WPA/WPA2, TKIP/AES)</li>
                    <li>Montajes de pared y techo incluidos</li>
                    <li>Dimensiones: 175.7 x 175.7 x 43.2 mm</li>
                </ul>
                <h3 class="text-2xl font-bold mt-6 mb-4">Número máximo de dispositivos conectados:</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-800 text-sm">
                    <li>250 dispositivos, Se recomienda conectar máximo 125 dispositivos para mayor desempeño.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
