<section aria-labelledby="home-title"
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-32 pb-20 sm:pt-36 sm:pb-24 lg:pt-44 lg:pb-32">
    <div class="absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute -top-32 left-1/3 h-96 w-96 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute top-1/2 -right-40 h-80 w-80 rounded-full bg-brand-mint/55 blur-3xl"></div>
    </div>

    <div class="container-page">
        <div class="grid items-center gap-14 lg:grid-cols-[1.02fr_0.98fr] lg:gap-16">
            <div>
                <x-ui.badge>Premium Software Engineering Partner</x-ui.badge>

                <h1 id="home-title"
                    class="hero-title mt-7 max-w-4xl text-4xl leading-[1.06] font-bold tracking-tight text-text-dark sm:text-5xl lg:text-6xl xl:text-7xl">
                    Engineering complex software.
                    <span class="text-primary">Built to scale.</span>
                </h1>

                <p class="hero-subtitle mt-7 max-w-2xl text-lg leading-8 text-muted sm:text-xl">
                    We partner with ambitious founders and tech leaders to architect, build, and scale high-performance
                    web platforms, mobile applications, and custom digital systems.
                </p>

                <div class="hero-cta mt-10 flex flex-col items-stretch gap-3 sm:flex-row sm:items-center">
                    <x-ui.button :href="home_url('/contact')">Discuss Your Project</x-ui.button>
                    <x-ui.button :href="home_url('/capabilities')" variant="secondary">View Capabilities</x-ui.button>
                </div>

                <p class="mt-6 flex items-start gap-2 text-sm leading-6 text-muted">
                    <i data-lucide="cpu" class="mt-0.5 h-4 w-4 shrink-0 text-primary" aria-hidden="true"></i>
                    Modern tech stack. Clean architecture. Zero legacy debt.
                </p>
            </div>

            <div class="relative mx-auto w-full max-w-xl" aria-label="Software Architecture Overview">
                <div
                    class="rounded-3xl border border-primary/15 bg-white p-5 shadow-2xl shadow-primary/10 sm:rounded-4xl sm:p-7">
                    <div class="rounded-2xl bg-text-dark p-5 text-white sm:p-6">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-xs font-semibold tracking-[0.14em] text-brand-mint uppercase">System
                                    Architecture</p>
                                <p class="mt-2 text-xl font-semibold">Production-grade infrastructure</p>
                            </div>
                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10 text-brand-mint">
                                <i data-lucide="layers" class="h-5 w-5" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>

                    <div class="my-3 flex justify-center" aria-hidden="true"><span
                            class="h-5 w-px bg-primary/25"></span></div>

                    <div class="rounded-2xl border border-gray-200/80 bg-surface p-4 sm:p-5">
                        <div class="flex items-center gap-3">
                            <span
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-light text-primary"><i
                                    data-lucide="layout-grid" class="h-5 w-5" aria-hidden="true"></i></span>
                            <div>
                                <p class="font-semibold text-text-dark">Client Application Layer</p>
                                <p class="mt-0.5 text-xs text-muted">Responsive Web & Cross-platform Mobile</p>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 flex justify-center" aria-hidden="true"><span
                            class="h-5 w-px bg-primary/25"></span></div>

                    <div class="grid gap-3 sm:grid-cols-2">
                        <div class="rounded-2xl border border-gray-200/80 bg-white p-4">
                            <i data-lucide="server" class="h-5 w-5 text-primary" aria-hidden="true"></i>
                            <p class="mt-3 font-semibold text-text-dark">API & Microservices</p>
                            <p class="mt-1 text-xs leading-5 text-muted">Scalable backend logic</p>
                        </div>
                        <div class="rounded-2xl border border-gray-200/80 bg-white p-4">
                            <i data-lucide="database" class="h-5 w-5 text-primary" aria-hidden="true"></i>
                            <p class="mt-3 font-semibold text-text-dark">Cloud Database</p>
                            <p class="mt-1 text-xs leading-5 text-muted">Secure data persistence</p>
                        </div>
                    </div>

                    <div class="mt-3 flex flex-wrap gap-2">
                        <span
                            class="rounded-full bg-brand-light px-3 py-1.5 text-xs font-semibold text-primary-dark">Sub-100ms
                            Latency</span>
                        <span
                            class="rounded-full bg-brand-light px-3 py-1.5 text-xs font-semibold text-primary-dark">Automated
                            CI/CD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
