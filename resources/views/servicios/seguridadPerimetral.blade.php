@extends('layout.servicio')

@section('titulo')
Servicio de cercas electricas
@endsection

@section('description')
Servicio de Cercas electricas
@endsection

@section('contenido')


<section class="bg-gray-900">
    <div class=" mx-auto max-w-screen-xl text-center py-24 lg:py-5">
        <h1 class="pb-4 text-3xl md:text-4xl lg:text-6xl mb-2 md:m-0 font-bold text-white"> Control de Acceso
            Perimetral</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">La seguridad y el control son
            aspectos cruciales en cualquier instalación, ya sea residencial, comercial o industrial. Nuestro sistema de
            Control de Acceso Perimetral está diseñado para ofrecer una protección óptima y mantener tu propiedad segura
            de intrusos no deseados.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <!-- Image Section -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/hero-perimetral.jpg') }}" alt="Desarrollo Web"
                    class="max-w-xl object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>





@endsection