<div x-data="{ 
    activeAccordion: '', 
    setActiveAccordion(id) { 
        this.activeAccordion = (this.activeAccordion == id) ? '' : id 
    } 
}" class="relative w-full max-w-md mx-auto text-sm">

<div x-data="{ id: $id('accordion') }" :class="{ 'border-neutral-200/60 text-neutral-800' : activeAccordion==id, 'border-transparent text-neutral-600 hover:text-neutral-800' : activeAccordion!=id }" class="duration-200 ease-out bg-white  rounded-md cursor-pointer group" x-cloak>
    <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full  py-4 font-semibold text-left select-none">
        <span>Ver más</span>
        <div :class="{ 'rotate-90': activeAccordion==id }" class="relative flex items-center justify-center w-2.5 h-2.5 duration-300 ease-out">
            <div class="absolute w-0.5 h-full bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
            <div :class="{ 'rotate-90': activeAccordion==id }" class="absolute w-full h-0.5 ease duration-500 bg-neutral-500 group-hover:bg-neutral-800 rounded-full"></div>
        </div>
    </button>
    <div x-show="activeAccordion==id" x-collapse x-cloak>
        <div class="p-5 pt-0 opacity-70">
            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">{!! $texto !!}</p>
        </div>
    </div>
</div>

</div>