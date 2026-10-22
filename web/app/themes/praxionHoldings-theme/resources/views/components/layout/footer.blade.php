<footer class="border-t border-gray-200/70 bg-white">
    <div class="container-page py-14 lg:py-16">
        <div
            class="grid grid-cols-1 gap-12
           lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.35fr)]
           lg:gap-16
           xl:gap-28">
            {{-- =========================================================
         COLUMN 1: BRAND
         ========================================================= --}}
            <div class="max-w-md">
                <a href="{{ home_url('/') }}"
                    class="inline-flex rounded-sm text-2xl font-bold tracking-tight text-primary no-underline"
                    aria-label="PRX Holdings home">
                    PRX Holdings
                </a>

                <p class="mt-5 max-w-sm text-base leading-7 text-muted">
                    Building digital solutions. Empowering businesses. Enabling growth.
                </p>
            </div>


            {{-- =========================================================
         RIGHT SIDE: THREE NAVIGATION COLUMNS
         ========================================================= --}}
            <div
                class="grid grid-cols-1 gap-10
               sm:grid-cols-3 sm:gap-x-8
               lg:grid-cols-[1.1fr_0.8fr_1fr]
               lg:gap-x-6
               xl:gap-x-10">

                {{-- COLUMN 2: EXPLORE --}}
                <nav aria-label="Explore">
                    <h2 class="text-sm font-semibold uppercase tracking-[0.14em] text-text-dark">
                        Explore
                    </h2>

                    <ul class="mt-5 space-y-1">
                        <li>
                            <a href="{{ home_url('/solution') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Solution
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/services') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/about-us') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                About us
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/additional-services') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Additional Services
                            </a>
                        </li>
                    </ul>
                </nav>


                {{-- COLUMN 3: LEGAL --}}
                <nav aria-label="Legal">
                    <h2 class="text-sm font-semibold uppercase tracking-[0.14em] text-text-dark">
                        Legal
                    </h2>

                    <ul class="mt-5 space-y-1">
                        <li>
                            <a href="{{ home_url('/terms-and-conditions') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Terms of Service
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/privacy-policy') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </nav>


                {{-- COLUMN 4: CONTACT --}}
                <div>
                    <h2 class="text-sm font-semibold uppercase tracking-[0.14em] text-text-dark">
                        Contact
                    </h2>

                    <p class="mt-5 max-w-xs text-sm leading-6 text-muted">
                        Have a project in mind? Let's discuss how we can help your business.
                    </p>

                    <a href="{{ home_url('/contact') }}"
                        class="mt-3 inline-flex min-h-10 items-center gap-2 text-sm font-semibold text-primary transition-colors duration-200 hover:text-primary-dark">
                        Start a conversation

                        <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                    </a>

                    {{-- Social links --}}
                    <div class="mt-6 flex items-center gap-3">
                        <a href="https://www.facebook.com/profile.php?id=61593519958952" target="_blank"
                            rel="noopener noreferrer" aria-label="PRX Holdings on Facebook"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/facebook.svg') }}" alt="Facebook"
                                class="h-6 w-6 shrink-0" />
                        </a>

                        <a href="https://www.instagram.com/prxholdings777/" target="_blank" rel="noopener noreferrer"
                            aria-label="PRX Holdings on Instagram"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/instagram.svg') }}" alt="Instagram"
                                class="h-6 w-6 shrink-0" />
                        </a>

                        <a href="https://x.com/prxholdings" target="_blank" rel="noopener noreferrer"
                            aria-label="PRX Holdings on X"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/social.svg') }}" alt="X"
                                class="h-6 w-6 shrink-0" />
                        </a>

                        <a href="https://www.linkedin.com/company/prx-holdings/" target="_blank"
                            rel="noopener noreferrer" aria-label="PRX Holdings on LinkedIn"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/linkedin.svg') }}" alt="LinkedIn"
                                class="h-6 w-6 shrink-0" />
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-12 border-t border-gray-200/70 pt-7">
            <p class="text-sm text-muted select-none" oncopy="return false;" oncut="return false;"
                oncontextmenu="return false;">
                © {{ date('Y') }} PRX Holdings. All rights reserved. PRX CO.,LTD. Group
                10, Vinh Chau Residential Group, Tay Nha Trang Ward, Khanh Hoa Province, Vietnam. Tax code: 4202068209,
                issued on: 28/09/2026, by Enterprise Management Division, Khanh Hoa Provincial Department of Finance.
            </p>
        </div>
    </div>
</footer>
