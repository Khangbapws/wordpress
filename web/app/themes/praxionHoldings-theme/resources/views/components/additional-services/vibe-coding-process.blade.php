<section id="vibe-coding-process" aria-labelledby="vibe-coding-process-title"
    class="scroll-mt-24 bg-white py-20 sm:py-24 lg:py-28">
    <div class="container-page">

        {{-- Heading --}}
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                How It Works
            </p>

            <h2 id="vibe-coding-process-title"
                class="mt-4 text-3xl font-semibold tracking-tight text-text-dark sm:text-4xl">
                From a technical challenge to a clear next step.
            </h2>

            <p class="mt-4 text-base leading-7 text-muted sm:text-lg">
                A straightforward process designed to make every session
                focused, practical, and useful.
            </p>
        </div>


        {{-- Steps --}}
        @php
            $steps = [
                [
                    'number' => '01',
                    'icon' => 'package',
                    'title' => 'Choose Your Package',
                    'description' =>
                        'Select the amount of developer guidance that fits your needs, from one focused hour to ongoing project support.',
                ],
                [
                    'number' => '02',
                    'icon' => 'clipboard-list',
                    'title' => 'Share Your Goal',
                    'description' =>
                        'Tell us what you are building, which tools you use, and what you need help resolving before your session.',
                ],
                [
                    'number' => '03',
                    'icon' => 'code-2',
                    'title' => 'Work With a Senior Developer',
                    'description' =>
                        'Use your session to review code, troubleshoot an issue, improve an AI-assisted workflow, or work through a technical challenge together.',
                ],
                [
                    'number' => '04',
                    'icon' => 'check-circle-2',
                    'title' => 'Leave With Next Steps',
                    'description' =>
                        'Finish with a clearer understanding of the solution, practical recommendations, and a path forward for your project.',
                ],
            ];
        @endphp

        <div class="relative mt-12 grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4 xl:gap-6">

            @foreach ($steps as $step)
                <article
                    class="relative rounded-3xl border border-gray-200 bg-white p-6 transition-colors duration-300 hover:border-primary/30 sm:p-7">

                    {{-- Step number and icon --}}
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold tracking-[0.12em] text-primary">
                            {{ $step['number'] }}
                        </span>

                        <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-brand-light text-primary"
                            aria-hidden="true">
                            <i data-lucide="{{ $step['icon'] }}" class="h-5 w-5"></i>
                        </span>
                    </div>

                    <h3 class="mt-7 text-lg font-semibold leading-snug text-text-dark">
                        {{ $step['title'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-muted">
                        {{ $step['description'] }}
                    </p>
                </article>
            @endforeach

        </div>


        {{-- Closing CTA --}}
        <div
            class="mt-12 rounded-3xl bg-brand-light px-6 py-8 sm:px-8 sm:py-10 lg:flex lg:items-center lg:justify-between lg:gap-10">
            <div class="max-w-2xl">
                <h3 class="text-xl font-semibold tracking-tight text-text-dark sm:text-2xl">
                    Ready to make progress on your project?
                </h3>

                <p class="mt-3 text-sm leading-6 text-muted sm:text-base">
                    Choose a package and tell us where you need expert guidance.
                    We will help clarify the next steps before the session.
                </p>
            </div>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row lg:mt-0 lg:shrink-0">
                <x-ui.button :href="home_url('/contact') . '?service=vibe-coding'" variant="primary" class="justify-center gap-2">
                    <span>Book a Session</span>
                    <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                </x-ui.button>

                <x-ui.button href="#vibe-coding-pricing" variant="secondary" class="justify-center">
                    View Packages
                </x-ui.button>
            </div>
        </div>

    </div>
</section>
