@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $baseClasses =
        'inline-flex items-center justify-center rounded-full px-6 py-3 text-[0.95rem] font-medium transition-all duration-300';

    $variants = [
        'primary' => 'bg-[#2e7d32] text-white hover:-translate-y-0.5 hover:shadow-[0_8px_20px_rgba(46,125,50,0.2)]',

        'secondary' => 'bg-white text-[#1c2a1e] border border-gray-200 hover:bg-gray-50',

        'text' => 'bg-transparent text-[#1c2a1e] hover:text-[#2e7d32]',
    ];
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']),
    ]) }}>
    {{ $slot }}
</a>
