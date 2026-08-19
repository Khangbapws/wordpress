@php
    $billingTerms = [
        [
            'term' => 'Free Trial',
            'price' => '15 days',
            'fit' => 'Explore PRX before making a commitment.',
            'renewal' => false,
            'card' => 'No credit card required',
        ],
        [
            'term' => '1 month',
            'price' => '299.000 VNĐ',
            'fit' => 'Maximum flexibility for growing businesses.',
            'renewal' => false,
            'card' => 'Cancel anytime',
        ],
        [
            'term' => '3 months',
            'price' => '849.000 VNĐ',
            'fit' => '283.000 VNĐ / month',
            'renewal' => false,
            'card' => 'Tiết kiệm 5%',
        ],
        [
            'term' => '6 months',
            'price' => '1.590.000 VNĐ',
            'fit' => '265.000 VNĐ / month',
            'renewal' => false,
            'card' => 'Tiết kiệm 11%',
        ],
        [
            'term' => '12 months ⭐',
            'price' => '2.790.000 VNĐ',
            'fit' => '232.500 VNĐ / month',
            'renewal' => true,
            'recommended' => true,
            'card' => 'Tiết kiệm 22%',
        ],
        [
            'term' => 'Best Long-Term Value — 24 months',
            'price' => '4.990.000 VNĐ',
            'fit' => '207.900 VNĐ / month',
            'renewal' => true,
            'card' => 'Tiết kiệm 30%',
        ],
    ];
@endphp

<section id="pricing" aria-labelledby="pricing-title" class="scroll-mt-24 py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Six clear choices</p>
            <h2 id="pricing-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                One platform. Everything you need. One simple price.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                Choose the commitment that works for you. The longer you commit, the more you save.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($billingTerms as $index => $billingTerm)
                <article @class([
                    'group relative flex min-h-full transform-gpu flex-col rounded-3xl border bg-white p-6 shadow-sm transition-all duration-300 will-change-transform hover:-translate-y-0.5 hover:border-primary/35 hover:bg-brand-light/20 hover:shadow-[0_8px_20px_rgba(46,125,50,0.2)] motion-reduce:transition-none motion-reduce:hover:translate-y-0 sm:p-8',
                    'border-primary ring-2 ring-primary/10' =>
                        $billingTerm['recommended'] ?? false,
                    'border-gray-200/80' => !($billingTerm['recommended'] ?? false),
                ]) aria-labelledby="billing-term-{{ $index }}">
                    <div class="flex flex-row items-center justify-between">
                        <p id="billing-term-{{ $index }}"
                            class="text-lg font-semibold text-text-dark transition-all duration-300 group-hover:text-primary-dark motion-reduce:transition-none">
                            {{ $billingTerm['term'] }}
                        </p>

                        @if ($billingTerm['recommended'] ?? false)
                            <p
                                class="inline-flex w-fit rounded-full bg-primary px-3 py-1.5 text-xs font-semibold text-white transition-all duration-300 group-hover:bg-primary-dark motion-reduce:transition-none">
                                Best value
                            </p>
                        @endif

                    </div>
                    <p
                        class="mt-3 origin-left transform-gpu text-4xl font-bold tracking-tight text-primary transition-all duration-300 group-hover:scale-[1.01] group-hover:text-primary-dark motion-reduce:transition-none motion-reduce:group-hover:scale-100 sm:text-5xl">
                        {{ $billingTerm['price'] }}
                    </p>
                    <p class="mt-5 text-sm leading-6 text-muted">{{ $billingTerm['fit'] }}</p>

                    <div
                        class="mt-7 border-t border-gray-200/80 pt-5 transition-all duration-300 group-hover:border-primary/20 motion-reduce:transition-none">
                        <p class="flex items-center gap-2 text-sm font-semibold leading-6 text-primary-dark">
                            <i data-lucide="badge-percent"
                                class="mt-0.5 h-4 w-4 shrink-0 transform-gpu transition-all duration-300 group-hover:scale-105 group-hover:rotate-3 motion-reduce:transition-none motion-reduce:group-hover:scale-100 motion-reduce:group-hover:rotate-0"
                                aria-hidden="true"></i>
                            {{ $billingTerm['card'] }}
                        </p>
                        {{-- @if ($billingTerm['renewal'])
                        @else
                            <p class="text-sm leading-6 text-muted">No credit card required. </p>
                        @endif --}}
                    </div>
                </article>
            @endforeach
        </div>

        <aside
            class="mt-8 rounded-2xl border border-primary/15 bg-brand-light p-5 sm:flex sm:items-start sm:gap-4 sm:p-6"
            aria-label="Next billing cycle discount note">
            <i data-lucide="info" class="h-6 w-6 shrink-0 text-primary" aria-hidden="true"></i>
            <div class="mt-3 sm:mt-0">
                <p class="font-semibold text-text-dark">Founder pricing — 2.490.000 VNĐ /year</p>
                <p class="mt-1 leading-7 text-muted">
                    Join PRX early. Lock in your founder rate.
                </p>
            </div>
        </aside>
    </div>
</section>
