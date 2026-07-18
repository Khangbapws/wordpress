@php
    $groups = [
        ['users-round', 'People operations', 'Staff management, work schedules, workload context, and commissions.'],
        ['boxes', 'Stock control', 'Inventory management with low-stock tracking and notifications.'],
        ['landmark', 'Financial clarity', 'Revenue before tax and after tax, expenses, and resulting profit visibility.'],
        ['trending-up', 'Service demand', 'Trending-service tracking for popular and frequently booked services.'],
        ['images', 'Customer progress', 'Chronological before-and-after images in the Digital Beauty Portfolio.'],
        ['message-square-heart', 'Retention timing', 'Service-cycle analysis with Zalo or SMS reminder workflows.'],
    ];
@endphp

<section aria-labelledby="capability-title" class="bg-text-dark py-20 text-white sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">Capability map</p>
                <h2 id="capability-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">Operational detail owners can act on.</h2>
                <p class="mt-5 text-lg leading-8 text-white/70">The ecosystem brings together the supplied management, financial, insight, portfolio, and retention capabilities.</p>
            </div>

            <div class="grid gap-px overflow-hidden rounded-3xl bg-white/15 sm:grid-cols-2">
                @foreach ($groups as [$icon, $title, $copy])
                    <article class="bg-text-dark p-6 sm:p-7">
                        <i data-lucide="{{ $icon }}" class="h-5 w-5 text-brand-mint" aria-hidden="true"></i>
                        <h3 class="mt-5 text-lg font-semibold">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-6 text-white/65">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
