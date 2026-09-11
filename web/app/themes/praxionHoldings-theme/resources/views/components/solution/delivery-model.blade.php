@php
    $steps = [
        [
            '01',
            'search-check',
            'Discover',
            'We clarify your business goals, users, workflows, technical requirements, and delivery priorities.',
        ],
        [
            '02',
            'pen-tool',
            'Define & Design',
            'We turn requirements into clear product flows, technical direction, and practical user experiences.',
        ],
        [
            '03',
            'code-2',
            'Build & Integrate',
            'We develop the software, connect the required systems, and keep delivery focused on production readiness.',
        ],
        [
            '04',
            'rocket',
            'Launch & Improve',
            'We support the transition to production and can continue developing the product as your business evolves.',
        ],
    ];
@endphp

<section id="delivery-model" aria-labelledby="delivery-model-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">

        <div class="max-w-3xl">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">
                How we support your team
            </p>

            <h2 id="delivery-model-title"
                class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Flexible engagement.
                <span class="block">Clear ownership.</span>
            </h2>

            <p class="mt-5 max-w-2xl text-lg leading-8 text-muted">
                Whether you need a complete software partner or additional engineering capacity,
                we can work around the way your team operates.
            </p>
        </div>

        <div
            class="mt-14 grid gap-px overflow-hidden rounded-3xl border border-gray-200/80 bg-gray-200/80 sm:grid-cols-2 xl:grid-cols-4">

            @foreach ($steps as [$number, $icon, $title, $copy])
                <article class="bg-white p-7 transition-colors duration-300 hover:bg-brand-light/40 sm:p-8">

                    <div class="flex items-center justify-between">
                        <span
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-light text-primary">
                            <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                        </span>

                        <span class="font-mono text-xs font-semibold text-muted">
                            {{ $number }}
                        </span>
                    </div>

                    <h3 class="mt-6 text-xl font-semibold text-text-dark">
                        {{ $title }}
                    </h3>

                    <p class="mt-3 leading-7 text-muted">
                        {{ $copy }}
                    </p>

                </article>
            @endforeach

        </div>

    </div>
</section>
