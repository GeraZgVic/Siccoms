<nav class="flex items-center w-full h-24 select-none navegacion " x-data="{ showMenu: false }">
    <div
        class=" relative flex w-full mx-auto font-medium md:items-center md:h-24 md:justify-between">
        {{-- LOGO --}}
        <a href="{{ route('home') }}"
            class="flex items-center py-4 pl-6 pr-4 font-extrabold text-white md:py-0 transition-transform duration-300 ease-in-out transform hover:scale-105 focus:scale-105">
            <img class="object-cover h-12 w-auto" src="{{ asset('img/lg-siccoms.png') }}" alt="Logo Siccoms">
        </a>
        {{-- enlaces de navegacion --}}
        <div id="show-menu" :class="{ 'flex': showMenu, 'hidden md:flex': !showMenu }"
            class="absolute z-50 flex-col items-center justify-center w-full h-auto px-2 text-center text-gray-200 -translate-x-1/2 border-0 border-gray-500 rounded-full md:border md:w-auto md:h-10 left-1/2 md:flex-row md:items-center">
            @foreach ($links as $link)
            <livewire:nav-link route="{{$link['ruta']}}" text="{{$link['texto']}}" />
            @endforeach
            
        </div>
        <div class="fixed top-0 left-0 z-40 items-center hidden w-full h-full p-3 text-sm bg-gray-900 bg-opacity-50 md:w-auto md:bg-transparent md:p-0 md:relative md:flex"
            :class="{ 'flex': showMenu, 'hidden': !showMenu }">
            <div id="menu-2"
                class="flex-col items-center w-full h-full p-3 overflow-hidden bg-black bg-opacity-50 rounded-lg select-none md:p-0 backdrop-blur-lg md:h-auto md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                <div class="flex flex-col items-center justify-end w-full h-full pt-2 md:w-full md:flex-row md:py-0">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="w-full py-5 mr-0 text-center text-gray-100 md:py-3 md:w-auto hover:text-white md:pl-0 md:mr-3 lg:mr-5">Admin</a>

                        <form action="{{ route('logout') }}" method="POST"
                            class="inline-flex items-center justify-center w-full px-4 py-3 md:py-1.5 font-medium leading-6 text-center whitespace-no-wrap transition duration-150 ease-in-out border border-transparent md:mr-1 text-gray-600 md:w-auto bg-white rounded-lg md:rounded-full hover:bg-white focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700">
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
            class="absolute right-0 z-50 flex flex-col items-end translate-y-1.5 w-10 h-10 p-2 mr-4 rounded-full cursor-pointer md:hidden hover:bg-gray-200/10 hover:bg-opacity-10"
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
