@php
    $commitments = [
        [
            'icon' => 'hammer',
            'title' => 'Start practical',
            'copy' =>
                'We avoid complexity that does not create business value. A prototype is not a finished product, and architecture should scale with actual need.',
        ],
        [
            'icon' => 'shield-check',
            'title' => 'Engineer for production',
            'copy' =>
                'Deployment, monitoring, and iteration are part of real software engineering. Customers should never inherit an unmaintainable codebase.',
        ],
        [
            'icon' => 'bot',
            'title' => 'Intelligent AI integration',
            'copy' =>
                'We use AI as a powerful engineering accelerator, while ensuring architecture, quality, and business judgment remain firmly under human ownership.',
        ],
    ];

    $teamMembers = [
        [
            'position' => 'Mr. Nguyen Quang Tung - CTO',
            'linkedin' => 'https://www.linkedin.com/in/tung-nguyen-quang-723450191/',
            'quote' =>
                '“We don’t just build what you ask for. We understand why it needs to exist, then build it to last.”',
            'image' => 'team/tung.png',
        ],
        [
            'position' => 'Mr. Ngo Khang - CEO',
            'linkedin' => 'https://www.linkedin.com/in/khang-ngo-118a84283/',
            'quote' =>
                '“The best technology does not make a business more complicated. It makes the right things simpler, clearer, and easier to scale.”',
            'image' => 'team/khang.png',
        ],
        [
            'position' => 'Mr. Mihai - CDO',
            'linkedin' => 'https://www.linkedin.com/in/mihai-soroiu-180727434/',
            'quote' =>
                '“Great software is where engineering, design, and business thinking meet — every interaction should have a purpose.”',
            'image' => 'team/mihai.png',
        ],
    ];
@endphp

