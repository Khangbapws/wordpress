@props([
    'image' => 'robot_2.svg',
    'status' => null,
    'states' => null,
    'interactive' => true,
])

@php
    $currentSlug = function_exists('pll_current_language') ? pll_current_language('slug') : null;

    $isEnglish = $currentSlug ? $currentSlug === 'en' : str_starts_with(get_locale(), 'en');

    $defaultStates = $isEnglish
        ? [
            [
                'text' => 'Optimal System • 99.99% Uptime',
                'dotClass' => 'bg-emerald-500',
                'pingClass' => 'bg-emerald-400',
            ],
            [
                'text' => 'Auto-Scaling • Active',
                'dotClass' => 'bg-cyan-500',
                'pingClass' => 'bg-cyan-400',
            ],
            [
                'text' => 'Zero Tech Debt • Clean Code',
                'dotClass' => 'bg-teal-500',
                'pingClass' => 'bg-teal-400',
            ],
            [
                'text' => 'Ready to Scale • Millions of Users',
                'dotClass' => 'bg-sky-500',
                'pingClass' => 'bg-sky-400',
            ],
        ]
        : [
            [
                'text' => 'Hệ thống tối ưu • 99.99% Uptime',
                'dotClass' => 'bg-emerald-500',
                'pingClass' => 'bg-emerald-400',
            ],
            [
                'text' => 'Auto-Scaling • Đang hoạt động',
                'dotClass' => 'bg-cyan-500',
                'pingClass' => 'bg-cyan-400',
            ],
            [
                'text' => 'Zero Tech Debt • Clean Code',
                'dotClass' => 'bg-teal-500',
                'pingClass' => 'bg-teal-400',
            ],
            [
                'text' => 'Sẵn sàng mở rộng • Triệu người dùng',
                'dotClass' => 'bg-sky-500',
                'pingClass' => 'bg-sky-400',
            ],
        ];

    $resolvedStates = $states ?? $defaultStates;
    $initialStatus = $status ?? ($resolvedStates[0]['text'] ?? '');
@endphp

<div {{ $attributes->merge([
    'class' => 'robot-stage group/robot relative inline-flex flex-col items-end sm:items-center select-none',
]) }}
    @if ($interactive) data-robot-interactive
        data-robot-states="{{ json_encode($resolvedStates, JSON_UNESCAPED_UNICODE) }}" @endif>
    {{-- Bong bóng trạng thái AI nổi (dùng $initialStatus thay vì $status) --}}
    @if ($initialStatus)
        <div data-robot-badge
            class="relative z-20 mb-1.5 inline-flex w-max max-w-[90vw] items-center gap-2 whitespace-nowrap rounded-full border border-primary/15 bg-white/95 px-3 py-1 text-[11px] font-semibold tracking-tight text-text-dark shadow-md shadow-primary/10 backdrop-blur-md transition-transform duration-300 group-hover/robot:-translate-y-0.5 sm:px-3.5 sm:py-1.5 sm:text-xs">
            <span class="relative flex h-2 w-2 shrink-0">
                <span data-robot-dot-ping
                    class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                <span data-robot-dot
                    class="relative inline-flex h-2 w-2 rounded-full bg-emerald-500 transition-colors duration-300"></span>
            </span>
            <span data-robot-status-text class="leading-none">{{ $initialStatus }}</span>
        </div>
    @endif

    {{-- Khung Robot & Hào quang nền --}}
    <div class="mr-3 flex flex-col items-center sm:mr-0">
        <div class="relative flex items-center justify-center">
            <div aria-hidden="true"
                class="pointer-events-none absolute inset-0 m-auto -z-10 h-24 w-24 rounded-full bg-cyan-400/20 blur-xl transition-all duration-500 group-hover/robot:scale-125 group-hover/robot:bg-brand-mint/45 sm:h-32 sm:w-32">
            </div>

            <div data-robot-body class="relative z-10 cursor-pointer will-change-transform">
                <img src="{{ Vite::asset('resources/images/others/' . $image) }}"
                    alt="{{ $isEnglish ? 'AI System Architecture Assistant' : 'Trợ lý AI Kiến trúc Hệ thống' }}"
                    width="144" height="172" decoding="async"
                    class="h-24 w-auto max-w-none drop-shadow-[0_14px_20px_rgba(15,23,42,0.16)] transition-transform duration-300 group-hover/robot:scale-[1.04] sm:h-28 lg:h-32">
            </div>
        </div>

        {{-- Bóng đổ mặt đất --}}
        <div data-robot-shadow aria-hidden="true"
            class="mt-1 h-2 w-16 rounded-full bg-text-dark/15 blur-xs will-change-transform sm:w-20"></div>
    </div>
</div>
