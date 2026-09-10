@php
    $technologies = [
        ['name' => 'TypeScript', 'logo' => 'typescript.svg'],
        ['name' => 'React', 'logo' => 'react.svg'],
        ['name' => 'Next.js', 'logo' => 'nextjs.svg'],
        ['name' => 'Node.js', 'logo' => 'nodejs.svg'],
        ['name' => 'PostgreSQL', 'logo' => 'postgresql.svg'],
        ['name' => 'Redis', 'logo' => 'redis.svg'],
        ['name' => 'Docker', 'logo' => 'docker.svg'],
        ['name' => 'AWS', 'logo' => 'aws.svg'],
        ['name' => 'Vercel', 'logo' => 'vercel.svg'],
        ['name' => 'Stripe', 'logo' => 'stripe.svg'],
    ];
@endphp

<section aria-label="Technology Stack" class="overflow-hidden border-y border-gray-200/80 bg-white py-16">
    <div class="container-page mx-auto">
        <p class="text-center text-sm font-semibold tracking-[0.15em] text-muted uppercase">
            Modern stacks. Production-grade engineering.
        </p>
    </div>

    {{-- Marquee --}}
    <div class="relative mt-10 flex max-w-[100vw] overflow-hidden"
        style="
            mask-image: linear-gradient(
                to right,
                transparent 0,
                black 128px,
                black calc(100% - 128px),
                transparent 100%
            );
            -webkit-mask-image: linear-gradient(
                to right,
                transparent 0,
                black 128px,
                black calc(100% - 128px),
                transparent 100%
            );
        ">

        <div
            class="group flex w-max min-w-full animate-marquee items-center hover:[animation-play-state:paused] motion-reduce:animate-none motion-reduce:flex-wrap motion-reduce:justify-center">

            {{-- First set --}}
            <ul class="flex w-max items-center gap-12 px-6 sm:gap-16 sm:px-8">

                @foreach ($technologies as $tech)
                    <li
                        class="flex items-center gap-3 grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">

                        <img src="{{ Vite::asset('resources/images/infrastructure/' . $tech['logo']) }}"
                            alt="{{ $tech['name'] }} logo" class="h-8 w-auto object-contain" loading="lazy"
                            decoding="async">

                        <span class="whitespace-nowrap text-lg font-semibold text-text-dark">
                            {{ $tech['name'] }}
                        </span>

                    </li>
                @endforeach

            </ul>

            {{-- Duplicate set for infinite loop --}}
            <ul aria-hidden="true" class="flex w-max items-center gap-12 px-6 sm:gap-16 sm:px-8 motion-reduce:hidden">

                @foreach ($technologies as $tech)
                    <li
                        class="flex items-center gap-3 grayscale opacity-60 transition-all duration-300 hover:grayscale-0 hover:opacity-100">

                        <img src="{{ Vite::asset('resources/images/infrastructure/' . $tech['logo']) }}" alt=""
                            class="h-8 w-auto object-contain" loading="lazy" decoding="async">

                        <span class="whitespace-nowrap text-lg font-semibold text-text-dark">
                            {{ $tech['name'] }}
                        </span>

                    </li>
                @endforeach

            </ul>

        </div>

    </div>
</section>

<style>
    @keyframes marquee {
        to {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        animation: marquee 40s linear infinite;
        will-change: transform;
    }
</style>
