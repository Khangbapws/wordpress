@php
    $connections = [
        ['calendar-heart', 'Booking customers', 'Use a dedicated mobile application to connect with beauty and spa service providers.'],
        ['monitor-smartphone', 'Owners and staff', 'Use the owner web experience and a shared mobile application to manage operational information.'],
        ['scan-line', 'Check-in and branches', 'Manage the free check-in application while supporting unlimited shop branches.'],
    ];
@endphp

<section aria-labelledby="ecosystem-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">How the ecosystem connects</p>
            <h2 id="ecosystem-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">Different experiences, one operating context.</h2>
            <p class="mt-5 text-lg leading-8 text-muted">Each application has a clear audience while the business remains connected across customer booking, team operations, check-in, and branch management.</p>
        </div>

        <ol class="relative mt-12 grid gap-5 lg:grid-cols-3">
            @foreach ($connections as $index => [$icon, $title, $copy])
                <li
                    class="group relative transform-gpu rounded-3xl border border-gray-200/80 bg-white p-7 shadow-sm transition-[transform,border-color,box-shadow,background-color] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform hover:-translate-y-1 hover:border-primary/25 hover:bg-brand-light/30 hover:shadow-lg hover:shadow-primary/10">
                    <div class="flex items-center justify-between gap-4">
                        <span
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-light text-primary transition-[background-color,color,transform] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:scale-105 group-hover:bg-primary group-hover:text-white">
                            <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                        </span>
                        <span
                            class="font-mono text-xs font-semibold text-muted transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:text-primary">0{{ $index + 1 }}</span>
                    </div>
                    <h3
                        class="mt-6 text-xl font-semibold text-text-dark transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:text-primary-dark">
                        {{ $title }}
                    </h3>
                    <p class="mt-3 leading-7 text-muted">{{ $copy }}</p>
                </li>
            @endforeach
        </ol>
    </div>
</section>
