@php
    $guidance = [
        [
            'icon' => 'compass',
            'title' => 'Exploring or newly operating',
            'copy' => 'Start with the 15-day free trial. A 1-month term keeps the next commitment short while you decide how far ahead you want to plan.',
        ],
        [
            'icon' => 'calendar-range',
            'title' => 'Building a steadier rhythm',
            'copy' => 'A 3-month or 6-month term can suit owners who want more continuity without making a year-long commitment.',
        ],
        [
            'icon' => 'building-2',
            'title' => 'Established or multi-branch',
            'copy' => 'A 12-month or Elite 24-month term can fit businesses with stable plans and a preference for a longer commitment horizon.',
        ],
    ];
@endphp

<section aria-labelledby="guidance-title" class="bg-white py-20 sm:py-24 lg:py-28">
    <div class="container-page">
        <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-start lg:gap-16">
            <div class="lg:sticky lg:top-28">
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Practical guidance</p>
                <h2 id="guidance-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl">
                    Choose for flexibility and planning horizon.
                </h2>
                <p class="mt-5 text-lg leading-8 text-muted">
                    These are editorial suggestions, not claims about feature limits or popularity. Business size alone does not change the product capabilities listed on this page.
                </p>
            </div>

            <ol class="space-y-4">
                @foreach ($guidance as $index => $item)
                    <li class="rounded-3xl border border-gray-200/80 bg-surface p-6 sm:flex sm:gap-5 sm:p-8">
                        <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-brand-mint text-primary-dark">
                            <i data-lucide="{{ $item['icon'] }}" class="h-5 w-5" aria-hidden="true"></i>
                        </span>
                        <div class="mt-5 sm:mt-0">
                            <p class="font-mono text-xs font-semibold tracking-[0.16em] text-primary uppercase">Fit {{ $index + 1 }}</p>
                            <h3 class="mt-2 text-xl font-semibold text-text-dark">{{ $item['title'] }}</h3>
                            <p class="mt-3 leading-7 text-muted">{{ $item['copy'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
