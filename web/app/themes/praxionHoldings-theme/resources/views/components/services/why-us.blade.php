<section aria-labelledby="ai-comparison-title" class="bg-surface py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Total Cost of Ownership</p>
            <h2 id="ai-comparison-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl">
                AI accelerates code. We guarantee the product.
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                Generating code is fast. Ensuring that code meets security standards, handles edge cases, and scales
                reliably is where true engineering value is created.
            </p>
        </div>

        <div class="mx-auto mt-12 max-w-4xl" x-data="{ expanded: false }">
            <button @click="expanded = !expanded"
                class="w-full rounded-3xl border border-primary/20 bg-white p-8 text-left shadow-sm transition-all hover:border-primary/40 focus:outline-none focus:ring-2 focus:ring-primary/50">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-text-dark">AI Code Generation vs. Engineering Ownership</h3>
                        <p class="mt-2 text-sm text-muted">See how responsibilities shift when moving from generated
                            prototypes to production-ready software.</p>
                    </div>
                    <span
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-light text-primary">
                        <i data-lucide="chevron-down" class="h-5 w-5 transition-transform duration-300"
                            :class="expanded ? 'rotate-180' : ''"></i>
                    </span>
                </div>

                <div x-show="expanded" x-collapse.duration.400ms class="mt-8 border-t border-gray-100 pt-8">
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                        <div class="font-semibold text-text-dark sm:col-span-1">Architecture & UX</div>
                        <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-text-dark">AI
                                Tools:</span> Suggests generic patterns based on prompts.</div>
                        <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-primary">Our
                                Team:</span> Designed and validated around your specific business constraints.</div>

                        <div class="font-semibold text-text-dark sm:col-span-1">Security & Deployment</div>
                        <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-text-dark">AI
                                Tools:</span> Provides unverified scripts and instructions.</div>
                        <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-primary">Our
                                Team:</span> Hardens infrastructure and executes secure production deployment.</div>

                        <div class="font-semibold text-text-dark sm:col-span-1">Accountability</div>
                        <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-text-dark">AI
                                Tools:</span> None. You own the technical debt.</div>
                        <div class="text-sm text-muted sm:col-span-1"><span class="font-medium text-primary">Our
                                Team:</span> Total technical ownership and ongoing reliability.</div>
                    </div>
                </div>
            </button>
        </div>
    </div>
</section>
