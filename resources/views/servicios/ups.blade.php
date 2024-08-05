@extends('layout.servicio')

@section('titulo', 'Ups')

@section('description')
Servicio de ups
@endsection

@section('contenido')

<section class="relative bg-gradient-to-br from-blue-900 to-indigo-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 bg-cover bg-center bg-blend-overlay bg-black/50" style="background-image: url('/img/upshero.webp');"></div>

    <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Left Side: Company Info -->
            <div class="w-full md:w-1/2 mb-12 md:mb-0">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                    Protege tus Dispositivos con nuestros UPS de Alta Calidad
                </h1>
                <p class="text-xl mb-8 text-gray-300">¡No permitas que un corte de energía interrumpa tu trabajo o dañe tus dispositivos electrónicos!</p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('contacto.index') }}" class="bg-white text-blue-900 font-semibold px-8 py-3 rounded-full hover:bg-blue-100 transition duration-300 text-center">Contactanos</a>

                </div>
            </div>

            <!-- Right Side: Features -->
            <div class="w-full md:w-1/2 md:pl-12">
                <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-8 shadow-2xl">
                    <h2 class="text-2xl font-semibold mb-6">Descubre nuestra gama de UPS</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Estabilidad del Voltaje</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span>Protección Contra Cortes de Energía</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-3 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                            </svg>
                            <span>Continuidad en el Trabajo y Productividad</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Element -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white" />
        </svg>
    </div>
</section>

<div class="px-2 py-20 w-full flex justify-center">
    <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg rounded-lg">
        <div class="lg:w-1/2">
            <div class="lg:scale-110 h-80 bg-cover bg-center lg:h-full rounded-b-none border lg:rounded-lg" style="background-image: url('/img/ups/cyberpower2.jpg');">
            </div>
        </div>
        <div class="py-12 px-6 lg:px-12 max-w-xl lg:max-w-5xl lg:w-1/2 rounded-t-none border lg:rounded-lg">
            <h2 class="text-3xl text-gray-800 font-bold">
                Asegura tu Continuidad Operativa con nuestros UPS de Alta
                <span class="text-green-500">Eficiencia</span>
            </h2>
            <p class="mt-4 text-gray-600">
                Evita interrupciones en tus actividades diarias y protege tus valiosos equipos con nuestros avanzados UPS. Diseñados para ofrecer la mejor protección y respaldo de energía, garantizan que tus dispositivos sigan funcionando sin problemas, incluso en situaciones de emergencia.
            </p>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- Product Images -->
            <div class="w-full md:w-1/2 px-4 mb-8">
                <img src="{{ asset('img/ups/OLS1000A-l.webp') }}" alt="Product" class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage">
                <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                    <img src="{{ asset('img/ups/OLS1000A-l.webp') }}" alt="Thumbnail 1" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage(this.src)">
                    <img src="{{ asset('img/ups/OLS1000A-AD-1-l.png') }}" alt="Thumbnail 2" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage(this.src)">
                    <img src="{{ asset('img/ups/OLS1000A-AD-2-l.png') }}" alt="Thumbnail 3" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage(this.src)">
                    <img src="{{ asset('img/ups/OLS1000A-AD-4-l.png') }}" alt="Thumbnail 4" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage(this.src)">
                </div>
            </div>

            <!-- Product Details -->
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl font-bold mb-2">UPS de 1000 VA/900 W, Online Doble Conversión, Entrada 120 Vca NEMA 5-15P, Onda Senoidal Pura, Tipo Torre, Con 4 Tomas NEMA 5-15R</h2>
                <div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Características Principales</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Tiempo de respaldo con media carga (450 W): 15 Minutos</li>
                            <li>Capacidad de Gestión Remota SNMP / HTTP Con Tarjeta RMCARD205 (Opcional)</li>
                            <li>Software de Gestión PowerPanel® Gratuito</li>
                            <li>Tiempo de Transferencia Cero Segundos</li>
                            <li>2 años de garantía (1 año en baterías).</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <p><strong>Modelo:</strong> OLS1000A</p>
                        <p><strong>Marca:</strong> CYBERPOWER</p>
                    </div>
                </div>
                <div class="flex items-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2 text-gray-600">4.5 (150 Reseñas)</span>
                </div>
            </div>
        </div>



    </div>
