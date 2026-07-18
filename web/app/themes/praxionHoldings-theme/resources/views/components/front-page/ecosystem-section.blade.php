@php
    $experiences = [
        ['calendar-heart', 'Booking customers', 'Use a dedicated mobile application to connect with beauty and spa service providers.'],
        ['monitor-dot', 'Business owners', 'Review branches, schedules, inventory, financials, service demand, and retention activity on the web.'],
        ['users-round', 'Owners and staff', 'Share one mobile application for essential operational information away from the desktop.'],
        ['scan-line', 'Branches and check-in', 'Manage the free check-in application while supporting unlimited shop branches.'],
    ];
@endphp

<section aria-labelledby="home-ecosystem-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">One ecosystem, clear roles</p>
            <h2 id="home-ecosystem-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                Connect the customer journey with the working day.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                Each PRX Holdings experience has a distinct audience, while owners retain a connected view of the business.
            </p>
        </div>

        <ol class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($experiences as $index => [$icon, $title, $copy])
                <li
                    class="group transform-gpu rounded-3xl border border-gray-200/80 bg-surface p-6 shadow-sm transition-[transform,border-color,box-shadow,background-color] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform hover:-translate-y-1 hover:border-primary/25 hover:bg-white hover:shadow-lg hover:shadow-primary/10 sm:p-7">
                    <div class="flex items-center justify-between gap-4">
                        <span
                            class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-mint text-primary-dark transition-[background-color,color,transform] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:scale-105 group-hover:bg-primary group-hover:text-white">
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

        <div class="mt-10 text-center">
            <a href="{{ home_url('/solution') }}" class="inline-flex min-h-12 items-center gap-2 font-semibold text-primary-dark underline decoration-primary/30 underline-offset-4 hover:text-primary">
                Explore every product experience
                <i data-lucide="arrow-right" class="h-4 w-4" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
