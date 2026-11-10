<section aria-labelledby="ai-comparison-title" class="bg-surface py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Tổng chi phí Sở hữu</p>
            <h2 id="ai-comparison-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl">
                Tăng tốc bằng AI. Đảm bảo bằng chất lượng sản phẩm.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                Tạo ra mã nguồn thì nhanh. Nhưng việc đảm bảo mã nguồn đó đạt tiêu chuẩn bảo mật, xử lý trơn tru mọi trường hợp biên và vận hành ổn định ở quy mô lớn mới chính là nơi tạo ra giá trị kỹ thuật thực sự.
            </p>
        </div>

        <div class="mx-auto mt-12 max-w-4xl" x-data="{ expanded: false }">
            <button @click="expanded = !expanded"
                class="w-full rounded-3xl border border-primary/20 bg-white p-8 text-left shadow-sm transition-[border-color,box-shadow] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] hover:border-primary/40 focus:outline-none focus:ring-2 focus:ring-primary/50">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-text-dark">Lập trình bằng AI và Trách nhiệm Kỹ thuật</h3>
                        <p class="mt-2 text-sm text-muted">Theo dõi sự dịch chuyển về trách nhiệm khi chuyển từ bản mẫu (prototype) tạo bởi AI sang phần mềm vận hành thực tế (production-ready).</p>
                    </div>
                    <span
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-light text-primary">
                        <i data-lucide="chevron-down"
                            class="h-5 w-5 transform-gpu transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]"
                            :class="expanded ? 'rotate-180' : ''"></i>
                    </span>
                </div>

                <div x-show="expanded" x-collapse.duration.500ms class="overflow-hidden">
                    <div class="mt-8 border-t border-gray-100 pt-8">
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div class="font-semibold text-text-dark sm:col-span-1">Kiến trúc Hệ thống & Trải nghiệm Người dùng</div>
                            <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-text-dark">Công cụ Trí tuệ Nhân tạo:</span> Đề xuất các mô hình mẫu cơ bản dựa trên câu lệnh (prompt).</div>
                            <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-primary">Đội ngũ Chuyên gia:</span> Được thiết kế và kiểm chứng tối ưu theo đúng điều kiện và giới hạn vận hành riêng của doanh nghiệp.</div>

                            <div class="font-semibold text-text-dark sm:col-span-1">Bảo mật & Triển khai Hạ tầng</div>
                            <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-text-dark">Công cụ Trí tuệ Nhân tạo:</span> Cung cấp các kịch bản mã nguồn và chỉ dẫn chưa qua kiểm chứng.</div>
                            <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-primary">Đội ngũ Chuyên gia:</span> Gia cố hạ tầng an toàn và thực thi quy trình triển khai chuẩn vận hành</div>

                            <div class="font-semibold text-text-dark sm:col-span-1">Trách nhiệm Giải trình & Trách nhiệm Kỹ thuật</div>
                            <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-text-dark">Công cụ Trí tuệ Nhân tạo:</span> Không có. Doanh nghiệp của bạn phải tự gánh chịu nợ kỹ thuật</div>
                            <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-primary">Đội ngũ Chuyên gia:</span> Trách nhiệm kỹ thuật toàn diện và độ tin cậy vận hành dài hạn.</div>
                        </div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</section>
