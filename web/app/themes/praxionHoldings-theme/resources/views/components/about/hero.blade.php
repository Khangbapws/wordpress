<section id="about" aria-labelledby="about-hero-title"
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-36 pb-20 lg:pt-44 lg:pb-28">
    <div class="absolute inset-0 -z-10 overflow-hidden" aria-hidden="true">
        <div class="absolute -top-28 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute top-1/2 -right-32 h-80 w-80 rounded-full bg-brand-mint/50 blur-3xl"></div>
    </div>

    <div class="container-page px-5 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-4xl text-center">
            <span
                class="inline-flex items-center rounded-full border border-primary/10 bg-brand-mint px-4 py-1.5 text-sm font-semibold text-primary-dark">
                About Praxion Holdings
            </span>

            <h1 id="about-hero-title"
                class="mx-auto mt-7 max-w-4xl text-4xl leading-[1.1] font-bold tracking-tight text-text-dark sm:text-5xl lg:text-6xl xl:text-7xl">
                Technology that makes
                <span class="text-primary">business feel simpler.</span>
            </h1>

            <p class="mx-auto mt-7 max-w-3xl text-lg leading-8 text-muted md:text-xl">
                Praxion Holdings builds connected management software for Beauty, Wellness, and F&amp;B businesses.
                We bring the moving parts of each day into one clear platform, so teams can focus on the people they
                serve.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <x-ui.button :href="home_url('/solution')"
                    class="focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary motion-reduce:transition-none motion-reduce:hover:transform-none">
                    Explore our solutions
                    <i data-lucide="arrow-up-right" class="ml-2 h-4 w-4" aria-hidden="true"></i>
                </x-ui.button>

                <x-ui.button href="#our-story" variant="secondary"
                    class="focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary motion-reduce:transition-none motion-reduce:hover:transform-none">
                    Why we exist
                </x-ui.button>
            </div>
        </div>

        <div class="w-full flex flex-row items-center justify-center">
            <div class="mx-auto mt-16 max-w-6xl lg:mt-20">
                <div
                    class="overflow-hidden rounded-3xl border border-primary/10 bg-white p-2 shadow-2xl shadow-primary/10 sm:rounded-4xl sm:p-3">
                    <img src="{{ Vite::asset('resources/images/showcasePicture.png') }}"
                        alt="Praxion platform shown across devices in a collaborative workspace" width="1408" height="768"
                        fetchpriority="high" decoding="async" class="aspect-16/9 w-full rounded-[1.25rem] object-cover sm:rounded-3xl">
                </div>

                <figcaption
                    class="relative mx-4 -mt-8 flex flex-col gap-4 rounded-2xl border border-gray-200/80 bg-white/95 p-5 shadow-xl shadow-black/5 backdrop-blur sm:mx-8 sm:-mt-10 sm:flex-row sm:items-center sm:justify-between lg:mx-12 lg:p-6">
                    <div class="flex items-center gap-4">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-light text-primary">
                            <i data-lucide="workflow" class="h-5 w-5" aria-hidden="true"></i>
                        </span>

                        <div>
                            <p class="font-semibold text-text-dark">One connected view of your business</p>
                            <p class="mt-1 text-sm leading-6 text-muted">Clearer workflows. Better decisions. More room to grow.</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 sm:justify-end" aria-label="Platform capabilities">
                        <span class="rounded-full bg-brand-light px-3 py-1.5 text-xs font-semibold text-primary-dark">Customers</span>
                        <span class="rounded-full bg-brand-light px-3 py-1.5 text-xs font-semibold text-primary-dark">Operations</span>
                        <span class="rounded-full bg-brand-light px-3 py-1.5 text-xs font-semibold text-primary-dark">Insights</span>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</section>