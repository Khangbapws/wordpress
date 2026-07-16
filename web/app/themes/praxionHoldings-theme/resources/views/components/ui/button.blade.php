@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $baseClasses =
        'inline-flex items-center justify-center rounded-full px-6 py-3 text-[0.95rem] font-medium transition-all duration-300';

    $variants = [
        'primary' => 'bg-primary text-white hover:-translate-y-0.5 hover:shadow-[0_8px_20px_rgba(46,125,50,0.2)]',

        'secondary' =>
            'border border-gray-200 bg-white text-text-dark hover:border-primary hover:text-primary no-underline',

        'text' => 'bg-transparent text-text-dark hover:text-primary',
    ];
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']),
    ]) }}>
    {{ $slot }}
</a>
