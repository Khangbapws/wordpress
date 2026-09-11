@php
    $capabilities = [
        [
            'layout-template',
            'Custom Web Platforms',
            'High-concurrency applications built with modern JavaScript frameworks and scalable cloud infrastructure.',
        ],
        [
            'smartphone',
            'Mobile Engineering',
            'Native and cross-platform mobile experiences optimized for user retention and smooth performance.',
        ],
        [
            'network',
            'System Integration & APIs',
            'Connecting fragmented enterprise systems to automate data flow and eliminate manual business operations.',
        ],
        [
            'bot',
            'Intelligent Workflows (AI)',
            'Integrating practical artificial intelligence to automate repetitive data processing and decision-making.',
        ],
    ];
@endphp
<section aria-labelledby="shared-capabilities-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Technical Expertise</p>
            <h2 id="shared-capabilities-title"
                class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                We build reliable systems, not <span class="text-primary">isolated components.</span>
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                Our engineering team translates complex business requirements into secure, maintainable software
                architectures.
            </p>
        </div>
        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($capabilities as [$icon, $title, $copy])
                <article
                    class="group rounded-3xl border border-gray-200/80 bg-white p-6 shadow-sm transition-all hover:border-primary/30 hover:shadow-md sm:p-7">
                    <span
                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary transition-transform group-hover:scale-105">
                        <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                    </span>
                    <h3 class="mt-6 text-lg font-semibold text-text-dark">{{ $title }}</h3>
                    <p class="mt-3 text-sm leading-6 text-muted">{{ $copy }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
