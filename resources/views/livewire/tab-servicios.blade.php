<div x-data="{
    tabSelected: 1,
    tabId: $id('tabs'),
    tabButtonClicked(tabButton) {
        this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
        this.tabRepositionMarker(tabButton);
    },
    tabRepositionMarker(tabButton) {
        if (this.$refs.tabButton) {
            this.$refs.tabMarker.style.width = tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height = tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left = tabButton.offsetLeft + 'px';
        }
    },
    tabContentActive(tabContent) {
        return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
    },
    tabButtonActive(tabContent) {
        const tabId = tabContent.id.split('-').slice(-1);
        return this.tabSelected == tabId;
    }
}" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="relative w-full">

    <div x-ref="tabButtons" class="flex flex-col md:flex-row">
        <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
            :class="{ 'bg-blue-100 text-blue-800': tabButtonActive($el) }"
            class="relative z-20 flex items-center justify-center w-full h-8 py-8 md:py-6 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap ">Ingenieria
            TI</button>
        <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
            :class="{ 'bg-blue-100 text-blue-800': tabButtonActive($el) }"
            class="relative z-20 flex items-center justify-center w-full h-8 py-8 md:py-6 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap ">Ingenieria
            Software</button>
        <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button"
            :class="{ 'bg-blue-100 text-blue-800': tabButtonActive($el) }"
            class="relative z-20 flex items-center justify-center w-full h-8 py-8 md:py-6 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap ">Seguridad
            Electrónica y Automatización</button>
        {{-- <div x-ref="tabMarker" class="md:absolute md:left-0 md:z-10 md:w-1/2 md:h-full md:duration-300 md:ease-out" x-cloak><div class="md:w-full md:h-full md:bg-gray-100 md:rounded-md md:shadow-sm"></div></div> --}}
    </div>
    <div
        class="relative flex items-center justify-center w-full p-5 mt-2  text-gray-700 font-semibold border rounded-md content border-gray-200/70">

        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative">
            {{-- Card Ingenieria TI --}}
                <livewire:service-component />      
        </div>

        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
            <livewire:service-component-i-s />
        </div>

        <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
            <livewire:service-component-e-a />
        </div>

    </div>
</div>
