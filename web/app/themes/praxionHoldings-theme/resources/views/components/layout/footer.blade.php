<footer class="mt-20 border-t border-gray-200/70 bg-white">
    <div class="container-page py-14 lg:py-16">
        <div class="grid gap-12 lg:grid-cols-[1.35fr_1fr] lg:gap-20">
            <div>
                <a href="{{ home_url('/') }}" class="text-2xl font-bold tracking-tight text-primary no-underline">
                    PRX Holdings
                </a>
                <p class="mt-5 max-w-xl text-base leading-7 text-muted">
                    A connected software ecosystem for beauty and spa businesses, their teams, and the customers who
                    book with them.
                </p>
            </div>

            <nav aria-label="Footer navigation">
                <h2 class="text-sm font-semibold tracking-[0.16em] text-text-dark uppercase">Explore</h2>
                <ul class="mt-5 grid grid-cols-2 gap-2 sm:grid-cols-4 lg:grid-cols-2">
                    <li><a href="{{ home_url('/solution') }}"
                            class="inline-flex min-h-11 items-center text-sm font-medium text-muted hover:text-primary">Solution</a>
                    </li>
                    <li><a href="{{ home_url('/services') }}"
                            class="inline-flex min-h-11 items-center text-sm font-medium text-muted hover:text-primary">Services</a>
                    </li>
                    <li><a href="{{ home_url('/about-us') }}"
                            class="inline-flex min-h-11 items-center text-sm font-medium text-muted hover:text-primary">About
                            us</a></li>
                    <li><a href="{{ home_url('/contact') }}"
                            class="inline-flex min-h-11 items-center text-sm font-medium text-muted hover:text-primary">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="mt-12 border-t border-gray-200/70 pt-7">
            <p class="text-sm text-muted">© {{ date('Y') }} PRX Holdings. All rights reserved.</p>
        </div>
    </div>
</footer>