<section aria-labelledby="approach-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">

        <div x-data="{ showingTeam: true }" class="[perspective:1600px]">

            <div x-bind:class="showingTeam
                ?
                '[transform:rotateY(180deg)]' :
                '[transform:rotateY(0deg)]'"
                class="relative grid transition-transform duration-1000 ease-in-out [transform-style:preserve-3d] motion-reduce:transition-none">

                {{-- =========================================================
                     FRONT FACE: OUR APPROACH
                ========================================================== --}}

                <div id="approach-panel" role="region" aria-labelledby="approach-title" x-bind:aria-hidden="showingTeam"
                    x-bind:inert="showingTeam"
                    class="relative isolate col-start-1 row-start-1 overflow-hidden rounded-3xl bg-text-dark px-6 py-14 text-white [backface-visibility:hidden] sm:rounded-4xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">

                    {{-- Decorative glow --}}
                    <div class="absolute -top-32 -right-24 -z-10 h-80 w-80 rounded-full bg-primary/40 blur-3xl"
                        aria-hidden="true"></div>

                    {{-- Heading --}}
                    <div class="max-w-3xl">

                        <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">
                            Our approach
                        </p>

                        <h2 id="approach-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">
                            How we think about software engineering.
                        </h2>

                        <p class="mt-5 text-lg leading-8 text-white/70">
                            We engineer complete software systems, not isolated pieces of code.
                            These principles govern every project we touch.
                        </p>

                    </div>

                    {{-- Commitments --}}
                    <div class="mt-12 grid gap-5 lg:grid-cols-3">

                        @foreach ($commitments as $commitment)
                            <article
                                class="rounded-2xl border border-white/15 bg-white/5 p-6 transition-colors duration-300 hover:bg-white/10">

                                <i data-lucide="{{ $commitment['icon'] }}" class="h-6 w-6 text-brand-mint"
                                    aria-hidden="true"></i>

                                <h3 class="mt-6 text-xl font-semibold">
                                    {{ $commitment['title'] }}
                                </h3>

                                <p class="mt-3 leading-7 text-white/65">
                                    {{ $commitment['copy'] }}
                                </p>

                            </article>
                        @endforeach

                    </div>

                    {{-- Actions --}}
                    <div class="mt-10 flex flex-col gap-3 sm:flex-row sm:flex-wrap">

                        <x-ui.button :href="home_url('/services')" variant="light">
                            Explore What We Build
                        </x-ui.button>

                        <a href="{{ home_url('/contact') }}"
                            class="inline-flex min-h-12 items-center justify-center rounded-full border border-white/30 px-6 py-3 font-semibold text-white no-underline transition-colors duration-300 hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white">
                            Talk About Your Project
                        </a>

                        <button type="button" x-ref="teamButton" aria-controls="team-panel"
                            x-bind:aria-expanded="showingTeam"
                            x-on:click="
                                showingTeam = true;
                                $nextTick(() => $refs.approachButton.focus({ preventScroll: true }))
                            "
                            class="inline-flex min-h-12 cursor-pointer items-center justify-center rounded-full border border-white/30 px-6 py-3 font-semibold text-white transition-colors duration-300 hover:bg-white/10 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white motion-reduce:transition-none">
                            Our team
                        </button>

                    </div>

                </div>


                {{-- =========================================================
                     BACK FACE: OUR TEAM
                ========================================================== --}}

                <div id="team-panel" role="region" aria-labelledby="team-title" x-bind:aria-hidden="!showingTeam"
                    x-bind:inert="!showingTeam"
                    class="relative isolate col-start-1 row-start-1 overflow-hidden rounded-3xl bg-text-dark px-6 py-14 text-white [backface-visibility:hidden] [transform:rotateY(180deg)] sm:rounded-4xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">

                    {{-- Decorative glow --}}
                    <div class="absolute -bottom-32 -left-24 -z-10 h-80 w-80 rounded-full bg-primary/40 blur-3xl"
                        aria-hidden="true"></div>

                    {{-- Heading --}}
                    <div class="max-w-3xl">

                        <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">
                            Our team
                        </p>

                        <h2 id="team-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">
                            The engineers behind the products.
                        </h2>

                        <p class="mt-5 text-lg leading-8 text-white/70">
                            A focused group spanning product management,
                            UX/UI, frontend, backend, and infrastructure.
                        </p>

                    </div>

                    {{-- Team members --}}
                    <div class="mt-12 grid gap-5 lg:grid-cols-3">

                        @foreach ($teamMembers as $member)
                            <article
                                class="group flex cursor-pointer gap-5 rounded-2xl border border-white/15 bg-white/5 p-5 transition-all duration-300 ease-out hover:-translate-y-1 hover:bg-white/10 hover:shadow-xl lg:block lg:p-0 motion-reduce:transition-none motion-reduce:hover:translate-y-0">

                                {{-- Image --}}
                                <div
                                    class="group/avatar relative h-24 w-24 shrink-0 overflow-hidden rounded-xl border border-white/10 bg-gradient-to-b from-emerald-950/80 via-[#243122] to-[#1a2419] shadow-[inset_0_1px_0_0_rgba(255,255,255,0.12)] lg:h-52 lg:w-full lg:rounded-t-2xl lg:rounded-b-none lg:border-x-0 lg:border-t-0">

                                    <!-- 1. Họa tiết lưới chấm mờ (Architectural Dot Grid) -->
                                    <div
                                        class="pointer-events-none absolute inset-0 opacity-35 [background-image:radial-gradient(rgba(255,255,255,0.18)_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_75%_80%_at_50%_40%,#000_40%,transparent_100%)]">
                                    </div>

                                    <!-- 2. Đèn Spotlight chiếu từ đỉnh khung -->
                                    <div
                                        class="pointer-events-none absolute -top-12 left-1/2 h-40 w-72 -translate-x-1/2 rounded-full bg-lime-300/15 blur-2xl transition-all duration-500 group-hover/avatar:bg-lime-300/25 group-hover/avatar:scale-110">
                                    </div>

                                    <!-- 3. Vầng hào quang định vị sau vai nhân vật -->
                                    <div
                                        class="pointer-events-none absolute bottom-0 left-1/2 h-32 w-32 -translate-x-1/2 rounded-full bg-emerald-400/10 blur-xl transition-opacity duration-500 group-hover/avatar:opacity-100 lg:h-44 lg:w-44">
                                    </div>

                                    <!-- 4. Ảnh chân dung: căn đáy (object-bottom), chừa khoảng thở trên đỉnh đầu & đổ bóng khối -->
                                    <img src="{{ Vite::asset('resources/images/' . $member['image']) }}"
                                        alt="Team member: {{ $member['position'] }}" loading="lazy" decoding="async"
                                        class="relative z-10 h-full w-full object-contain object-bottom px-2 pt-2 drop-shadow-[0_12px_20px_rgba(0,0,0,0.55)] transition-transform duration-500 ease-out group-hover/avatar:scale-[1.04] lg:px-6 lg:pt-4 motion-reduce:transition-none">

                                    <!-- 5. Lớp chuyển sắc đáy giúp phần thân dưới hòa mượt vào nền card -->
                                    <div
                                        class="pointer-events-none absolute inset-x-0 bottom-0 z-20 h-8 bg-gradient-to-t from-[#1f291e] via-[#1f291e]/40 to-transparent">
                                    </div>
                                </div>

                                {{-- Content --}}
                                <div class="min-w-0 lg:p-6">

                                    <h3
                                        class="flex items-center gap-2 text-lg font-semibold transition-colors duration-300 group-hover:text-brand-mint">
                                        <span>{{ $member['position'] }}</span>

                                        @if (!empty($member['linkedin']))
                                            <a href="{{ $member['linkedin'] }}" target="_blank"
                                                rel="noopener noreferrer"
                                                class="inline-flex items-center text-[#0A66C2] transition-all duration-300 hover:text-brand-mint hover:scale-110"
                                                aria-label="View {{ $member['position'] }} LinkedIn profile"
                                                title="LinkedIn Profile">
                                                <img src="{{ Vite::asset('resources/images/contact/linkedin.svg') }}"
                                                    alt="" aria-hidden="true" class="w-4.5 h-4.5">
                                            </a>
                                        @endif
                                    </h3>

                                    <blockquote class="mt-3 leading-7 text-white/65">
                                        {{ $member['quote'] }}
                                    </blockquote>

                                </div>

                            </article>
                        @endforeach

                    </div>

                    {{-- Back button --}}
                    <div class="mt-10">

                        <button type="button" x-ref="approachButton" aria-controls="approach-panel"
                            x-bind:tabindex="showingTeam ? 0 : -1" x-bind:aria-expanded="showingTeam"
                            x-on:click="
                                showingTeam = false;
                                $nextTick(() => $refs.teamButton.focus({ preventScroll: true }))
                            "
                            class="inline-flex min-h-12 cursor-pointer items-center justify-center rounded-full bg-white px-6 py-3 text-center text-[0.95rem] font-semibold text-black transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary-dark hover:text-white hover:shadow-lg focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                            Our approach
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
