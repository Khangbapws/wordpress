<section id="vibe-coding" aria-labelledby="vibe-coding-title" class="scroll-mt-24 bg-white py-20 sm:py-24 lg:py-28">
    <div class="container-page">

        {{-- Main content --}}
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-[minmax(0,1fr)_minmax(0,0.9fr)] lg:gap-20">

            {{-- Introduction --}}
            <div class="max-w-2xl">
                <x-ui.badge color="green">
                    Technical Guidance
                </x-ui.badge>

                <h2 id="vibe-coding-title"
                    class="mt-5 text-3xl font-semibold leading-[1.12] tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                    Build with AI.
                    <span class="lg:block">Get expertise when you need it.</span>
                </h2>

                <p class="mt-6 text-base leading-7 text-muted sm:text-lg sm:leading-8">
                    You bring the idea. Our senior developers help you turn
                    it into working software through practical, one-to-one
                    guidance — from your first prototype to more complex
                    development challenges.
                </p>

                <p class="mt-4 text-base leading-7 text-muted">
                    Whether you are experimenting with AI coding tools,
                    building an MVP, or trying to resolve a stubborn technical
                    issue, get experienced guidance without committing to a
                    full development project.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                    <x-ui.button href="#vibe-coding-pricing" variant="primary" class="gap-2">
                        <span>Explore Hourly Packages</span>
                        <i data-lucide="arrow-down" class="h-4 w-4" aria-hidden="true"></i>
                    </x-ui.button>

                    <x-ui.button :href="home_url('/contact')" variant="text" class="gap-2">
                        <span>Ask a Question</span>
                        <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                    </x-ui.button>
                </div>

                <p class="mt-4 text-xs leading-5 text-muted">
                    Sessions are focused on guidance and collaboration.
                    Project delivery is scoped separately.
                </p>
            </div>


            {{-- What we can work on --}}
            <div class="rounded-3xl border border-gray-200 bg-brand-light p-6 sm:p-8">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary">
                    What We Can Help With
                </p>

                <h3 class="mt-3 text-xl font-semibold tracking-tight text-text-dark sm:text-2xl">
                    Move past the blocker.
                </h3>

                <p class="mt-3 text-sm leading-6 text-muted">
                    Bring a real task, a technical question, or a feature
                    you are trying to build.
                </p>

                <div class="mt-7 grid grid-cols-1 gap-5 sm:grid-cols-2">

                    @foreach ([
        [
            'icon' => 'messages-square',
            'title' => 'AI Coding Guidance',
            'copy' => 'Improve prompts, workflows, and your use of AI-assisted development tools.',
        ],
        [
            'icon' => 'bug',
            'title' => 'Debugging & Troubleshooting',
            'copy' => 'Investigate errors, understand unexpected behavior, and identify practical fixes.',
        ],
        [
            'icon' => 'git-branch',
            'title' => 'Code & Architecture Review',
            'copy' => 'Review generated code, structure, maintainability, and suitable next steps.',
        ],
        [
            'icon' => 'rocket',
            'title' => 'Deployment & Next Steps',
            'copy' => 'Get guidance on configuration, deployment, and preparing your project for further development.',
        ],
    ] as $item)
                        <div class="rounded-2xl border border-gray-200/80 bg-white p-5">
                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-light text-primary"
                                aria-hidden="true">
                                <i data-lucide="{{ $item['icon'] }}" class="h-5 w-5"></i>
                            </span>

                            <h4 class="mt-4 text-base font-semibold text-text-dark">
                                {{ $item['title'] }}
                            </h4>

                            <p class="mt-2 text-sm leading-6 text-muted">
                                {{ $item['copy'] }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


        {{-- Who this is for --}}
        <div class="mt-16 border-t border-gray-200 pt-10 sm:mt-20 sm:pt-12">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3 md:gap-8">

                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-primary">
                        01 / Founders
                    </p>
                    <h3 class="mt-3 text-lg font-semibold text-text-dark">
                        Building your own idea
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Get technical guidance while validating an idea,
                        developing a prototype, or building an MVP.
                    </p>
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-primary">
                        02 / Professionals
                    </p>
                    <h3 class="mt-3 text-lg font-semibold text-text-dark">
                        Learning by building
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Understand how AI-assisted development works
                        while making progress on a practical project.
                    </p>
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-primary">
                        03 / Developers
                    </p>
                    <h3 class="mt-3 text-lg font-semibold text-text-dark">
                        Solving difficult problems
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Get another experienced perspective on debugging,
                        code quality, and technical decisions.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
