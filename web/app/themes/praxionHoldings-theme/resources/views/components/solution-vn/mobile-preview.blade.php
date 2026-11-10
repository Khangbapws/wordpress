<section aria-labelledby="mobile-experience-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="grid items-center gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">
            <div>
                <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">
                    Phát triển ứng dụng web và di động · Bản dùng thử
                </p>

                <h2 id="mobile-experience-title"
                    class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                    Trải nghiệm được thiết kế riêng cho khách hàng và đội ngũ vận hành · Bản dùng thử
                </h2>

                <p class="mt-5 text-lg leading-8 text-muted">
                    Chúng tôi xây dựng các ứng dụng di động mở rộng nền tảng của bạn, giúp các công cụ và thông tin thiết yếu luôn sẵn sàng truy cập mọi lúc mọi nơi công việc diễn ra · Bản dùng thử
                </p>

                <ul class="mt-8 space-y-4">
                    @foreach ([['calendar-clock', 'Review upcoming work and staff schedules.'], ['package-search', 'See low-stock information and notifications.'], ['refresh-cw', 'Follow retention reminders and service-cycle activity.'], ['git-branch-plus', 'Keep branch context visible across unlimited shop branches.']] as [$icon, $copy])
                        <li class="flex items-start gap-3">
                            <span
                                class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-light text-primary"><i
                                    data-lucide="{{ $icon }}" class="h-4 w-4" aria-hidden="true"></i></span>
                            <p class="leading-7 text-muted">{{ $copy }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mx-auto w-full max-w-2xl rounded-3xl bg-brand-light p-5 sm:p-8">
                <div class="grid items-center gap-6 sm:grid-cols-[minmax(0,1fr)_minmax(13rem,0.72fr)]">
                    <div
                        class="rounded-\[2rem\] border-[0.45rem] border-text-dark bg-white p-4 shadow-2xl shadow-primary/10">
                        <div class="flex items-center justify-between border-b border-gray-200/80 pb-4">
                            <div>
                                <p class="text-xs text-muted">Ứng dụng dành cho chủ doanh nghiệp và nhân viên · Bản dùng thử</p>
                                <p class="font-semibold text-text-dark">Hôm nay · Bản dùng thử</p>
                            </div>
                            <span
                                class="flex h-9 w-9 items-center justify-center rounded-full bg-brand-light text-primary"><i
                                    data-lucide="bell" class="h-4 w-4" aria-hidden="true"></i></span>
                        </div>
                        <div class="mt-4 rounded-2xl bg-primary p-5 text-white">
                            <p class="text-xs text-white/75">Lịch hẹn mẫu tiếp theo · Bản dùng thử</p>
                            <p class="mt-2 text-lg font-semibold">09:00 · Nhuộm tóc · Bản dùng thử</p>
                            <p class="mt-1 text-xs text-white/75">Chi nhánh mẫu A</p>
                        </div>
                        <div class="mt-4 grid grid-cols-2 gap-3">
                            <div class="rounded-xl bg-surface p-3">
                                <p class="text-xs text-muted">Lịch làm việc của nhân viên</p>
                                <p class="mt-1 text-xl font-bold text-text-dark">5</p>
                                <p class="text-[0.65rem] font-semibold text-primary uppercase">Bản dùng thử</p>
                            </div>
                            <div class="rounded-xl bg-amber-50 p-3">
                                <p class="text-xs text-amber-900">Sắp hết hàng</p>
                                <p class="mt-1 text-sm font-bold text-amber-950">Dầu gội</p>
                                <p class="text-[0.65rem] font-semibold text-amber-800 uppercase">Bản dùng thử</p>
                            </div>
                        </div>
                        <div class="mt-3 rounded-xl border border-gray-200/80 p-3">
                            <p class="text-xs font-semibold text-text-dark">Nhắc nhở giữ chân khách hàng</p>
                            <p class="mt-1 text-xs leading-5 text-muted">Chu kỳ nhuộm tóc · Tuần 3 · Bản demo</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="rounded-2xl bg-white p-5 shadow-sm">
                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-light text-primary"><i
                                    data-lucide="users" class="h-5 w-5" aria-hidden="true"></i></span>
                            <h3 class="mt-4 font-semibold text-text-dark">Được sử dụng chung bởi chủ doanh nghiệp và nhân viên · Bản dùng thử</h3>
                            <p class="mt-2 text-sm leading-6 text-muted">Một ứng dụng di động vận hành dành cho đội ngũ kinh doanh</p>
                        </div>
                        <div class="rounded-2xl bg-text-dark p-5 text-white">
                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-brand-mint"><i
                                    data-lucide="user-round-check" class="h-5 w-5" aria-hidden="true"></i></span>
                            <h3 class="mt-4 font-semibold">Một ứng dụng đặt lịch riêng biệt</h3>
                            <p class="mt-2 text-sm leading-6 text-white/70">Khách hàng đặt lịch sử dụng ứng dụng di động riêng của họ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
