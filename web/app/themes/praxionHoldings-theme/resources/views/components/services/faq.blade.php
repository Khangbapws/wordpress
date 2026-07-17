<section class="py-32">
    <div class="container-page">
        {{-- Heading --}}
        <div class="mx-auto max-w-3xl text-center">
            <x-ui.badge>
                Support
            </x-ui.badge>
            <h2 class="mt-6 text-5xl font-bold tracking-tight text-text-dark">
                Frequently asked
                <span class="text-primary">
                    questions
                </span>
            </h2>
            <p class="mt-6 text-lg leading-8 text-muted">
                Everything you need to know before choosing PRX Holdings.
            </p>
        </div>

        {{-- Accordion --}}
        <div class="faq-list mx-auto mt-20 max-w-3xl">
            @php
                $items = [
                    [
                        'question' => 'What industries do you support?',
                        'answer' => 'We specialize in Beauty, Spa, Clinic, Restaurant and Coffee businesses.',
                    ],
                    [
                        'question' => 'Can I request custom features?',
                        'answer' => 'Yes. We build custom modules tailored to your workflow.',
                    ],
                    [
                        'question' => 'How long does implementation take?',
                        'answer' => 'Most projects are completed within 2–3 weeks depending on complexity.',
                    ],
                    [
                        'question' => 'Can I migrate from another software?',
                        'answer' => 'Yes. We support secure data migration from most existing platforms.',
                    ],
                    [
                        'question' => 'Do you provide technical support?',
                        'answer' => 'Absolutely. Our engineers provide continuous maintenance and updates.',
                    ],
                ];
            @endphp

            @foreach ($items as $item)
                <div x-data="{ open: false }" class="faq-item border-b border-gray-200/70 py-2">
                    <button @click="open = !open" class="group flex w-full items-center justify-between py-6 text-left">
                        <span
                            class="text-xl font-semibold tracking-tight transition-colors duration-300 group-hover:text-primary">
                            {{ $item['question'] }}
                        </span>

                        {{-- Dùng 1 icon duy nhất và xoay 45 độ để thành dấu X --}}
                        <div class="flex h-6 w-6 items-center justify-center">
                            <i data-lucide="plus"
                                class="h-6 w-6 text-muted transition-transform duration-300 ease-in-out"
                                :class="open ? 'rotate-45 text-primary' : ''">
                            </i>
                        </div>
                    </button>

                    {{-- Thêm x-cloak vào đây để ẩn khi Alpine chưa load --}}
                    <div x-collapse x-show="open" x-cloak>
                        <p class="pb-8 pr-10 text-[17px] leading-8 text-muted">
                            {{ $item['answer'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bottom CTA --}}
        <div class="mt-24 text-center">
            <p class="text-lg text-muted">
                Still have questions?
            </p>
            <h3 class="mt-2 text-3xl font-bold tracking-tight">
                Talk with our experts.
            </h3>
            <div class="mt-8">
                <x-ui.button href="/contact" variant="primary">
                    Contact Sales
                </x-ui.button>
            </div>
        </div>
    </div>
</section>
