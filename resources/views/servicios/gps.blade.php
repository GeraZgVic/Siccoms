@extends('layout.servicio')

@section('titulo', 'Servicio de GPS')

@section('description')
    Servicio de monitoreo GPS para flotillas y vehículos mejora la gestión, seguridad y eficiencia de tu flota. ¡Obtén más
    información ahora!
@endsection

@section('contenido')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 container px-6 py-12 mx-auto">
        <div>
            <livewire:text-animation texto="Rastreo GPS" />
            <section>
                <h2 class="text-2xl font-bold mb-4 text-gray-700">Rastreo GPS de Vehículos: Control Total de tu Flotilla</h2>
                <ul class="list-none mb-6 space-y-3">
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide">Control Preciso de la Ubicación en Tiempo Real</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide">Gestión Eficiente de Geocercas para Seguridad y
                            Eficiencia</span>
                    </li>
                    <li class="flex items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check mr-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M9 12l2 2l4 -4" />
                        </svg>
                        <span class="text-gray-700 tracking-wide">Optimización de Procesos: Planificación, Coordinación y
                            Monitoreo
                            Simplificados</span>
                    </li>
                </ul>
                <p class="mb-8">¡Mejora la eficiencia de tu flotilla hoy mismo con nuestro servicio de Rastreo GPS!</p>
            </section>
        </div>

        <div>
            <img src="{{ asset('img/hero-gps.jpg') }}" alt="GPS WEB" class="w-full h-auto rounded-lg">
            <p class="text-center text-gray-700 tracking-wide">En Siccoms, ofrecemos un excelente servicio de Rastreo GPS,
                respaldado
                por la tecnología avanzada de
                <a href="https://www.epcom.net/product/EPCOMGPSANUAL-EPCOM-144428.html" target="_blank"
                    class="hover:border-b-2 border-green-500 tracking-wide">
                    <strong>EPCOM GPS</strong>
                </a>, la plataforma líder en Rastreo GPS.
            </p>
        </div>
    </div>

    <div
        class="flex flex-col md:flex-row justify-center gap-y-8 gap-x-16 bg-gradient-to-r from-blue-500 via-blue-900 to-blue-500 py-6">
        <div class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-report w-28 h-28 md:w-40 md:h-40 transition-transform transform hover:scale-110 cursor-pointer"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#eff6ff" fill="none" stroke-linecap="round"
                stroke-linejoin="round" alt="Reportes sobre comportamiento de conductor">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
                <path d="M18 14v4h4" />
                <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
                <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M8 11h4" />
                <path d="M8 15h3" />
            </svg>
            <p class="text-center text-lg my-2 font-mulish-normal text-white">Reportes sobre<br><span
                    class="text-green-400">comportamiento</span><br>de conductor</p>
        </div>
        <div class="flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                class="w-28 h-28 md:w-40 md:h-40 transition-transform transform hover:scale-110 cursor-pointer"
                alt="Reducción de costos de combustible">
                <path
                    d="M22.917 12.5a4.158 4.158 0 0 0-4.167 4.167v66.666c0 2.084 2.083 4.167 4.167 4.167h37.5c2.083 0 4.166-2.083 4.166-4.167V62.5h2.084c2.083 0 2.083 2.083 2.083 2.083v8.334c0 4.166 2.083 6.25 6.25 6.25s6.25-2.084 6.25-6.25V50c0-4.167-8.333-8.333-8.333-12.5V25H68.75l-4.167-4.167v-4.166a4.158 4.158 0 0 0-4.166-4.167zm4.166 8.333H56.25V37.5H27.083zm37.5 12.5h4.167v6.25c0 4.167 8.333 8.334 8.333 12.5v20.834C77.083 75 75 75 75 75s-2.083 0-2.083-2.083V62.5c0-2.083-2.084-4.167-4.167-4.167h-4.167z"
                    style="marker:none" color="#000000" fill="#eff6ff" fill-opacity="1" fill-rule="nonzero" stroke="none"
                    stroke-width="2" visibility="visible" display="inline" overflow="visible" enable-background="accumulate"
                    class="fill-000000"></path>
            </svg>
            <p class="text-center text-lg my-2 font-mulish-normal text-white"><span
                    class="text-green-400">Reducción</span><br>de costos de<br>combustible</p>
        </div>
        <div class="flex flex-col items-center">
            <svg viewBox="0 0 50 50"
                class="w-28 h-28 md:w-40 md:h-40 transition-transform transform hover:scale-110 cursor-pointer"
                alt="Incremento en la productividad de las flota">
                <path fill="none" d="M0 0h50v50H0z"></path>
                <path
                    d="M25 1C11.767 1 1 11.766 1 25s10.767 24 24 24 24-10.766 24-24S38.233 1 25 1zm0 43C14.524 44 6 35.477 6 25S14.524 6 25 6s18.999 8.523 18.999 19S35.476 44 25 44z"
                    fill="none" stroke="#eff6ff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                    stroke-width="2.111" class="stroke-000000"></path>
                <path
                    d="M43.444 22c-8 0-11.841-5-18.444-5-6.613 0-9.944 5-18.444 5M29 42v-8c0-2.684 2.26-5 5-5h9.056m-36.5 0H16c2.885 0 5 2.23 5 5v8"
                    fill="none" stroke="#eff6ff" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" stroke-width="2" class="stroke-000000"></path>
                <circle cx="25" cy="25" fill="none" r="4" stroke="#eff6ff" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" class="stroke-000000"></circle>
            </svg>
            <p class="text-center text-lg my-2 font-mulish-normal text-white">Incremento en la<br><span
                    class="text-green-400">productividad</span> de<br>las flota</p>
        </div>
    </div>
    <section class="container px-6 py-12 mx-auto flex flex-col lg:flex-row items-center justify-center lg:justify-between">
        <div class="w-full lg:w-7/12 lg:pr-6">
            <h2 class="text-2xl md:text-3xl lg:text-5xl mb-4 md:mb-6 font-bold custom-font text-gray-700">Administración de Flotas</h2>
            <p class="text-lg text-gray-800 mb-4 md:mb-6">Descubre la plataforma líder en gestión de flotas de EPCOM GPS. Diseñada para brindarte un control total sobre tus operaciones vehiculares, nuestra innovadora solución te permite dirigirte directamente a los aspectos cruciales de tu negocio, maximizando la eficiencia y el control.</p>
            <p class="text-lg text-gray-800 mb-4 md:mb-6">El sistema de EPCOM GPS está diseñado para optimizar cada aspecto de tu flota. Desde la reducción del trabajo administrativo hasta la minimización de los costos de mantenimiento y combustible, nos enfocamos en eliminar los tiempos improductivos de tus vehículos y mejorar los hábitos de conducción. Con una gestión más eficiente de los kilómetros recorridos, logramos una ejecución más rápida y efectiva de las tareas, ayudándote a alcanzar tus objetivos de negocio.</p>
        </div>
        <div class="w-full lg:w-2/5">
            <img src="{{ asset('img/monitoreo-gps.webp') }}" alt="GPS WEB" class="w-full h-auto rounded-lg">
        </div>
    </section>
    
    



@endsection
