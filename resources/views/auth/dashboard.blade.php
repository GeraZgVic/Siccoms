@extends('layout.auth')

@section('titulo')
    Dashboard
@endsection

@section('contenido')
    <div x-data="{ activeTab: 'verPublicaciones' }">
        <nav class="bg-gray-100 py-2 flex flex-col md:flex-row md:justify-around text-center ">
            <a @click="activeTab = 'verPublicaciones'"
                :class="{ 'border-b-2 border-cyan-500': activeTab === 'verPublicaciones' }"
                class="font-semibold text-blue-800 relative px-4 py-2 transition duration-300 cursor-pointer">Ver
                publicaciones</a>
            <a @click="activeTab = 'crearPublicacion'"
                :class="{ 'border-b-2 border-cyan-500': activeTab === 'crearPublicacion' }"
                class="font-semibold text-blue-800 relative px-4 py-2 transition duration-300 cursor-pointer">Crear nueva
                publicación</a>
        </nav>

        <div x-show="activeTab === 'verPublicaciones'" class="container mx-auto px-4 ">
            @if (session('success'))
                <div>
                    <div
                        class="flex items-center justify-center p-4 my-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Alerta</span>
                        <div>
                            <span class="font-medium">Info</span> {{ session('success') }}.
                        </div>
                    </div>
                </div>
            @endif
            <!-- Contenido del tab 'Ver publicaciones' -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 my-4">
                @forelse ($posts as $post)
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
                    <div class="bg-white rounded-lg shadow-md overflow-hidden p-4">
                        <a href="{{route('posts.show', $post->id)}}">
                            <img class="w-full h-48 bg-cover bg-center object-cover object-center rounded-md transform hover:scale-105 transition duration-300"
                                src="{{ asset('storage/blog/' . $post->image) }}" alt="{{$post->title}}">
                        </a>
                        <div class="p-4 space-y-3">
                            <span
                                class="{{ $colorClass }} py-1 px-2 rounded-full text-xs text-white font-medium uppercase leading-none">{{ $post->article->name }}</span>
                            <h2 class="text-2xl font-bold mt-2 text-blue-900"><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></h2>
                            <p class="text-gray-700 mt-2 line-clamp-3 leading-relaxed">{{ $post->description }}</p>
                            <p class="text-gray-500 mt-4">{{ $post->created_at->diffForHumans() }}</p>

                            <div class="flex justify-end gap-2">
                                {{-- Eliminar --}}
                                    <button 
                                        onclick="confirmDelete({{$post->id }})"
                                        type="button" 
                                        class="text-red-600 hover:text-red-800 focus:text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                {{-- Editar --}}
                                <a
                                    href="{{route('posts.edit', $post->id)}}"
                                    class="text-indigo-600 hover:text-indigo-800 focus:text-indigo-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                @empty
                    <p class="text-light text-center text-gray-600 col-span-3">No hay ningún post, agregue alguno..</p>
                @endforelse
            </div>
            <div class="my-3">
                {{ $posts->links() }}
            </div>
        </div>

        <div x-show="activeTab === 'crearPublicacion'" class="container mx-auto px-4 ">
            <!-- Contenido del tab 'Crear nueva publicación' -->
            <livewire:formulario-post />
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si el usuario confirma, envía una solicitud DELETE al servidor
                    fetch('/posts/delete/' + id, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{csrf_token() }}'
                        }
                    }).then(response => {
                        // Redirige a la página después de la eliminación
                        window.location.href = '/dashboard';
                    }).catch(error => {
                        console.error('Error al eliminar el post:', error)
                    })
                }
            });
        }
    </script>
@endpush
