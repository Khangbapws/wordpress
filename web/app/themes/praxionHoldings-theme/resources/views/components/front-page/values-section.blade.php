@php
    $values = [
        ['P', 'Precision', 'Organize operational detail so owners can focus on the information that matters.'],
        ['R', 'Reliability', 'Keep customer, owner, and staff experiences connected and understandable.'],
        ['X', 'eXcellence', 'Make complex business software easier to scan, understand, and use.'],
    ];
@endphp

<section aria-labelledby="home-values-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="relative isolate overflow-hidden rounded-3xl bg-text-dark px-6 py-14 text-white sm:rounded-4xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">
            <div class="absolute -top-32 -right-24 -z-10 h-80 w-80 rounded-full bg-primary/40 blur-3xl" aria-hidden="true"></div>

            <div class="grid gap-10 lg:grid-cols-[0.78fr_1.22fr] lg:gap-16">
                <div>
                    <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">About PRX Holdings</p>
                    <h2 id="home-values-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">Precision. Reliability. eXcellence.</h2>
                    <p class="mt-5 text-lg leading-8 text-white/70">The PRX name expresses the values behind a connected product for beauty and spa businesses, their teams, and booking customers.</p>
                    <a href="{{ home_url('/about-us') }}" class="mt-8 inline-flex min-h-12 items-center gap-2 font-semibold text-brand-mint underline decoration-brand-mint/30 underline-offset-4 hover:text-white">Read our mission and vision <i data-lucide="arrow-right" class="h-4 w-4" aria-hidden="true"></i></a>
                </div>

                <ol class="space-y-4">
                    @foreach ($values as [$letter, $name, $copy])
                        <li class="grid gap-4 rounded-2xl border border-white/15 bg-white/5 p-5 sm:grid-cols-[3rem_1fr] sm:p-6">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary font-bold text-white" aria-hidden="true">{{ $letter }}</span>
                            <div><h3 class="text-xl font-semibold">{{ $name }}</h3><p class="mt-2 leading-7 text-white/65">{{ $copy }}</p></div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
