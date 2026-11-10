<section aria-labelledby="home-showcase-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid items-start gap-12 lg:grid-cols-[0.72fr_1.28fr] lg:gap-16">
            <div class="lg:sticky lg:top-28">
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Minh chứng thực thi.</p>
                <h2 id="home-showcase-title"
                    class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                    Chúng tôi tự phát triển các sản phẩm phức tạp của chính mình.
                </h2>
                <p class="mt-5 text-lg leading-8 text-muted">
                    Gặp gỡ sản phẩm chủ lực của chúng tôi: nền tảng tất-cả-trong-một được thiết kế chuyên biệt để vận hành doanh nghiệp Beauty & Spa.
                </p>
                <p
                    class="mt-5 rounded-2xl border border-primary/15 bg-brand-light p-4 text-sm leading-6 text-primary-dark">
                    Được hình thành ý tưởng, thiết kế kiến trúc và phát triển 100% nội bộ. Nổi bật với tính năng đồng bộ theo thời gian thực, logic đa chi nhánh và ứng dụng di động đa nền tảng.
                </p>
                <x-ui.button :href="home_url('/solution#owner-dashboard')" class="mt-8">Mở bản xem trước đầy đủ của sản phẩm</x-ui.button>
            </div>

            <div class="dashboard-preview overflow-hidden rounded-3xl border border-gray-200/80 bg-white shadow-2xl shadow-black/[0.07] sm:rounded-4xl"
                data-prx-dashboard-animation>
                <div
                    class="flex flex-col gap-4 border-b border-gray-200/80 bg-surface px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                    <div class="flex items-center gap-3">
                        <span
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-sm font-bold text-white">PRX</span>
                        <div>
                            <p class="font-semibold text-text-dark">Không gian làm việc cho chủ sở hữu</p>
                            <p class="text-xs text-muted">Không gian làm việc bản demo · dữ liệu mẫu</p>
                        </div>
                    </div>
                    <span
                        class="inline-flex w-fit items-center gap-2 rounded-full border border-gray-200 bg-white px-3 py-2 text-xs font-semibold text-text-dark">
                        <i data-lucide="git-branch" class="h-4 w-4 text-primary" aria-hidden="true"></i>
                        Tất cả chi nhánh
                    </span>
                </div>

                <div class="p-4 sm:p-6 lg:p-8">
                    <div class="grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
                        @foreach ([['Revenue before tax', 'US$12,000'], ['Revenue after tax', 'US$10,800'], ['Expenses', 'US$6,300'], ['Resulting profit', 'US$4,500']] as [$label, $value])
                            <article class="rounded-2xl border border-gray-200/80 bg-surface p-4">
                                <p class="text-xs leading-5 text-muted">{{ $label }}</p>
                                <p class="mt-2 text-lg font-bold text-text-dark">{{ $value }}</p>
                                <p class="mt-1 text-[0.65rem] font-semibold text-primary uppercase">Demo value</p>
                            </article>
                        @endforeach
                    </div>

                    <div class="mt-5 grid gap-5 xl:grid-cols-[1.08fr_0.92fr]">
                        <article class="rounded-2xl border border-gray-200/80 p-5">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="font-semibold text-text-dark">Lịch hẹn hôm nay</h3>
                                    <p class="mt-1 text-xs text-muted">Lịch trình mẫu</p>
                                </div>
                                <i data-lucide="calendar-days" class="h-5 w-5 text-primary" aria-hidden="true"></i>
                            </div>
                            <ul class="mt-4 divide-y divide-gray-200/80">
                                @foreach ([['09:00', 'Hair colour', 'Staff A · Branch A'], ['11:30', 'Skin-care service', 'Staff B · Branch B'], ['14:00', 'Hair service', 'Staff C · Branch A']] as [$time, $service, $meta])
                                    <li class="grid grid-cols-[3.25rem_1fr] gap-3 py-3">
                                        <time class="text-sm font-semibold text-primary-dark">{{ $time }}</time>
                                        <div>
                                            <p class="text-sm font-semibold text-text-dark">{{ $service }}</p>
                                            <p class="mt-0.5 text-xs text-muted">{{ $meta }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </article>

                        <div class="space-y-4">
                            <article class="rounded-2xl border border-amber-300 bg-amber-50 p-5">
                                <div class="flex items-start gap-3">
                                    <i data-lucide="bell-ring" class="mt-0.5 h-5 w-5 shrink-0 text-amber-800"
                                        aria-hidden="true"></i>
                                    <div>
                                        <h3 class="font-semibold text-amber-950">Thông báo sắp hết hàng</h3>
                                        <p class="mt-1 text-sm text-amber-900">Dầu gội · 4 đơn vị mẫu</p>
                                    </div>
                                </div>
                            </article>
                            <article class="rounded-2xl bg-text-dark p-5 text-white">
                                <p class="text-xs font-semibold tracking-[0.14em] text-brand-mint uppercase">Ứng dụng di động dành cho chủ doanh nghiệp & nhân viên</p>
                                <h3 class="mt-2 font-semibold">Lịch hẹn mẫu tiếp theo lúc 09:00</h3>
                                <p class="mt-2 text-sm leading-6 text-white/70">Cung cấp ngữ cảnh cốt lõi về lịch trình, tồn kho và mức độ giữ chân khách hàng ngay cả khi rời xa máy tính.</p>
                            </article>
                        </div>
                    </div>

                    <div class="mt-5 grid gap-3 sm:grid-cols-2">
                        <div class="rounded-2xl bg-brand-light p-4">
                            <p class="text-xs text-muted">Dịch vụ xu hướng · bản demo</p>
                            <p class="mt-1 font-semibold text-text-dark">Nhuộm tóc · dịch vụ được đặt nhiều</p>
                        </div>
                        <div class="rounded-2xl bg-brand-light p-4">
                            <p class="text-xs text-muted">Chu kỳ giữ chân khách hàng · bản demo</p>
                            <p class="mt-1 font-semibold text-text-dark">Nhuộm tóc · nhắc lịch tuần 3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
