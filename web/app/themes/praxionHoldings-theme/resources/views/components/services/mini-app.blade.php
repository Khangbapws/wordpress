<section aria-labelledby="miniapp-title" class="bg-surface py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Strategic Differentiator</p>
                <h2 id="miniapp-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl">
                    Tap into an ecosystem of over 80 million active users.
                </h2>
                <p class="mt-5 text-lg leading-8 text-muted">
                    Instead of forcing customers to download a standalone app, we engineer lightweight, high-conversion
                    Zalo Mini Apps that live directly where your users already spend their time.
                </p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <!-- User App Card -->
                <div
                    class="flex flex-col justify-between rounded-3xl border border-gray-200/80 bg-white p-6 shadow-sm sm:p-8">
                    <div>
                        <span
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-mint text-primary-dark">
                            <i data-lucide="smartphone" class="h-5 w-5"></i>
                        </span>
                        <h3 class="mt-5 text-lg font-semibold text-text-dark">User Mini App</h3>
                        <p class="mt-2 text-sm leading-6 text-muted">Frictionless booking, loyalty programs, and
                            localized e-commerce for your customers.</p>
                    </div>
                    <a href="{{ home_url('/user-mini-app') }}"
                        class="group mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary transition-colors hover:text-primary-dark">
                        Explore for Customers <i data-lucide="arrow-right"
                            class="h-4 w-4 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>

                <!-- Manager App Card -->
                <div
                    class="flex flex-col justify-between rounded-3xl border border-primary/20 bg-brand-light p-6 shadow-sm sm:p-8">
                    <div>
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-primary">
                            <i data-lucide="layout-dashboard" class="h-5 w-5"></i>
                        </span>
                        <h3 class="mt-5 text-lg font-semibold text-text-dark">Manager Mini App</h3>
                        <p class="mt-2 text-sm leading-6 text-muted">Real-time operational control, staff scheduling,
                            and customer data management.</p>
                    </div>
                    <a href="{{ home_url('/manager-mini-app') }}"
                        class="group mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary-dark transition-colors hover:text-primary">
                        Explore for Business <i data-lucide="arrow-right"
                            class="h-4 w-4 transition-transform group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
