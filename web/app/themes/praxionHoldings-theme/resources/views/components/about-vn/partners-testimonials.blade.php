@php
    /*
    |--------------------------------------------------------------------------
    | Partner logos
    |--------------------------------------------------------------------------
    | Only include organizations PRX has genuinely worked with
    | and has permission to feature.
    |
    | Image paths are relative to the project root for Vite.
    */

    $partners = [
        [
            'name' => 'Australasia Aquaculture Company',
            'short_name' => 'AAC',
            'relationship' => 'Client',
            'location' => 'Vietnam',
            'logo' => 'resources/images/partners/aaclogo.webp',
            'alt' => 'Australasia Aquaculture Company (AAC) logo',
            'url' => 'https://aac-vn.com',
        ],
    ];

    /*
    |--------------------------------------------------------------------------
    | Client testimonials
    |--------------------------------------------------------------------------
    | Use genuine, approved client feedback.
    | Do not rewrite a quotation in a way that changes its meaning.
    */

    $testimonials = [
        /*
        [
            'quote' => 'Insert the actual approved client testimonial here.',
            'name' => 'Client Name',
            'role' => 'Founder / Managing Director',
            'company' => 'Company Name',
            'project' => 'Website Development',
            'photo' => 'resources/images/testimonials/client-name.webp',
            'source_url' => null,
            'featured' => true,
        ],
        [
            'quote' => 'Another genuine client testimonial.',
            'name' => 'Another Client',
            'role' => 'Business Owner',
            'company' => 'Business Name',
            'project' => 'Custom Software Development',
            'photo' => null,
            'source_url' => null,
            'featured' => false,
        ],
        */
    ];

    /*
    |--------------------------------------------------------------------------
    | Select featured testimonial
    |--------------------------------------------------------------------------
    | Use the testimonial explicitly marked as featured.
    | If none is selected, use the first available testimonial.
    */

    $testimonials = array_values($testimonials);

    $featuredIndex = null;

    foreach ($testimonials as $index => $testimonial) {
        if (!empty($testimonial['featured'])) {
            $featuredIndex = $index;
            break;
        }
    }

    if ($featuredIndex === null && count($testimonials) > 0) {
        $featuredIndex = 0;
    }

    $featuredTestimonial = $featuredIndex !== null ? $testimonials[$featuredIndex] : null;

    $otherTestimonials = array_values(
        array_filter($testimonials, fn($testimonial, $index) => $index !== $featuredIndex, ARRAY_FILTER_USE_BOTH),
    );
@endphp


