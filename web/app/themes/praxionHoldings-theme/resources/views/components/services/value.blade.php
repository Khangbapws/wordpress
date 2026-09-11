@php
    $values = [
        [
            'icon' => 'users',
            'title' => 'Tailored Team Composition',
            'desc' =>
                'You pay for the exact engineering roles your sprint requires—no administrative bloat or unnecessary agency overhead.',
        ],
        [
            'icon' => 'code-2',
            'title' => 'Zero Legacy Debt',
            'desc' =>
                'Clean code and scalable architecture mean you spend your budget on new features, not fixing future maintenance issues.',
        ],
        [
            'icon' => 'message-square-dashed',
            'title' => 'Direct Communication',
            'desc' =>
                'Direct access to technical leads ensures complex business requirements are never lost in translation between account managers and developers.',
        ],
    ];
@endphp

<section aria-labelledby="value-title" class="scroll-mt-24 py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">The PRX Advantage</p>
            <h2 id="value-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Serious software engineering. Competitive global economics.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                We reject the bloated overhead of traditional agencies. By leveraging Vietnam's premier tech talent
                pool, we deliver enterprise-grade architecture at highly competitive development costs.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-3">
            @foreach ($values as $item)
                <article
                    class="group rounded-3xl border border-gray-200/80 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5">
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-light text-primary">
                        <i data-lucide="{{ $item['icon'] }}" class="h-6 w-6"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-text-dark">{{ $item['title'] }}</h3>
                    <p class="mt-4 leading-7 text-muted">{{ $item['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
