@php
    $commitments = [
        ['network', 'Connected by design', 'Customer booking, owner oversight, staff work, check-in, and branch context belong to one ecosystem.'],
        ['scan-search', 'Clarity before noise', 'Operational information should be organized so schedules, stock, financials, and trends remain easy to understand.'],
        ['heart-handshake', 'Built around service work', 'Digital portfolios and service-cycle reminders reflect the ongoing customer relationships common in hair salons and skin-care spas.'],
    ];
@endphp

<section aria-labelledby="approach-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="relative isolate overflow-hidden rounded-3xl bg-text-dark px-6 py-14 text-white sm:rounded-4xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">
            <div class="absolute -top-32 -right-24 -z-10 h-80 w-80 rounded-full bg-primary/40 blur-3xl" aria-hidden="true"></div>
            <div class="max-w-3xl">
                <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">Our approach</p>
                <h2 id="approach-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">Keep the ecosystem connected, clear, and relevant to the working day.</h2>
                <p class="mt-5 text-lg leading-8 text-white/70">These commitments are direct expressions of the PRX values and the product capabilities.</p>
            </div>

            <div class="mt-12 grid gap-5 lg:grid-cols-3">
                @foreach ($commitments as [$icon, $title, $copy])
                    <article class="rounded-2xl border border-white/15 bg-white/5 p-6">
                        <i data-lucide="{{ $icon }}" class="h-6 w-6 text-brand-mint" aria-hidden="true"></i>
                        <h3 class="mt-6 text-xl font-semibold">{{ $title }}</h3>
                        <p class="mt-3 leading-7 text-white/65">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>

            <div class="mt-10 flex flex-col gap-3 sm:flex-row">
                <x-ui.button :href="home_url('/solution')" variant="light">Explore the solution</x-ui.button>
                <a href="{{ home_url('/contact') }}" class="inline-flex min-h-12 items-center justify-center rounded-full border border-white/30 px-6 py-3 font-semibold text-white hover:bg-white/10 focus-visible:outline-white">Contact PRX Holdings</a>
            </div>
        </div>
    </div>
</section>
