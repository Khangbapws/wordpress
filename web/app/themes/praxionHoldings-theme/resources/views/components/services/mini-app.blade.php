@php
    $userMiniAppVideoUrl = 'https://your-domain.com/videos/user-mini-app.mp4';
    $managerMiniAppVideoUrl = 'https://your-domain.com/videos/manager-mini-app.mp4';
@endphp

<section aria-labelledby="miniapp-title" class="overflow-hidden bg-surface py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-12 lg:gap-x-28 lg:gap-y-10">

            <div class="max-w-2xl self-center sm:pt-8">
                <p class="text-xs font-semibold tracking-[0.22em] text-primary uppercase sm:text-sm">
                    Strategic Differentiator
                </p>

                <h2 id="miniapp-title" class="mt-5 text-4xl leading-[1.08] font-bold text-text-dark sm:text-5xl lg:text-[3.25rem]">
                    Tap into an ecosystem of over 80 million active users.
                </h2>

                <p class="mt-6 text-lg leading-8 text-muted sm:text-xl">
                    Instead of forcing customers to download a standalone app, we engineer lightweight, high-conversion
                    Zalo Mini Apps that live directly where your users already spend their time.
                </p>
            </div>

            {{-- Replace the two video URLs above with the actual Mini App video URLs. --}}
            <div id="user-mini-app-video" data-mini-app-video aria-hidden="true"
                class="scroll-mt-24 mx-auto aspect-[9/19] w-full max-w-72 overflow-hidden rounded-[2.5rem] border-[6px] border-gray-200/80 bg-white shadow-sm sm:justify-self-end">
                <video class="h-full w-full object-cover" autoplay muted loop playsinline preload="metadata">
                    <source src="{{ $userMiniAppVideoUrl }}" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>

            <div id="manager-mini-app-video" data-mini-app-video aria-hidden="true"
                class="scroll-mt-24 mx-auto aspect-[9/19] w-full max-w-72 overflow-hidden rounded-[2.5rem] border-[6px] border-gray-200/80 bg-white shadow-sm sm:justify-self-start">
                <video class="h-full w-full object-cover" autoplay muted loop playsinline preload="metadata">
                    <source src="{{ $managerMiniAppVideoUrl }}" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>

            <div aria-hidden="true" class="max-w-2xl self-center sm:pt-1">
                <p class="text-xs font-semibold tracking-[0.22em] text-primary uppercase sm:text-sm">
                    Strategic Differentiator
                </p>

                <h2 class="mt-5 text-4xl leading-[1.08] font-bold text-text-dark sm:text-5xl lg:text-[3.25rem]">
                    Tap into an ecosystem of over 80 million active users.
                </h2>

                <p class="mt-6 text-lg leading-8 text-muted sm:text-xl">
                    Instead of forcing customers to download a standalone app, we engineer lightweight, high-conversion
                    Zalo Mini Apps that live directly where your users already spend their time.
                </p>
            </div>

        </div>
    </div>
</section>
