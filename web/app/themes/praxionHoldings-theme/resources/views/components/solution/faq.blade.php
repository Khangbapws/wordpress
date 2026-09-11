@php
    $items = [
        [
            'What types of software projects can PRX Holdings support?',
            'We can support custom web applications, mobile applications, business software, integrations, internal tools, and other software projects based on your requirements.',
        ],
        [
            'Can you work with an existing product or development team?',
            'Yes. We can support new products as well as existing software that requires additional engineering capacity or continued development.',
        ],
        [
            'Can PRX Holdings handle the entire development process?',
            'Depending on the engagement, we can support discovery, product definition, UI/UX, development, integration, launch, and continued improvement.',
        ],
        [
            'Can you build around our existing workflow?',
            'Yes. Our approach starts with your business requirements and workflows rather than forcing your team into a predefined product structure.',
        ],
        [
            'Can we start with a smaller scope?',
            'Yes. A project can begin with a discovery phase, prototype, defined feature set, or initial development scope before expanding further.',
        ],
        [
            'Do you provide ongoing support after launch?',
            'Yes. We can continue supporting maintenance, improvements, integrations, new features, and future development.',
        ],
    ];
@endphp

<section aria-labelledby="solution-faq-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Solution FAQ</p>
            <h2 id="solution-faq-title" class="mt-4 text-3xl font-bold text-text-dark sm:text-4xl lg:text-5xl">Understand
                the product boundaries.</h2>
        </div>

        <div x-data="{ openFaq: null }"
            class="faq-list mx-auto mt-12 max-w-3xl divide-y divide-gray-200/80 border-y border-gray-200/80">
            @foreach ($items as $index => [$question, $answer])
                <article x-bind:class="openFaq === {{ $index }} ? 'bg-brand-light/30' : 'bg-transparent'"
                    class="faq-item px-4 transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] sm:px-5">
                    <h3>
                        <button id="solution-faq-button-{{ $index }}" type="button"
                            x-on:click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}"
                            x-bind:aria-expanded="openFaq === {{ $index }}"
                            aria-controls="solution-faq-panel-{{ $index }}"
                            class="group flex min-h-16 w-full cursor-pointer items-center justify-between gap-5 py-5 text-left">
                            <span
                                class="text-lg font-semibold text-text-dark transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:text-primary-dark sm:text-xl">
                                {{ $question }}
                            </span>
                            <span
                                x-bind:class="openFaq === {{ $index }} ? 'bg-primary text-white shadow-sm' :
                                    'bg-brand-light text-primary'"
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-[background-color,color,box-shadow] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                                <i data-lucide="plus"
                                    class="h-5 w-5 origin-center transform-gpu transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform group-aria-expanded:rotate-45"
                                    aria-hidden="true"></i>
                            </span>
                        </button>
                    </h3>

                    <div id="solution-faq-panel-{{ $index }}" role="region"
                        aria-labelledby="solution-faq-button-{{ $index }}"
                        x-show="openFaq === {{ $index }}" x-collapse.duration.500ms>
                        <p class="max-w-2xl pb-6 pr-12 leading-7 text-muted">{{ $answer }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
