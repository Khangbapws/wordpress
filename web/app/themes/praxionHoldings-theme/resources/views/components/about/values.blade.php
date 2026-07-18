@php
    $values = [
        [
            'letter' => 'P',
            'name' => 'Precision',
            'icon' => 'crosshair',
            'copy' => 'Present schedules, commissions, inventory, financial information, and customer activity with a clear purpose so owners can focus on the detail that matters.',
        ],
        [
            'letter' => 'R',
            'name' => 'Reliability',
            'icon' => 'shield-check',
            'copy' => 'Keep the experiences for customers, owners, and staff connected and understandable across web, mobile, branch, and check-in workflows.',
        ],
        [
            'letter' => 'X',
            'name' => 'eXcellence',
            'icon' => 'sparkles',
            'copy' => 'Turn complex operational work into interfaces that are easier to scan and use, helping service teams keep their attention on customers.',
        ],
    ];
@endphp

<section aria-labelledby="values-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">What the name means</p>
                <h2 id="values-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                    Three values expressed in the product experience.
                </h2>
                <p class="mt-5 text-lg leading-8 text-muted">
                    PRX stands for Precision, Reliability, and eXcellence. Each value provides a practical standard for how the ecosystem should support beauty and spa businesses.
                </p>
            </div>

            <ol class="space-y-5">
                @foreach ($values as $value)
                    <li class="grid gap-5 rounded-3xl border border-gray-200/80 bg-white p-6 shadow-sm sm:grid-cols-[4rem_1fr] sm:p-8">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary text-2xl font-bold text-white" aria-hidden="true">{{ $value['letter'] }}</div>
                        <div>
                            <div class="flex items-center gap-3">
                                <i data-lucide="{{ $value['icon'] }}" class="h-5 w-5 text-primary" aria-hidden="true"></i>
                                <h3 class="text-2xl font-semibold text-text-dark">{{ $value['name'] }}</h3>
                            </div>
                            <p class="mt-3 leading-7 text-muted">{{ $value['copy'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
