@php
    /*
     * Detect current language.
     * Default to English when Polylang is unavailable.
     */
    $currentLanguage = function_exists('pll_current_language') ? pll_current_language('slug') : 'en';

    $isVietnamese = $currentLanguage === 'vi';
@endphp
<!doctype html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body @php(body_class())>
    @php(wp_body_open())

    <div id="app">

        {{-- Skip to main content --}}
        <a href="#main"
            class="sr-only fixed top-3 left-3 z-100 rounded-lg bg-white px-4 py-3 font-semibold text-text-dark shadow-lg focus:not-sr-only focus:outline-2 focus:outline-offset-2 focus:outline-primary">
            {{ $isVietnamese ? 'Chuyển đến nội dung chính' : 'Skip to main content' }}
        </a>


        {{-- Header --}}
        @if ($isVietnamese)
            <x-layout-vn.header />
        @else
            <x-layout.header />
        @endif


        {{-- Main content --}}
        <main id="main" class="main" tabindex="-1">
            @yield('content')
        </main>


        {{-- Footer --}}
        @if ($isVietnamese)
            <x-layout-vn.footer />
        @else
            <x-layout.footer />
        @endif

    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())

</body>

</html>
