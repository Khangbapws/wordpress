@php
    $commitments = [
        ['network', 'Connected by design', 'Customer booking, owner oversight, staff work, check-in, and branch context belong to one ecosystem.'],
        ['scan-search', 'Clarity before noise', 'Operational information should be organized so schedules, stock, financials, and trends remain easy to understand.'],
        ['heart-handshake', 'Built around service work', 'Digital portfolios and service-cycle reminders reflect the ongoing customer relationships common in hair salons and skin-care spas.'],
    ];

    $teamMembers = [
        ['Position placeholder', '“Team member quote placeholder.”'],
        ['Position placeholder', '“Team member quote placeholder.”'],
        ['Position placeholder', '“Team member quote placeholder.”'],
    ];
@endphp

<section aria-labelledby="approach-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div x-data="{ showingTeam: true }" class="[perspective:1600px]">
            <div x-bind:class="showingTeam ? '[transform:rotateY(180deg)]' : '[transform:rotateY(0deg)]'"
                class="relative grid transition-transform duration-1000 ease-in-out [transform-style:preserve-3d] motion-reduce:transition-none">
                <div id="approach-panel" role="region" aria-labelledby="approach-title"
                    x-bind:aria-hidden="showingTeam" x-bind:inert="showingTeam"
                    class="relative isolate col-start-1 row-start-1 overflow-hidden rounded-3xl bg-text-dark px-6 py-14 text-white [backface-visibility:hidden] sm:rounded-4xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">
                    <div class="absolute -top-32 -right-24 -z-10 h-80 w-80 rounded-full bg-primary/40 blur-3xl"
                        aria-hidden="true"></div>
                    <div class="max-w-3xl">
                        <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">Our approach</p>
                        <h2 id="approach-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">Keep the ecosystem connected, clear, and relevant to the working day.</h2>
                        <p class="mt-5 text-lg leading-8 text-white/70">These commitments are direct expressions of the PRX values and the product capabilities.</p>
                    </div>

                    <div class="mt-12 grid gap-5 lg:grid-cols-3">
                        @foreach ($commitments as [$icon, $title, $copy])
                            <article class="rounded-2xl border border-white/15 bg-white/5 p-6">
                                <i data-lucide="{{ $icon }}" class="h-6 w-6 text-brand-mint" aria-hidden="true"></i>
                                <h3 class="mt-6 text-xl font-semibold">{{ $title }}</h3>
                                <p class="mt-3 leading-7 text-white/65">{{ $copy }}</p>
                            </article>
                        @endforeach
                    </div>

                    <div class="mt-10 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                        <x-ui.button :href="home_url('/solution')" variant="light">Explore the solution</x-ui.button>
                        <a href="{{ home_url('/contact') }}" class="inline-flex min-h-12 items-center justify-center rounded-full border border-white/30 px-6 py-3 font-semibold text-white hover:bg-white/10 focus-visible:outline-white">Contact PRX Holdings</a>
                        <button type="button" x-ref="teamButton" aria-controls="team-panel"
                            x-bind:aria-expanded="showingTeam"
                            x-on:click="showingTeam = true; $nextTick(() => $refs.approachButton.focus({ preventScroll: true }))"
                            class="inline-flex min-h-12 cursor-pointer items-center justify-center rounded-full border border-white/30 px-6 py-3 font-semibold text-white transition-colors duration-300 hover:bg-white/10 focus-visible:outline-white motion-reduce:transition-none">
                            Our team
                        </button>
                    </div>
                </div>

                <div id="team-panel" role="region" aria-labelledby="team-title" aria-hidden="true" inert
                    x-bind:aria-hidden="!showingTeam" x-bind:inert="!showingTeam"
                    class="relative isolate col-start-1 row-start-1 overflow-hidden rounded-3xl bg-text-dark px-6 py-14 text-white [backface-visibility:hidden] [transform:rotateY(180deg)] sm:rounded-4xl sm:px-10 sm:py-16 lg:px-16 lg:py-20">
                    <div class="absolute -bottom-32 -left-24 -z-10 h-80 w-80 rounded-full bg-primary/40 blur-3xl"
                        aria-hidden="true"></div>
                    <div class="max-w-3xl">
                        <p class="text-sm font-semibold tracking-[0.18em] text-brand-mint uppercase">Our team</p>
                        <h2 id="team-title" class="mt-4 text-3xl leading-tight font-bold sm:text-4xl lg:text-5xl">Meet the team.</h2>
                        <p class="mt-5 text-lg leading-8 text-white/70">Team member details will be added here.</p>
                    </div>

                    <div class="mt-12 grid gap-5 lg:grid-cols-3">
                        @foreach ($teamMembers as [$position, $quote])
                            <article class="flex gap-5 rounded-2xl border border-white/15 bg-white/5 p-5 lg:block lg:p-0">
                                <div class="h-24 w-24 shrink-0 rounded-xl bg-white/10 lg:h-40 lg:w-full lg:rounded-b-none lg:rounded-t-2xl"
                                    aria-hidden="true"></div>
                                <div class="min-w-0 lg:p-6">
                                    <h3 class="text-lg font-semibold">{{ $position }}</h3>
                                    <blockquote class="mt-3 leading-7 text-white/65">{{ $quote }}</blockquote>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div class="mt-10">
                        <button type="button" x-ref="approachButton" aria-controls="approach-panel" tabindex="-1"
                            x-bind:tabindex="showingTeam ? 0 : -1" x-bind:aria-expanded="!showingTeam"
                            x-on:click="showingTeam = false; $nextTick(() => $refs.teamButton.focus({ preventScroll: true }))"
                            class="inline-flex min-h-12 cursor-pointer items-center justify-center rounded-full bg-white px-6 py-3 text-center text-[0.95rem] font-semibold text-black transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary-dark hover:text-white hover:shadow-lg focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white motion-reduce:transition-none motion-reduce:hover:translate-y-0">
                            our approach
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
