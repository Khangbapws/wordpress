@php
    $steps = [
        [
            'search',
            'Discovery & Architecture',
            'We evaluate domain logic, technical constraints, and scalability roadmaps before writing a single line of code.',
        ],
        [
            'code',
            'Clean Implementation',
            'Maintainable codebases built with strict type safety, automated tests, and rigorous PR reviews.',
        ],
        [
            'zap',
            'Iterative Delivery',
            'Transparent sprint cycles, frequent staging deployments, and real-time progress visibility.',
        ],
        [
            'shield-check',
            'Ownership & Scaling',
            'Post-launch infrastructure monitoring, load optimization, and continuous feature updates.',
        ],
    ];
@endphp

<section class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:gap-16">
            <div class="lg:sticky lg:top-32 lg:self-start">
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Our Philosophy</p>
                <h2 class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl">We build software with
                    product intuition, not just code.</h2>
                <p class="mt-5 text-lg leading-8 text-muted">Most vendors blindly execute specifications. We challenge
                    assumptions, analyze user journeys, and take full ownership of the engineering outcome.</p>
            </div>

            <div
                class="relative space-y-8 before:absolute before:inset-y-0 before:left-[1.375rem] before:w-px before:bg-gray-200/80">
                @foreach ($steps as $index => [$icon, $title, $desc])
                    <div class="relative flex gap-6">
                        <span
                            class="relative z-10 flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-gray-200/80 bg-white text-primary shadow-sm">
                            <i data-lucide="{{ $icon }}" class="h-5 w-5"></i>
                        </span>
                        <div class="pt-2">
                            <h3 class="text-xl font-semibold text-text-dark">{{ $title }}</h3>
                            <p class="mt-2 leading-7 text-muted">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
