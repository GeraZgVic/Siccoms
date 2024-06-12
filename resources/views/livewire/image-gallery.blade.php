<section x-data="{
    imageGalleryOpened: false,
    imageGalleryActiveUrl: null,
    imageGalleryImageIndex: null,
    imageGalleryActiveAlt: '',
    imageGallery: [{
            'photo': '{{ asset('img/work32.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('img/work20.webp') }}',
            'alt': 'Photo of Mountains 02'
        },
        {
            'photo': '{{ asset('img/work3.webp') }}',
            'alt': 'Photo of Mountains 03'
        },
        {
            'photo': '{{ asset('img/work10.webp') }}',
            'alt': 'Photo of Mountains 04'
        },
        {
            'photo': '{{ asset('img/work6.webp') }}',
            'alt': 'Photo of Mountains 05'
        },
        {
            'photo': '{{ asset('img/work7.webp') }}',
            'alt': 'Photo of Mountains 06'
        },
        {
            'photo': '{{ asset('img/work8.webp') }}',
            'alt': 'Photo of Mountains 07'
        },
        {
            'photo': '{{ asset('img/work9.webp') }}',
            'alt': 'Photo of Mountains 08'
        },
        {
            'photo': '{{ asset('img/work5.webp') }}',
            'alt': 'Photo of Mountains 09'
        },
        {
            'photo': '{{ asset('img/work11.webp') }}',
            'alt': 'Photo of Mountains 10'
        },
        {
            'photo': '{{ asset('img/work12.webp') }}',
            'alt': 'Photo of Mountains 11'
        },
        {
            'photo': '{{ asset('img/work13.webp') }}',
            'alt': 'Photo of Mountains 12'
        },
        {
            'photo': '{{ asset('img/work17.webp') }}',
            'alt': 'Photo of Mountains 13'
        },
        {
            'photo': '{{ asset('img/work19.webp') }}',
            'alt': 'Photo of Mountains 14'
        },
        {
            'photo': '{{ asset('img/work2.webp') }}',
            'alt': 'Photo of Mountains 15'
        },
        {
            'photo': '{{ asset('img/work21.webp') }}',
            'alt': 'Photo of Mountains 16'
        },
        {
            'photo': '{{ asset('img/work22.webp') }}',
            'alt': 'Photo of Mountains 17'
        },
        {
            'photo': '{{ asset('img/work30.webp') }}',
            'alt': 'Photo of Mountains 18'
        },
        {
            'photo': '{{ asset('img/work1.webp') }}',
            'alt': 'Photo of Mountains 19'
        },
    ],

    imageGalleryOpen(event) {
        this.imageGalleryImageIndex = event.target.dataset.index;
        this.imageGalleryActiveUrl = event.target.src;
        this.imageGalleryActiveAlt = event.target.alt;
        this.imageGalleryOpened = true;
    },
    imageGalleryClose() {
        this.imageGalleryOpened = false;
        setTimeout(() => {
            this.imageGalleryActiveUrl = null;
            this.imageGalleryActiveAlt = '';
        }, 300);
    },
    imageGalleryNext() {
        this.imageGalleryImageIndex = (this.imageGalleryImageIndex == this.imageGallery.length) ? 1 : (parseInt(this.imageGalleryImageIndex) + 1);
        const nextImage = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']');
        this.imageGalleryActiveUrl = nextImage.src;
        this.imageGalleryActiveAlt = nextImage.alt;
    },
    imageGalleryPrev() {
        this.imageGalleryImageIndex = (this.imageGalleryImageIndex == 1) ? this.imageGallery.length : (parseInt(this.imageGalleryImageIndex) - 1);
        const prevImage = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']');
        this.imageGalleryActiveUrl = prevImage.src;
        this.imageGalleryActiveAlt = prevImage.alt;
    }
}" @image-gallery-next.window="imageGalleryNext()"
    @image-gallery-prev.window="imageGalleryPrev()" @keyup.right.window="imageGalleryNext();"
    @keyup.left.window="imageGalleryPrev();" class="w-full h-full select-none max-w-5xl ">
    <div class="container py-4 mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view"
        style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
        <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-4">
            <template x-for="(image, index) in imageGallery">
                <li x-show="index < 8"> {{-- Mostrar solo las primeras 8 imagenes visualmente --}}
                    <img x-on:click="imageGalleryOpen" :src="image.photo" :alt="image.alt"
                        :data-index="index + 1"
                        class="object-cover object-center select-none w-full h-auto rounded cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]">
                </li>
            </template>
        </ul>
    </div>
    <template x-teleport="body">
        <div x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in-in duration-300"
            x-transition:leave-end="opacity-0" @click="imageGalleryClose" @keydown.window.escape="imageGalleryClose"
            x-trap.inert.noscroll="imageGalleryOpened"
            class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out"
            x-cloak>
            <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
                {{-- SLIDER despues del click --}}
                <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')"
                    class="absolute -left-8 md:left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-8 md:w-14 h-8 md:h-14 hover:bg-white/20">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </div>
                <div class="relative" x-show="imageGalleryOpened"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-50"
                    x-transition:leave="transition ease-in-in duration-300"
                    x-transition:leave-end="opacity-0 transform scale-50">
                    <img class="object-cover object-center w-full md:w-[800px] 2xl:w-full max-w-screen-lg h-full select-none cursor-zoom-out"
                        :src="imageGalleryActiveUrl" :alt="imageGalleryActiveAlt">
                    <div class="absolute bottom-0 left-0 bg-black bg-opacity-70 w-full text-center py-2">
                        <h3 class="text-white text-lg md:text-2xl 2xl:text-4xl font-mulish-bold" x-text="imageGalleryActiveAlt"></h3>
                    </div>
                </div>

                <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');"
                    class="absolute -right-8 md:right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-8 md:w-14 h-8 md:h-14 hover:bg-white/20">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
                </img>
            </div>
    </template>
    </div>
</section>
