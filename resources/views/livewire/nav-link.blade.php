<!-- resources/views/livewire/nav-link.blade.php -->

@php
    $isActive = request()->routeIs($route);
@endphp

<a href="{{ route($route) }}"
    wire:navigate
   class="relative inline-block w-full h-full py-5 mx-1 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-2  md:text-center"
>
    <span>{{ $text }}</span>
    <span class="{{ $isActive ? 'absolute bottom-0 left-0 w-full h-px  duration-300 ease-out translate-y-px bg-gradient-to-r md:from-sky-700 md:via-sky-200 md:to-sky-700 from-sky-900 via-sky-600 to-sky-900' : 'absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-sky-700 md:via-sky-200 md:to-sky-700 from-sky-900 via-sky-600 to-sky-900' }}"></span>
</a>
