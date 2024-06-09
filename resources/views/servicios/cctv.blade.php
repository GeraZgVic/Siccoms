@extends('layout.servicio')

@section('titulo')
    Cámaras y Videovigilancia CCTV en Villahermosa, Tabasco
@endsection

@section('description')
    Protege tu hogar o negocio en Villahermosa, Tabasco, con nuestro servicio de cámaras y videovigilancia CCTV. Seguridad
    garantizada.
@endsection

@section('contenido')
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 sm:pt-4 lg:px-8 lg:pt-4">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
            <div>
                <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight">Soluciones de
                    Videovigilancia <span class="text-blue-500 mx-1 font-extrabold relative inline-block stroke-current">
                        CCTV
                        <svg class="absolute -bottom-0.5 w-full max-h-1.5" viewBox="0 0 55 5"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path d="M0.652466 4.00002C15.8925 2.66668 48.0351 0.400018 54.6853 2.00002" stroke-width="2">
                            </path>
                        </svg>
                    </span>
                </h1>
                <p class="mt-3 text-lg text-gray-800">
                    Ofrecemos una amplia gama de soluciones CCTV, desde:
                </p>
                <ul class="mt-3 text-lg text-gray-800 list-disc list-inside">
                    <li class="flex items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">CCTV Turbo e IP 4K</span>
                    </li>
                    <li class="flex items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Integraciones
                            cableadas en cobre y fibra óptica</span>
                        </li>
                    <li class="flex items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Integraciones
                            inalámbricas</span></li>
                    <li class="flex items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Software para
                            Videoanálisis e Inteligencia Artificial</span></li>
                    <li class="flex items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Almacenamiento
                            físico y en la nube</span></li>
                    <li class="flex items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">Soluciones de
                            grado industrial</span></li>
                    <li class="flex items-center mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="transition-transform transform hover:scale-110 cursor-pointer icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#1d4ed8" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide font-light">CCTV móvil y
                            portátil</span></li>

                </ul>
            </div>
            <div class="ms-4">
                <img class="w-full h-auto rounded-md" src="{{ asset('img/cam-cctv.webp') }}" alt="Image Description">
            </div>
        </div>
    </div>
@endsection
