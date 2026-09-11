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
        <a href="#main"
            class="sr-only fixed top-3 left-3 z-100 rounded-lg bg-white px-4 py-3 font-semibold text-text-dark shadow-lg focus:not-sr-only focus:outline-2 focus:outline-offset-2 focus:outline-primary">
            Skip to main content
        </a>

        <x-layout.header />

        <main id="main" class="main" tabindex="-1">
            @yield('content')
        </main>


        <x-layout.footer />
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
</body>

</html>
