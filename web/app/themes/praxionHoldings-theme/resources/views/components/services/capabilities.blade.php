@php
    $capabilities = [
        [
            'layout-template',
            'Custom Web Platforms',
            'High-concurrency web applications built with modern JavaScript frameworks and scalable cloud infrastructure.',
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
            'Integrating practical artificial intelligence to automate repetitive data processing and decision-making pipelines.',
        ],
        [
            'message-square-text',
            'Conversational Interfaces',
            'Deploying context-aware chatbots that handle level-one customer support and internal knowledge retrieval.',
        ],
        [
            'server-cog',
            'Legacy Modernization',
            'Refactoring monolithic architectures into microservices without disrupting your current business operations.',
        ],
        [
            'shield-check',
            'Security & DevOps',
            'Automated CI/CD pipelines, containerization, and proactive cloud infrastructure monitoring.',
        ],
        [
            'users',
            'Dedicated Engineering Teams',
            'Extend your internal capacity with our senior developers, fully integrated into your sprint cycles.',
        ],
    ];
@endphp


<section aria-labelledby="shared-capabilities-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">One shared ecosystem</p>
            <h2 id="shared-capabilities-title"
                class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                The billing terms do not represent different products.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                The capabilities below explain the connected PRX Holdings experience visitors are comparing when they
                choose a billing duration.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($capabilities as [$icon, $title, $copy])
                <article class="rounded-3xl border border-gray-200/80 bg-white p-6 shadow-sm sm:p-7">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary">
                        <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                    </span>
                    <h3 class="mt-6 text-lg font-semibold text-text-dark">{{ $title }}</h3>
                    <p class="mt-3 text-sm leading-6 text-muted">{{ $copy }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
