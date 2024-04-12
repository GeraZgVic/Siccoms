<div x-data="{ activeSlide: 1, slideCount: 3 }" class="overflow-hidden relative rounded-lg" x-init="setInterval(() => { activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1 }, 5000)">

    <!-- Slider -->
    <div class="whitespace-nowrap transition-transform duration-500 ease-in-out"
        :style="'transform: translateX(-' + (activeSlide - 1) * 100.5 + '%)'">

        <!-- Item 1 -->
        <div class="inline-block w-full">
            <img class="object-contain object-center w-full h-96" src="{{asset('img/slide1.jpg')}}"
                alt="" />
        </div>
        <!-- Item 2 -->
        <div class="inline-block w-full">
            <img class="object-contain object-center w-full h-96" src="{{asset('img/slide2.jpg')}}"
                alt="" />
        </div>
        <!-- Item 3 -->
        <div class="inline-block w-full">
            <img class="object-contain object-center w-full h-96" src="{{asset('img/slide3.jpg')}}"
                alt="" />
        </div>

</div>

    <!-- Prev/Next Arrows -->
    <div class="absolute inset-0 flex items-center justify-between px-2">
        <button @click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slideCount"
            class="w-[30px] h-[30px] flex items-center bg-black/20 hover:bg-black/50 text-white p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
              </svg>              
        </button>
        <button @click="activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1"
            class="w-[30px] h-[30px] flex items-center bg-black/20 hover:bg-black/50 text-white p-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
              </svg>
                       
        </button>
    </div>

    <!-- Dots Navigation -->
    <div class="absolute bottom-0 left-0 right-0 flex justify-center space-x-2 p-4">
        <template x-for="slideIndex in slideCount" :key="slideIndex">
            <button @click="activeSlide = slideIndex" class="h-2 w-2 rounded-full"
                :class="{ 'bg-blue-500': activeSlide === slideIndex, 'bg-white/50': activeSlide !== slideIndex }">
            </button>
        </template>
    </div>
</div>
