@extends('layout.app')
@section('titulo')
    Blog
@endsection
@section('contenido')
    <div class="container px-6 py-12 mx-auto">
        <livewire:text-animation texto="Nuestro Blog" />
        <p class="mt-4 text-lg leading-7 text-gray-700 animate-fade-down animate-duration-[1500ms]">¡Bienvenido a nuestro blog en Siccoms! Nos complace compartir nuestra
            amplia experiencia de más de una década en la prestación de servicios integrales de consultoría. </p>
        <div class="border-2 border-gray-300 my-8"></div>

        @if ($firstPost)
            @php
                $articleId = $firstPost->article_id;
                // Clases predeterminadas de cada tipo
                $colorClass =
                    $articleId == 1
                        ? 'bg-green-500'
                        : ($articleId == 2
                            ? 'bg-yellow-500'
                            : ($articleId == 3
                                ? 'bg-blue-500'
                                : 'bg-teal-500'));
            @endphp
            <div class="flex flex-col items-center md:flex-row my-6">
                <div class="w-full md:w-1/2">
                    <a href="{{ route('posts.show', $firstPost->id) }}" class="block">
                        <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                            src="{{ asset('storage/blog/' . $firstPost->image) }}" alt="Imagen de un post">
                    </a>
                </div>
                <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                    <div class="flex flex-col items-start justify-center h-full space-y-3 md:pl-10 lg:pl-16 md:space-y-5">
                        <span
                            class="{{ $colorClass }} py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">{{ $firstPost->article->name }}</span>
                        <h2 class="text-3xl font-bold leading-tight md:text-4xl lg:text-5xl xl:text-6xl capitalize"><a
                                href="{{ route('posts.show', $firstPost->id) }}">{{ $firstPost->title }}</a></h2>
                        <p class="text-gray-700 mt-2 line-clamp-5">{{ $firstPost->description }}</p>
                        <p class="text-gray-500 mt-4">{{ $firstPost->created_at->diffForHumans() }}</p>
                        <a href="{{ route('posts.show', $firstPost->id) }}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @else
            <p class="text-light text-center text-gray-600 col-span-3">No hay ningún post </p>
        @endif


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 my-4">
            @foreach ($posts as $post)
                {{-- Logica para cambiar el bg del article --}}
                @php
                    $articleId = $post->article_id;
                    // Clases predeterminadas de cada tipo
                    $colorClass =
                        $articleId == 1
                            ? 'bg-green-500'
                            : ($articleId == 2
                                ? 'bg-yellow-500'
                                : ($articleId == 3
                                    ? 'bg-blue-500'
                                    : 'bg-teal-500'));
                @endphp
                <div class="bg-white rounded-lg overflow-hidden p-4">
                    <a href="{{ route('posts.show', $post->id) }}">
                        <img class="w-full h-48 bg-cover bg-center object-cover object-center rounded-md"
                            src="{{ asset('storage/blog/' . $post->image) }}" alt="{{ $post->title }}">
                    </a>
                    <div class="p-4 space-y-3">
                        <span
                            class="{{ $colorClass }} py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">{{ $post->article->name }}</span>
                        <h2 class="text-2xl font-bold mt-2 text-blue-900"><a
                                href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                        <p class="text-gray-700 mt-2 line-clamp-3 leading-relaxed">{{ $post->description }}</p>
                        <p class="text-gray-500 mt-4">{{ $post->created_at->diffForHumans() }}</p>
                        <a href="{{ route('posts.show', $post->id) }}"
                            class="cursor-pointer flex items-center gap-2 text-lg text-indigo-700 font-semibold">
                            Leer más<svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.25 6L13.25 6M9.5 10.5L13.4697 6.53033C13.7197 6.28033 13.8447 6.15533 13.8447 6C13.8447 5.84467 13.7197 5.71967 13.4697 5.46967L9.5 1.5"
                                    stroke="#4338CA" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-3">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
