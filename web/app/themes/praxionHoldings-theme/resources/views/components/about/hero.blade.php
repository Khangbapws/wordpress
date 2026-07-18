<section aria-labelledby="about-title"
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-32 pb-20 sm:pt-36 sm:pb-24 lg:pt-44 lg:pb-32">
    <div class="absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute -top-28 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute top-1/2 -right-32 h-80 w-80 rounded-full bg-brand-mint/50 blur-3xl"></div>
    </div>

    <div class="container-page">
        <div class="mx-auto max-w-4xl text-center">
            <x-ui.badge>About PRX Holdings</x-ui.badge>
            <h1 id="about-title"
                class="hero-title mx-auto mt-7 max-w-4xl text-4xl leading-[1.08] font-bold tracking-tight text-text-dark sm:text-5xl lg:text-6xl xl:text-7xl">
                Connecting beauty and spa businesses with
                <span class="text-primary">the people they serve.</span>
            </h1>
            <p class="hero-subtitle mx-auto mt-7 max-w-3xl text-lg leading-8 text-muted sm:text-xl">
                PRX Holdings provides a connected software ecosystem for beauty and spa businesses serving women and men. It links booking customers with business owners and staff while bringing daily operational information into clearer view.
            </p>
            <div class="hero-cta mt-10 flex flex-col items-stretch justify-center gap-3 sm:flex-row sm:items-center">
                <x-ui.button :href="home_url('/solution')">Explore the ecosystem</x-ui.button>
                <x-ui.button :href="home_url('/services')" variant="secondary">Compare billing terms</x-ui.button>
            </div>
        </div>

        <div class="mx-auto mt-14 grid max-w-5xl gap-5 md:grid-cols-2 lg:mt-18">
            <article class="rounded-3xl border border-primary/15 bg-white p-7 shadow-lg shadow-primary/5 sm:p-9">
                <div class="flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary"><i data-lucide="target" class="h-5 w-5" aria-hidden="true"></i></span>
                    <p class="text-sm font-semibold tracking-[0.16em] text-primary uppercase">Mission</p>
                </div>
                <h2 class="mt-6 text-2xl leading-tight font-semibold text-text-dark sm:text-3xl">Help owners manage operations clearly and service teams stay focused on customers.</h2>
            </article>

            <article class="rounded-3xl bg-text-dark p-7 text-white shadow-lg shadow-black/10 sm:p-9">
                <div class="flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-brand-mint"><i data-lucide="telescope" class="h-5 w-5" aria-hidden="true"></i></span>
                    <p class="text-sm font-semibold tracking-[0.16em] text-brand-mint uppercase">Vision</p>
                </div>
                <h2 class="mt-6 text-2xl leading-tight font-semibold sm:text-3xl">Connect booking customers, owners, and staff through dependable digital tools.</h2>
            </article>
        </div>
    </div>
</section>
