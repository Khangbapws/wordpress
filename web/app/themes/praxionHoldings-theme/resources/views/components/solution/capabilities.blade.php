@php
    $groups = [
        [
            'code-2',
            'Custom software development',
            'Purpose-built web platforms, business applications, and digital products designed around your requirements.',
        ],
        [
            'tablet',
            'Web & mobile applications',
            'Responsive web experiences and mobile applications for customers, teams, and business operations.',
        ],
        [
            'blocks',
            'Product engineering',
            'From early product concepts to production-ready software, we turn ideas into maintainable digital products.',
        ],
        [
            'plug-zap',
            'Systems integration',
            'Connect the services, tools, and workflows your business already relies on.',
        ],
        [
            'smartphone',
            'Mini App Development',
            'Improve outdated systems, interfaces, and workflows without losing the business logic behind them.',
        ],
        [
            'workflow',
            'Ongoing development',
            'Continue improving, scaling, integrating, and maintaining your software as your requirements evolve.',
        ],
    ];
@endphp

<section aria-labelledby="capability-title" class="bg-text-dark py-20 text-white sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">
                    What we build
                </p>

                <h2 id="capability-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">
                    Software capabilities for real business needs.
                </h2>

                <p class="mt-5 text-lg leading-8 text-white/70">
                    We build around your workflows, users, and business objectives —
                    not around a predefined product template.
                </p>
            </div>

            <div class="grid gap-px overflow-hidden rounded-3xl bg-white/15 sm:grid-cols-2">
                @foreach ($groups as [$icon, $title, $copy])
                    <article class="bg-text-dark p-6 sm:p-7">
                        <i data-lucide="{{ $icon }}" class="h-5 w-5 text-brand-mint" aria-hidden="true"></i>
                        <h3 class="mt-5 text-lg font-semibold">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-6 text-white/65">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
