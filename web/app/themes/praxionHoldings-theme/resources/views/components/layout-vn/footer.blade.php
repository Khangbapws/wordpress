<footer class="border-t border-gray-200/70 bg-white">
    <div class="container-page py-14 lg:py-16">
        <div
            class="grid grid-cols-1 gap-12
           lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.35fr)]
           lg:gap-16
           xl:gap-28">
            {{-- =========================================================
         COLUMN 1: BRAND
         ========================================================= --}}
            <div class="max-w-md">
                <a href="{{ home_url('/') }}"
                    class="inline-flex rounded-sm text-2xl font-bold tracking-tight text-primary no-underline"
                    aria-label="PRX Holdings home">
                    PRX Holdings
                </a>

                <p class="mt-5 max-w-sm text-base leading-7 text-muted">
                    Kiến tạo giải pháp số. Nâng tầm doanh nghiệp. Thúc đẩy tăng trưởng.
                </p>
            </div>


            {{-- =========================================================
         RIGHT SIDE: THREE NAVIGATION COLUMNS
         ========================================================= --}}
            <div
                class="grid grid-cols-1 gap-10
               sm:grid-cols-3 sm:gap-x-8
               lg:grid-cols-[1.1fr_0.8fr_1fr]
               lg:gap-x-6
               xl:gap-x-10">

                {{-- COLUMN 2: Khám phá --}}
                <nav aria-label="Explore">
                    <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-primary">
                        Khám phá
                    </h2>

                    <ul class="mt-5 space-y-1">
                        <li>
                            <a href="{{ home_url('/giai-phap') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Giải pháp
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/dich-vu') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Dịch vụ
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/ve-chung-toi') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Về chúng tôi
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/dich-vu-bo-sung') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Dịch vụ bổ sung
                            </a>
                        </li>
                    </ul>
                </nav>


                {{-- COLUMN 3: Pháp lý --}}
                <nav aria-label="Legal">
                    <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-primary">
                        Pháp lý
                    </h2>

                    <ul class="mt-5 space-y-1">
                        <li>
                            <a href="{{ home_url('/dieu-khoan-dich-vu') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Điều khoản dịch vụ
                            </a>
                        </li>

                        <li>
                            <a href="{{ home_url('/chinh-sach-bao-mat') }}"
                                class="inline-flex min-h-11 items-center text-sm font-medium text-muted transition-colors duration-200 hover:text-primary">
                                Chính sách bảo mật
                            </a>
                        </li>
                    </ul>
                </nav>


                {{-- COLUMN 4: Liên hệ --}}
                <div>
                    <h2 class="text-sm font-bold uppercase tracking-[0.14em] text-primary">
                        Liên hệ
                    </h2>

                    <p class="mt-5 max-w-xs text-sm leading-6 text-muted">
                        Bạn đang ấp ủ một dự án mới? Hãy kết nối ngay để cùng tìm ra giải pháp tối ưu cho doanh nghiệp
                        của bạn.
                    </p>

                    <a href="{{ home_url('/lien-he') }}"
                        class="mt-3 inline-flex min-h-10 items-center gap-2 text-sm font-semibold text-primary transition-colors duration-200 hover:text-primary-dark">
                        Liên hệ ngay

                        <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                    </a>

                    {{-- Social links --}}
                    <div class="mt-6 flex items-center gap-3">
                        <a href="https://www.facebook.com/profile.php?id=61593519958952" target="_blank"
                            rel="noopener noreferrer" aria-label="PRX Holdings on Facebook"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/facebook.svg') }}" alt="Facebook"
                                class="h-6 w-6 shrink-0" />
                        </a>

                        <a href="https://www.instagram.com/prxholdings777/" target="_blank" rel="noopener noreferrer"
                            aria-label="PRX Holdings on Instagram"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/instagram.svg') }}" alt="Instagram"
                                class="h-6 w-6 shrink-0" />
                        </a>

                        <a href="https://x.com/prxholdings" target="_blank" rel="noopener noreferrer"
                            aria-label="PRX Holdings on X"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/social.svg') }}" alt="X"
                                class="h-6 w-6 shrink-0" />
                        </a>

                        <a href="https://www.linkedin.com/company/prx-holdings/" target="_blank"
                            rel="noopener noreferrer" aria-label="PRX Holdings on LinkedIn"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-200 bg-white transition-all duration-200 hover:-translate-y-0.5 hover:border-primary/30 hover:bg-brand-light">
                            <img src="{{ Vite::asset('resources/images/contact/linkedin.svg') }}" alt="LinkedIn"
                                class="h-6 w-6 shrink-0" />
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-12 border-t border-gray-200/70 pt-7">
            <p class="text-sm text-muted select-none" oncopy="return false;" oncut="return false;"
                oncontextmenu="return false;">
                © {{ date('Y') }} PRX Holdings. Bảo lưu mọi quyền.
                CÔNG TY TNHH PRX. Tổ 10, Tổ dân phố Vĩnh Châu, Phường Tây Nha Trang, Tỉnh Khánh Hòa, Việt Nam.
                Mã số thuế: 4202068209, cấp ngày 28/09/2026 bởi Phòng Quản lý Doanh nghiệp – Sở Tài chính tỉnh Khánh
                Hòa.
            </p>
        </div>
    </div>
</footer>
