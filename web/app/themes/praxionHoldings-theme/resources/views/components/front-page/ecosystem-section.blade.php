@php
    $models = [
        [
            'rocket',
            'End-to-End Product',
            'Turn your vision into production-ready software. We handle UX, architecture, development, and launch.',
        ],
        [
            'users-round',
            'Dedicated Engineering Team',
            'Extend your internal capacity with autonomous, senior developers who integrate into your workflows.',
        ],
        [
            'code-2',
            'MVP Development',
            'Launch quickly to test market fit. We build scalable foundations so you don\'t have to rewrite code later.',
        ],
        [
            'headset',
            'Tech Advisory & Rescue',
            'Technical audits, architecture consulting, and code rescue for projects that have gone off-track.',
        ],
    ];
@endphp

<section aria-labelledby="home-engagement-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Engagement Models</p>
            <h2 id="home-engagement-title"
                class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Flexible ways to build together.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                Adapt our engineering team structure to match your project scope, technical requirements, and delivery
                timeline.
            </p>
        </div>

        <ol class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($models as $index => [$icon, $title, $copy])
                <li
                    class="group transform-gpu rounded-3xl border border-gray-200/80 bg-surface p-6 shadow-sm transition-[transform,border-color,box-shadow,background-color] duration-500 hover:-translate-y-1 hover:border-primary/25 hover:bg-white hover:shadow-lg hover:shadow-primary/10 sm:p-7">
                    <div class="flex items-center justify-between gap-4">
                        <span
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-mint text-primary-dark transition-[background-color,color,transform] duration-500 group-hover:scale-105 group-hover:bg-primary group-hover:text-white">
                            <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                        </span>
                        <span
                            class="font-mono text-xs font-semibold text-muted transition-colors duration-500 group-hover:text-primary">0{{ $index + 1 }}</span>
                    </div>
                    <h3
                        class="mt-6 text-xl font-semibold text-text-dark transition-colors duration-500 group-hover:text-primary-dark">
                        {{ $title }}
                    </h3>
                    <p class="mt-3 leading-7 text-muted">{{ $copy }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
