<section id="vibe-coding" aria-labelledby="vibe-coding-title" class="scroll-mt-24 bg-white py-20 sm:py-24 lg:py-28">
    <div class="container-page">

        {{-- Main content --}}
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-[minmax(0,1fr)_minmax(0,0.9fr)] lg:gap-20">

            {{-- Introduction --}}
            <div class="max-w-2xl">
                <x-ui.badge>
                    Technical Guidance
                </x-ui.badge>

                <h2 id="vibe-coding-title"
                    class="mt-5 text-3xl font-bold leading-[1.12] tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                    Xây dựng cùng <span class="text-primary">AI.</span>
                    <span class="lg:block">Nhận hỗ trợ chuyên môn ngay khi bạn cần.</span>
                </h2>

                <p class="mt-6 text-base leading-7 text-muted sm:text-lg sm:leading-8">
                    Biến ý tưởng thành phần mềm hoạt động thực tế với sự hướng dẫn 1 kèm 1 từ các nhà phát triển giàu kinh nghiệm—từ nguyên mẫu đầu tiên cho đến khi đưa vào vận hành thực tế.
                </p>

                <p class="mt-4 text-base leading-7 text-muted">
                    Nhận hướng dẫn chuyên môn cho việc phát triển hỗ trợ bởi AI, các sản phẩm khả thi tối thiểu (MVP) và các thử thách kỹ thuật—mà không cần cam kết thực hiện toàn bộ dự án phát triển.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                    <x-ui.button href="#vibe-coding-pricing" variant="primary" class="gap-2">
                        <span>Khám phá các Gói theo Giờ</span>
                        <i data-lucide="arrow-down" class="h-4 w-4" aria-hidden="true"></i>
                    </x-ui.button>

                    <x-ui.button :href="home_url('/contact')" variant="text" class="gap-2">
                        <span>Đặt câu hỏi</span>
                        <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                    </x-ui.button>
                </div>

                <p class="mt-4 text-xs leading-5 text-muted">
                    Các buổi làm việc tập trung vào việc hướng dẫn và hợp tác. Việc bàn giao dự án được lập phạm vi riêng.
                </p>
            </div>


            {{-- What we can work on --}}
            <div class="rounded-3xl border border-gray-200 bg-brand-light p-6 sm:p-8">
                <p class="text-sm font-semibold uppercase tracking-[0.18em] text-primary">
                    Những gì chúng tôi có thể hỗ trợ
                </p>

                <h3 class="mt-3 text-xl font-bold tracking-tight text-text-dark sm:text-2xl">
                    Vượt qua rào cản.
                </h3>

                <p class="mt-3 text-sm leading-6 text-muted">
                    Mang đến một nhiệm vụ thực tế, một câu hỏi kỹ thuật hoặc một tính năng mà bạn đang muốn xây dựng..
                </p>

                <div class="mt-7 grid grid-cols-1 gap-5 sm:grid-cols-2">

                    @foreach ([
        [
            'icon' => 'messages-square',
            'title' => 'AI Coding Guidance',
            'copy' => 'Improve prompts, workflows, and your use of AI-assisted development tools.',
        ],
        [
            'icon' => 'bug',
            'title' => 'Debugging & Troubleshooting',
            'copy' => 'Investigate errors, understand unexpected behavior, and identify practical fixes.',
        ],
        [
            'icon' => 'git-branch',
            'title' => 'Code & Architecture Review',
            'copy' => 'Review generated code, structure, maintainability, and suitable next steps.',
        ],
        [
            'icon' => 'rocket',
            'title' => 'Deployment & Next Steps',
            'copy' => 'Get guidance on configuration, deployment, and preparing your project for further development.',
        ],
    ] as $item)
                        <div class="rounded-2xl border border-gray-200/80 bg-white p-5">
                            <span
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-light text-primary"
                                aria-hidden="true">
                                <i data-lucide="{{ $item['icon'] }}" class="h-5 w-5"></i>
                            </span>

                            <h4 class="mt-4 text-base font-bold text-text-dark">
                                {{ $item['title'] }}
                            </h4>

                            <p class="mt-2 text-sm leading-6 text-muted">
                                {{ $item['copy'] }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


        {{-- Who this is for --}}
        <div class="mt-16 border-t border-gray-200 pt-10 sm:mt-20 sm:pt-12">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3 md:gap-8">

                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.16em] text-primary">
                        01 / Nhà sáng lập
                    </p>
                    <h3 class="mt-3 text-lg font-bold text-text-dark">
                        Tự xây dựng ý tưởng của riêng bạn
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Nhận hướng dẫn kỹ thuật trong khi kiểm chứng ý tưởng, phát triển bản mẫu hoặc xây dựng sản phẩm khả thi tối thiểu (MVP).
                    </p>
                </div>

                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.16em] text-primary">
                        02 / Chuyên gia
                    </p>
                    <h3 class="mt-3 text-lg font-bold text-text-dark">
                        Học qua thực hành
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Hiểu rõ cách hoạt động của quy trình phát triển hỗ trợ bằng AI trong khi vẫn tiến hành triển khai một dự án thực tế.
                    </p>
                </div>

                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.16em] text-primary">
                        03 / Nhà phát triển
                    </p>
                    <h3 class="mt-3 text-lg font-bold text-text-dark">
                        Giải quyết các vấn đề phức tạp
                    </h3>
                    <p class="mt-2 text-sm leading-6 text-muted">
                        Có thêm một góc nhìn giàu kinh nghiệm về xử lý lỗi (debugging), chất lượng mã nguồn và các quyết định kỹ thuật.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
