<footer class="mt-20 bg-white">

    <div class="container-page py-16">

        {{-- Top --}}
        <div class="flex flex-col gap-12 lg:flex-row lg:items-start">

            {{-- Brand --}}
            <div class="lg:w-3/5">

                <a href="{{ home_url('/') }}" class="text-2xl font-bold tracking-tight text-primary no-underline">
                    PRX Holdings
                </a>

                <p class="mt-5 max-w-xl text-base leading-7 text-muted">
                    Building modern business management solutions
                    for Beauty &amp; F&amp;B.
                </p>

            </div>

            {{-- Navigation --}}
            <div class="lg:ml-auto lg:w-2/5">

                <div class="grid grid-cols-2 gap-x-12">

                    {{-- Company --}}
                    <div>

                        <h3 class="mb-5 text-xs font-semibold uppercase tracking-[0.18em] text-text-dark">
                            Company
                        </h3>

                        <ul class="space-y-3">

                            <li>
                                <a href="/about"
                                    class="text-sm text-muted no-underline transition-colors duration-200 hover:text-primary">
                                    About
                                </a>
                            </li>

                            <li>
                                <a href="/contact"
                                    class="text-sm text-muted no-underline transition-colors duration-200 hover:text-primary">
                                    Contact
                                </a>
                            </li>

                        </ul>

                    </div>

                    {{-- Legal --}}
                    <div>

                        <h3 class="mb-5 text-xs font-semibold uppercase tracking-[0.18em] text-text-dark">
                            Legal
                        </h3>

                        <ul class="space-y-3">

                            <li>
                                <a href="/privacy-policy"
                                    class="text-sm text-muted no-underline transition-colors duration-200 hover:text-primary">
                                    Privacy
                                </a>
                            </li>

                            <li>
                                <a href="/terms"
                                    class="text-sm text-muted no-underline transition-colors duration-200 hover:text-primary">
                                    Terms
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        {{-- Bottom --}}

        <div class="mt-12 border-t border-gray-200/60 pt-8">

            <div class="flex flex-col gap-8 md:flex-row md:items-end md:justify-between">

                {{-- Copyright --}}
                <div>

                    <p class="text-sm font-medium text-text-dark">
                        © {{ date('Y') }} PRX Holdings
                    </p>

                    <p class="mt-2 text-sm text-muted">
                        All rights reserved.
                    </p>

                </div>

                {{-- Social --}}
                <nav>

                    <ul class="flex flex-wrap gap-x-8 gap-y-2">

                        <li>

                            <a href="#"
                                class="text-sm text-muted no-underline transition-colors duration-200 hover:text-primary">
                                Facebook
                            </a>

                        </li>

                        <li>

                            <a href="#"
                                class="text-sm text-muted no-underline transition-colors duration-200 hover:text-primary">
                                LinkedIn
                            </a>

                        </li>

                        <li>

                            <a href="#"
                                class="text-sm text-muted no-underline transition-colors duration-200 hover:text-primary">
                                GitHub
                            </a>

                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>



</footer>
