@php
    $navigation = [
        ['label' => 'Solution', 'path' => '/solution', 'page' => 'solution'],
        ['label' => 'Services', 'path' => '/services', 'page' => 'services'],
        ['label' => 'About us', 'path' => '/about-us', 'page' => 'about-us'],
        ['label' => 'Contact', 'path' => '/contact', 'page' => 'contact'],
    ];
@endphp

<header class="fixed inset-x-0 top-0 z-50 border-b border-black/5 bg-white/95 backdrop-blur-md">
    <div class="container-page">
        <div class="flex h-18 items-center justify-between gap-5 lg:h-20">
            <a href="{{ home_url('/') }}"
                class="shrink-0 rounded-sm text-xl font-bold tracking-tight text-primary no-underline sm:text-2xl"
                aria-label="PRX Holdings home">
                PRX Holdings
            </a>

            <nav class="hidden lg:block" aria-label="Primary navigation">
                <ul class="flex items-center gap-2">
                    @foreach ($navigation as $item)
                        <li>
                            <a href="{{ home_url($item['path']) }}"
                                @if (is_page($item['page'])) aria-current="page" @endif
                                @class([
                                    'inline-flex min-h-11 items-center rounded-full px-4 py-2 text-sm font-semibold no-underline transition-all duration-300 hover:-translate-y-0.5 hover:bg-primary-dark hover:text-white hover:shadow-[0_8px_20px_rgba(46,125,50,0.2)]',
                                    'bg-brand-light text-primary-dark' => is_page($item['page']),
                                    'text-text-dark' => !is_page($item['page']),
                                ])>
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="hidden lg:block">
                <x-ui.button :href="home_url('/contact')">
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
                                        'flex min-h-12 items-center rounded-xl px-4 py-3 font-semibold no-underline',
                                        'bg-brand-light text-primary-dark' => is_page($item['page']),
                                        'text-text-dark hover:bg-gray-100' => !is_page($item['page']),
                                    ])>
                                    {{ $item['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <x-ui.button :href="home_url('/contact')" class="mt-3 w-full">
                        Start now
                    </x-ui.button>
                </nav>
            </details>
        </div>
    </div>
</header>
