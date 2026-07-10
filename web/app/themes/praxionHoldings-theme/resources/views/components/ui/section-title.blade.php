@props(['title', 'subtitle' => null, 'align' => 'center'])

@php
    $alignments = [
        'center' => 'text-center',
        'left' => 'text-left',
    ];
@endphp

<div {{ $attributes->merge([
    'class' => 'mb-16 ' . ($alignments[$align] ?? $alignments['center']),
]) }}>
    <h2 class="mb-4 text-4xl font-bold tracking-tight text-text-dark">
        {{ $title }}
    </h2>

    @if ($subtitle)
        <p class="mx-auto max-w-2xl text-lg text-muted">
            {{ $subtitle }}
        </p>
    @endif
</div>
