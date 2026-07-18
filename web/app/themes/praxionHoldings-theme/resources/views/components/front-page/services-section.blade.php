<section aria-labelledby="home-capabilities-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Owner capabilities</p>
                <h2 id="home-capabilities-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                    Move from daily detail to clearer decisions.
                </h2>
            </div>
            <p class="text-lg leading-8 text-muted">
                PRX Holdings brings people, stock, financial information, service demand, customer progress, and retention timing into one connected product experience.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <x-front-page.bento-card icon="calendar-clock" title="Staff, schedules, and commissions" :wide="true">
                Manage staff, work schedules, workload context, and commissions alongside the appointment day.
            </x-front-page.bento-card>

            <x-front-page.bento-card icon="package-search" title="Inventory awareness">
                Track inventory and receive low-stock notifications, such as when shampoo is running low.
            </x-front-page.bento-card>

            <x-front-page.bento-card icon="landmark" title="Revenue and profit visibility">
                Review revenue before tax and after tax, then see profit after expenses are deducted.
            </x-front-page.bento-card>

            <x-front-page.bento-card icon="trending-up" title="Trending services" :wide="true">
                Understand which services are popular and frequently booked across the business.
            </x-front-page.bento-card>

            <x-front-page.bento-card icon="images" title="Digital Beauty Portfolio" :wide="true">
                Store before-and-after service images chronologically and automatically combine them so customer progress is easier to see.
            </x-front-page.bento-card>

            <x-front-page.bento-card icon="message-square-heart" title="Smart CRM and Retention">
                Analyze service cycles and prepare timely Zalo or SMS reminders with a small discount code to encourage a return visit.
            </x-front-page.bento-card>
        </div>

        <div class="mt-10 text-center">
            <a href="{{ home_url('/solution') }}" class="inline-flex min-h-12 items-center gap-2 font-semibold text-primary-dark underline decoration-primary/30 underline-offset-4 hover:text-primary">
                See these capabilities in the owner dashboard
                <i data-lucide="arrow-right" class="h-4 w-4" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
