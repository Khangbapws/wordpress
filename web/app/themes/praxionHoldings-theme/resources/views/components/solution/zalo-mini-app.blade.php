@php
    $miniAppTypes = [
        [
            'icon' => 'smartphone',
            'eyebrow' => 'USER EXPERIENCE',
            'title' => 'Mini App for Users',
            'description' =>
                'Customer-facing Mini Apps for discovery, booking, ordering, membership, notifications, and everyday interactions.',
            'cta' => 'Explore User Mini App',
            'href' => 'https://your-user-mini-app-url.com',
        ],
        [
            'icon' => 'layout-dashboard',
            'eyebrow' => 'BUSINESS OPERATIONS',
            'title' => 'Mini App for Managers',
            'description' =>
                'Management-focused Mini Apps for teams, branch operations, customer activity, workflows, and business visibility.',
            'cta' => 'Explore Manager Mini App',
            'href' => 'https://your-manager-mini-app-url.com',
        ],
    ];
@endphp

<section id="zalo-mini-app" aria-labelledby="zalo-mini-app-title"
    class="overflow-hidden bg-text-dark py-20 text-white sm:py-24 lg:py-32">
    <div class="container-page">

        <div class="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">

            {{-- Content --}}
            <div>

                <div class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-2">
                    <i data-lucide="smartphone" class="h-4 w-4 text-brand-mint" aria-hidden="true"></i>

                    <span class="text-xs font-semibold tracking-[0.14em] text-brand-mint uppercase">
                        Zalo Mini App Development
                    </span>
                </div>

                <h2 id="zalo-mini-app-title" class="mt-6 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">
                    Build where your customers
                    <span class="text-brand-mint">
                        already are.
                    </span>
                </h2>

                <p class="mt-6 max-w-xl text-lg leading-8 text-white/70">
                    We design and develop Mini Apps that bring your
                    products, services, and business workflows closer
                    to your customers and teams.
                </p>

                <div class="mt-6 flex items-center gap-4">
                    <div>
                        <p class="text-4xl font-bold tracking-tight">
                            80M+
                        </p>

                        <p class="mt-1 text-sm text-white/60">
                            Monthly active Zalo users in Vietnam
                        </p>
                    </div>
                </div>

            </div>

            {{-- Mini App Types --}}
            <div class="grid gap-4 sm:grid-cols-2">

                @foreach ($miniAppTypes as $miniApp)
                    <article
                        class="group rounded-3xl border border-white/10 bg-white/[0.04] p-7 transition-all duration-300 hover:-translate-y-1 hover:border-brand-mint/30 hover:bg-white/[0.07]">

                        <span
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-brand-mint">
                            <i data-lucide="{{ $miniApp['icon'] }}" class="h-5 w-5" aria-hidden="true"></i>
                        </span>

                        <p class="mt-6 text-xs font-semibold tracking-[0.15em] text-brand-mint uppercase">
                            {{ $miniApp['eyebrow'] }}
                        </p>

                        <h3 class="mt-2 text-xl font-semibold">
                            {{ $miniApp['title'] }}
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-white/60">
                            {{ $miniApp['description'] }}
                        </p>

                        {{-- CTA --}}
                        <div class="mt-7">

                            <a href="{{ $miniApp['href'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-white px-5 py-3.5 text-sm font-semibold text-text-dark shadow-sm no-underline transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-mint hover:text-primary hover:shadow-lg">
                                {{ $miniApp['cta'] }}

                                <i data-lucide="arrow-up-right"
                                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
                                    aria-hidden="true"></i>
                            </a>

                        </div>

                    </article>
                @endforeach

            </div>

        </div>

    </div>
</section>
