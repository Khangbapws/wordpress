<section aria-labelledby="services-title"
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-32 pb-18 sm:pt-36 sm:pb-24 lg:pt-44">
    <div class="absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute -top-32 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
    </div>

    <div class="container-page">
        <div class="mx-auto max-w-4xl text-center">
            <x-ui.badge>Engineering Capabilities</x-ui.badge>

            <h1 id="services-title"
                class="hero-title mx-auto mt-7 max-w-4xl text-4xl leading-[1.08] font-bold tracking-tight text-text-dark sm:text-5xl lg:text-6xl xl:text-7xl">
                Software architecture tailored to your
                <span class="text-primary">business outcomes.</span>
            </h1>

            <p class="hero-subtitle mx-auto mt-7 max-w-3xl text-lg leading-8 text-muted sm:text-xl">
                We do not sell predefined packages. We partner with ambitious companies to engineer custom web
                platforms, mobile applications, and intelligent systems—balancing technical excellence with competitive
                development economics.
            </p>

            <div class="hero-cta mt-10 flex flex-col items-stretch justify-center gap-3 sm:flex-row sm:items-center">
                <x-ui.button :href="home_url('/contact')">Discuss Your Project</x-ui.button>
                <x-ui.button href="#portfolio" variant="secondary">Explore Our Work</x-ui.button>
            </div>

            <div
                class="mx-auto mt-10 flex max-w-xl items-start gap-4 rounded-2xl border border-primary/15 bg-white p-5 text-left shadow-sm">
                <span
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-light text-primary">
                    <i data-lucide="cpu" class="h-5 w-5" aria-hidden="true"></i>
                </span>
                <div>
                    <p class="font-semibold text-text-dark">Start with a technical discovery</p>
                    <p class="mt-1 text-sm leading-6 text-muted">Bring us your business problem. Our architects will
                        help define the scope, tech stack, and roadmap.</p>
                    <a href="{{ home_url('/contact') }}"
                        class="group mt-3 inline-flex min-h-11 items-center font-semibold text-primary-dark no-underline transition-colors duration-300 hover:text-primary focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary">
                        <span
                            class="relative inline-block after:absolute after:-bottom-1 after:left-0 after:h-px after:w-full after:origin-left after:scale-x-0 after:bg-primary after:transition-transform after:duration-300 after:ease-out after:content-[''] group-hover:after:scale-x-100 group-focus-visible:after:scale-x-100 motion-reduce:after:transition-none">
                            Schedule a consultation
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
