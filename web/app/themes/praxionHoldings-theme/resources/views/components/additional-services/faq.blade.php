@php
    $faqs = [
        [
            'question' => 'Who are these additional services for?',
            'answer' =>
                'Technical Guidance is designed for individuals, founders, professionals, and developers who need direct support from an experienced developer. Brand & Creative is intended for businesses that need professional photography or graphic design for their brand, store, products, or campaigns.',
        ],
        [
            'question' => 'What is included in a Vibe Coding session?',
            'answer' =>
                'Sessions may cover AI-assisted coding workflows, debugging, code review, architecture questions, feature implementation guidance, and deployment troubleshooting. The exact focus is agreed before the session. Purchasing developer time does not guarantee that a complete application or feature will be delivered within that time.',
        ],
        [
            'question' => 'Do I need programming experience to book a Vibe Coding session?',
            'answer' =>
                'Not necessarily. Founders and beginners can get help understanding AI-assisted development and working through a practical project. More advanced sessions can focus on code quality, debugging, architecture, or deployment. Please describe your experience and goals when booking so we can assess whether the session is a good fit.',
        ],
        [
            'question' => 'How do I book and use a Vibe Coding package?',
            'answer' =>
                'Choose a package and tell us what you need help with. We will confirm availability, the session format, and the booking details with you. For multi-hour packages, the number of sessions, scheduling arrangements, and any validity period should be confirmed before purchase.',
        ],
        [
            'question' => 'Where is brand photography available?',
            'answer' =>
                'Our intended service locations are Hanoi and Nha Trang, subject to scheduling and local production availability. Projects outside the agreed service area may require additional travel costs. Contact us with your location and preferred date so we can confirm availability.',
        ],
        [
            'question' => 'What will I receive after a photography session?',
            'answer' =>
                'The quotation will specify the number of selected, edited images, file formats, delivery method, and expected turnaround. Additional images, RAW files, prints, video, models, props, or other production requirements should be agreed separately if they are needed.',
        ],
        [
            'question' => 'Can I add graphic design to my photography package?',
            'answer' =>
                'Yes. Graphic design can be scoped alongside photography for social media content, promotional graphics, menus, service price lists, and other agreed brand materials. We will confirm the design deliverables, formats, revision rounds, and price in your quotation.',
        ],
        [
            'question' => 'How much do the services cost?',
            'answer' =>
                'Vibe Coding packages have proposed fixed prices based on the amount of developer guidance time. Photography and graphic design prices are starting estimates; the final quotation depends on the brief, location, deliverables, and production requirements. Any additional costs should be confirmed before work begins.',
        ],
        [
            'question' => 'Can PRX help with a larger software project as well?',
            'answer' =>
                'Yes. If your needs go beyond hourly technical guidance and require a complete website, mobile application, custom software solution, or system integration, we can discuss the project separately and determine an appropriate scope and delivery approach.',
        ],
    ];
@endphp

<section id="additional-services-faq" aria-labelledby="additional-services-faq-title"
    class="bg-white py-20 sm:py-24 lg:py-28">
    <div class="container-page">

        <div class="grid grid-cols-1 gap-10 lg:grid-cols-[minmax(0,0.75fr)_minmax(0,1.25fr)] lg:gap-20">

            {{-- Intro --}}
            <div class="max-w-lg">
                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-primary sm:text-sm">
                    Frequently Asked Questions
                </p>

                <h2 id="additional-services-faq-title"
                    class="mt-4 text-3xl font-semibold leading-[1.12] tracking-tight text-text-dark sm:text-4xl lg:text-5xl">
                    Questions before getting started?
                </h2>

                <p class="mt-5 text-base leading-7 text-muted sm:text-lg">
                    Find out how our technical guidance, photography,
                    and creative services work before choosing the
                    right option for your needs.
                </p>

                <div class="mt-7">
                    <x-ui.button :href="home_url('/contact')" variant="secondary" class="gap-2">
                        <span>Contact Our Team</span>

                        <i data-lucide="arrow-up-right" class="h-4 w-4" aria-hidden="true"></i>
                    </x-ui.button>
                </div>
            </div>



            {{-- Accordion --}}
            <div x-data="{ openFaq: null }" class="faq-list divide-y divide-gray-200/80 border-y border-gray-200/80">
                @foreach ($faqs as $index => $faq)
                    <article x-bind:class="openFaq === {{ $index }} ? 'bg-brand-light/30' : 'bg-transparent'"
                        class="faq-item px-4 transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] sm:px-5">
                        <h3>
                            <button id="additional-faq-trigger-{{ $index }}" type="button"
                                x-on:click="openFaq = openFaq === {{ $index }} ? null : {{ $index }}"
                                x-bind:aria-expanded="openFaq === {{ $index }}"
                                aria-controls="additional-faq-panel-{{ $index }}"
                                class="group flex min-h-16 w-full cursor-pointer items-center justify-between gap-5 py-5 text-left">
                                {{-- Question --}}
                                <span
                                    class="text-lg font-semibold text-text-dark transition-colors duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] group-hover:text-primary-dark sm:text-xl">
                                    {{ $faq['question'] }}
                                </span>

                                {{-- Animated toggle icon --}}
                                <span
                                    x-bind:class="openFaq === {{ $index }} ?
                                        'bg-primary text-white shadow-sm' :
                                        'bg-brand-light text-primary'"
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-[background-color,color,box-shadow] duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]"
                                    aria-hidden="true">
                                    <i data-lucide="plus"
                                        x-bind:class="openFaq === {{ $index }} ? 'rotate-45' : 'rotate-0'"
                                        class="h-5 w-5 origin-center transform-gpu transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]"
                                        aria-hidden="true"></i>
                                </span>
                            </button>
                        </h3>

                        {{-- Animated answer --}}
                        <div id="additional-faq-panel-{{ $index }}" role="region"
                            aria-labelledby="additional-faq-trigger-{{ $index }}"
                            x-show="openFaq === {{ $index }}" x-collapse.duration.500ms x-cloak>
                            <p class="max-w-2xl pb-6 pr-12 text-sm leading-7 text-muted sm:text-base">
                                {{ $faq['answer'] }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>


        </div>
    </div>
</section>
