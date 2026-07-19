@php
    $billingTerms = [
        [
            'term' => 'Free trial',
            'price' => '15 days',
            'fit' => 'Explore the platform before choosing a paid commitment period.',
            'renewal_discount' => false,
        ],
        [
            'term' => '1 month',
            'price' => 'US$15',
            'fit' => 'Maximum flexibility for owners making near-term operating decisions.',
            'renewal_discount' => false,
        ],
        [
            'term' => '3 months',
            'price' => 'US$30',
            'fit' => 'A short commitment for a business still establishing its operating rhythm.',
            'renewal_discount' => false,
        ],
        [
            'term' => '6 months',
            'price' => 'US$50',
            'fit' => 'A mid-range horizon for owners ready to plan beyond one quarter.',
            'renewal_discount' => false,
        ],
        [
            'term' => '12 months',
            'price' => 'US$99',
            'fit' => 'A balanced horizon for established operations planning a year ahead.',
            'renewal_discount' => 10,
            'recommended' => true,
        ],
        [
            'term' => 'Elite — 24 months',
            'price' => 'US$199',
            'fit' => 'A longer commitment for owners with stable operating plans.',
            'renewal_discount' => 30,
        ],
    ];
@endphp

<section id="pricing" aria-labelledby="pricing-title" class="scroll-mt-24 py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Six clear choices</p>
            <h2 id="pricing-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Compare complete-term pricing at a glance.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                Every amount shown is the price for the complete stated term. It is not a monthly rate.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($billingTerms as $index => $billingTerm)
                <article @class([
                    'group relative flex min-h-full transform-gpu flex-col rounded-3xl border bg-white p-6 shadow-sm transition-[transform,border-color,box-shadow,background-color] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform hover:-translate-y-1 hover:border-primary/35 hover:bg-brand-light/20 hover:shadow-xl hover:shadow-primary/10 sm:p-8',
                    'border-primary ring-2 ring-primary/10' =>
                        $billingTerm['recommended'] ?? false,
                    'border-gray-200/80' => !($billingTerm['recommended'] ?? false),
                ]) aria-labelledby="billing-term-{{ $index }}">
                    <div class="flex flex-row items-center justify-between">
                        <p id="billing-term-{{ $index }}"
                            class="text-lg font-semibold text-text-dark transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:text-primary-dark">
                            {{ $billingTerm['term'] }}
                        </p>

                        @if ($billingTerm['recommended'] ?? false)
                            <p
                                class="inline-flex w-fit rounded-full bg-primary px-3 py-1.5 text-xs font-semibold text-white transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:bg-primary-dark">
                                Editorial recommendation
                            </p>
                        @endif

                    </div>
                    <p
                        class="mt-3 origin-left transform-gpu text-4xl font-bold tracking-tight text-primary transition-[transform,color] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:scale-[1.03] group-hover:text-primary-dark sm:text-5xl">
                        {{ $billingTerm['price'] }}
                    </p>
                    <p class="mt-5 text-sm leading-6 text-muted">{{ $billingTerm['fit'] }}</p>

                    <div
                        class="mt-7 border-t border-gray-200/80 pt-5 transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:border-primary/20">
                        @if ($billingTerm['renewal_discount'])
                            <p class="flex items-start gap-2 text-sm font-semibold leading-6 text-primary-dark">
                                <i data-lucide="badge-percent"
                                    class="mt-0.5 h-4 w-4 shrink-0 transform-gpu transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:scale-110 group-hover:rotate-6"
                                    aria-hidden="true"></i>
                                {{ $billingTerm['renewal_discount'] }}% off the next billing cycle only
                            </p>
                        @else
                            <p class="text-sm leading-6 text-muted">No next-cycle discount is specified for this term.
                            </p>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>

        <aside
            class="mt-8 rounded-2xl border border-primary/15 bg-brand-light p-5 sm:flex sm:items-start sm:gap-4 sm:p-6"
            aria-label="Next billing cycle discount note">
            <i data-lucide="info" class="h-6 w-6 shrink-0 text-primary" aria-hidden="true"></i>
            <div class="mt-3 sm:mt-0">
                <p class="font-semibold text-text-dark">How the 10% and 30% benefit works</p>
                <p class="mt-1 leading-7 text-muted">
                    Renewal incentives are available for selected plans:

                    <span class="font-medium text-text-dark">
                        10% off
                    </span>
                    for the 12-month plan and

                    <span class="font-medium text-text-dark">
                        30% off
                    </span>
                    for the Elite 24-month plan.

                    Each benefit applies to the next billing cycle only.
                </p>
            </div>
        </aside>
    </div>
</section>
