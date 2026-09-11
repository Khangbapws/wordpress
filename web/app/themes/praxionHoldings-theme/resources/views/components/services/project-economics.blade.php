@php
    $models = [
        [
            'title' => 'Fixed-Scope Discovery & Build',
            'tag' => 'Ideal for Defined Products',
            'copy' =>
                'Best for projects with clear business goals. We define architectural boundaries, deliverables, and timelines up front to give you cost certainty.',
            'features' => [
                'Complete technical specification',
                'Fixed milestones & schedule',
                'End-to-end QA & deployment',
                'Post-launch warranty period',
            ],
            'recommended' => false,
        ],
        [
            'title' => 'Dedicated Engineering Sprints',
            'tag' => 'Best for Growing Companies',
            'copy' =>
                'Flexible senior capacity integrated directly into your workflow. Scale development speed up or down based on market priorities.',
            'features' => [
                'Senior full-stack developers',
                'Agile bi-weekly sprints',
                'Direct Slack/Jira integration',
                'Full source code ownership',
            ],
            'recommended' => true,
        ],
        [
            'title' => 'Modernization & Advisory',
            'tag' => 'For Existing Software Systems',
            'copy' =>
                'Targeted architectural intervention to resolve performance bottlenecks, security vulnerabilities, or outdated tech stacks.',
            'features' => [
                'In-depth code & security audit',
                'Database optimization',
                'Cloud cost reduction',
                'Refactoring without downtime',
            ],
            'recommended' => false,
        ],
    ];
@endphp

<section id="economics" aria-labelledby="economics-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Transparent Project Economics</p>
            <h2 id="economics-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Engineering value without bloated agency overhead.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                You pay for senior engineering hours and architectural results—not flashy sales teams, unnecessary
                management layers, or inflated agency fees.
            </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-3">
            @foreach ($models as $item)
                <div @class([
                    'flex flex-col justify-between rounded-3xl border bg-white p-8 shadow-sm transition-all duration-300 hover:shadow-xl',
                    'border-primary ring-2 ring-primary/10' => $item['recommended'],
                    'border-gray-200/80' => !$item['recommended'],
                ])>
                    <div>
                        <span
                            class="inline-block rounded-full bg-brand-light px-3 py-1 text-xs font-semibold text-primary">
                            {{ $item['tag'] }}
                        </span>
                        <h3 class="mt-4 text-xl font-bold text-text-dark">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-sm leading-6 text-muted">{{ $item['copy'] }}</p>

                        <ul class="mt-6 space-y-3 border-t border-gray-100 pt-6">
                            @foreach ($item['features'] as $feature)
                                <li class="flex items-center gap-3 text-sm text-text-dark">
                                    <i data-lucide="check" class="h-4 w-4 shrink-0 text-primary"></i>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-8 pt-4 border-t border-gray-100">
                        <a href="{{ home_url('/contact') }}"
                            class="inline-flex w-full items-center justify-center rounded-full bg-surface border border-gray-200 px-4 py-2.5 text-sm font-semibold text-text-dark transition hover:bg-primary hover:text-white hover:border-primary">
                            Discuss This Model
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
