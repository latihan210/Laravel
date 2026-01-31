@php
    $activeClass = 'bg-gray-950/50 text-white';
    $defaultClass = 'text-gray-300 hover:bg-white/5 hover:text-white';
@endphp

<a href="/"
    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('/') ? $activeClass : $defaultClass }}"
    {{ request()->is('/') ? 'aria-current=page' : '' }}>Home</a>
<a href="/about"
    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('about') ? $activeClass : $defaultClass }}"
    {{ request()->is('about') ? 'aria-current=page' : '' }}>About</a>
<a href="/contact"
    class="block rounded-md px-3 py-2 text-base font-medium {{ request()->is('contact') ? $activeClass : $defaultClass }}"
    {{ request()->is('contact') ? 'aria-current=page' : '' }}>Contact</a>
