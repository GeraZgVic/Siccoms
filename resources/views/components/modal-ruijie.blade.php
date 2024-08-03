<div x-data="{ modalIsOpen: false }" class="relative w-full">
    <button @click="modalIsOpen = true" type="button" class="w-full h-full">
        <div
            class="bg-white shadow-md rounded-lg overflow-hidden transition duration-300 hover:scale-105 cursor-pointer">
            <img src="{{ asset('img/ruijie.webp') }}" alt="Ruijie" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold mb-2 uppercase">ruijie</h3>
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
                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black">RUIJIE RG-RAP6260(H)</h3>
                <button @click="modalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                        fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="container mx-auto px-4 py-6 max-h-[calc(100vh-6rem)] overflow-y-scroll">
                <h3 class="text-2xl font-bold mb-4">Características Generales:</h3>
                <ul class="list-disc list-inside space-y-2 text-gray-800 text-sm">
                    <li>Estándar: 802.11ax (Wi-Fi 6). Soporta conexión de dispositivos de estándares anteriores.</li>
                    <li>Bandas de operación: 2.4 GHz (4x4) / 5 GHz (4x4)</li>
                    <li>Modos de operación: Access Point, Mesh o repetidor universal.</li>
                    <li>Configuración a través de: Interfaz web (red local), aplicación móvil (remoto o en red local), plataforma cloud (remoto).</li>
                    <li>Puertos: 1 puerto 2.5G WAN PoE In, 1 puerto SFP Gigabit WAN (UPLINK)</li>
                    <li>Garantía: 3 años</li>
                </ul>
            </div>
        </div>
    </div>
</div>
