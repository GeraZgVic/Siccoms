<nav class="flex items-center w-full h-24 select-none navegacion bg-blue-950 sticky top-0 z-40" x-data="{ showMenu: false }">
    <div class=" relative flex w-full mx-auto font-medium lg:items-center lg:h-24 lg:justify-between">
        {{-- LOGO --}}
        <a href="{{ route('home') }}"
            class="flex items-center py-4 pl-6 pr-4 font-extrabold text-white lg:py-0 transition-transform duration-300 ease-in-out transform hover:scale-105 focus:scale-105">
            <img class="object-cover h-8 lg:h-10 w-auto" src="{{ asset('img/lg-siccoms.png') }}" alt="Logo Siccoms">
        </a>

        <div id="show-menu" :class="{ 'flex py-8 w-full': showMenu, 'hidden lg:flex': !showMenu }"
            class="absolute z-50 flex-col items-center justify-center w-full h-auto px-2  text-gray-200 -translate-x-1/2 border-0 border-gray-500 lg:rounded-full lg:border lg:w-auto lg:h-10 left-1/2 lg:flex-row lg:items-center">
            <div x-data="{ isOpen: false, openedWithKeyboard: false, openTab: 1 }" class="relative"
                @keydown.esc.window="isOpen = false; openedWithKeyboard = false">
                <!-- Toggle Button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="inline-flex cursor-pointer items-center gap-1.5 whitespace-nowrap rounded-xl px-4 py-2 text-sm font-medium tracking-wide transition hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-800"
                    aria-haspopup="true" @keydown.space.prevent="openedWithKeyboard = true"
                    @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true"
                    :class="isOpen || openedWithKeyboard ? 'text-gray-300' : 'text-gray-200'"
                    :aria-expanded="isOpen || openedWithKeyboard">
                    Servicios
                    <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="size-4 rotate-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <!-- Dropdown Menu -->
                <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard"
                    @click.outside="isOpen = false; openedWithKeyboard = false"
                    @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()"
                    class="lg:absolute lg:top-14 lg:-left-48 flex flex-col overflow-hidden bg-slate-800 rounded-md"
                    role="menu">
                    <div class="flex flex-col lg:flex-row w-full lg:w-[50rem] h-auto lg:h-[19rem] z-50">
                        <!-- Menú lateral -->
                        <div class="w-full h-full lg:w-1/3 flex flex-col lg:justify-between lg:pt-4">
                            <div class="flex flex-col justify-around items-end">

                                <button @click="openTab = 1" :class="openTab === 1 ? 'bg-gray-600' : ''"
                                    class="w-full lg:w-2/3 lg:rounded-l-md px-4 py-2 text-gray-200 hover:text-gray-400">
                                    Ingeniería TI
                                </button>
                                <button @click="openTab = 2" :class="openTab === 2 ? 'bg-gray-600' : ''"
                                    class="w-full lg:w-2/3 lg:rounded-l-md px-4 py-2 text-gray-200 hover:text-gray-400">
                                    Seguridad
                                </button>
                                <button @click="openTab = 3" :class="openTab === 3 ? 'bg-gray-600' : ''"
                                    class="w-full lg:w-2/3 lg:rounded-l-md px-4 py-2 text-gray-200 hover:text-gray-400">
                                    Ing Software
                                </button>
                            </div>

                            <div class="lg:flex justify-center lg:justify-end">
                                <a href="{{ route('servicios.index') }}"
                                    class="inline-flex justify-center gap-x-1 w-full  lg:w-3/4 lg:rounded-l-md px-4 py-2 text-gray-200 hover:text-gray-400 lg:text-sm">
                                    Ver todos los servicios
                                    <span class="hidden lg:inline-block">
                                        <svg class="h-6 w-6 text-gray-200" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>



                        <!-- Contenido derecho -->
                        <div class="w-full h-auto  p-4 bg-slate-900 lg:pt-4">
                            <!-- Contenido 1 -->
                            <div x-show="openTab === 1">
                                <h3 class="text-sm my-3 font-mulish-bold">Ingeniería en Tecnologías de Información</h3>
                                <ul class="space-y-3 text-center">
                                    <div class="text-center grid lg:grid-cols-2 gap-2 mt-2 lg:mt-0 ">
                                        <a href="{{ route('servicios.mantenimiento') }}"
                                            class="flex gap-2 items-center">
                                            <span class="bg-slate-600 p-2 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                                                </svg>
                                            </span>
                                            Mantenimiento
                                        </a>
                                        <a href="{{ route('servicios.computo') }}" class="flex gap-2 items-center">
                                            <span class="bg-slate-600 p-2 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                                </svg>

                                            </span>
                                            Venta de equipos de computo
                                        </a>
                                    
                                        <a href="{{ route('servicios.amplificadorSeñal') }}"
                                            class="flex gap-2 items-center">
                                            <span class="bg-slate-600 p-2 rounded-md">
                                                <svg class="h-6 w-6 text-gray-200" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <rect x="3" y="13" width="18" height="8"
                                                        rx="2" />
                                                    <line x1="17" y1="17" x2="17"
                                                        y2="17.01" />
                                                    <line x1="13" y1="17" x2="13"
                                                        y2="17.01" />
                                                    <line x1="15" y1="13" x2="15"
                                                        y2="11" />
                                                    <path d="M11.75 8.75a4 4 0 0 1 6.5 0" />
                                                    <path d="M8.5 6.5a8 8 0 0 1 13 0" />
                                                </svg>
                                            </span>
                                            Amplificador de Señal
                                        </a>
                                        <a href="{{ route('servicios.redesInalambricas') }}"
                                            class="flex gap-2 items-center">
                                            <span class="bg-slate-600 p-2 rounded-md">
                                                <svg class="h-6 w-6 text-gray-200" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <g transform="rotate(-45 12 18)">
                                                        <line x1="12" y1="18" x2="12.01"
                                                            y2="18" />
                                                        <path d="M12 14a4 4 0 0 1 4 4" />
                                                        <path d="M12 10a8 8 0 0 1 8 8" />
                                                        <path d="M12 6a12 12 0 0 1 12 12" />
                                                    </g>
                                                </svg>
                                            </span>
                                            Redes inalámbricas
                                        </a>
                                        <a href="#" class="flex gap-2 items-center">
                                            <span class="bg-slate-600 p-2 rounded-md">
                                                <svg class="h-6 w-6 text-gray-200" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <circle cx="6" cy="19" r="2" />
                                                    <circle cx="18" cy="5" r="2" />
                                                    <path d="M12 19h4.5a3.5 3.5 0 0 0 0 -7h-8a3.5 3.5 0 0 1 0 -7h3.5" />
                                                </svg>
                                            </span>
                                            Cableado Estructurado
                                        </a>
                                        <a href="#" class="flex gap-2 items-center">
                                            <span class="bg-slate-600 p-2 rounded-md">
                                                <svg class="h-6 w-6 text-gray-200" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                                </svg>
                                            </span>
                                            Telefonía
                                        </a>
                                        <a href="#" class="flex gap-2 items-center">
                                            <span class="bg-slate-600 p-2 rounded-md">
                                                <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                                                </svg>
                                            </span>
                                            UPS
                                        </a>
                                    </div>
                                </ul>
                            </div>


                            <!-- Contenido 2 -->
                            <div x-show="openTab === 2">
                                <h3 class="text-sm my-3 font-mulish-bold">Seguridad Electrónica y Automatización</h3>
                                <div class="text-center grid lg:grid-cols-2 gap-2 mt-2 lg:mt-0 ">
                                    <a href="{{ route('servicios.cctv') }}" class="flex gap-2 items-center">
                                        <span class="bg-slate-600 p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                                            </svg>
                                        </span>
                                        Soluciones de CCTV
                                    </a>
                                    <a href="{{ route('servicios.alarmas') }}" class="flex gap-2 items-center">
                                        <span class="bg-slate-600 p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                            </svg>
                                        </span>
                                        Alarmas Comerciales
                                    </a>

                                    <a href="{{ route('servicios.alarmas') }}" class="flex gap-2 items-center">
                                        <span class="bg-slate-600 p-2 rounded-md">
                                            <svg class="h-6 w-6 text-white" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="17" cy="17" r="2" />
                                                <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                                                <line x1="3" y1="9" x2="7" y2="9" />
                                            </svg>
                                        </span>
                                        Control de acceso vehicular
                                    </a>
                                    <a href="{{ route('servicios.alarmas') }}" class="flex gap-2 items-center">
                                        <span class="bg-slate-600 p-2 rounded-md">
                                            <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <polyline points="12.41 6.75 13 2 10.57 4.92" />
                                                <polyline points="18.57 12.91 21 10 15.66 10" />
                                                <polyline points="8 8 3 14 12 14 11 22 16 16" />
                                                <line x1="1" y1="1" x2="23" y2="23" />
                                            </svg>
                                        </span>
                                        Cercos Eléctricos
                                    </a>
                                    <a href="{{ route('servicios.alarmas') }}" class="flex gap-2 items-center">
                                        <span class="bg-slate-600 p-2 rounded-md">
                                            <svg class="h-6 w-6 text-white" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <line x1="18" y1="6" x2="18" y2="6.01" />
                                                <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                                                <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                                                <line x1="9" y1="4" x2="9" y2="17" />
                                                <line x1="15" y1="15" x2="15" y2="20" />
                                            </svg>
                                        </span>
                                        GPS
                                    </a>
                                </div>
                            </div>


                            <!-- Contenido 3 -->
                            <div x-show="openTab === 3">
                                <h3 class="text-sm my-3 font-mulish-bold">Ingeniería de Software</h3>
                                <div class="text-center grid lg:grid-cols-2 gap-2 mt-2 lg:mt-0 ">
                                    <a href="#" class="flex gap-2 items-center">
                                        <span class="bg-slate-600 p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                            </svg>
                                        </span>
                                        Consultoría Tecnológica
                                    </a>
                                    <a href="{{ route('servicios.desarrollo') }}" class="flex gap-2 items-center">
                                        <span class="bg-slate-600 p-2 rounded-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                                            </svg>
                                        </span>
                                        Desarrollo Web y Software
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($links as $link)
                <livewire:nav-link route="{{ $link['ruta'] }}" text="{{ $link['texto'] }}" />
            @endforeach
        </div>
        <div class="fixed top-0 left-0 z-40 items-center hidden w-full h-full p-3 text-sm bg-gray-900 bg-opacity-50 lg:w-auto lg:bg-transparent lg:p-0 lg:relative lg:flex"
            :class="{ 'flex': showMenu, 'hidden': !showMenu }">
            <div id="menu-2"
                class="flex-col items-center w-full h-full p-3 overflow-hidden bg-black bg-opacity-50 rounded-lg select-none lg:p-0 backdrop-blur-lg lg:h-auto lg:bg-transparent lg:rounded-none lg:relative lg:flex lg:flex-row lg:overflow-auto">
                <div class="flex flex-col items-center justify-end w-full h-full pt-2 lg:w-full lg:flex-row lg:py-0">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="w-full py-5 mr-0 text-center text-gray-100 lg:py-3 lg:w-auto hover:text-white lg:pl-0 lg:mr-5">Admin</a>

                        <form action="{{ route('logout') }}" method="POST"
                            class="inline-flex items-center justify-center w-full px-4 py-3 lg:py-1.5 font-medium leading-6 text-center whitespace-no-wrap transition duration-150 ease-in-out border border-transparent lg:mr-1 text-gray-600 lg:w-auto bg-white rounded-lg lg:rounded-full hover:bg-white focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700">
                            @csrf
                            <button type="submit">
                                Logout
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <div @click="showMenu = !showMenu"
        class="absolute right-0 z-50 flex flex-col items-end translate-y-1.5 w-10 h-10 p-2 mr-4 rounded-full cursor-pointer lg:hidden hover:bg-gray-200/10 hover:bg-opacity-10"
        :class="{ 'text-gray-400': showMenu, 'text-gray-100': !showMenu }">
        <svg class="w-6 h-6" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
            <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg class="w-6 h-6" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg" x-cloak>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </div>
    </div>
</nav>
