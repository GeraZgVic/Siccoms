@push('styles')
    <style>
        .slider {
            position: relative;
            width: 75vw;
            height: auto;
            margin: auto;
            overflow: hidden;
        }

        .slider .slide-track {
            display: flex;
            /* La duración de la animación ahora es fija */
            animation: scroll 20s linear infinite;
            -webkit-animation: scroll 30s linear infinite;
            /* El ancho del slide-track es el número total de imágenes por el ancho de cada imagen */
            width: calc(200px * 40); /* 10 imágenes duplicadas */
        }

        .slider .slide {
            width: 200px;
            transition: transform 0.3s ease-in-out;
        }

        .slider .slide img {
            width: 100%;
            border-radius: 10px;
           
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .slider .slide:hover img {
            transform: scale(1.5);
        }

        .slider .slide-track:hover {
            animation-play-state: paused;
        }

        @keyframes scroll {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            /* La distancia de desplazamiento es la mitad del ancho total del slide-track */
            100% {
                /* En lugar de terminar en la mitad del slide-track, terminamos en la posición que estaría justo después de la última imagen */
                -webkit-transform: translateX(calc(-200px * (40 / 2)));
                transform: translateX(calc(-200px * (40 / 2)));
            }
        }
    </style>
@endpush

<section x-data="{
    imagenesClientes: [
        {
            'photo': '{{ asset('clientes/1.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/2.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/3.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/4.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/5.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/6.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/7.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/8.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/9.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/10.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/11.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/12.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/13.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/14.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/15.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/16.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/17.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/18.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/19.webp') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/20.webp') }}',
            'alt': 'Photo of Mountains'
        },

    ]
}">
    {{-- SLIDER --}}
    <div class="slider">
        {{-- SLIDE-TRACK --}}
        <div class="slide-track">
            {{-- Duplicamos las imágenes para crear el bucle infinito --}}
            <template x-for="(image, index ) in imagenesClientes">
                {{-- Slide --}}
                <div class="slide">
                    <img :src="image.photo" :alt="image.alt">
                </div>
            </template>
            {{-- Duplicamos las imágenes nuevamente para crear el bucle infinito --}}
            <template x-for="(image, index ) in imagenesClientes">
                {{-- Slide --}}
                <div class="slide">
                    <img :src="image.photo" :alt="image.alt">
                </div>
            </template>
        </div>
    </div>
</section>
