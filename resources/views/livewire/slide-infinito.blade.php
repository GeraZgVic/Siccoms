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
            -webkit-animation: scroll 20s linear infinite;
            /* El ancho del slide-track es el número total de imágenes por el ancho de cada imagen */
            width: calc(200px * 14); /* 7 imágenes duplicadas */
        }

        .slider .slide {
            width: 200px;
            transition: transform 0.3s ease-in-out;
        }

        .slider .slide img {
            width: 100%;
            border-radius: 10px;
            /* Aplicamos un efecto de sombra utilizando filter: drop-shadow() */
            filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.3));
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .slider .slide:hover img {
            transform: scale(1.1);
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
                -webkit-transform: translateX(calc(-200px * (14 / 2)));
                transform: translateX(calc(-200px * (14 / 2)));
            }
        }
    </style>
@endpush

<section x-data="{
    imagenesClientes: [
        {
            'photo': '{{ asset('clientes/1.png') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/2.png') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/3.png') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/4.png') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/5.png') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/6.png') }}',
            'alt': 'Photo of Mountains'
        },
        {
            'photo': '{{ asset('clientes/7.png') }}',
            'alt': 'Photo of Mountains'
        }
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
