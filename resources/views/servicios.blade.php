@extends('layout.app')
@section('titulo')
    Servicios
@endsection
@section('contenido')
<section class="bg-cover bg-center bg-fixed" style="background-image: url('{{asset('img/hero-servicios.webp')}}')">
    <div class="h-[80vh] md:h-screen justify-center items-center flex flex-col md:flex-row bg-black bg-opacity-50 backdrop-blur-sm">
        <div class="w-full">
            <div class="px-4 md:px-6 md:my-8">
                <div class="mb-4">
                    <h1
                    class="animate-fade-down mt-4 md:mt-0 block text-4xl md:text-5xl lg:text-6xl  font-bold text-gray-100 lg:leading-tight font-mulish-bold">
                    Servicios <span class="text-blue-400 mx-1 font-extrabold relative inline-block stroke-current">
                        Siccoms
                        <svg class="absolute -bottom-0.5 w-full max-h-1.5" viewBox="0 0 55 5"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path d="M0.652466 4.00002C15.8925 2.66668 48.0351 0.400018 54.6853 2.00002" stroke-width="2">
                            </path>
                        </svg>
                    </span></h1>
                </div>
                <p class="mb-4 font-medium tracking-tight text-gray-100 text-lg animate-fade-down animate-duration-[1500ms]">Afianzamos nuestros
                    servicios en la región sureste de la república con el objetivo de brindar servicios de
                    consultoría a empresas de los sectores energético y jurídico.</p>
                <ul>
                    <li class="flex items-center py-2 space-x-4 xl:py-3">
                        <svg class="w-8 h-8 text-pink-500 animate-fade-right animate-duration-1000" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                            </path>
                        </svg>
                        <span class="font-medium text-gray-100 capitalize text-lg animate-fade-left animate-duration-1000">servicios de ingenieria TI</span>
                    </li>
                    <li class="flex items-center py-2 space-x-4 xl:py-3">
                        <svg class="w-8 h-8 text-yellow-500 animate-fade-right animate-duration-1000" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        <span class="font-medium text-gray-100 text-lg animate-fade-left animate-duration-1000">Ingenieria De Software</span>
                    </li>
                    <li class="flex items-center py-2 space-x-4 xl:py-3">
                        <svg class="w-8 h-8 text-green-500 animate-fade-right animate-duration-1000" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                        <span class="font-medium text-gray-100 text-lg animate-fade-left animate-duration-1000">Seguridad Electrónica y
                            Automatización</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full max-w-[80svh] mx-16 mb-12 hidden md:block animate-jump-in animate-duration-[1500ms] animate-ease-out">
            <livewire:ejemplo-componente />
        </div>
    </div>
</section>

    <div
        class=" nuestros-servicios bottom-0 left-0 w-full h-6 bg-[linear-gradient(to_right,theme(colors.blue.400),theme(colors.blue.100),theme(colors.sky.400),theme(colors.blue.300),theme(colors.sky.400),theme(colors.blue.100),theme(colors.blue.400))] bg-[length:200%_auto] animate-gradient ">
    </div>

    <section class="seccion nuestros-servicios my-6">
        <livewire:tab-servicios />
    </section>
@endsection
