@php
    $contactUrl = home_url('/contact');

    $packages = [
        [
            'slug' => 'starter-1-hour',
            'name' => 'Starter',
            'duration' => '1 hour',
            'price' => '499.000',
            'saving' => null,
            'description' => 'A focused session to solve one problem or clarify a technical question.',
            'features' => [
                '60 minutes of developer guidance',
                'One focused task or challenge',
                'Practical recommendations and next steps',
            ],
            'featured' => false,
        ],
        [
            'slug' => 'builder-2-hours',
            'name' => 'Builder',
            'duration' => '2 hours',
            'price' => '899.000',
            'saving' => '99.000',
            'description' => 'More time to work through a complex issue or make progress on a feature.',
            'features' => [
                '2 hours of developer guidance',
                'Debugging or feature development support',
                'Can be scheduled across sessions by agreement',
            ],
            'featured' => false,
        ],
        [
            'slug' => 'project-builder-5-hours',
            'name' => 'Project Builder',
            'duration' => '5 hours',
            'price' => '2.090.000',
            'saving' => '405.000',
            'description' => 'Structured support for a prototype, MVP, or a small project.',
            'features' => [
                '5 hours of developer guidance',
                'Support across agreed project milestones',
                'Flexible session scheduling by agreement',
            ],
            'featured' => true,
        ],
        [
            'slug' => 'launch-support-10-hours',
            'name' => 'Launch Support',
            'duration' => '10 hours',
            'price' => '3.990.000',
            'saving' => '1.000.000',
            'description' => 'Ongoing guidance for a project that needs more consistent support.',
            'features' => [
                '10 hours of developer guidance',
                'Help across multiple development challenges',
                'Session planning based on your priorities',
            ],
            'featured' => false,
        ],
    ];
@endphp

<section id="vibe-coding-pricing" aria-labelledby="vibe-coding-pricing-title"
    class="scroll-mt-24 bg-brand-light py-20 sm:py-24 lg:py-28">
    <div class="container-page">

        {{-- Heading --}}
        <div class="mx-auto max-w-2xl text-center">
            <x-ui.badge color="green">
                Flexible Hourly Packages
            </x-ui.badge>

            <h2 id="vibe-coding-pricing-title"
                class="mt-5 text-3xl font-semibold tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                Expert guidance, on your terms.
            </h2>

            <p class="mt-5 text-base leading-7 text-muted sm:text-lg">
                Start with one focused session or choose a package for
                continued support as your project develops.
            </p>
        </div>


        {{-- Pricing cards --}}
        <div class="mt-12 grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4 xl:gap-4">

            @foreach ($packages as $package)
                <article @class([
                    'relative flex h-full flex-col rounded-3xl border bg-white p-6 transition-all duration-300 sm:p-7',
                    'border-primary shadow-[0_20px_50px_rgba(46,125,50,0.10)] ring-1 ring-primary/10' =>
                        $package['featured'],
                    'border-gray-200 shadow-sm hover:-translate-y-1 hover:border-primary/30 hover:shadow-lg' => !$package[
                        'featured'
                    ],
                ])>
                    {{-- Package label --}}
                    <div class="flex min-h-7 items-center justify-between gap-2">
                        <p class="text-sm font-semibold text-text-dark">
                            {{ $package['name'] }}
                        </p>

                        @if ($package['featured'])
                            <span class="rounded-full bg-brand-light px-3 py-1 text-[11px] font-semibold text-primary">
                                Project Support
                            </span>
                        @endif
                    </div>

                    <p class="mt-3 text-sm leading-6 text-muted">
                        {{ $package['description'] }}
                    </p>

                    {{-- Price --}}
                    <div class="mt-6">
                        <div class="flex flex-wrap items-baseline gap-x-2">
                            <span class="text-3xl font-semibold tracking-tight text-text-dark">
                                {{ $package['price'] }}
                            </span>

                            <span class="text-sm font-medium text-muted">
                                VNĐ
                            </span>
                        </div>

                        <p class="mt-1 text-sm text-muted">
                            {{ $package['duration'] }} total
                        </p>

                        @if ($package['saving'])
                            <p class="mt-3 text-xs font-medium text-primary">
                                Save {{ $package['saving'] }} VNĐ vs. hourly rate
                            </p>
                        @else
                            <p class="mt-3 text-xs text-muted">
                                A simple way to get started
                            </p>
                        @endif
                    </div>

                    <div class="my-6 border-t border-gray-200"></div>

                    {{-- Included --}}
                    <ul class="flex-1 space-y-3">
                        @foreach ($package['features'] as $feature)
                            <li class="flex items-start gap-2.5 text-sm leading-6 text-muted">
                                <i data-lucide="check" class="mt-1 h-4 w-4 shrink-0 text-primary"
                                    aria-hidden="true"></i>

                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    {{-- CTA --}}
                    <div class="mt-8">
                        <x-ui.button :href="$contactUrl . '?service=vibe-coding&package=' . $package['slug']" :variant="$package['featured'] ? 'primary' : 'secondary'" class="w-full justify-center gap-2">
                            <span>Book This Package</span>
                            <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                        </x-ui.button>
                    </div>
                </article>
            @endforeach

        </div>


        {{-- Pricing notes --}}
        <div class="mx-auto mt-8 max-w-3xl text-center">
            <p class="text-xs leading-6 text-muted">
                All prices are in Vietnamese dong (VND). Packages represent
                developer guidance time, not a guaranteed project deliverable.
                Sessions are scheduled by agreement. Implementation work,
                third-party costs, and separately scoped development are not included.
            </p>
        </div>

    </div>
</section>
