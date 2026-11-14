@props([
    'id' => null,
    'eyebrow' => null,
    'title',
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'grid gap-6 lg:grid-cols-[0.88fr_1.12fr] lg:items-end lg:gap-16']) }}>
    <div>
        @if ($eyebrow)
            <div data-cap-reveal class="inline-flex items-center gap-2.5">
                <span class="h-1.5 w-1.5 rounded-full bg-primary"></span>
                <p class="text-xs font-bold tracking-[0.18em] text-primary uppercase sm:text-sm">
                    {{ $eyebrow }}
                </p>
            </div>
        @endif

        <h2 @if ($id) id="{{ $id }}" @endif data-cap-reveal
            class="mt-4 text-3xl leading-[1.12] font-bold tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
            {{ $title }}
        </h2>
    </div>

    @if ($description)
        <p data-cap-reveal class="text-base leading-7 text-muted sm:text-lg sm:leading-8 lg:pb-1">
            {{ $description }}
        </p>
    @endif
</div>
