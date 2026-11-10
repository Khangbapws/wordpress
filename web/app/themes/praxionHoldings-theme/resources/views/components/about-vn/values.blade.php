@php
    $values = [
        [
            'letter' => 'P',
            'name' => 'Precision',
            'icon' => 'crosshair',
            'copy' =>
                'We define exact architecture and infrastructure requirements before writing code, ensuring the technology stack aligns perfectly with the business problem.',
        ],
        [
            'letter' => 'R',
            'name' => 'Reliability',
            'icon' => 'shield-check',
            'copy' =>
                'We build systems designed for uptime. From database scaling to secure API integrations, we engineer for production environments, not just local demos.',
        ],
        [
            'letter' => 'X',
            'name' => 'eXcellence',
            'icon' => 'sparkles',
            'copy' =>
                'We maintain high standards for code quality, UX/UI clarity, and long-term maintainability so your internal teams can inherit a clean, structured ecosystem.',
        ],
    ];
@endphp

<section aria-labelledby="values-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Minh chứng nằm ở các sản phẩm của chúng tôi
                </p>
                <h2 id="values-title"
                    class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                    Chúng tôi luôn nói đi đôi với làm.
                </h2>
                <p class="mt-5 text-lg leading-8 text-muted">
                    Chuyên môn của chúng tôi vượt ra ngoài việc bàn giao dịch vụ. Chúng tôi tự mình xây dựng, ra mắt và vận hành các sản phẩm của riêng mình.
                </p>
                <p class="mt-5 text-lg leading-8 text-muted">
                    Với kinh nghiệm tự xây dựng và vận hành SaaS của chính mình, chúng tôi mang góc nhìn của một chủ sở hữu sản phẩm vào mọi hợp tác—được dẫn dắt bởi sự Chuẩn xác (Precision), Tin cậy (Reliability) và Xuất sắc (eXcellence).
                </p>
            </div>

            <ol class="space-y-5">
                @foreach ($values as $value)
                    <li
                        class="grid gap-5 rounded-3xl border border-gray-200/80 bg-white p-6 shadow-sm sm:grid-cols-[4rem_1fr] sm:p-8">
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary text-2xl font-bold text-white"
                            aria-hidden="true">{{ $value['letter'] }}</div>
                        <div>
                            <div class="flex items-center gap-3">
                                <i data-lucide="{{ $value['icon'] }}" class="h-5 w-5 text-primary"
                                    aria-hidden="true"></i>
                                <h3 class="text-2xl font-semibold text-text-dark">{{ $value['name'] }}</h3>
                            </div>
                            <p class="mt-3 leading-7 text-muted">{{ $value['copy'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
