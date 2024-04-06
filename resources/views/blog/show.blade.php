@extends('layout.app')

@section('titulo')
    Post - {{ $post->title }}
@endsection


@section('contenido')
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
                        : 'bg-blue-500'));
    @endphp

    <div class="px-3 md:px-0 m-auto py-4 max-w-3xl">
        <article>
            <img class="w-full h-full bg-cover bg-center object-cover object-center rounded-md"
                src="{{ asset('storage/blog/' . $post->image) }}" alt="{{ $post->title }}">

            <div class="flex justify-center">
                <div class="md:relative md:z-10 p-4 bg-white shadow-sm md:-mt-6 rounded-md w-full max-w-2xl">
                    <span
                        class="{{ $colorClass }} py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">{{ $post->article->name }}</span>
                    <h2 class="text-2xl font-bold mt-2"><a href="#">{{ $post->title }}</a></h2>
                    <p class="text-gray-700 mt-2 leading-relaxed">{{ $post->description }}</p>
                    <p class="mt-4 text-blue-600">{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </article>
    </div>
@endsection
