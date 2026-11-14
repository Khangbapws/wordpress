@props([
    'icon',
    'title',
    'index' => null,
    'tag' => null,
    'tags' => [],
    'wide' => false,
    'tabletFull' => false,
    'variant' => 'default', // 'default' | 'dark' | 'accent'
])

@php
    $isDark = $variant === 'dark';
    $isAccent = $variant === 'accent';
    $tagList = is_array($tags) ? $tags : array_filter(array_map('trim', explode('|', (string) $tags)));
@endphp

<article data-bento-card
    {{ $attributes->filter(fn($value) => !is_array($value))->class([
            'bento-card group/card relative flex flex-col justify-between overflow-hidden rounded-3xl border p-6 backdrop-blur-md transition-all duration-300 hover:-translate-y-1 sm:p-8',
            'md:col-span-2 lg:col-span-2' => $wide,
            'md:col-span-2 lg:col-span-1' => !$wide && $tabletFull,
            'border-white/10 bg-text-dark text-white shadow-[0_24px_50px_-15px_rgba(15,23,42,0.28)]' => $isDark,
            'border-primary/20 bg-linear-to-br from-brand-light/90 via-white to-surface text-text-dark shadow-[0_18px_40px_-18px_rgba(15,23,42,0.08)]' => $isAccent,
            'border-gray-200/85 bg-white/90 text-text-dark shadow-[0_18px_40px_-18px_rgba(15,23,42,0.07)] hover:border-primary/30' =>
                !$isDark && !$isAccent,
        ]) }}>
    {{-- Lớp ánh sáng chạy theo con trỏ chuột --}}
    <div aria-hidden="true" @class([
        'bento-spotlight pointer-events-none absolute inset-0 opacity-0 transition-opacity duration-500 group-hover/card:opacity-100',
        'bento-spotlight--dark' => $isDark,
    ])></div>

    {{-- Họa tiết lưới chấm mờ góc phải trên cho thẻ rộng --}}
    @if ($wide)
        <div aria-hidden="true" @class([
            'pointer-events-none absolute top-0 right-0 h-44 w-56 opacity-45',
            'bento-card-mesh--dark' => $isDark,
            'bento-card-mesh' => !$isDark,
        ])></div>
    @endif

    {{-- Phần đầu thẻ: Icon + Nhãn kỹ thuật + Số thứ tự --}}
    <div class="relative z-10">
        <div class="flex items-start justify-between gap-4">
            <div class="flex items-center gap-3">
                <span @class([
                    'flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border transition-transform duration-300 group-hover/card:scale-105',
                    'border-white/15 bg-white/10 text-brand-mint' => $isDark,
                    'border-primary/15 bg-brand-light text-primary' => !$isDark,
                ])>
                    <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
                </span>

                @if ($tag)
                    <span @class([
                        'rounded-full px-3 py-1 font-mono text-[11px] font-medium tracking-wide',
                        'bg-white/10 text-brand-mint ring-1 ring-white/10' => $isDark,
                        'bg-surface text-primary-dark ring-1 ring-primary/15' => !$isDark,
                    ])>
                        {{ $tag }}
                    </span>
                @endif
            </div>

            @if ($index)
                <span @class([
                    'font-mono text-xs font-semibold tracking-widest',
                    'text-white/35' => $isDark,
                    'text-muted/50' => !$isDark,
                ])>
                    {{ $index }}
                </span>
            @endif
        </div>

        {{-- Tiêu đề & Nội dung --}}
        <h3 @class([
            'mt-6 text-xl font-bold tracking-tight sm:text-2xl',
            'text-white' => $isDark,
            'text-text-dark' => !$isDark,
        ])>
            {{ $title }}
        </h3>

        <div @class([
            'mt-3 text-sm leading-6 sm:text-base sm:leading-7',
            'max-w-2xl' => $wide,
            'text-white/75' => $isDark,
            'text-muted' => !$isDark,
        ])>
            {{ $slot }}
        </div>
    </div>

    {{-- Chân thẻ: Dải công nghệ cốt lõi --}}
    @if (!empty($tagList))
        <div @class([
            'relative z-10 mt-6 flex flex-wrap items-center gap-2 border-t pt-5',
            'border-white/10' => $isDark,
            'border-gray-100' => !$isDark,
        ])>
            @foreach ($tagList as $item)
                <span @class([
                    'inline-flex items-center gap-1.5 rounded-lg px-2.5 py-1 text-xs font-medium',
                    'bg-white/[0.07] text-white/85' => $isDark,
                    'bg-surface text-text-dark/80 ring-1 ring-gray-200/70' => !$isDark,
                ])>
                    <span @class([
                        'h-1 w-1 rounded-full',
                        'bg-brand-mint' => $isDark,
                        'bg-primary' => !$isDark,
                    ])></span>
                    {{ $item }}
                </span>
            @endforeach
        </div>
    @endif
</article>