@if (count($partners) > 0 || count($testimonials) > 0)

    <section id="partners-and-testimonials" aria-labelledby="partners-testimonials-title"
        class="relative isolate overflow-hidden bg-primary-dark py-20 text-white sm:py-24 lg:py-28">
        {{-- Subtle background decoration --}}
        <div class="pointer-events-none absolute -right-40 -top-40 h-[28rem] w-[28rem] rounded-full border border-white/5"
            aria-hidden="true"></div>

        <div class="pointer-events-none absolute -bottom-48 -left-40 h-[30rem] w-[30rem] rounded-full border border-white/5"
            aria-hidden="true"></div>


        <div class="container-page relative">

            {{-- =========================================================
             SECTION INTRODUCTION
             ========================================================= --}}
            <div class="grid grid-cols-1 items-end gap-6 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16">

                <div class="max-w-2xl">
                    <x-ui.badge color="green">
                        Partners &amp; Client Stories
                    </x-ui.badge>

                    <h2 id="partners-testimonials-title"
                        class="mt-5 text-3xl font-semibold leading-[1.12] tracking-tight text-white sm:text-4xl lg:text-5xl">
                        Good partnerships start with trust.
                    </h2>
                </div>

                <p class="max-w-xl text-base leading-7 text-white/70 sm:text-lg sm:leading-8">
                    We believe meaningful results come from strong relationships,
                    clear communication, and a shared commitment to building
                    solutions that make a difference.
                </p>

            </div>



            {{-- =========================================================
     PARTNERS & CLIENT MARQUEE
     ========================================================= --}}

            @if (count($partners) > 0)

                @php
                    $hasMultiplePartners = count($partners) > 1;
                @endphp

                <div class="mt-14 sm:mt-16 lg:mt-20">

                    {{-- Section heading --}}
                    <div class="mb-8 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-mint">
                                {{ $hasMultiplePartners ? 'Selected Partners' : 'Featured Client' }}
                            </p>

                            <h3 class="mt-3 text-2xl font-semibold tracking-tight text-white sm:text-3xl">
                                {{ $hasMultiplePartners
                                    ? 'Organizations we are proud to work with.'
                                    : 'Partnerships are built one project at a time.' }}
                            </h3>
                        </div>

                        <p class="max-w-md text-sm leading-6 text-white/60">
                            {{ $hasMultiplePartners
                                ? 'A growing network of businesses connected through collaboration and shared goals.'
                                : 'We value the opportunity to work with businesses that trust us with their digital ambitions.' }}
                        </p>

                    </div>


                    {{-- =====================================================
             STATE A: ONE PARTNER
             Featured client + animated editorial marquee
             ===================================================== --}}

                    @if (!$hasMultiplePartners)

                        @php
                            $partner = $partners[0];
                        @endphp

                        <div class="overflow-hidden rounded-3xl border border-white/10 bg-white">

                            {{-- Featured client --}}
                            <div class="grid grid-cols-1 items-center lg:grid-cols-[1fr_0.85fr]">

                                {{-- Text --}}
                                <div class="p-7 sm:p-9 lg:p-11">

                                    <div class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-primary"></span>

                                        <span class="text-xs font-semibold uppercase tracking-[0.16em] text-primary">
                                            {{ $partner['relationship'] ?? 'Client' }}
                                        </span>
                                    </div>

                                    <h4
                                        class="mt-5 max-w-lg text-2xl font-semibold leading-tight tracking-tight text-text-dark sm:text-3xl">
                                        A shared commitment to meaningful progress.
                                    </h4>

                                    <p class="mt-4 max-w-lg text-sm leading-7 text-muted sm:text-base">
                                        Every successful project begins with understanding
                                        the people, goals, and challenges behind a business.
                                        We are proud to feature our collaboration with
                                        {{ $partner['short_name'] }}.
                                    </p>

                                    <div class="mt-7 flex flex-wrap items-center gap-3">
                                        <span
                                            class="inline-flex items-center rounded-full bg-brand-light px-4 py-2 text-xs font-semibold text-primary-dark">
                                            {{ $partner['location'] ?? 'Vietnam' }}
                                        </span>

                                        @if (!empty($partner['url']))
                                            <a href="{{ esc_url($partner['url']) }}" target="_blank"
                                                rel="noopener noreferrer"
                                                class="inline-flex items-center gap-2 text-sm font-semibold text-primary transition-colors hover:text-primary-dark">
                                                <span>Visit {{ $partner['short_name'] }}</span>

                                                <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                    </div>

                                </div>


                                {{-- Partner logo --}}
                                <div
                                    class="flex min-h-52 items-center justify-center border-t border-gray-100 bg-gray-50/70 p-8 sm:min-h-64 lg:min-h-full lg:border-l lg:border-t-0">

                                    @if (!empty($partner['url']))
                                        <a href="{{ esc_url($partner['url']) }}" target="_blank"
                                            rel="noopener noreferrer" aria-label="Visit {{ $partner['name'] }} website"
                                            class="group flex min-h-36 w-full max-w-sm items-center justify-center rounded-2xl border border-gray-200/80 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-[0_16px_40px_rgba(16,24,16,0.07)]">
                                            <img src="{{ Vite::asset($partner['logo']) }}"
                                                alt="{{ $partner['alt'] ?? $partner['name'] . ' logo' }}"
                                                loading="lazy" decoding="async"
                                                class="max-h-20 max-w-full object-contain transition-transform duration-500 group-hover:scale-[1.03]">
                                        </a>
                                    @else
                                        <div
                                            class="flex min-h-36 w-full max-w-sm items-center justify-center rounded-2xl border border-gray-200/80 bg-white p-8">
                                            <img src="{{ Vite::asset($partner['logo']) }}"
                                                alt="{{ $partner['alt'] ?? $partner['name'] . ' logo' }}"
                                                loading="lazy" decoding="async"
                                                class="max-h-20 max-w-full object-contain">
                                        </div>
                                    @endif

                                </div>

                            </div>


                            {{-- Animated editorial marquee --}}
                            <div class="prx-partner-ticker border-t border-gray-100 bg-white">

                                <div class="prx-partner-ticker__viewport" aria-hidden="true">
                                    <div class="prx-partner-ticker__track">

                                        @for ($copy = 0; $copy < 2; $copy++)
                                            <div class="prx-partner-ticker__group">

                                                <span>BUILT ON TRUST</span>
                                                <span class="prx-partner-ticker__separator">✳</span>

                                                <span>SHARED AMBITION</span>
                                                <span class="prx-partner-ticker__separator">✳</span>

                                                <span>THOUGHTFUL COLLABORATION</span>
                                                <span class="prx-partner-ticker__separator">✳</span>

                                                <span>LONG-TERM THINKING</span>
                                                <span class="prx-partner-ticker__separator">✳</span>

                                            </div>
                                        @endfor

                                    </div>
                                </div>

                            </div>

                        </div>


                        {{-- =====================================================
             STATE B: MULTIPLE PARTNERS
             Continuous logo marquee
             ===================================================== --}}
                    @else
                        <div class="relative overflow-hidden rounded-3xl bg-white py-8 sm:py-10">

                            {{-- Edge gradients --}}
                            <div class="pointer-events-none absolute inset-y-0 left-0 z-10 w-12 bg-gradient-to-r from-white to-transparent sm:w-20"
                                aria-hidden="true"></div>

                            <div class="pointer-events-none absolute inset-y-0 right-0 z-10 w-12 bg-gradient-to-l from-white to-transparent sm:w-20"
                                aria-hidden="true"></div>


                            {{-- Logo marquee --}}
                            <div class="prx-partner-marquee" aria-label="Our client and partner organizations">

                                <div class="prx-partner-marquee__track">

                                    @for ($copy = 0; $copy < 2; $copy++)
                                        <div class="prx-partner-marquee__group"
                                            @if ($copy === 1) aria-hidden="true" @endif>

                                            @foreach ($partners as $partner)
                                                @if (!empty($partner['url']))
                                                    <a href="{{ esc_url($partner['url']) }}" target="_blank"
                                                        rel="noopener noreferrer"
                                                        tabindex="{{ $copy === 1 ? '-1' : '0' }}"
                                                        class="prx-partner-logo-card group">
                                                        <img src="{{ Vite::asset($partner['logo']) }}"
                                                            alt="{{ $copy === 1 ? '' : $partner['alt'] ?? $partner['name'] . ' logo' }}"
                                                            loading="lazy" decoding="async"
                                                            class="max-h-12 max-w-[190px] object-contain opacity-70 transition-all duration-300 group-hover:scale-[1.04] group-hover:opacity-100">

                                                        <span class="sr-only">
                                                            {{ $partner['name'] }}
                                                        </span>
                                                    </a>
                                                @else
                                                    <div class="prx-partner-logo-card">
                                                        <img src="{{ Vite::asset($partner['logo']) }}"
                                                            alt="{{ $copy === 1 ? '' : $partner['alt'] ?? $partner['name'] . ' logo' }}"
                                                            loading="lazy" decoding="async"
                                                            class="max-h-12 max-w-[190px] object-contain opacity-70">
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    @endfor

                                </div>

                            </div>

                        </div>

                    @endif

                </div>

            @endif



            {{-- =========================================================
             CLIENT TESTIMONIALS
             ========================================================= --}}
            @if (count($testimonials) > 0)

                <div class="mt-16 sm:mt-20 lg:mt-24">

                    {{-- Testimonials heading --}}
                    <div class="mb-8 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-mint">
                                Client Feedback
                            </p>

                            <h3 class="mt-3 text-2xl font-semibold tracking-tight text-white sm:text-3xl">
                                In their own words.
                            </h3>
                        </div>

                        <p class="max-w-md text-sm leading-6 text-white/60">
                            A closer look at the experiences of people
                            we've had the opportunity to work with.
                        </p>

                    </div>


                    {{-- Featured review + supporting reviews --}}
                    <div @class([
                        'grid grid-cols-1 gap-5',
                        'lg:grid-cols-[1.15fr_0.85fr]' => count($otherTestimonials) > 0,
                    ])>

                        {{-- Featured testimonial --}}
                        @if ($featuredTestimonial)

                            <article
                                class="flex flex-col justify-between gap-10 rounded-3xl bg-brand-light p-7 text-text-dark sm:p-9 lg:p-10">

                                <div>

                                    <div class="flex items-center justify-between gap-4">
                                        <span class="text-xs font-semibold uppercase tracking-[0.16em] text-primary">
                                            Featured Testimonial
                                        </span>

                                        <span
                                            class="flex h-11 w-11 items-center justify-center rounded-full bg-white text-primary"
                                            aria-hidden="true">
                                            <i data-lucide="quote" class="h-5 w-5"></i>
                                        </span>
                                    </div>


                                    <blockquote class="mt-8">
                                        <p
                                            class="text-xl font-medium leading-[1.5] tracking-tight text-text-dark sm:text-2xl lg:text-[1.8rem]">
                                            “{{ $featuredTestimonial['quote'] }}”
                                        </p>
                                    </blockquote>

                                </div>


                                {{-- Client attribution --}}
                                <div
                                    class="flex flex-wrap items-end justify-between gap-5 border-t border-primary/10 pt-6">

                                    <div class="flex min-w-0 items-center gap-4">

                                        @if (!empty($featuredTestimonial['photo']))
                                            <img src="{{ Vite::asset($featuredTestimonial['photo']) }}"
                                                alt="{{ $featuredTestimonial['name'] }}" loading="lazy"
                                                decoding="async" class="h-12 w-12 shrink-0 rounded-full object-cover">
                                        @else
                                            <span
                                                class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-white text-primary"
                                                aria-hidden="true">
                                                <i data-lucide="user-round" class="h-5 w-5"></i>
                                            </span>
                                        @endif

                                        <div class="min-w-0">
                                            <p class="font-semibold text-text-dark">
                                                {{ $featuredTestimonial['name'] }}
                                            </p>

                                            <p class="mt-1 text-sm leading-5 text-muted">
                                                {{ $featuredTestimonial['role'] ?? '' }}

                                                @if (!empty($featuredTestimonial['company']))
                                                    <span aria-hidden="true"> · </span>
                                                    {{ $featuredTestimonial['company'] }}
                                                @endif
                                            </p>
                                        </div>

                                    </div>


                                    @if (!empty($featuredTestimonial['project']))
                                        <span
                                            class="rounded-full border border-primary/15 bg-white/70 px-3 py-1.5 text-xs font-medium text-primary">
                                            {{ $featuredTestimonial['project'] }}
                                        </span>
                                    @endif

                                </div>


                                @if (!empty($featuredTestimonial['source_url']))
                                    <div>
                                        <a href="{{ esc_url($featuredTestimonial['source_url']) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-flex items-center gap-2 text-xs font-semibold text-primary transition-colors hover:text-primary-dark">
                                            <span>View original feedback</span>

                                            <i data-lucide="arrow-up-right" class="h-3.5 w-3.5"
                                                aria-hidden="true"></i>
                                        </a>
                                    </div>
                                @endif

                            </article>

                        @endif


                        {{-- Supporting testimonials --}}
                        @if (count($otherTestimonials) > 0)

                            <div class="grid content-start gap-5">

                                @foreach ($otherTestimonials as $testimonial)
                                    <article
                                        class="flex flex-col justify-between gap-7 rounded-3xl border border-white/15 bg-white/[0.06] p-6 transition-colors duration-300 hover:border-white/25 hover:bg-white/[0.09] sm:p-7">

                                        <div>
                                            <span
                                                class="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-brand-mint"
                                                aria-hidden="true">
                                                <i data-lucide="quote" class="h-4 w-4"></i>
                                            </span>

                                            <blockquote class="mt-5">
                                                <p class="text-base leading-7 text-white/90 sm:text-lg">
                                                    “{{ $testimonial['quote'] }}”
                                                </p>
                                            </blockquote>
                                        </div>


                                        {{-- Attribution --}}
                                        <div
                                            class="flex items-center justify-between gap-4 border-t border-white/10 pt-5">

                                            <div class="min-w-0">
                                                <p class="text-sm font-semibold text-white">
                                                    {{ $testimonial['name'] }}
                                                </p>

                                                <p class="mt-1 text-xs leading-5 text-white/60">
                                                    {{ $testimonial['role'] ?? '' }}

                                                    @if (!empty($testimonial['company']))
                                                        <span aria-hidden="true"> · </span>
                                                        {{ $testimonial['company'] }}
                                                    @endif
                                                </p>
                                            </div>

                                            @if (!empty($testimonial['project']))
                                                <span
                                                    class="max-w-[45%] shrink-0 rounded-full border border-white/15 px-3 py-1.5 text-[10px] font-medium text-brand-mint">
                                                    {{ $testimonial['project'] }}
                                                </span>
                                            @endif

                                        </div>


                                        @if (!empty($testimonial['source_url']))
                                            <a href="{{ esc_url($testimonial['source_url']) }}" target="_blank"
                                                rel="noopener noreferrer"
                                                class="inline-flex items-center gap-2 text-xs font-medium text-brand-mint transition-colors hover:text-white">
                                                <span>View original feedback</span>

                                                <i data-lucide="arrow-up-right" class="h-3.5 w-3.5"
                                                    aria-hidden="true"></i>
                                            </a>
                                        @endif

                                    </article>
                                @endforeach

                            </div>

                        @endif

                    </div>

                </div>

            @endif

            {{-- Trust statement --}}
            <div class="mt-12 border-t border-white/15 pt-6 sm:mt-16">
                <p class="text-sm leading-6 text-white/50">
                    Every partnership begins with understanding the people,
                    goals, and challenges behind the project.
                </p>
            </div>

        </div>
    </section>

@endif
