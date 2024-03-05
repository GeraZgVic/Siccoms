@extends('layout.app')
@section('titulo')
    Blog
@endsection
@section('contenido')
    <div class="container px-6 py-12 mx-auto">
        <livewire:text-animation texto="Nuestro Blog" />
        <p class="mt-4 text-lg leading-7 text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <div class="border border-gray-300 my-8"></div>

        <div class="flex flex-col items-center md:flex-row my-6">
            <div class="w-full md:w-1/2">
                <a href="#" class="block">
                    <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                        src="{{ asset('posts/post1.avif') }}" alt="Imagen de un post">
                </a>
            </div>
            <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                <div class="flex flex-col items-start justify-center h-full space-y-3 md:pl-10 lg:pl-16 md:space-y-5">
                    <span
                        class="bg-teal-500 py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">Tecnología</span>
                    <h1 class="text-3xl font-bold leading-tight md:text-4xl lg:text-5xl xl:text-6xl capitalize"><a
                            href="#">El Infinito en la computación cuántica</a></h1>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam molestias
                        beatae perferendis? Nobis, laudantium? Natus voluptates quaerat magni iste minima temporibus, dolor
                        magnam incidunt? Dicta libero accusantium dolor officia iure?</p>
                    <p class="text-gray-500 mt-4">Publicado hace 5 minutos...</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg border-r border-gray-300/40 border-b overflow-hidden p-4">
                <a href="#">
                    <img class="w-full h-48 object-cover object-center rounded-md" src="{{ asset('img/work1.webp') }}"
                        alt="Imagen del artículo">
                </a>
                <div class="p-4 space-y-3">
                    <span
                        class="bg-blue-500 py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">Reparación</span>
                    <h2 class="text-2xl font-bold mt-2"><a href="#">Título del post</a></h2>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam molestias
                        beatae perferendis? Nobis, laudantium? Natus voluptates quaerat magni iste minima temporibus, dolor
                        magnam incidunt? Dicta libero accusantium dolor officia iure?</p>
                    <p class="text-gray-500 mt-4">Publicado hace 5 minutos...</p>
                </div>
            </div>
            <div class="bg-white rounded-lg border-r border-gray-300/40 border-b overflow-hidden p-4">
                <a href="#">
                    <img class="w-full h-48 object-cover object-center rounded-md" src="{{ asset('img/work1.webp') }}"
                        alt="Imagen del artículo">
                </a>
                <div class="p-4 space-y-3">
                    <span
                        class="bg-blue-500 py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">Reparación</span>
                    <h2 class="text-2xl font-bold mt-2"><a href="#">Título del post</a></h2>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam molestias
                        beatae perferendis? Nobis, laudantium? Natus voluptates quaerat magni iste minima temporibus, dolor
                        magnam incidunt? Dicta libero accusantium dolor officia iure?</p>
                    <p class="text-gray-500 mt-4">Publicado hace 5 minutos...</p>
                </div>
            </div>
            <div class="bg-white rounded-lg border-r border-gray-300/40 border-b overflow-hidden p-4">
                <a href="#">
                    <img class="w-full h-48 object-cover object-center rounded-md" src="{{ asset('img/work1.webp') }}"
                        alt="Imagen del artículo">
                </a>
                <div class="p-4 space-y-3">
                    <span
                        class="bg-blue-500 py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">Reparación</span>
                    <h2 class="text-2xl font-bold mt-2"><a href="#">Título del post</a></h2>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam molestias
                        beatae perferendis? Nobis, laudantium? Natus voluptates quaerat magni iste minima temporibus, dolor
                        magnam incidunt? Dicta libero accusantium dolor officia iure?</p>
                    <p class="text-gray-500 mt-4">Publicado hace 5 minutos...</p>
                </div>
            </div>


        </div>
    </div>
@endsection
