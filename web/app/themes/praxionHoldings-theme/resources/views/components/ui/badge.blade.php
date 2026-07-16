@props([
    'color' => 'green',
])

@php
    $colors = [
        'green' => 'bg-brand-mint text-primary',
        'gray' => 'bg-gray-100 text-gray-700',
        'blue' => 'bg-blue-100 text-blue-700',
    ];
@endphp

<span
    {{ $attributes->merge([
        'class' =>
            'inline-flex items-center rounded-full px-4 py-1.5 text-sm font-medium transition-colors duration-200 ' .
            ($colors[$color] ?? $colors['green']),
    ]) }}>
    {{ $slot }}
</span>
