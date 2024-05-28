<div x-data="{ activeTab: 1 }" class="mt-8">

    <!-- Buttons -->
    <div class="flex justify-center">
        <div
            role="tablist"
            class="max-[480px]:max-w-[180px] inline-flex flex-wrap justify-center bg-slate-200 rounded-[20px] p-1 mb-8 min-[480px]:mb-12"
            @keydown.right.prevent.stop="$focus.wrap().next()"
            @keydown.left.prevent.stop="$focus.wrap().prev()"
            @keydown.home.prevent.stop="$focus.first()"
            @keydown.end.prevent.stop="$focus.last()"
        >
            <!-- Button #1 -->
            <button
                id="tab-1"
                class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap transition-colors duration-150 ease-in-out"
                :class="activeTab === 1 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                :tabindex="activeTab === 1 ? 0 : -1"
                :aria-selected="activeTab === 1"
                aria-controls="tabpanel-1"
                @click="activeTab = 1"
                @focus="activeTab = 1"
            >Soluciones CCTV</button>
            <!-- Button #2 -->
            <button
                id="tab-2"
                class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap transition-colors duration-150 ease-in-out"
                :class="activeTab === 2 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                :tabindex="activeTab === 2 ? 0 : -1"
                :aria-selected="activeTab === 2"
                aria-controls="tabpanel-2"
                @click="activeTab = 2"
                @focus="activeTab = 2"
            >Ingeniería TI</button>
            <!-- Button #3 -->
            <button
                id="tab-3"
                class="flex-1 text-sm font-medium h-8 px-4 rounded-2xl whitespace-nowrap transition-colors duration-150 ease-in-out"
                :class="activeTab === 3 ? 'bg-white text-slate-900' : 'text-slate-600 hover:text-slate-900'"
                :tabindex="activeTab === 3 ? 0 : -1"
                :aria-selected="activeTab === 3"
                aria-controls="tabpanel-3"
                @click="activeTab = 3"
                @focus="activeTab = 3"
            >Seguridad Vehicular</button>
        </div>
    </div>

    <!-- Tab panels -->
    <div class="mx-auto">
        <div class="relative flex flex-col">

            <!-- Panel #1 -->
            <article
                id="tabpanel-1"
                class="w-full  rounded-2xl  min-[480px]:flex items-stretch"
                role="tabpanel" 
                tabindex="0"
                aria-labelledby="tab-1"
                x-show="activeTab === 1"
                x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                x-transition:enter-start="opacity-0 -translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-12"                        
            >
            <livewire:image-gallery />
            </article>

            <!-- Panel #2 -->
            <article
                id="tabpanel-2"
                class="w-full  rounded-2xl  min-[480px]:flex items-stretch"
                role="tabpanel" 
                tabindex="0"
                aria-labelledby="tab-2"
                x-show="activeTab === 2"
                x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                x-transition:enter-start="opacity-0 -translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-12"                        
            >
                <livewire:image-gallery />
            </article>
            
            <!-- Panel #3 -->
            <article
                id="tabpanel-3"
                class="w-full  rounded-2xl  min-[480px]:flex items-stretch"
                role="tabpanel" 
                tabindex="0"
                aria-labelledby="tab-3"
                x-show="activeTab === 3"
                x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
                x-transition:enter-start="opacity-0 -translate-y-0"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-12"                        
            >
                <livewire:image-gallery />
            </article>

        </div>
    </div>

</div>
