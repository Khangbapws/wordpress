@php
    $navigation = [
        [
            'label' => 'Giải pháp',
            'path' => '/giai-phap',
            'page' => 'giai-phap',
        ],
        [
            'label' => 'Dịch vụ',
            'path' => '/dich-vu',
            'page' => 'dich-vu',
        ],
        [
            'label' => 'Về chúng tôi',
            'path' => '/ve-chung-toi',
            'page' => 've-chung-toi',
        ],
        [
            'label' => 'Dịch vụ bổ sung',
            'path' => '/dich-vu-bo-sung',
            'page' => 'dich-vu-bo-sung',
        ],
        [
            'label' => 'Liên hệ',
            'path' => '/lien-he',
            'page' => 'lien-he',
        ],
    ];
@endphp


{{-- Homepage logo intro: replay on every homepage visit --}}
@if (is_front_page())
    <script>
        (() => {
            const root = document.documentElement;
            const animationClass = 'prx-home-logo-intro';

            const playLogoIntro = () => {
                root.classList.remove(animationClass);

                // Force browser to recalculate styles and restart animation.
                void root.offsetWidth;

                root.classList.add(animationClass);
            };

            // Play on every normal homepage load.
            playLogoIntro();

            // Replay when the browser restores homepage from BFCache.
            window.addEventListener('pageshow', (event) => {
                if (event.persisted) {
                    playLogoIntro();
                }
            });
        })();
    </script>
@endif

<header class="fixed inset-x-0 top-0 z-50 border-b border-black/5 bg-white/95 backdrop-blur-md">
    <div class="container-page">
        <div
            class="flex h-20 items-center justify-between gap-5 lg:h-22
           2xl:grid 2xl:grid-cols-[minmax(0,1fr)_auto_minmax(0,1fr)]
           2xl:gap-0">
            <x-layout-vn.brand-logo class="2xl:justify-self-start" />

            <nav class="hidden lg:block 2xl:justify-self-center" aria-label="Primary navigation">
                <ul class="flex items-center gap-2">
                    @foreach ($navigation as $item)
                        <li>
                            <a href="{{ home_url($item['path']) }}"
                                @if (is_page($item['page'])) aria-current="page" @endif
                                @class([
                                    'inline-flex min-h-11 items-center gap-1.5 whitespace-nowrap rounded-full px-3 py-2 text-sm font-semibold no-underline transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary-dark hover:text-white hover:shadow-[0_8px_20px_rgba(46,125,50,0.2)]',
                                    'bg-brand-light text-primary-dark' => is_page($item['page']),
                                    'text-text-dark' => !is_page($item['page']),
                                ])>
                                <span>{{ $item['label'] }}</span>

                                @if ($item['page'] === 'additional-services')
                                    <x-ui.robot-mascot />
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="hidden shrink-0 items-center gap-3 lg:flex 2xl:justify-self-end">

                <x-layout.language-switcher />

                <x-ui.button :href="home_url('/lien-he')">
                    Start now
                </x-ui.button>

            </div>

            <details class="group relative lg:hidden">
                <summary
                    class="flex min-h-12 min-w-12 cursor-pointer list-none items-center justify-center rounded-full border border-gray-200 bg-white text-text-dark transition-colors hover:border-primary hover:text-primary"
                    aria-label="Open navigation menu">
                    <i data-lucide="menu" class="h-5 w-5 group-open:hidden" aria-hidden="true"></i>
                    <i data-lucide="x" class="hidden h-5 w-5 group-open:block" aria-hidden="true"></i>
                </summary>

                <nav aria-label="Mobile navigation"
                    class="absolute top-14 right-0 w-[min(19rem,calc(100vw-2.5rem))] rounded-2xl border border-gray-200 bg-white p-3 shadow-2xl shadow-black/10">
                    <ul class="space-y-1">
                        @foreach ($navigation as $item)
                            <li>


                                <a href="{{ home_url($item['path']) }}"
                                    @if (is_page($item['page'])) aria-current="page" @endif
                                    @class([
                                        'flex min-h-12 items-center gap-2 rounded-xl px-4 py-3 font-semibold no-underline',
                                        'bg-brand-light text-primary-dark' => is_page($item['page']),
                                        'text-text-dark hover:bg-gray-100' => !is_page($item['page']),
                                    ])>
                                    <span>{{ $item['label'] }}</span>

                                    @if ($item['page'] === 'additional-services')
                                        <x-ui.robot-mascot />
                                    @endif
                                </a>

                            </li>
                        @endforeach
                    </ul>
                    {{-- Mobile language switcher --}}
                    <div class="mt-3 flex items-center justify-between gap-3 border-t border-gray-100 px-1 pt-4">
                        <div>
                            <p class="text-sm font-semibold text-text-dark">
                                Language
                            </p>

                            <p class="mt-0.5 text-xs text-muted">
                                Choose your preferred language
                            </p>
                        </div>

                        <x-layout.language-switcher />
                    </div>

                    {{-- Mobile CTA --}}
                    <x-ui.button :href="home_url('/lien-he')" class="mt-4 w-full">
                        Start now
                    </x-ui.button>
                </nav>
            </details>
        </div>
    </div>
</header>
