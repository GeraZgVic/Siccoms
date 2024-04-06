@extends('layout.app')
@section('titulo')
    Blog
@endsection
@section('contenido')
    <div class="container px-6 py-12 mx-auto">
        <livewire:text-animation texto="Nuestro Blog" />
        <p class="mt-4 text-lg leading-7 text-gray-700">¡Bienvenido a nuestro blog en Siccoms! Nos complace compartir nuestra amplia experiencia de más de una década en la prestación de servicios integrales de consultoría. </p>
        <div class="border border-blue-300 my-8"></div>

        <div class="flex flex-col items-center md:flex-row my-6">
            <div class="w-full md:w-1/2">
                <a href="{{route('posts.show', $firstPost->id)}}" class="block">
                    <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96"
                        src="{{asset('storage/blog/' . $firstPost->image) }}" alt="Imagen de un post">
                </a>
            </div>
            <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                <div class="flex flex-col items-start justify-center h-full space-y-3 md:pl-10 lg:pl-16 md:space-y-5">
                    <span
                        class="bg-teal-500 py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">{{$firstPost->article->name}}</span>
                    <h2 class="text-3xl font-bold leading-tight md:text-4xl lg:text-5xl xl:text-6xl capitalize"><a
                            href="{{route('posts.show', $firstPost->id)}}">{{$firstPost->title}}</a></h2>
                    <p class="text-gray-700 mt-2 line-clamp-5">{{$firstPost->description}}</p>
                    <p class="text-gray-500 mt-4">{{$firstPost->created_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 my-4">
            @forelse ($posts as $post)
                {{-- Logica para cambiar el bg del article --}}
                @php
                    $articleId = $post->article_id;
                    // Clases predeterminadas de cada tipo
                    $colorClass = ($articleId == 1) ? 'bg-green-500' : (($articleId == 2) ? 'bg-yellow-500' : (($articleId == 3) ? 'bg-blue-500' : 'bg-blue-500'));
                @endphp
                <div class="bg-white rounded-lg overflow-hidden p-4">
                    <a href="{{route('posts.show', $post->id)}}">
                        <img class="w-full h-48 bg-cover bg-center object-cover object-center rounded-md"
                            src="{{ asset('storage/blog/' . $post->image) }}" alt="{{$post->title}}">
                    </a>
                    <div class="p-4 space-y-3">
                        <span
                            class="{{$colorClass}} py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">{{ $post->article->name }}</span>
                        <h2 class="text-2xl font-bold mt-2 text-blue-900"><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></h2>
                        <p class="text-gray-700 mt-2 line-clamp-3 leading-relaxed">{{$post->description}}</p>
                        <p class="text-gray-500 mt-4">{{$post->created_at->diffForHumans()}}</p>
                    </div>
                </div>
            @empty
                <p class="text-light text-center text-gray-600 col-span-3">No hay ningún post </p>
            @endforelse
        </div>
        <div class="my-3">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