</div>

<div class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- Product Images -->
            <div class="w-full md:w-1/2 px-4 mb-8">
                <img src="{{ asset('img/ups/OLS3000A-l.webp') }}" alt="Product" class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage1">
                <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                    <img src="{{ asset('img/ups/OLS3000A-l.webp') }}" alt="Thumbnail 1" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage1(this.src)">
                    <img src="{{ asset('img/ups/OLS3000A-AD-1-l.webp') }}" alt="Thumbnail 2" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage1(this.src)">
                    <img src="{{ asset('img/ups/OLS3000A-AD-2-l.webp') }}" alt="Thumbnail 3" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage1(this.src)">
                    <img src="{{ asset('img/ups/OLS3000A-AD-3-l.webp') }}" alt="Thumbnail 4" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage1(this.src)">
                </div>
            </div>

            <!-- Product Details -->
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl font-bold mb-2">UPS de 3000 VA/2700 W, Online Doble Conversión, Entrada 120 Vca NEMA L5-30P, Onda Senoidal Pura, Tipo Torre, Con 4 Tomas NEMA 5-20R y 1 Block Hardwired</h2>
                <div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Características Principales</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Tiempo de respaldo con media carga (1350 W): 14 Minutos</li>
                            <li>Capacidad de Gestión Remota SNMP / HTTP Con Tarjeta RMCARD205 (Opcional)</li>
                            <li>Software de Gestión PowerPanel® Gratuito</li>
                            <li>Tiempo de Transferencia Cero Segundos</li>
                            <li>2 años de garantía (1 año en baterías).</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <p><strong>Modelo:</strong> OLS3000A</p>
                        <p><strong>Marca:</strong> CYBERPOWER</p>
                    </div>
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2 text-gray-600">4.5 (255 Reseñas)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
</div>

<div class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- Product Images -->
            <div class="w-full md:w-1/2 px-4 mb-8">
                <img src="{{ asset('img/ups/OL10KRTF-l.webp') }}" alt="Product" class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage2">
                <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                    <img src="{{ asset('img/ups/OL10KRTF-l.webp') }}" alt="Thumbnail 1" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage2(this.src)">
                    <img src="{{ asset('img/ups/OL10KRTF-AD-1-l.webp') }}" alt="Thumbnail 2" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage2(this.src)">
                    <img src="{{ asset('img/ups/OL10KRTF-AD-2-l.webp') }}" alt="Thumbnail 3" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage2(this.src)">
                    <img src="{{ asset('img/ups/OL10KRTF-AD-3-l.webp') }}" alt="Thumbnail 4" class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300" onclick="changeImage2(this.src)">
                </div>
            </div>

            <!-- Product Details -->
            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-3xl font-bold mb-2">UPS de 10000 VA/10000 W, Online Doble Conversión, 200 - 240 Vac de Entrada, 120 - 240 Vac de Salida, Entrada Hardwired, Onda Senoidal Pura, Torre o Rack de 8 UR, Con 6 Tomas NEMA 5-20R, 3 NEMA L6-30R y Terminal Hardwire</h2>
                <div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Características Principales</h3>
                        <ul class="list-disc list-inside text-gray-700">
                            <li>Tiempo de respaldo con media carga (5000 W): 10 Minutos</li>
                            <li>Capacidad de Gestión Remota SNMP / HTTP Con Tarjeta RMCARD205 (opcional)</li>
                            <li>Software de Gestión PowerPanel® Gratuito</li>
                            <li>Tiempo de Transferencia Cero Segundos</li>
                            <li>Entrada y Salida Hardwired para Conexión con Cable Eléctrico de Uso Rudo.</li>
                        </ul>
                    </div>
                    <div class="mt-6">
                        <p><strong>Modelo:</strong> OLS3000A</p>
                        <p><strong>Marca:</strong> CYBERPOWER</p>
                    </div>

                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-yellow-500">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2 text-gray-600">4.5 (120 Reseñas)</span>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>

    <script>
        function changeImage1(src) {
            document.getElementById('mainImage1').src = src;
        }
    </script>

    <script>
        function changeImage2(src) {
            document.getElementById('mainImage2').src = src;
        }
    </script>
    @endsection