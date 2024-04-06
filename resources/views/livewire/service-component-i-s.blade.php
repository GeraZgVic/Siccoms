<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($serviciosIS as $servicio)
        <div class="overflow-hidden rounded-lg">
            <div class="h-48 md:h-64 lg:h-72 bg-cover bg-center" style="background-image: url('{{ $servicio['imagen'] }}')"></div>
            <div class="p-4">
                <h3 class="font-bold text-xl mb-3">{{ $servicio['titulo'] }}</h3>
                <ul class="text-gray-600 text-base list-none">
                    @foreach ($servicio['lista'] as $item)
                        <li class="flex items-center mb-2">
                            <div class="bg-blue-500 rounded-full p-1 mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white stroke-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
