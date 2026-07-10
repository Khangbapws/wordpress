@props([
    'color' => 'green',
])

@php
    $colors = [
        'green' => 'bg-[#c8e6c9] text-[#2e7d32]',
        'gray' => 'bg-gray-100 text-gray-700',
        'blue' => 'bg-blue-100 text-blue-700',
    ];
@endphp

<span
    {{ $attributes->merge([
        'class' =>
            'inline-flex items-center rounded-full px-4 py-1.5 text-sm font-semibold ' .
            ($colors[$color] ?? $colors['green']),
    ]) }}>
    {{ $slot }}
</span>
