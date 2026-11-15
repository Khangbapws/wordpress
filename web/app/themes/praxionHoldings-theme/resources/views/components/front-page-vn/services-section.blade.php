<section aria-labelledby="home-capabilities-title" data-capabilities-section
    class="relative isolate overflow-hidden bg-surface py-20 sm:py-24 lg:py-32">
    {{-- Ánh sáng nền nhẹ tạo chiều sâu phân tách với section liền kề --}}
    <div class="pointer-events-none absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute top-1/4 -left-40 h-96 w-96 rounded-full bg-primary/6 blur-3xl"></div>
        <div class="absolute right-0 bottom-0 h-80 w-80 rounded-full bg-brand-mint/30 blur-3xl"></div>
    </div>

    <div class="container-page">
        <x-ui.section-header id="home-capabilities-title" eyebrow="Năng lực cốt lõi"
            title="Chiều sâu kỹ thuật xuyên suốt mọi tầng công nghệ."
            description="Từ thiết kế kiến trúc nền tảng đến triển khai hạ tầng đám mây chuyên sâu, mọi sản phẩm của PRX đều được bảo chứng bởi quy trình kỹ thuật bài bản và dày dạn kinh nghiệm." />

        <div data-bento-grid class="mt-12 grid gap-5 md:grid-cols-2 lg:mt-16 lg:grid-cols-3 lg:gap-6">
            <x-front-page.bento-card index="01" icon="cpu" tag="Enterprise Architecture"
                title="Custom Web Platforms" variant="dark" :wide="true" :tags="['High Concurrency', 'Multi-Tenant SaaS', 'Sub-50ms Latency']">
                Kiến tạo các ứng dụng web bền bỉ, bảo mật cao và sẵn sàng mở rộng — được thiết kế chuyên biệt để chịu
                tải truy cập đồng thời lớn và xử lý những bài toán nghiệp vụ phức tạp.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="02" icon="smartphone" tag="iOS & Android" title="Mobile Engineering"
                :tags="['Native & Cross-Platform', '60fps UI']">
                Phát triển ứng dụng di động đa nền tảng và chuyên biệt (Native) với kiến trúc chuẩn sạch cùng trải
                nghiệm giao diện mượt mà vượt trội.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="03" icon="layers" tag="REST • GraphQL"
                title="System Integration & APIs" :tags="['Event-Driven', 'Real-Time Sync']">
                Xây dựng kiến trúc API REST/GraphQL chịu tải cao — xóa bỏ rào cản giữa các hệ thống rời rạc, đồng bộ dữ
                liệu xuyên suốt và tự động hóa vận hành doanh nghiệp.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="04" icon="refresh-cw" tag="Zero-Downtime Migration"
                title="Legacy Modernization" :wide="true" :tags="['Microservices Refactor', 'Data Integrity', 'Incremental Rollout']">
                Chuyển đổi mượt mà các hệ thống lõi cồng kềnh sang kiến trúc hiện đại — nâng cấp sức mạnh công nghệ toàn
                diện với cam kết vận hành xuyên suốt, không thời gian chết (Zero Downtime).
            </x-front-page.bento-card>

            <x-front-page.bento-card index="05" icon="pen-tool" tag="Design Systems" title="Product UI/UX Design"
                :wide="true" :tags="['Interactive Prototyping', 'WCAG Accessibility', 'Conversion-Focused']">
                Biến những bài toán nghiệp vụ chuyên sâu thành trải nghiệm giao diện tinh gọn, thân thiện với mọi người
                dùng và thúc đẩy mạnh mẽ hiệu quả chuyển đổi.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="06" icon="shield-check" tag="Cloud & SecOps" title="DevOps & Security"
                variant="accent" :tablet-full="true" :tags="['Automated CI/CD', '24/7 Observability']">
                Thiết lập luồng vận hành CI/CD tự động, chuẩn hóa môi trường với công nghệ container và giám sát chủ
                động toàn bộ hạ tầng đám mây nhằm phát hiện sớm mọi rủi ro.
            </x-front-page.bento-card>
        </div>
    </div>
</section>
