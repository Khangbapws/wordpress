@props([
    'eyebrow' => 'Explore PRX Holdings',
    'title' => 'Connect the moving parts of your beauty or spa business.',
    'description' => 'See how the owner experience, mobile applications, and customer booking journey work together.',
    'primaryHref' => null,
    'primaryLabel' => 'Explore the solution',
    'secondaryHref' => null,
    'secondaryLabel' => 'Contact PRX Holdings',
])

@php
    $primaryHref = $primaryHref ?: home_url('/solution');
    $secondaryHref = $secondaryHref ?: home_url('/contact');
@endphp

<section class="container-page mt-20 sm:mt-24 lg:mt-32" aria-label="Next step">
    <div class="relative isolate overflow-hidden rounded-3xl bg-linear-to-br from-primary to-primary-dark px-6 py-14 text-center text-white sm:rounded-4xl sm:px-10 sm:py-18 lg:px-20 lg:py-20">
        <div class="absolute -top-32 -right-24 -z-10 h-80 w-80 rounded-full bg-white/10 blur-3xl" aria-hidden="true"></div>

        <p class="inline-flex rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold backdrop-blur">{{ $eyebrow }}</p>
        <h2 class="mx-auto mt-7 max-w-3xl text-3xl leading-tight font-bold tracking-tight sm:text-4xl lg:text-5xl">{{ $title }}</h2>
        <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-white/85 sm:text-lg sm:leading-8">{{ $description }}</p>

        <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row">
            <a href="{{ $primaryHref }}"
                class="inline-flex min-h-12 items-center justify-center rounded-full bg-white px-7 py-3 font-semibold text-primary no-underline transition hover:-translate-y-0.5 hover:shadow-xl focus-visible:outline-white">
                {{ $primaryLabel }}
            </a>
            <a href="{{ $secondaryHref }}"
                class="inline-flex min-h-12 items-center justify-center rounded-full border border-white/35 px-7 py-3 font-semibold text-white no-underline transition hover:bg-white/10 focus-visible:outline-white">
                {{ $secondaryLabel }}
            </a>
        </div>
    </div>
</section>
