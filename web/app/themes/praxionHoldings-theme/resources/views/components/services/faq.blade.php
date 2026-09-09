@php
    $items = [
        [
            'Do I need a complete technical specification to start?',
            'No. Bring us your business problem or initial product vision. Our technical architects will help you define the scope, user journeys, and technical requirements during our discovery phase.',
        ],
        [
            'How do you determine project cost?',
            'We scope the specific requirements, architecture, and timeline of your project to provide a tailored estimate. You only pay for the engineering resources and expertise your product actually needs.',
        ],
        [
            'Can you integrate new software with our existing systems?',
            'Yes. We specialize in building secure APIs and middleware to connect modern applications with your existing ERPs, CRMs, or third-party platforms without disrupting current business operations.',
        ],
        [
            'Can you develop Zalo Mini Apps for our business?',
            'Yes, this is one of our core advantages. We engineer lightweight, high-conversion Mini Apps directly within the Zalo ecosystem, giving you access to millions of users without the friction of app store downloads.',
        ],
        [
            'Do you provide post-launch support and maintenance?',
            'Absolutely. We offer dedicated maintenance, cloud infrastructure monitoring, and continuous feature development to ensure your software scales reliably as your user base grows.',
        ],
    ];
@endphp
<section aria-labelledby="pricing-faq-title" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Pricing FAQ</p>
            <h2 id="pricing-faq-title" class="mt-4 text-3xl font-bold text-text-dark sm:text-4xl lg:text-5xl">Facts before
                you choose.</h2>
        </div>

        <div x-data="{
            openFaq: null,
            toggleFaq(index) {
                this.openFaq = this.openFaq === index ? null : index;
            },
            isOpen(index) {
                return this.openFaq === index;
            },
        }"
            class="faq-list mx-auto mt-12 max-w-3xl divide-y divide-gray-200/80 border-y border-gray-200/80">
            @foreach ($items as $index => [$question, $answer])
                <article x-bind:class="isOpen({{ $index }}) ? 'bg-brand-light/30' : 'bg-transparent'"
                    class="faq-item px-4 transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] sm:px-5">
                    <h3>
                        <button id="pricing-faq-button-{{ $index }}" type="button"
                            x-on:click="toggleFaq({{ $index }})" x-on:keydown.escape.stop="openFaq = null"
                            x-bind:aria-expanded="isOpen({{ $index }})"
                            aria-controls="pricing-faq-panel-{{ $index }}"
                            class="group flex min-h-16 w-full cursor-pointer items-center justify-between gap-5 py-5 text-left">
                            <span
                                class="text-lg font-semibold text-text-dark transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:text-primary-dark sm:text-xl">
                                {{ $question }}
                            </span>
                            <span
                                x-bind:class="isOpen({{ $index }}) ? 'bg-primary text-white shadow-sm' :
                                    'bg-brand-light text-primary'"
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-[background-color,color,box-shadow] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">
                                <i data-lucide="plus"
                                    class="h-5 w-5 origin-center transform-gpu transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] will-change-transform group-aria-expanded:rotate-45"
                                    aria-hidden="true"></i>
                            </span>
                        </button>
                    </h3>

                    <div id="pricing-faq-panel-{{ $index }}" role="region"
                        aria-labelledby="pricing-faq-button-{{ $index }}" x-show="isOpen({{ $index }})"
                        x-collapse.duration.500ms>
                        <p class="max-w-2xl pb-6 pr-12 leading-7 text-muted">{{ $answer }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
