<section aria-labelledby="home-capabilities-title" data-capabilities-section
    class="relative isolate overflow-hidden bg-surface py-20 sm:py-24 lg:py-32">
    {{-- Ánh sáng nền nhẹ tạo chiều sâu phân tách với section liền kề --}}
    <div class="pointer-events-none absolute inset-0 -z-10" aria-hidden="true">
        <div class="absolute top-1/4 -left-40 h-96 w-96 rounded-full bg-primary/6 blur-3xl"></div>
        <div class="absolute right-0 bottom-0 h-80 w-80 rounded-full bg-brand-mint/30 blur-3xl"></div>
    </div>

    <div class="container-page">
        <x-ui.section-header id="home-capabilities-title" eyebrow="Core Engineering Capabilities"
            title="Technical depth across the software spectrum."
            description="From initial architecture design to complex cloud deployments, we bring mature engineering workflows to every product we build." />

        <div data-bento-grid class="mt-12 grid gap-5 md:grid-cols-2 lg:mt-16 lg:grid-cols-3 lg:gap-6">
            <x-front-page.bento-card index="01" icon="cpu" tag="Enterprise Architecture"
                title="Custom Web Platforms" variant="dark" :wide="true" :tags="['High Concurrency', 'Multi-Tenant SaaS', 'Sub-50ms Latency']">
                Architecting resilient, secure, and scalable web applications engineered for high concurrency and
                complex business logic.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="02" icon="smartphone" tag="iOS & Android" title="Mobile Engineering"
                :tags="['Native & Cross-Platform', '60fps UI']">
                Native and cross-platform mobile apps built with clean architecture and smooth UI performance.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="03" icon="layers" tag="REST • GraphQL"
                title="System Integration & APIs" :tags="['Event-Driven', 'Real-Time Sync']">
                Developing robust REST/GraphQL APIs to connect fragmented systems and automate operations.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="04" icon="refresh-cw" tag="Zero-Downtime Migration"
                title="Legacy Modernization" :wide="true" :tags="['Microservices Refactor', 'Data Integrity', 'Incremental Rollout']">
                Refactoring monolithic architectures into modern frameworks without business disruption or downtime.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="05" icon="pen-tool" tag="Design Systems" title="Product UI/UX Design"
                :wide="true" :tags="['Interactive Prototyping', 'WCAG Accessibility', 'Conversion-Focused']">
                Translating complex domain requirements into intuitive, accessible, and conversion-focused product
                interfaces.
            </x-front-page.bento-card>

            <x-front-page.bento-card index="06" icon="shield-check" tag="Cloud & SecOps" title="DevOps & Security"
                variant="accent" :tablet-full="true" :tags="['Automated CI/CD', '24/7 Observability']">
                Automated CI/CD pipelines, containerization, and proactive cloud infrastructure monitoring.
            </x-front-page.bento-card>
        </div>
    </div>
</section>
