<div x-data="{
    activeAccordion: '',
    setActiveAccordion(id) {
        this.activeAccordion = (this.activeAccordion == id) ? '' : id
    }
}"
    class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
        <button @click="setActiveAccordion(id)"
            class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
            <span class="font-semibold">Misión</span>
            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </button>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class="p-4 pt-0 text-gray-700">
                Ser el aliado en las diferentes disciplinas
                en colaboración con nuestros asociados
                en consultorías. Tecnológicas, contratos
                y convenios internacionales, asesoría
                jurídica especializada en todas sus
                ramas, comercialización, diseño
                construcción, bienes raíces y asesoría
                en geociencias.
            </div>
        </div>
    </div>
    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
        <button @click="setActiveAccordion(id)"
            class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
            <span class="font-semibold">Visión</span>
            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </button>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class="p-4 pt-0 text-gray-700">
                Como aliados comerciales concretar
                mediante análisis y diagnósticos las
                necesidades de nuestros clientes para
                generar un diseño de arquitectura de las
                posibles soluciones desarrollándolas e
                implementándolas estratégicamente,
                mediante la mejora continua; para la
                satisfacción y éxito de nuestros
                asociados y clientes.
            </div>
        </div>
    </div>

</div>
