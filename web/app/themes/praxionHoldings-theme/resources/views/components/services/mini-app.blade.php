@php
    $bookingMiniAppUrl = 'https://zalo.me/s/1678513455238925129/?utm_source=zalo-booking-demo';
    $managerMiniAppUrl = 'https://zalo.me/s/3701727139378747820/?utm_source=zalo-manager-demo';

    $bookingMiniAppVideoUrl = Vite::asset('resources/videos/prx-for-booking-user.mp4');

    $managerMiniAppVideoUrl = Vite::asset('resources/videos/prx-for-business-manager.mp4');
@endphp

<section aria-labelledby="miniapp-section-title" class="overflow-hidden bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">

        {{-- =========================================================
             SECTION INTRODUCTION
             ========================================================= --}}
        <div class="mx-auto max-w-3xl text-center">
            <x-ui.badge color="green">
                Zalo Mini App Development
            </x-ui.badge>

            <h2 id="miniapp-section-title"
                class="mt-5 text-3xl font-semibold tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                Built for customers and business teams.
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-muted sm:text-lg">
                We build customer-facing experiences and business tools that
                work together across the web, mobile, and Zalo Mini Apps.
            </p>
        </div>


        {{-- =========================================================
             SHOWCASE
             ========================================================= --}}
        <div class="mt-16 space-y-20 sm:mt-20 sm:space-y-24 lg:mt-24 lg:space-y-28">


            {{-- =========================================================
                 01. CUSTOMER BOOKING EXPERIENCE
                 ========================================================= --}}
            <article class="grid grid-cols-1 items-center gap-10 sm:grid-cols-2 sm:gap-12 lg:gap-16">

                {{-- Copy --}}
                <div class="order-1 max-w-xl lg:order-1">
                    <div class="flex items-center gap-3">
                        <span
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-light text-primary"
                            aria-hidden="true">
                            <i data-lucide="calendar-check" class="h-4 w-4"></i>
                        </span>

                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                            Customer experience
                        </p>
                    </div>

                    <h3
                        class="mt-5 text-3xl font-semibold leading-[1.12] tracking-tight text-text-dark sm:text-4xl lg:text-[3rem]">
                        Seamless service booking,
                        <span class="lg:block">
                            directly inside Zalo.
                        </span>
                    </h3>

                    <p class="mt-6 text-base leading-7 text-muted sm:text-lg sm:leading-8">
                        A complete customer booking journey built for Zalo —
                        from discovering services and promotions to selecting
                        appointments and completing verification.
                    </p>

                    <div class="mt-8">
                        <x-ui.button :href="$bookingMiniAppUrl" target="_blank" rel="noopener noreferrer" variant="primary"
                            class="group gap-2">
                            <span>Try the Booking Mini App</span>

                            <i data-lucide="arrow-up-right"
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
                                aria-hidden="true"></i>
                        </x-ui.button>
                    </div>
                </div>


                {{-- Phone --}}
                <div id="prx-for-booking-user" class="order-2 flex justify-center lg:order-2 lg:justify-self-center">
                    <div class="relative w-full max-w-[285px] sm:max-w-[300px]" data-mini-app-video>
                        <div
                            class="overflow-hidden rounded-[2rem] border border-gray-200 bg-white shadow-[0_24px_70px_rgba(16,24,16,0.12)] ring-1 ring-black/5 transition-transform duration-500 hover:-translate-y-1">
                            <video class="aspect-[9/19] h-full w-full object-cover" autoplay muted loop playsinline
                                preload="metadata" aria-label="Booking Mini App preview">
                                <source src="{{ $bookingMiniAppVideoUrl }}" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

            </article>


            {{-- =========================================================
                 02. BUSINESS MANAGEMENT EXPERIENCE
                 ========================================================= --}}
            <article class="grid grid-cols-1 items-center gap-10 sm:grid-cols-2 sm:gap-12 lg:gap-16">

                {{-- Phone --}}
                <div id="prx-for-business-manager"
                    class="order-2 flex justify-center lg:order-1 lg:justify-self-center">
                    <div class="relative w-full max-w-[285px] sm:max-w-[300px]" data-mini-app-video>
                        <div
                            class="overflow-hidden rounded-[2rem] border border-gray-200 bg-white shadow-[0_24px_70px_rgba(16,24,16,0.12)] ring-1 ring-black/5 transition-transform duration-500 hover:-translate-y-1">
                            <video class="aspect-[9/19] h-full w-full object-cover" autoplay muted loop playsinline
                                preload="metadata" aria-label="Business Manager Mini App preview">
                                <source src="{{ $managerMiniAppVideoUrl }}" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>


                {{-- Copy --}}
                <div class="order-1 max-w-xl lg:order-2">
                    <div class="flex items-center gap-3">
                        <span
                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand-light text-primary"
                            aria-hidden="true">
                            <i data-lucide="layout-dashboard" class="h-4 w-4"></i>
                        </span>

                        <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                            Business operations
                        </p>
                    </div>

                    <h3
                        class="mt-5 text-3xl font-semibold leading-[1.12] tracking-tight text-text-dark sm:text-4xl lg:text-[3rem]">
                        Business operations,
                        <span class="lg:block">
                            built for mobile.
                        </span>
                    </h3>

                    <p class="mt-6 text-base leading-7 text-muted sm:text-lg sm:leading-8">
                        Give business teams access to the information and
                        workflows they need on the move — including staff,
                        inventory, revenue, reporting, and store operations.
                    </p>

                    <div class="mt-8">
                        <x-ui.button :href="$managerMiniAppUrl" target="_blank" rel="noopener noreferrer" variant="secondary"
                            class="group gap-2">
                            <span>Try the Manager Mini App</span>

                            <i data-lucide="arrow-up-right"
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
                                aria-hidden="true"></i>
                        </x-ui.button>
                    </div>
                </div>

            </article>

        </div>
    </div>
</section>
