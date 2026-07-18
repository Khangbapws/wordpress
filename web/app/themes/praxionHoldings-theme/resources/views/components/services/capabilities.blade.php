@php
    $capabilities = [
        ['calendar-clock', 'People and schedules', 'Manage staff, work schedules, appointments, and commissions in one operational view.'],
        ['package-search', 'Inventory awareness', 'Track inventory and receive low-stock notifications, such as when shampoo is running low.'],
        ['badge-dollar-sign', 'Revenue and profit visibility', 'View revenue before tax and after tax, then understand profit after expenses are deducted.'],
        ['chart-no-axes-combined', 'Trending services', 'See which services are popular and frequently booked.'],
        ['images', 'Digital Beauty Portfolio', 'Store before-and-after customer images chronologically and automatically combine them so progress is easier to see.'],
        ['refresh-cw', 'Smart CRM and Retention', 'Analyze service cycles and send timely Zalo or SMS reminders with a small discount code to encourage a return visit.'],
        ['smartphone', 'Two focused mobile applications', 'One application serves booking customers; another is shared by business owners and staff.'],
        ['git-branch-plus', 'Branches and check-in', 'Support unlimited shop branches and manage the free check-in application.'],
    ];
@endphp

<section aria-labelledby="shared-capabilities-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">One shared ecosystem</p>
            <h2 id="shared-capabilities-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                The billing terms do not represent different products.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                The capabilities below explain the connected PRX Holdings experience visitors are comparing when they choose a billing duration.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($capabilities as [$icon, $title, $copy])
                <article class="rounded-3xl border border-gray-200/80 bg-white p-6 shadow-sm sm:p-7">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary">
                        <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                    </span>
                    <h3 class="mt-6 text-lg font-semibold text-text-dark">{{ $title }}</h3>
                    <p class="mt-3 text-sm leading-6 text-muted">{{ $copy }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
