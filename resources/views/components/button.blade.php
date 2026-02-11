@props([
'type' => 'submit',
'as' => 'button',
'variant' => 'primary',
])

@php
$baseClasses = 'block rounded-md px-3 py-2 text-center text-sm font-medium shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2';

$variants = [
'danger' => 'bg-red-600 text-white hover:bg-red-500 focus-visible:outline-red-600',
'warning' => 'bg-yellow-500 text-white hover:bg-yellow-400 focus-visible:outline-yellow-500',
'secondary' => 'bg-gray-200 text-gray-800 hover:bg-gray-300 focus-visible:outline-gray-400',
'primary' => 'bg-blue-600 text-white hover:bg-blue-500 focus-visible:outline-blue-600',
];

$variantClasses = $variants[$variant] ?? $variants['primary'];
$classes = $baseClasses . ' ' . $variantClasses;
@endphp

@if ($as == 'button')
<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
@else
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
@endif