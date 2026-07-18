@php
    $terms = [
        ['Free trial', '15 days', false],
        ['1 month', 'US$20', false],
        ['3 months', 'US$30', false],
        ['6 months', 'US$50', false],
        ['12 months', 'US$99', true],
        ['Elite — 24 months', 'US$199', true],
    ];
@endphp

<section aria-labelledby="home-pricing-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-8 lg:grid-cols-[0.82fr_1.18fr] lg:items-end lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Billing choices</p>
                <h2 id="home-pricing-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">Choose a commitment horizon, not a different product.</h2>
            </div>
            <div>
                <p class="text-lg leading-8 text-muted">Every amount is the price for its complete stated term. The billing choices do not describe separate feature tiers.</p>
                <a href="{{ home_url('/services#pricing') }}" class="mt-4 inline-flex min-h-11 items-center gap-2 font-semibold text-primary-dark underline decoration-primary/30 underline-offset-4 hover:text-primary">Compare fit guidance and pricing FAQ <i data-lucide="arrow-right" class="h-4 w-4" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
            @foreach ($terms as [$term, $price, $discount])
                <article @class([
                    'relative flex min-h-full flex-col rounded-2xl border bg-white p-5 shadow-sm',
                    'border-primary/30 bg-brand-light/30' => $discount,
                    'border-gray-200/80' => !$discount,
                ])>
                    <h3 class="text-sm font-semibold leading-6 text-text-dark">{{ $term }}</h3>
                    <p class="mt-2 text-2xl font-bold tracking-tight text-primary">{{ $price }}</p>
                    <div class="mt-auto pt-5">
                        @if ($discount)
                            <p class="text-xs font-semibold leading-5 text-primary-dark">30% off the next billing cycle only</p>
                        @else
                            <p class="text-xs leading-5 text-muted">Complete stated term</p>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>

        <p class="mt-6 text-center text-sm leading-6 text-muted">
            Only the 12-month and Elite 24-month packages receive 30% off the next billing cycle. The benefit applies to that next cycle only.
        </p>
    </div>
</section>
