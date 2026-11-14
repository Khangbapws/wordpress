@php
    $values = [
        [
            'letter' => 'P',
            'name' => 'Precision',
            'icon' => 'crosshair',
            'copy' =>
                'Định hình kiến trúc chuẩn xác trước khi lập trình — bảo chứng hệ thống công nghệ giải quyết trọn vẹn bài toán kinh doanh.',
        ],
        [
            'letter' => 'R',
            'name' => 'Reliability',
            'icon' => 'shield-check',
            'copy' =>
                'Kỹ thuật chuẩn môi trường thực chiến — không dừng ở bản demo. Từ mở rộng dữ liệu đến bảo mật API, hệ thống của chúng tôi được xây dựng để vận hành ổn định không gián đoạn.',
        ],
        [
            'letter' => 'X',
            'name' => 'eXcellence',
            'icon' => 'sparkles',
            'copy' =>
                'Mã nguồn chuẩn sạch, UX/UI tinh tế, cấu trúc bài bản — sẵn sàng để đội ngũ nội bộ của bạn kế thừa, làm chủ và vận hành dài lâu.',
        ],
    ];
@endphp

<section aria-labelledby="values-title" class="py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:gap-16">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Sản phẩm là minh chứng rõ nhất
                </p>
                <h2 id="values-title"
                    class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                    Cam kết được chứng minh bằng hành động.
                </h2>
                <p class="mt-5 text-lg leading-8 text-muted">
                    Chúng tôi không chỉ cung cấp dịch vụ. Chúng tôi còn tự phát triển, ra mắt và vận hành sản phẩm
                    riêng.
                </p>
                <p class="mt-5 text-lg leading-8 text-muted">
                    Kinh nghiệm tự xây dựng và vận hành SaaS giúp chúng tôi tiếp cận mọi hợp tác với tư duy làm chủ sản
                    phẩm — được dẫn dắt bởi sự Chuẩn xác (Precision), Tin cậy (Reliability) và
                    Xuất sắc (eXcellence).
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
