@props([
    'href' => '#',
    'variant' => 'primary',
])

@php
    $baseClasses =
        'inline-flex min-h-12 items-center justify-center rounded-full px-6 py-3 text-center text-[0.95rem] font-semibold no-underline transition-all duration-300 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary';

    $variants = [
        'primary' => 'bg-primary text-white hover:-translate-y-0.5 hover:bg-primary-dark hover:shadow-[0_8px_20px_rgba(46,125,50,0.2)]',

        'secondary' =>
            'border border-gray-200 bg-white text-text-dark hover:border-primary hover:text-primary no-underline',

        'light' => 'bg-white text-black hover:-translate-y-0.5 hover:bg-primary-dark hover:text-white hover:shadow-lg',

        'text' => 'bg-transparent text-text-dark hover:text-primary',
    ];
@endphp

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']),
    ]) }}>
    {{ $slot }}
</a>
