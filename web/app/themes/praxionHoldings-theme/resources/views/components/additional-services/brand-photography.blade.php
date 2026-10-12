@php
    $photographyPackages = [
        [
            'slug' => 'store-essentials',
            'name' => 'Store Essentials',
            'price' => '3.500.000',
            'duration' => 'Up to 2 hours',
            'description' => 'A focused photoshoot to establish a professional visual foundation for your business.',
            'deliverables' => [
                'One shooting location',
                'Up to 15 professionally edited images',
                'Store interiors, products, or service details',
            ],
            'featured' => false,
        ],
        [
            'slug' => 'brand-story',
            'name' => 'Brand Story',
            'price' => '5.900.000',
            'duration' => 'Up to 4 hours',
            'description' => 'A more complete visual story of your space, team, products, and customer experience.',
            'deliverables' => [
                'One shooting location',
                '25–30 professionally edited images',
                'Space, products, team, and brand details',
            ],
            'featured' => true,
        ],
        [
            'slug' => 'content-day',
            'name' => 'Content Day',
            'price' => 'From 8.900.000',
            'duration' => 'Extended shoot',
            'description' =>
                'A broader content session for businesses that need a more versatile collection of brand assets.',
            'deliverables' => [
                'A tailored shot list and creative direction',
                'Multiple content categories',
                'Deliverables confirmed in your project brief',
            ],
            'featured' => false,
        ],
    ];

    $photographyServices = [
        [
            'icon' => 'store',
            'title' => 'Store & Interior Photography',
            'description' =>
                'Showcase your space, atmosphere, facilities, and the details that make your business distinctive.',
        ],
        [
            'icon' => 'package',
            'title' => 'Product & Service Photography',
            'description' =>
                'Present your products, treatments, menu items, and services with consistent visual quality.',
        ],
        [
            'icon' => 'users',
            'title' => 'Team & Brand Photography',
            'description' => 'Introduce the people behind your business and create more authentic brand communication.',
        ],
    ];
@endphp

