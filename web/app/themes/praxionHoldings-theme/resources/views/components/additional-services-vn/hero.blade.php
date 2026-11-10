<section aria-labelledby="additional-services-title"
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-32 pb-20 sm:pt-36 sm:pb-24 lg:pt-44 lg:pb-32">
    <div class="absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute -top-28 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute top-1/2 -right-32 h-80 w-80 rounded-full bg-brand-mint/50 blur-3xl"></div>
    </div>
    <div class="container-page">
        <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-[minmax(0,1.1fr)_minmax(0,0.9fr)] lg:gap-16">

            {{-- Main heading --}}
            <div class="max-w-2xl">
                <x-ui.badge>
                    Dịch vụ bổ sung
                </x-ui.badge>

                <h1 id="additional-services-title"
                    class="hero-title mt-6 text-4xl font-bold leading-[1.08] tracking-tight text-text-dark sm:text-5xl lg:text-6xl">
                    Hỗ trợ chuyên sâu cho <span class="text-primary">bước đi tiếp theo của bạn.</span>
                </h1>

                <p class="hero-subtitle mt-6 max-w-xl text-base leading-7 text-muted sm:text-lg sm:leading-8">
                    Từ các giải pháp ứng dụng AI đến xây dựng thương hiệu số, chúng tôi giúp doanh nghiệp đổi mới, bứt phá và phát triển.
                </p>
            </div>

            {{-- Supporting copy and navigation --}}
            <div class="lg:pl-6">
                <p class="hero-subtitle text-lg leading-8 text-text-dark sm:text-xl">
                    Không phải mọi thách thức đều cần đến phần mềm tùy chỉnh. Đôi khi, sự tư vấn kỹ thuật chuyên sâu hoặc hỗ trợ sáng tạo từ chuyên gia là tất cả những gì bạn cần.
                </p>

                <div class="hero-buttons mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                    <x-ui.button href="#vibe-coding" variant="primary" class="gap-2">
                        <i data-lucide="code-2" class="h-4 w-4" aria-hidden="true"></i>
                        <span>Tư vấn kỹ thuật</span>
                    </x-ui.button>

                    <x-ui.button href="#brand-creative" variant="secondary" class="gap-2">
                        <i data-lucide="camera" class="h-4 w-4" aria-hidden="true"></i>
                        <span>Thương hiệu &amp; Sáng tạo</span>
                    </x-ui.button>
                </div>

                <div class="hero-footer mt-8 border-t border-gray-200 pt-5">
                    <p class="hero-subtitle text-sm leading-6 text-muted">
                        Dành cho cá nhân, nhà sáng lập, doanh nghiệp đang phát triển và các thương hiệu đã khẳng định vị thế.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
