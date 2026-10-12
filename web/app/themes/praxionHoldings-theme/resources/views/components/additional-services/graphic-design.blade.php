@php
    $designPackages = [
        [
            'name' => 'Social Media Creative Pack',
            'price' => 'From 1.500.000 VNĐ',
            'description' => 'A small, cohesive set of original visuals for your next social media campaign.',
            'deliverables' => [
                '3 original visual designs',
                'One agreed visual direction',
                'Digital-ready files in agreed formats',
            ],
        ],
        [
            'name' => 'Brand Content Kit',
            'price' => 'From 2.500.000 VNĐ',
            'description' => 'A coordinated visual set combining your photography and brand communication.',
            'deliverables' => [
                'A selection of brand content layouts',
                'Visual consistency across agreed formats',
                'Design based on your existing brand assets',
            ],
        ],
        [
            'name' => 'Custom Graphic Design',
            'price' => 'Custom quote',
            'description' => 'Design support for materials that require a more specific brief or production scope.',
            'deliverables' => [
                'Menus and service price lists',
                'Campaign and promotional graphics',
                'Print or digital assets scoped to your needs',
            ],
        ],
    ];
@endphp

<section id="graphic-design" aria-labelledby="graphic-design-title" class="scroll-mt-24 bg-brand-light py-20 sm:py-24">
    <div class="container-page">

        {{-- Introduction --}}
        <div class="grid grid-cols-1 items-end gap-6 lg:grid-cols-[minmax(0,1fr)_minmax(0,0.8fr)] lg:gap-12">
            <div class="max-w-2xl">
                <x-ui.badge color="green">
                    Creative Add-ons
                </x-ui.badge>

                <h2 id="graphic-design-title"
                    class="mt-5 text-3xl font-semibold leading-[1.12] tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                    Make every brand touchpoint feel consistent.
                </h2>
            </div>

            <p class="text-base leading-7 text-muted sm:text-lg sm:leading-8">
                Complement your photography with graphic design that helps
                your business communicate clearly across social media,
                websites, menus, service lists, and promotional materials.
            </p>
        </div>


        {{-- Design services --}}
        <div class="mt-10 grid grid-cols-1 gap-5 md:grid-cols-3 lg:gap-6">
            @foreach ($designPackages as $package)
                <article class="flex h-full flex-col rounded-3xl border border-gray-200 bg-white p-6 sm:p-7">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary"
                        aria-hidden="true">
                        <i data-lucide="palette" class="h-5 w-5"></i>
                    </span>

                    <h3 class="mt-5 text-lg font-semibold text-text-dark">
                        {{ $package['name'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-muted">
                        {{ $package['description'] }}
                    </p>

                    <p class="mt-5 text-lg font-semibold text-text-dark">
                        {{ $package['price'] }}
                    </p>

                    <div class="my-5 border-t border-gray-200"></div>

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
                        <x-ui.button :href="home_url('/contact') . '?service=graphic-design&package=' . \Illuminate\Support\Str::slug($package['name'])" variant="secondary" class="w-full justify-center gap-2">
                            <span>Request a Quote</span>

                            <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                        </x-ui.button>
                    </div>
                </article>
            @endforeach
        </div>


        {{-- Photography cross-sell --}}
        <div
            class="mt-8 flex flex-col gap-4 rounded-2xl border border-gray-200 bg-white p-6 sm:flex-row sm:items-center sm:justify-between sm:p-8">
            <div class="max-w-2xl">
                <h3 class="text-lg font-semibold text-text-dark">
                    Need photography and design together?
                </h3>

                <p class="mt-2 text-sm leading-6 text-muted">
                    Combine visual content production and graphic design
                    within one brief to keep your campaign consistent.
                </p>
            </div>

            <x-ui.button href="#brand-creative" variant="primary" class="shrink-0 justify-center gap-2">
                <span>Explore Photography</span>

                <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
            </x-ui.button>
        </div>

        <p class="mt-5 text-center text-xs leading-6 text-muted">
            Prices are indicative starting points. Final scope, deliverables,
            revision rounds, and usage formats are confirmed in the quotation.
        </p>

    </div>
</section>
