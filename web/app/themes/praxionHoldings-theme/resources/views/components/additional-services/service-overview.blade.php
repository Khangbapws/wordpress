<section id="service-overview" aria-labelledby="service-overview-title" class="scroll-mt-24 bg-brand-light py-20 sm:py-24">
    <div class="container-page">

        {{-- Section heading --}}
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                How We Can Help
            </p>

            <h2 id="service-overview-title" class="mt-4 text-3xl font-semibold tracking-tight text-text-dark sm:text-4xl">
                The right expertise for your needs.
            </h2>

            <p class="mt-4 text-base leading-7 text-muted sm:text-lg">
                Choose the support that fits your current goals,
                whether you are building a product or growing a brand.
            </p>
        </div>

        {{-- Service choices --}}
        <div class="mt-12 grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-7">

            {{-- Technical Guidance --}}
            <a href="#vibe-coding"
                class="group flex h-full flex-col rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-1 hover:border-primary/30 hover:shadow-[0_20px_50px_rgba(16,24,16,0.08)] sm:p-9"
                aria-label="Explore Vibe Coding and Technical Guidance">
                <div class="flex items-start justify-between gap-4">
                    <span
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-brand-light text-primary"
                        aria-hidden="true">
                        <i data-lucide="code-2" class="h-6 w-6"></i>
                    </span>

                    <span
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 text-muted transition-all duration-300 group-hover:border-primary group-hover:bg-primary group-hover:text-white"
                        aria-hidden="true">
                        <i data-lucide="arrow-up-right"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
                    </span>
                </div>

                <p class="mt-7 text-xs font-semibold uppercase tracking-[0.16em] text-primary">
                    For Individuals &amp; Founders
                </p>

                <h3 class="mt-3 text-2xl font-semibold tracking-tight text-text-dark sm:text-3xl">
                    Technical Guidance
                </h3>

                <p class="mt-4 text-base leading-7 text-muted">
                    Build with AI and get guidance from an experienced
                    developer when you need help with code, debugging,
                    architecture, or deployment.
                </p>

                <ul class="mt-6 space-y-3">
                    @foreach (['One-to-one senior developer guidance', 'AI-assisted coding and troubleshooting', 'Flexible hourly support packages'] as $item)
                        <li class="flex items-start gap-3 text-sm leading-6 text-text-dark">
                            <i data-lucide="check" class="mt-1 h-4 w-4 shrink-0 text-primary" aria-hidden="true"></i>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-8 flex items-center gap-2 text-sm font-semibold text-primary">
                    <span>Explore Vibe Coding Support</span>
                    <i data-lucide="arrow-right"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                        aria-hidden="true"></i>
                </div>
            </a>


            {{-- Brand & Creative --}}
            <a href="#brand-creative"
                class="group flex h-full flex-col rounded-3xl border border-gray-200 bg-white p-7 transition-all duration-300 hover:-translate-y-1 hover:border-primary/30 hover:shadow-[0_20px_50px_rgba(16,24,16,0.08)] sm:p-9"
                aria-label="Explore Brand Photography and Creative Services">
                <div class="flex items-start justify-between gap-4">
                    <span
                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-brand-light text-primary"
                        aria-hidden="true">
                        <i data-lucide="camera" class="h-6 w-6"></i>
                    </span>

                    <span
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 text-muted transition-all duration-300 group-hover:border-primary group-hover:bg-primary group-hover:text-white"
                        aria-hidden="true">
                        <i data-lucide="arrow-up-right"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
                    </span>
                </div>

                <p class="mt-7 text-xs font-semibold uppercase tracking-[0.16em] text-primary">
                    For Businesses &amp; Brands
                </p>

                <h3 class="mt-3 text-2xl font-semibold tracking-tight text-text-dark sm:text-3xl">
                    Brand &amp; Creative
                </h3>

                <p class="mt-4 text-base leading-7 text-muted">
                    Present your business with professional brand photography
                    and supporting graphic design tailored to your visual identity.
                </p>

                <ul class="mt-6 space-y-3">
                    @foreach (['Store and business branding photography', 'On-location shoots in Hanoi and Nha Trang', 'Graphic design available as an add-on'] as $item)
                        <li class="flex items-start gap-3 text-sm leading-6 text-text-dark">
                            <i data-lucide="check" class="mt-1 h-4 w-4 shrink-0 text-primary" aria-hidden="true"></i>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-8 flex items-center gap-2 text-sm font-semibold text-primary">
                    <span>Explore Brand Services</span>
                    <i data-lucide="arrow-right"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                        aria-hidden="true"></i>
                </div>
            </a>

        </div>
    </div>
</section>
