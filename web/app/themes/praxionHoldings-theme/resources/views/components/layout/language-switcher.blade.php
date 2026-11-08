@php
    /*
     * Retrieve language data from Polylang.
     * EN and VI are the intended language slugs.
     */
    $rawLanguages = function_exists('pll_the_languages')
        ? pll_the_languages([
            'raw' => true,
            'hide_if_empty' => false,
            'hide_if_no_translation' => false,
        ])
        : [];

    /*
     * Normalize language data by slug.
     * Supports both associative and numeric array formats.
     */
    $languagesBySlug = [];

    if (is_array($rawLanguages)) {
        foreach ($rawLanguages as $language) {
            if (!is_array($language)) {
                continue;
            }

            $slug = $language['slug'] ?? null;

            if ($slug) {
                $languagesBySlug[$slug] = $language;
            }
        }
    }

    /*
     * Fixed display order and labels.
     */
    $languageConfig = [
        'en' => [
            'label' => 'EN',
            'name' => 'English',
        ],
        'vi' => [
            'label' => 'VI',
            'name' => 'Tiếng Việt',
        ],
    ];

    $languageOptions = [];

    foreach ($languageConfig as $slug => $config) {
        $language = $languagesBySlug[$slug] ?? null;

        if (!$language || empty($language['url'])) {
            continue;
        }

        $languageOptions[] = [
            'slug' => $slug,
            'label' => $config['label'],
            'name' => $config['name'],
            'url' => $language['url'],
            'current' => (bool) ($language['is_current'] ?? ($language['current_lang'] ?? false)),
        ];
    }
@endphp

@if (count($languageOptions) === 2)

    {{-- Active Polylang language switcher --}}
    <nav aria-label="Language selector" class="shrink-0">
        <div class="inline-flex items-center rounded-full border border-gray-200 bg-white p-1">
            @foreach ($languageOptions as $language)
                <a href="{{ esc_url($language['url']) }}" lang="{{ $language['slug'] }}" hreflang="{{ $language['slug'] }}"
                    title="Switch to {{ $language['name'] }}" aria-label="Switch to {{ $language['name'] }}"
                    @if ($language['current']) aria-current="page" @endif @class([
                        'inline-flex min-h-8 min-w-10 items-center justify-center rounded-full px-2.5 text-[11px] font-bold tracking-[0.08em] no-underline transition-colors duration-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary',
                        'bg-brand-light text-primary-dark' => $language['current'],
                        'text-muted hover:bg-gray-100 hover:text-text-dark' => !$language[
                            'current'
                        ],
                    ])>
                    {{ $language['label'] }}
                </a>
            @endforeach
        </div>
    </nav>
@else
    {{-- Temporary visual preview until Polylang is configured --}}
    <div role="group" aria-label="Language selector preview. Polylang is not configured yet." aria-disabled="true"
        title="Language switching will be enabled after Polylang is configured."
        class="inline-flex shrink-0 items-center rounded-full border border-gray-200 bg-white p-1">
        <span
            class="inline-flex min-h-8 min-w-10 items-center justify-center rounded-full bg-brand-light px-2.5 text-[11px] font-bold tracking-[0.08em] text-primary-dark"
            aria-current="page">
            EN
        </span>

        <span
            class="inline-flex min-h-8 min-w-10 items-center justify-center rounded-full px-2.5 text-[11px] font-bold tracking-[0.08em] text-muted/50">
            VI
        </span>
    </div>

@endif
