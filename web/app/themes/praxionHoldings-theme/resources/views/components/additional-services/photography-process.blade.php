@php
    $photographySteps = [
        [
            'number' => '01',
            'icon' => 'clipboard-list',
            'title' => 'Share Your Brief',
            'description' =>
                'Tell us about your business, the purpose of the shoot, your preferred location, and how you intend to use the images.',
        ],
        [
            'number' => '02',
            'icon' => 'calendar-check',
            'title' => 'Plan the Shoot',
            'description' =>
                'We align on the package, shot list, schedule, location, creative direction, and final deliverables before confirming the booking.',
        ],
        [
            'number' => '03',
            'icon' => 'camera',
            'title' => 'Capture Your Brand',
            'description' =>
                'Our photography team works through the agreed shot list to capture your space, products, team, or customer experience.',
        ],
        [
            'number' => '04',
            'icon' => 'image',
            'title' => 'Edit & Deliver',
            'description' =>
                'We select and edit the agreed images, then deliver the final files according to the timeline and formats confirmed in your quotation.',
        ],
    ];
@endphp

<section id="photography-process" aria-labelledby="photography-process-title"
    class="scroll-mt-24 bg-white py-20 sm:py-24 lg:py-28">
    <div class="container-page">

        {{-- Heading --}}
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                Our Process
            </p>

            <h2 id="photography-process-title"
                class="mt-4 text-3xl font-semibold tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                From your brief to the final images.
            </h2>

            <p class="mt-4 text-base leading-7 text-muted sm:text-lg">
                A clear process keeps your shoot focused, your expectations
                aligned, and your visual assets ready for their intended use.
            </p>
        </div>


        {{-- Steps --}}
        <div class="mt-12 grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4 xl:gap-6">
            @foreach ($photographySteps as $step)
                <article
                    class="rounded-3xl border border-gray-200 bg-white p-6 transition-colors duration-300 hover:border-primary/30 sm:p-7">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold tracking-[0.12em] text-primary">
                            {{ $step['number'] }}
                        </span>

                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-brand-light text-primary"
                            aria-hidden="true">
                            <i data-lucide="{{ $step['icon'] }}" class="h-5 w-5"></i>
                        </span>
                    </div>

                    <h3 class="mt-7 text-lg font-semibold text-text-dark">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-muted">
                        {{ $step['description'] }}
                    </p>
                </article>
            @endforeach
        </div>


        {{-- Brief preparation --}}
        <div
            class="mt-10 grid grid-cols-1 gap-6 rounded-3xl bg-brand-light p-6 sm:p-8 lg:grid-cols-[minmax(0,0.8fr)_minmax(0,1.2fr)] lg:items-center lg:gap-12 lg:p-10">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">
                    Before We Start
                </p>

                <h3 class="mt-4 text-2xl font-semibold tracking-tight text-text-dark sm:text-3xl">
                    A little preparation goes a long way.
                </h3>

                <p class="mt-4 text-sm leading-6 text-muted sm:text-base sm:leading-7">
                    You do not need a complete creative brief. A few details
                    will help us recommend a suitable approach and quotation.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @foreach ([
        [
            'icon' => 'target',
            'title' => 'Your goals',
            'description' => 'What you want the images to communicate and where you will use them.',
        ],
        [
            'icon' => 'map-pin',
            'title' => 'Your location',
            'description' => 'Your store address and preferred shooting date.',
        ],
        [
            'icon' => 'images',
            'title' => 'Visual references',
            'description' => 'Examples of styles, compositions, or brands you like.',
        ],
        [
            'icon' => 'list-checks',
            'title' => 'Required assets',
            'description' => 'The people, products, spaces, and details you want photographed.',
        ],
    ] as $item)
                    <div class="rounded-2xl border border-gray-200/80 bg-white p-5">
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand-light text-primary"
                            aria-hidden="true">
                            <i data-lucide="{{ $item['icon'] }}" class="h-4 w-4"></i>
                        </span>

                        <h4 class="mt-3 text-sm font-semibold text-text-dark">
                            {{ $item['title'] }}
                        </h4>

                        <p class="mt-2 text-sm leading-6 text-muted">
                            {{ $item['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>


        {{-- CTA --}}
        <div class="mt-10 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h3 class="text-xl font-semibold text-text-dark">
                    Have a shoot in mind?
                </h3>

                <p class="mt-2 text-sm leading-6 text-muted">
                    Tell us about your business and the visual content you need.
                </p>
            </div>

            <x-ui.button :href="home_url('/contact') . '?service=brand-photography'" variant="primary" class="shrink-0 justify-center gap-2">
                <span>Request a Photography Quote</span>

                <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
            </x-ui.button>
        </div>

    </div>
</section>
