<div x-data="{ activeSlide: 1, slideCount: 3 }" class="overflow-hidden relative rounded-lg" x-init="setInterval(() => { activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1 }, 5000)">

    <!-- Slider -->
    <div class="whitespace-nowrap transition-transform duration-500 ease-in-out"
        :style="'transform: translateX(-' + (activeSlide - 1) * 100.5 + '%)'">

        <!-- Item 1 -->
        <div class="inline-block w-full">
            <img class="object-cover object-center w-full h-96" src="https://images.unsplash.com/photo-1453928582365-b6ad33cbcf64?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" />
        </div>
        <!-- Item 2 -->
        <div class="inline-block w-full">
            <img class="object-cover object-center w-full h-96" src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?q=80&w=2042&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" />
        </div>
        <!-- Item 3 -->
        <div class="inline-block w-full">
            <img class="object-cover object-center w-full h-96" src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" />
        </div>

</div>

    <!-- Prev/Next Arrows -->
    <div class="absolute inset-0 flex items-center justify-between px-2">
        <button @click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slideCount"
            class="w-[30px] h-[30px] flex items-center bg-black/30 text-white p-2 rounded-full">
            &#8592;
        </button>
        <button @click="activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1"
            class="w-[30px] h-[30px] flex items-center bg-black/30 text-white p-2 rounded-full">
            &#8594;
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
