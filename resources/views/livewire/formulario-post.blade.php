<div class="mb-3">
    <div class="max-w-2xl mx-auto mt-10">
        <h2 class="text-3xl font-semibold mb-4 text-blue-800 font-mono">Crear nuevo post</h2>
        <form wire:submit='save' novalidate>

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Título</label>
                <input type="text" wire:model="title" id="title"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                @error('title')
                    <div
                        class="flex items-center justify-center p-4 my-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Alerta</span>
                        <div>
                            <span class="font-medium">Error!</span> {{ $message }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="article" class="block text-gray-700 font-semibold mb-2">Artículo</label>
                <select wire:model="article" id="article"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">Selecciona un artículo</option>
                    @foreach ($articulos as $articulo)
                        <option value="{{ $articulo->id }}">{{ $articulo->name }}</option>
                    @endforeach
                </select>
                @error('article')
                    <div
                        class="flex items-center justify-center p-4 my-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Alerta</span>
                        <div>
                            <span class="font-medium">Error!</span> {{ $message }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="image">Imagen</label>
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}">
                @endif
                <input type="file" wire:model='image' id="image">
                <div wire:loading wire:target='image'>Cargando...</div>
                @error('image')
                    <div
                        class="flex items-center justify-center p-4 my-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Alerta</span>
                        <div>
                            <span class="font-medium">Error!</span> {{ $message }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Descripción</label>
                <textarea wire:model="description" id="description" rows="5"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                    @error('description')
                    <div
                        class="flex items-center justify-center p-4 my-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Alerta</span>
                        <div>
                            <span class="font-medium">Error!</span> {{ $message }}
                        </div>
                    </div>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 w-full md:w-auto">Guardar</button>
            </div>
        </form>
    </div>
</div>
