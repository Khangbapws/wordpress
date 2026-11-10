@php
    $faqs = [
        [
            'q' => 'How do you structure project costs without generic pricing tiers?',
            'a' =>
                'Custom software depends on your scope, integration requirements, and security needs. During discovery, we break down your requirements into transparent engineering sprints and deliverables, ensuring you only pay for what your system actually needs.',
        ],
        [
            'q' => 'Can your team work on or modernize our existing codebase?',
            'a' =>
                'Yes. We frequently conduct code audits, refactor legacy monolithic architectures, fix performance bottlenecks, and add modern APIs to existing systems without interrupting daily operations.',
        ],
        [
            'q' => 'Who owns the intellectual property (IP) and source code?',
            'a' =>
                'You retain 100% ownership of all written source code, database schemas, and architectural assets upon project completion or sprint delivery.',
        ],
        [
            'q' => 'How do you ensure software quality and security?',
            'a' =>
                'Every project goes through automated testing pipelines, peer code reviews, continuous integration (CI/CD) checks, and security audits before moving to live production environments.',
        ],
        [
            'q' => 'Do you offer ongoing maintenance and cloud infrastructure support?',
            'a' =>
                'Yes. We offer continuous SLAs covering cloud monitoring, security updates, bug fixes, and feature enhancements so your platform scales seamlessly.',
        ],
    ];
@endphp

<section aria-labelledby="services-faq-title" class="bg-white py-20 sm:py-24 lg:py-32" x-data="{ openIndex: null }">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Objection Handling & Transparency
            </p>
            <h2 id="services-faq-title" class="mt-4 text-3xl font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Questions answered before you start.
            </h2>
        </div>

        <div class="mx-auto mt-12 max-w-3xl divide-y divide-gray-200/80 border-y border-gray-200/80">
            @foreach ($faqs as $index => $faq)
                <article class="py-5">
                    <h3>
                        <button type="button"
                            x-on:click="openIndex = openIndex === {{ $index }} ? null : {{ $index }}"
                            x-bind:aria-expanded="openIndex === {{ $index }}"
                            aria-controls="faq-panel-{{ $index }}"
                            class="flex w-full items-center justify-between gap-5 text-left text-lg font-semibold text-text-dark transition hover:text-primary">
                            <span>{{ $faq['q'] }}</span>
                            <span
                                class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-brand-light text-primary">
                                <i data-lucide="plus" class="h-4 w-4 transition-transform duration-300"
                                    x-bind:class="{ 'rotate-45': openIndex === {{ $index }} }"></i>
                            </span>
                        </button>
                    </h3>
                    <div id="faq-panel-{{ $index }}" x-show="openIndex === {{ $index }}"
                        x-collapse.duration.300ms>
                        <p class="mt-4 max-w-2xl text-base leading-7 text-muted">{{ $faq['a'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
