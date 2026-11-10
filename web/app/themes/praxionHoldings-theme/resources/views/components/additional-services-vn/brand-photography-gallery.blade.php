@php
    /*
    Add completed, approved portfolio projects here.

    Image paths must match real files in resources/images/.
    Only publish work that PRX has permission to display.
    */

    $projects = [
        /*
        [
            'title' => 'Project title',
            'category' => 'Brand Photography',
            'location' => 'Nha Trang',
            'description' => 'A short description of the actual project.',
            'image' => 'resources/images/portfolio/brand-photography/your-real-image.webp',
            'alt' => 'Accurate description of the actual photograph',
        ],
        */
    ];
@endphp

@if (count($projects) > 0)
    <section id="brand-photography-portfolio" aria-labelledby="brand-photography-portfolio-title"
        class="bg-white py-20 sm:py-24">
        <div class="container-page">

            {{-- Heading --}}
            <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                <div class="max-w-2xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                        Selected Work
                    </p>

                    <h2 id="brand-photography-portfolio-title"
                        class="mt-4 text-3xl font-semibold tracking-tight text-text-dark sm:text-4xl">
                        Brands, spaces, and stories.
                    </h2>

                    <p class="mt-4 text-base leading-7 text-muted sm:text-lg">
                        Explore selected photography projects and see how
                        visual content can help communicate a brand's
                        atmosphere, identity, and experience.
                    </p>
                </div>

                <a href="{{ home_url('/contact') }}?service=brand-photography"
                    class="inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-primary transition-colors hover:text-primary-dark">
                    <span>Discuss Your Project</span>

                    <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                </a>
            </div>


            {{-- Portfolio grid --}}
            <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-7">
                @foreach ($projects as $project)
                    <article class="group min-w-0">
                        <div class="relative overflow-hidden rounded-2xl bg-gray-100">
                            <img src="{{ Vite::asset($project['image']) }}" alt="{{ $project['alt'] }}" loading="lazy"
                                decoding="async"
                                class="aspect-[4/3] w-full object-cover transition-transform duration-700 group-hover:scale-[1.03]" />
                        </div>

                        <div class="mt-5 flex flex-wrap items-center gap-2">
                            <x-ui.badge color="gray">
                                {{ $project['category'] }}
                            </x-ui.badge>

                            <span class="text-xs text-muted">
                                {{ $project['location'] }}
                            </span>
                        </div>

                        <h3 class="mt-3 text-lg font-semibold tracking-tight text-text-dark">
                            {{ $project['title'] }}
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-muted">
                            {{ $project['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>

        </div>
    </section>
@endif
