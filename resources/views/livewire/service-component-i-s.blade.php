<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    @foreach ($serviciosIS as $servicio)
        <div class="max-w-sm w-full lg:max-w-full lg:flex mb-4 transition duration-300 ease-in-out hover:shadow-lg hover:shadow-blue-600/40">
            <div class="h-48 lg:h-auto md:h-64 lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                <img class="object-cover object-center w-full h-full" src="{{ $servicio['imagen'] }}" alt="Service Image">
            </div>
            <div class="border border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-center leading-normal w-full">
                <div class="mb-8">
                    <div class="text-gray-900 font-bold text-xl mb-2 text-center">{{ $servicio['titulo'] }}</div>
                    <ul class="text-gray-600 text-base list-disc pl-4">
                        @foreach ($servicio['lista'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
