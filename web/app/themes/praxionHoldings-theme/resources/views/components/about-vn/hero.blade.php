<section aria-labelledby="about-title"
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-32 pb-20 sm:pt-36 sm:pb-24 lg:pt-44 lg:pb-32">
    <div class="absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute -top-28 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute top-1/2 -right-32 h-80 w-80 rounded-full bg-brand-mint/50 blur-3xl"></div>
    </div>

    <div class="container-page">
        <div class="mx-auto max-w-4xl text-center">
            <x-ui.badge>Đôi nét về PRX</x-ui.badge>
            <h1 id="about-title"
                class="hero-title mx-auto mt-7 max-w-4xl text-4xl leading-[1.08] font-bold tracking-tight text-text-dark sm:text-5xl lg:text-6xl xl:text-7xl">
                Chúng tôi xây dựng những hệ thống phần mềm mà
                <span class="text-primary">doanh nghiệp tin dùng.</span>
            </h1>
            <p class="hero-subtitle mx-auto mt-7 max-w-3xl text-lg leading-8 text-muted sm:text-xl">
                Hơn cả những dòng code. Chúng tôi kiến tạo phần mềm có khả năng mở rộng linh hoạt, tích hợp AI và xây
                dựng những nền tảng công nghệ bền vững.
            </p>
            <div class="hero-cta mt-10 flex flex-col items-stretch justify-center gap-3 sm:flex-row sm:items-center">
                <x-ui.button href="https://demo.prxholdings.com" target="_blank" rel="noopener noreferrer">
                    Khám phá sản phẩm mẫu của chúng tôi
                </x-ui.button>
                <x-ui.button :href="home_url('/lien-he')" variant="secondary">Trao đổi thêm về dự án của bạn</x-ui.button>
            </div>
        </div>

        <div class="mx-auto mt-14 grid max-w-5xl gap-5 md:grid-cols-2 lg:mt-18">
            <article class="rounded-3xl border border-primary/15 bg-white p-7 shadow-lg shadow-primary/5 sm:p-9">
                <div class="flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary"><i
                            data-lucide="cpu" class="h-5 w-5" aria-hidden="true"></i></span>
                    <p class="text-sm font-semibold tracking-[0.16em] text-primary uppercase">Tư duy kỹ thuật chuyên sâu
                    </p>
                </div>
                <h2 class="mt-6 text-xs leading-tight font-semibold text-text-dark sm:text-3xl">Nhu cầu doanh nghiệp là
                    ưu tiên hàng đầu. Công nghệ là bệ phóng theo sau.</h2>
            </article>

            <article class="rounded-3xl bg-text-dark p-7 text-white shadow-lg shadow-black/10 sm:p-9">
                <div class="flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/10 text-brand-mint"><i
                            data-lucide="network" class="h-5 w-5" aria-hidden="true"></i></span>
                    <p class="text-sm font-semibold tracking-[0.16em] text-brand-mint uppercase">Triết lý của chúng tôi
                    </p>
                </div>
                <h2 class="mt-6 text-xs leading-tight font-semibold sm:text-3xl">Chuyên môn kỹ thuật. Năng lực linh
                    hoạt.
                    Vận hành tối ưu.</h2>
            </article>
        </div>
    </div>
</section>
