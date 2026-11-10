@props([
    'logo' => 'resources/images/logo/prx-logo.png',
])


<a href="{{ home_url('/homepage-vn-tieng-viet') }}" aria-label="PRX Holdings home"
    {{ $attributes->merge([
        'class' =>
            'prx-brand-lockup shrink-0 rounded-sm no-underline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-primary',
    ]) }}>
    <span class="prx-brand-lockup__mark" aria-hidden="true">
        <img src="{{ Vite::asset('resources/images/logo/prx-logo.png') }}" alt="" width="40" height="40"
            fetchpriority="high" decoding="async">
    </span>

    <span class="prx-brand-lockup__wordmark" aria-hidden="true">
        PRX Holdings
    </span>
</a>
