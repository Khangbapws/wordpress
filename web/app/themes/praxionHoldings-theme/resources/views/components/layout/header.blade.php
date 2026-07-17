<header class="fixed inset-x-0 top-0 z-50 border-b border-black/5 bg-white/80 backdrop-blur-md">

    <div class="container-page">

        <div class="grid h-20 grid-cols-3 items-center">

            <!-- Logo -->

            <div class="flex justify-start">

                <a href="{{ home_url('/') }}" class="text-2xl font-bold no-underline text-primary">
                    PRX Holdings
                </a>

            </div>

            <!-- Menu -->

            <nav class="flex justify-center">

                <ul class="flex items-center gap-10">

                    <a href="{{ home_url('/services') }}">Services</a></li>

                    <li><a href="{{ home_url('/solution') }}">Solution</a></li>

                    <li><a href="{{ home_url('/about-us') }}">About us</a></li>

                </ul>

            </nav>

            <!-- Buttons -->

            <div class="flex justify-end gap-3">

                <x-ui.button href="/login" variant="text">
                    Login
                </x-ui.button>

                <x-ui.button href="/register">
                    Start now
                </x-ui.button>

            </div>

        </div>

    </div>

</header>
