@php
    $reasons = [
        [
            'target',
            'Business-first thinking',
            'We start with the problem, workflow, and business outcome — not simply the list of features to code.',
        ],
        [
            'shield-check',
            'Technical ownership',
            'We take responsibility for turning requirements into reliable software, from architecture and implementation to release.',
        ],
        [
            'sparkles',
            'Product-level quality',
            'We care about usability, maintainability, performance, and how the software works in real-world conditions.',
        ],
        [
            'handshake',
            'Long-term partnership',
            'Your software will evolve. We can continue supporting development, integrations, improvements, and new product requirements.',
        ],
    ];
@endphp

<section id="why-prx" aria-labelledby="why-prx-title" class="bg-text-dark py-20 text-white sm:py-24 lg:py-32">
    <div class="container-page">

        <div class="grid gap-12 lg:grid-cols-[0.72fr_1.28fr] lg:gap-16">

            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">
                    Why PRX Holdings
                </p>

                <h2 id="why-prx-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">
                    A technology partner,
                    not just a development vendor.
                </h2>

                <p class="mt-5 max-w-xl text-lg leading-8 text-white/70">
                    We combine technical delivery with an understanding of
                    how software fits into the business behind it.
                </p>
            </div>

            <div class="grid gap-px overflow-hidden rounded-3xl bg-white/15 sm:grid-cols-2">

                @foreach ($reasons as [$icon, $title, $copy])
                    <article class="bg-text-dark p-7 sm:p-8">

                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-brand-mint">
                            <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                        </span>

                        <h3 class="mt-6 text-lg font-semibold">
                            {{ $title }}
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-white/65">
                            {{ $copy }}
                        </p>

                    </article>
                @endforeach

            </div>

        </div>

    </div>
</section>
