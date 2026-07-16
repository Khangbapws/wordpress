<section class="relative overflow-hidden bg-linear-to-b from-brand-light via-white to-white pt-36 pb-24">

    <div class="container-page">

        <div class="mx-auto max-w-4xl text-center">

            {{-- Badge --}}
            <x-ui.badge>
                Business Solutions
            </x-ui.badge>

            {{-- Heading --}}
            <h1
                class="hero-title mt-8 text-5xl font-bold leading-tight tracking-tight text-text-dark md:text-6xl xl:text-7xl">

                Business management software

                <span class="block text-primary">
                    built for Beauty &amp; F&amp;B.
                </span>

            </h1>

            {{-- Subtitle --}}
            <p class="hero-subtitle mx-auto mt-8 max-w-3xl text-lg leading-8 text-muted md:text-xl">

                Everything you need to manage customers,
                appointments, inventory, payments and analytics
                from one unified platform.

            </p>

            {{-- CTA --}}
            <div class="hero-cta mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">

                <x-ui.button href="/solutions">
                    Explore Solutions
                </x-ui.button>

                <x-ui.button href="/contact" variant="secondary">

                    Contact Sales

                </x-ui.button>

            </div>

            <x-services.social-proof />

        </div>

        <x-services.product-tags />

        {{-- Dashboard Preview --}}
        <div class="mt-20">

            <div
                class="relative mx-auto max-w-6xl overflow-hidden rounded-4xl border border-gray-200/70 bg-white shadow-xl shadow-black/5">

                <div class="flex items-center gap-2 border-b border-gray-100 px-6 py-4">

                    <span class="h-3 w-3 rounded-full bg-red-300"></span>
                    <span class="h-3 w-3 rounded-full bg-yellow-300"></span>
                    <span class="h-3 w-3 rounded-full bg-green-300"></span>

                </div>

                <div class="flex h-105 items-center justify-center bg-brand-light/40">

                    <div class="text-center">

                        <i data-lucide="layout-dashboard" class="mx-auto h-16 w-16 text-primary">
                        </i>

                        <p class="mt-6 text-lg font-medium text-text-dark">
                            Interactive Dashboard Preview
                        </p>

                        <p class="mt-2 text-muted">
                            Replace this mockup with your real application screenshot.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
