<section aria-labelledby="services-title"
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-32 pb-18 sm:pt-36 sm:pb-24 lg:pt-44">
    <div class="absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute -top-32 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
    </div>

    <div class="container-page">
        <div class="mx-auto max-w-4xl text-center">
            <x-ui.badge>Pricing for beauty and spa businesses</x-ui.badge>

            <h1 id="services-title"
                class="hero-title mx-auto mt-7 max-w-4xl text-4xl leading-[1.08] font-bold tracking-tight text-text-dark sm:text-5xl lg:text-6xl xl:text-7xl">
                One connected platform.
                <span class="text-primary">Choose the billing term that fits your next stage.</span>
            </h1>

            <p class="hero-subtitle mx-auto mt-7 max-w-3xl text-lg leading-8 text-muted sm:text-xl">
                PRX Holdings connects booking customers with beauty and spa businesses while giving owners and staff a clear way to manage daily operations. The billing choices change the commitment period—not the ecosystem described below.
            </p>

            <div class="hero-cta mt-10 flex flex-col items-stretch justify-center gap-3 sm:flex-row sm:items-center">
                <x-ui.button href="#pricing">Compare billing terms</x-ui.button>
                <x-ui.button :href="home_url('/solution')" variant="secondary">See the product experience</x-ui.button>
            </div>

            <div class="mx-auto mt-10 flex max-w-xl items-start gap-4 rounded-2xl border border-primary/15 bg-white p-5 text-left shadow-sm">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-light text-primary">
                    <i data-lucide="calendar-check-2" class="h-5 w-5" aria-hidden="true"></i>
                </span>
                <div>
                    <p class="font-semibold text-text-dark">Begin with a 15-day free trial</p>
                    <p class="mt-1 text-sm leading-6 text-muted">Explore the platform before selecting one of the paid billing terms.</p>
                    <a href="{{ home_url('/contact') }}" class="group mt-3 inline-flex min-h-11 items-center font-semibold text-primary-dark no-underline transition-colors duration-300 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span class="relative inline-block after:absolute after:-bottom-1 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary after:transition-transform after:duration-300 after:ease-out after:content-[''] group-hover:after:scale-x-100 group-focus-visible:after:scale-x-100 motion-reduce:after:transition-none">
                            Ask PRX Holdings about starting the trial
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
