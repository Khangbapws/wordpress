<section aria-labelledby="demo-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Proof of Execution</p>
            <h2 id="demo-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Don't just take our word for it. Experience what we've built.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                We don't just write code for clients; we conceptualize, architect, and scale our own technology. Explore
                our flagship B2B platform to see our UI/UX, database architecture, and performance standards in action.
            </p>
        </div>

        <div class="mt-12 rounded-4xl border border-gray-200/80 bg-surface p-2 sm:p-4">

            <div class="group relative aspect-video overflow-hidden rounded-3xl bg-gray-100 shadow-2xl shadow-black/5">

                <video class="h-full w-full object-cover" autoplay muted loop playsinline preload="metadata"
                    poster="{{ Vite::asset('resources/images/others/product-demo-poster.png') }}">
                    <source src="{{ Vite::asset('resources/videos/product-demo.mp4') }}" type="video/mp4">

                    Your browser does not support the video tag.
                </video>

                {{-- Subtle overlay --}}
                <div
                    class="pointer-events-none absolute inset-0 bg-linear-to-t from-black/10 via-transparent to-transparent">
                </div>

            </div>

        </div>

        <div class="mt-10 flex justify-center">
            <x-ui.button href="https://demo.prxholdings.com" target="_blank" rel="noopener noreferrer">
                Experience the Product
            </x-ui.button>
        </div>
    </div>
</section>