<section id="brand-creative" aria-labelledby="brand-photography-title"
    class="scroll-mt-24 bg-white py-20 sm:py-24 lg:py-28">
    <div class="container-page">

        {{-- Section introduction --}}
        <div class="grid grid-cols-1 items-end gap-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,0.7fr)] lg:gap-12">
            <div class="max-w-2xl">
                <x-ui.badge color="green">
                    Brand &amp; Creative
                </x-ui.badge>

                <h2 id="brand-photography-title"
                    class="mt-5 text-3xl font-semibold leading-[1.12] tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                    Show your business at its best.
                </h2>
            </div>

            <div>
                <p class="text-base leading-7 text-muted sm:text-lg sm:leading-8">
                    Professional brand photography helps customers understand
                    your business before they visit. We create visual content
                    for storefronts, products, teams, websites, and digital
                    marketing campaigns.
                </p>

                <div class="mt-5 flex flex-wrap gap-2">
                    <x-ui.badge color="gray">
                        Hanoi
                    </x-ui.badge>

                    <x-ui.badge color="gray">
                        Nha Trang
                    </x-ui.badge>

                    <x-ui.badge color="gray">
                        Graphic Design Available
                    </x-ui.badge>
                </div>
            </div>
        </div>


        {{-- Photography services --}}
        <div class="mt-12 grid grid-cols-1 gap-5 md:grid-cols-3 lg:gap-6">
            @foreach ($photographyServices as $service)
                <article
                    class="rounded-2xl border border-gray-200 bg-white p-6 transition-colors duration-300 hover:border-primary/30 sm:p-7">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary"
                        aria-hidden="true">
                        <i data-lucide="{{ $service['icon'] }}" class="h-5 w-5"></i>
                    </span>

                    <h3 class="mt-5 text-lg font-semibold text-text-dark">
                        {{ $service['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-muted">
                        {{ $service['description'] }}
                    </p>
                </article>
            @endforeach
        </div>


        {{-- Locations --}}
        <div
            class="mt-10 flex flex-col gap-4 rounded-2xl border border-gray-200 bg-brand-light p-6 sm:flex-row sm:items-center sm:justify-between sm:p-8">
            <div class="flex items-start gap-4">
                <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-primary"
                    aria-hidden="true">
                    <i data-lucide="map-pin" class="h-5 w-5"></i>
                </span>

                <div>
                    <h3 class="text-base font-semibold text-text-dark sm:text-lg">
                        Local photography, built around your business.
                    </h3>

                    <p class="mt-2 max-w-2xl text-sm leading-6 text-muted">
                        Photography bookings are available in Hanoi and
                        Nha Trang, subject to scheduling and project scope.
                        Travel outside the agreed service area may incur
                        additional charges.
                    </p>
                </div>
            </div>

            <a href="{{ home_url('/contact') }}?service=brand-photography"
                class="inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-primary transition-colors hover:text-primary-dark">
                <span>Check availability</span>

                <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
            </a>
        </div>


        {{-- Pricing --}}
        <div id="photography-packages" class="mt-20 scroll-mt-24 sm:mt-24">
            <div class="mx-auto max-w-2xl text-center">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                    Photography Packages
                </p>

                <h3 class="mt-4 text-3xl font-semibold tracking-tight text-text-dark sm:text-4xl">
                    A clear starting point for your brand.
                </h3>

                <p class="mt-4 text-base leading-7 text-muted">
                    Choose a package that fits your content needs.
                    We will confirm the final scope and deliverables
                    before the shoot.
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-5 md:grid-cols-3 lg:gap-6">
                @foreach ($photographyPackages as $package)
                    <article @class([
                        'flex h-full flex-col rounded-3xl border bg-white p-6 sm:p-7',
                        'border-primary shadow-[0_20px_50px_rgba(46,125,50,0.09)]' =>
                            $package['featured'],
                        'border-gray-200' => !$package['featured'],
                    ])>
                        <div class="flex min-h-7 items-center justify-between gap-3">
                            <h4 class="text-lg font-semibold text-text-dark">
                                {{ $package['name'] }}
                            </h4>

                            @if ($package['featured'])
                                <x-ui.badge color="green">
                                    Popular
                                </x-ui.badge>
                            @endif
                        </div>

                        <p class="mt-3 text-sm leading-6 text-muted">
                            {{ $package['description'] }}
                        </p>

                        <div class="mt-6">
                            <p class="text-2xl font-semibold tracking-tight text-text-dark sm:text-3xl">
                                {{ $package['price'] }}
                                <span class="text-sm font-medium text-muted">
                                    VNĐ
                                </span>
                            </p>

                            <p class="mt-2 text-sm font-medium text-primary">
                                {{ $package['duration'] }}
                            </p>
                        </div>

                        <div class="my-6 border-t border-gray-200"></div>

                        <ul class="flex-1 space-y-3">
                            @foreach ($package['deliverables'] as $deliverable)
                                <li class="flex items-start gap-2.5 text-sm leading-6 text-muted">
                                    <i data-lucide="check" class="mt-1 h-4 w-4 shrink-0 text-primary"
                                        aria-hidden="true"></i>

                                    <span>{{ $deliverable }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="mt-8">
                            <x-ui.button :href="home_url('/contact') . '?service=brand-photography&package=' . $package['slug']" :variant="$package['featured'] ? 'primary' : 'secondary'" class="w-full justify-center gap-2">
                                <span>Request This Package</span>

                                <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                            </x-ui.button>
                        </div>
                    </article>
                @endforeach
            </div>

            <p class="mx-auto mt-6 max-w-3xl text-center text-xs leading-6 text-muted">
                Prices are indicative starting packages. Final quotations
                depend on the confirmed brief, location, production
                requirements, and deliverables. Additional services,
                travel, and special production costs are quoted separately.
            </p>
        </div>

    </div>
</section>
