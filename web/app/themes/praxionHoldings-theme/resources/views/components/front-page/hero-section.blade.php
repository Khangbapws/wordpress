<section aria-labelledby="home-title" data-hero-scene
    class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-28 pb-20 sm:pt-34 sm:pb-24 lg:pt-40 lg:pb-32">
    {{-- Nền lưới bản vẽ kỹ thuật & Ánh sáng môi trường --}}
    <div class="pointer-events-none absolute inset-0 -z-10" aria-hidden="true">
        <div class="hero-blueprint-grid absolute inset-0 opacity-60"></div>
        <div class="absolute -top-32 left-1/4 h-[28rem] w-[28rem] rounded-full bg-primary/10 blur-3xl"></div>
        <div class="absolute top-1/2 -right-32 h-96 w-96 rounded-full bg-brand-mint/55 blur-3xl"></div>
    </div>

    <div class="container-page">
        <div class="grid items-center gap-12 lg:grid-cols-[1.04fr_0.96fr] lg:gap-16">
            {{-- CỘT TRÁI: Thông điệp định vị + Robot ở góc phải phía trên --}}
            <div>
                {{-- Hàng trên cùng: Badge bên trái — Robot bên phải --}}
                <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between sm:gap-4">
                    <div data-hero-reveal class="sm:pt-2">
                        <x-ui.badge>Premier Software Engineering Partner</x-ui.badge>
                    </div>
                    <div class="self-end sm:-mt-2 sm:-mb-5 sm:self-auto lg:-mt-3 lg:-mb-7">
                        <x-ui.robot />
                    </div>
                </div>

                <h1 id="home-title" data-hero-reveal
                    class="hero-title mt-3 max-w-4xl text-4xl leading-[1.06] font-bold tracking-tight text-text-dark sm:mt-2 sm:text-5xl lg:text-6xl xl:text-7xl">
                    Engineering complex software.
                    <span
                        class="bg-linear-to-r from-primary via-primary-dark to-cyan-700 bg-clip-text text-transparent">
                        Built to scale.
                    </span>
                </h1>

                <p data-hero-reveal
                    class="hero-subtitle mt-6 max-w-2xl text-lg leading-8 text-muted sm:mt-7 sm:text-xl">
                    We design, build, and scale digital solutions that help businesses operate smarter and grow faster.
                </p>

                <div data-hero-reveal
                    class="hero-cta mt-8 flex flex-col items-stretch gap-3 sm:mt-10 sm:flex-row sm:items-center">
                    <x-ui.button :href="home_url('/contact')">Discuss your project</x-ui.button>
                    <x-ui.button :href="home_url('/services')" variant="secondary">View our capabilities</x-ui.button>
                </div>

                <p data-hero-reveal class="mt-7 flex items-center gap-2.5 text-sm leading-6 text-muted">
                    <span
                        class="flex h-6 w-6 shrink-0 items-center justify-center rounded-md bg-primary/10 text-primary">
                        <i data-lucide="cpu" class="h-3.5 w-3.5" aria-hidden="true"></i>
                    </span>
                    <span>Modern technology <span class="mx-1 text-primary/40">•</span> Optimized architecture <span
                            class="mx-1 text-primary/40">•</span> No technical debt.</span>
                </p>
            </div>

            {{-- CỘT PHẢI: Sân khấu Kiến trúc Hệ thống --}}
            <div data-hero-stage class="relative mx-auto w-full max-w-xl" aria-label="Software Architecture Overview">
                <div data-hero-card
                    class="relative rounded-3xl border border-primary/15 bg-white/85 p-5 shadow-[0_24px_60px_-15px_rgba(15,23,42,0.12)] backdrop-blur-xl sm:rounded-4xl sm:p-7">
                    {{-- Tầng 1: Core Infrastructure --}}
                    <div class="relative overflow-hidden rounded-2xl bg-text-dark p-5 text-white shadow-inner sm:p-6">
                        <div aria-hidden="true"
                            class="pointer-events-none absolute -top-12 -right-12 h-32 w-32 rounded-full bg-cyan-400/15 blur-2xl">
                        </div>

                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <div class="inline-flex items-center gap-2">
                                    <span class="h-1.5 w-1.5 rounded-full bg-brand-mint"></span>
                                    <p class="text-xs font-semibold tracking-[0.14em] text-brand-mint uppercase">
                                        System Architecture
                                    </p>
                                </div>
                                <p class="mt-2 text-xl font-semibold tracking-tight">Production-grade infrastructure</p>
                            </div>
                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/10 text-brand-mint">
                                <i data-lucide="layers" class="h-5 w-5" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>

                    {{-- Đường truyền dữ liệu 1 --}}
                    <div class="my-2.5 flex justify-center" aria-hidden="true">
                        <span class="arch-data-conduit h-6 w-px bg-primary/20"></span>
                    </div>

                    {{-- Tầng 2: Client Layer --}}
                    <div
                        class="group/layer rounded-2xl border border-gray-200/80 bg-surface/90 p-4 transition-all duration-300 hover:border-primary/30 hover:bg-white hover:shadow-md sm:p-5">
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex items-center gap-3.5">
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-light text-primary transition-transform duration-300 group-hover/layer:scale-105">
                                    <i data-lucide="layout-grid" class="h-5 w-5" aria-hidden="true"></i>
                                </span>
                                <div>
                                    <p class="font-semibold text-text-dark">Client Layer</p>
                                    <p class="mt-0.5 text-xs text-muted">High-performance web & multi-platform mobile
                                    </p>
                                </div>
                            </div>
                            <span
                                class="hidden rounded-md bg-white px-2 py-1 font-mono text-[11px] font-medium text-primary/80 ring-1 ring-primary/10 sm:inline-block">
                                Edge / SSR
                            </span>
                        </div>
                    </div>

                    {{-- Đường truyền dữ liệu 2 --}}
                    <div class="my-2.5 flex justify-center" aria-hidden="true">
                        <span class="arch-data-conduit arch-data-conduit--delayed h-6 w-px bg-primary/20"></span>
                    </div>

                    {{-- Tầng 3: Microservices & Cloud DB --}}
                    <div class="grid gap-3 sm:grid-cols-2">
                        <div
                            class="group/layer rounded-2xl border border-gray-200/80 bg-white p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-primary/30 hover:shadow-md">
                            <div class="flex items-center justify-between">
                                <i data-lucide="server" class="h-5 w-5 text-primary" aria-hidden="true"></i>
                                <span class="font-mono text-[10px] tracking-wider text-muted uppercase">REST /
                                    GraphQL</span>
                            </div>
                            <p class="mt-3 font-semibold text-text-dark">API & Microservices Architecture</p>
                            <p class="mt-1 text-xs leading-5 text-muted">Scalable backend architecture</p>
                        </div>

                        <div
                            class="group/layer rounded-2xl border border-gray-200/80 bg-white p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-primary/30 hover:shadow-md">
                            <div class="flex items-center justify-between">
                                <i data-lucide="database" class="h-5 w-5 text-primary" aria-hidden="true"></i>
                                <span
                                    class="font-mono text-[10px] tracking-wider text-muted uppercase">Multi-Region</span>
                            </div>
                            <p class="mt-3 font-semibold text-text-dark">Cloud Database</p>
                            <p class="mt-1 text-xs leading-5 text-muted">Secure data storage</p>
                        </div>
                    </div>

                    {{-- Footer Badges --}}
                    <div class="mt-4 flex flex-wrap items-center gap-2 border-t border-gray-100 pt-4">
                        <span
                            class="inline-flex items-center gap-1.5 rounded-full bg-brand-light px-3 py-1.5 text-xs font-semibold text-primary-dark">
                            <i data-lucide="zap" class="h-3.5 w-3.5 text-primary" aria-hidden="true"></i>
                            Optimized performance system
                        </span>
                        <span
                            class="inline-flex items-center gap-1.5 rounded-full bg-brand-light px-3 py-1.5 text-xs font-semibold text-primary-dark">
                            <i data-lucide="git-branch" class="h-3.5 w-3.5 text-primary" aria-hidden="true"></i>
                            Automated CI/CD
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
