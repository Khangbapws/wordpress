@php
    $tabs = [
        ['id' => 'overview', 'label' => 'Today', 'icon' => 'layout-dashboard'],
        ['id' => 'team', 'label' => 'Team', 'icon' => 'users'],
        ['id' => 'inventory', 'label' => 'Inventory', 'icon' => 'boxes'],
        ['id' => 'retention', 'label' => 'Retention', 'icon' => 'refresh-cw'],
    ];
@endphp

<section id="owner-dashboard" aria-labelledby="dashboard-heading" class="scroll-mt-24 py-20 sm:py-24 lg:py-32">
    <div class="container-page">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">
                Product engineering in practice
            </p>

            <h2 id="dashboard-heading"
                class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl lg:text-5xl">
                We build products, not just features.
            </h2>

            <p class="mt-5 text-lg leading-8 text-muted text-pretty">
                The interface below illustrates the kind of operational web application
                our team can design and develop — from dashboards and workforce tools
                to business intelligence and workflow management.
            </p>
        </div>

        <div class="dashboard-preview mt-12" data-prx-dashboard-animation x-data="prxDashboard">
            <div
                class="overflow-hidden rounded-3xl border border-gray-200/80 bg-white shadow-2xl shadow-black/[0.07] sm:rounded-4xl">
                <div
                    class="flex flex-col gap-4 border-b border-gray-200/80 bg-surface px-4 py-4 sm:px-6 lg:flex-row lg:items-center lg:justify-between">
                    <div class="flex items-center gap-3">
                        <span
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-sm font-bold text-white">PRX</span>
                        <div>
                            <p class="font-semibold text-text-dark">Owner workspace</p>
                            <p class="text-xs text-muted">Demo workspace · sample data</p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                        <label for="dashboard-branch" class="text-sm font-semibold text-text-dark">Branch view</label>
                        <select id="dashboard-branch" x-model="branch"
                            class="min-h-11 rounded-xl border border-gray-300 bg-white px-3 py-2 text-sm font-medium text-text-dark">
                            <option value="all">All branches</option>
                            <option value="branch-a">Sample Branch A</option>
                            <option value="branch-b">Sample Branch B</option>
                        </select>
                    </div>
                </div>

                <div class="grid min-w-0 lg:grid-cols-[13.5rem_minmax(0,1fr)]">
                    <aside class="border-b border-gray-200/80 bg-brand-light/55 p-4 lg:border-r lg:border-b-0 lg:p-5">
                        <div class="overflow-x-auto pb-1 lg:overflow-visible" role="region"
                            aria-label="Dashboard module navigation" tabindex="0">
                            <div class="flex min-w-max gap-2 lg:block lg:min-w-0 lg:space-y-2" role="tablist"
                                aria-label="Dashboard modules">
                                @foreach ($tabs as $index => $tab)
                                    <button type="button" role="tab" id="dashboard-tab-{{ $tab['id'] }}"
                                        aria-controls="dashboard-panel-{{ $tab['id'] }}"
                                        aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                                        x-bind:aria-selected="tab === '{{ $tab['id'] }}'"
                                        tabindex="{{ $index === 0 ? '0' : '-1' }}"
                                        x-bind:tabindex="tab === '{{ $tab['id'] }}' ? 0 : -1"
                                        x-on:click="selectTab('{{ $tab['id'] }}')"
                                        x-on:keydown.right.prevent="moveTab(1)" x-on:keydown.down.prevent="moveTab(1)"
                                        x-on:keydown.left.prevent="moveTab(-1)" x-on:keydown.up.prevent="moveTab(-1)"
                                        x-on:keydown.home.prevent="selectTab(tabs[0], true)"
                                        x-on:keydown.end.prevent="selectTab(tabs[tabs.length - 1], true)"
                                        x-bind:class="tab === '{{ $tab['id'] }}' ? 'bg-white text-primary-dark shadow-sm' :
                                            'text-muted hover:bg-white/70 hover:text-text-dark'"
                                        class="flex min-h-11 w-full items-center gap-3 rounded-xl px-4 py-3 text-left text-sm font-semibold transition-colors">
                                        <i data-lucide="{{ $tab['icon'] }}" class="h-4 w-4 shrink-0"
                                            aria-hidden="true"></i>
                                        {{ $tab['label'] }}
                                    </button>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-5 hidden rounded-2xl border border-primary/10 bg-white/80 p-4 lg:block">
                            <div class="flex items-center gap-2 text-sm font-semibold text-text-dark">
                                <i data-lucide="settings" class="h-4 w-4 text-primary" aria-hidden="true"></i>
                                Settings &amp; branches
                            </div>
                            <p class="mt-2 text-xs leading-5 text-muted">Access branch management within the owner
                                workspace.</p>
                        </div>
                    </aside>

                    <div class="min-w-0 bg-white p-4 sm:p-6 lg:p-8">
                        <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <p class="text-xs font-semibold tracking-[0.14em] text-primary uppercase">Current
                                    context</p>
                                <p class="mt-1 text-lg font-semibold text-text-dark" x-text="branchLabel">All branches
                                </p>
                            </div>
                            <span
                                class="inline-flex w-fit rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold text-muted">Sample
                                data</span>
                        </div>

                        <section id="dashboard-panel-overview" role="tabpanel" aria-labelledby="dashboard-tab-overview"
                            x-show="tab === 'overview'">
                            <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                                @foreach ([['Revenue before tax', 'US$12,000'], ['Revenue after tax', 'US$10,800'], ['Expenses', 'US$6,300'], ['Resulting profit', 'US$4,500']] as [$label, $value])
                                    <article class="rounded-2xl border border-gray-200/80 bg-surface p-4 sm:p-5">
                                        <p class="text-xs leading-5 text-muted">{{ $label }}</p>
                                        <p class="mt-2 text-xl font-bold tracking-tight text-text-dark">
                                            {{ $value }}</p>
                                        <p class="mt-1 text-[0.7rem] font-semibold text-primary uppercase">Demo value
                                        </p>
                                    </article>
                                @endforeach
                            </div>

                            <div class="mt-5 grid gap-5 xl:grid-cols-[1.15fr_0.85fr]">
                                <article class="rounded-2xl border border-gray-200/80 p-5">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <h3 class="font-semibold text-text-dark">Today's appointments</h3>
                                            <p class="mt-1 text-xs text-muted">8 sample bookings across all branches</p>
                                        </div>
                                        <i data-lucide="calendar-days" class="h-5 w-5 text-primary"
                                            aria-hidden="true"></i>
                                    </div>
                                    <ul class="mt-4 divide-y divide-gray-200/80">
                                        @foreach ([['09:00', 'Hair colour', 'Staff A · Branch A'], ['11:30', 'Skin-care service', 'Staff B · Branch B'], ['14:00', 'Hair service', 'Staff C · Branch A']] as [$time, $service, $meta])
                                            <li class="grid grid-cols-[3.25rem_1fr] gap-3 py-3">
                                                <time
                                                    class="text-sm font-semibold text-primary-dark">{{ $time }}</time>
                                                <div>
                                                    <p class="text-sm font-semibold text-text-dark">{{ $service }}
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-muted">{{ $meta }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </article>

                                <article class="rounded-2xl border border-gray-200/80 p-5">
                                    <h3 class="font-semibold text-text-dark">Staff workload</h3>
                                    <p class="mt-1 text-xs text-muted">5 staff scheduled · demo</p>
                                    <ul class="mt-5 space-y-4">
                                        @foreach ([['Staff A', '4 appointments', 'w-4/5'], ['Staff B', '3 appointments', 'w-3/5'], ['Staff C', '2 appointments', 'w-2/5']] as [$name, $load, $width])
                                            <li>
                                                <div class="flex justify-between gap-3 text-xs"><span
                                                        class="font-semibold text-text-dark">{{ $name }}</span><span
                                                        class="text-muted">{{ $load }}</span></div>
                                                <div class="mt-2 h-2 overflow-hidden rounded-full bg-gray-100">
                                                    <div class="{{ $width }} h-full rounded-full bg-primary">
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </article>
                            </div>

                            <article class="mt-5 rounded-2xl border border-gray-200/80 p-5">
                                <div class="flex items-center justify-between gap-4">
                                    <div>
                                        <h3 class="font-semibold text-text-dark">Trending services</h3>
                                        <p class="mt-1 text-xs text-muted">Popular and frequently booked · sample data
                                        </p>
                                    </div>
                                    <i data-lucide="trending-up" class="h-5 w-5 text-primary" aria-hidden="true"></i>
                                </div>
                                <ul class="mt-4 grid gap-3 sm:grid-cols-3">
                                    <li class="rounded-xl bg-brand-light p-4">
                                        <p class="text-sm font-semibold text-text-dark">Hair colour</p>
                                        <p class="mt-1 text-xs text-primary-dark">Frequently booked · demo</p>
                                    </li>
                                    <li class="rounded-xl bg-surface p-4">
                                        <p class="text-sm font-semibold text-text-dark">Skin-care service</p>
                                        <p class="mt-1 text-xs text-muted">Popular · demo</p>
                                    </li>
                                    <li class="rounded-xl bg-surface p-4">
                                        <p class="text-sm font-semibold text-text-dark">Hair service</p>
                                        <p class="mt-1 text-xs text-muted">Frequently booked · demo</p>
                                    </li>
                                </ul>
                            </article>
                        </section>

                        <section id="dashboard-panel-team" role="tabpanel" aria-labelledby="dashboard-tab-team"
                            x-show="tab === 'team'">
                            <div class="grid gap-5 xl:grid-cols-[1.1fr_0.9fr]">
                                <article class="rounded-2xl border border-gray-200/80 p-5 sm:p-6">
                                    <h3 class="text-lg font-semibold text-text-dark">Staff schedules</h3>
                                    <p class="mt-1 text-sm text-muted">Sample schedule for today</p>
                                    <ul class="mt-5 divide-y divide-gray-200/80">
                                        @foreach ([['Staff A', '09:00–17:00', 'Branch A'], ['Staff B', '10:00–18:00', 'Branch B'], ['Staff C', '12:00–20:00', 'Branch A']] as [$name, $hours, $branch])
                                            <li
                                                class="flex flex-col gap-1 py-4 sm:flex-row sm:items-center sm:justify-between sm:gap-4">
                                                <div>
                                                    <p class="font-semibold text-text-dark">{{ $name }}</p>
                                                    <p class="text-xs text-muted">{{ $branch }}</p>
                                                </div>
                                                <p class="text-sm font-medium text-muted">{{ $hours }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </article>
                                <article class="rounded-2xl border border-gray-200/80 bg-brand-light/55 p-5 sm:p-6">
                                    <span
                                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-primary"><i
                                            data-lucide="circle-dollar-sign" class="h-5 w-5"
                                            aria-hidden="true"></i></span>
                                    <h3 class="mt-5 text-lg font-semibold text-text-dark">Commission visibility</h3>
                                    <p class="mt-2 leading-7 text-muted">Review staff commission information alongside
                                        schedules and work activity.</p>
                                    <div class="mt-5 rounded-xl bg-white p-4">
                                        <p class="text-xs text-muted">Sample commission total</p>
                                        <p class="mt-1 text-2xl font-bold text-text-dark">US$240</p>
                                    </div>
                                </article>
                            </div>
                        </section>

                        <section id="dashboard-panel-inventory" role="tabpanel"
                            aria-labelledby="dashboard-tab-inventory" x-show="tab === 'inventory'">
                            <div class="grid gap-5 lg:grid-cols-[1fr_0.8fr]">
                                <article class="rounded-2xl border border-gray-200/80 p-5 sm:p-6">
                                    <h3 class="text-lg font-semibold text-text-dark">Inventory status</h3>
                                    <p class="mt-1 text-sm text-muted">Sample stock view across selected branches</p>
                                    <ul class="mt-5 space-y-3">
                                        <li
                                            class="flex items-center justify-between gap-4 rounded-xl border border-amber-300 bg-amber-50 p-4">
                                            <div>
                                                <p class="font-semibold text-text-dark">Shampoo</p>
                                                <p class="text-xs text-muted">4 units · sample</p>
                                            </div><span
                                                class="rounded-full bg-amber-200 px-3 py-1 text-xs font-semibold text-amber-950">Low
                                                stock</span>
                                        </li>
                                        <li class="flex items-center justify-between gap-4 rounded-xl bg-surface p-4">
                                            <div>
                                                <p class="font-semibold text-text-dark">Hair colour stock</p>
                                                <p class="text-xs text-muted">28 units · sample</p>
                                            </div><span class="text-xs font-semibold text-primary-dark">In range</span>
                                        </li>
                                        <li class="flex items-center justify-between gap-4 rounded-xl bg-surface p-4">
                                            <div>
                                                <p class="font-semibold text-text-dark">Skin-care serum</p>
                                                <p class="text-xs text-muted">9 units · sample</p>
                                            </div><span class="text-xs font-semibold text-muted">Monitor</span>
                                        </li>
                                    </ul>
                                </article>
                                <article class="rounded-2xl bg-text-dark p-5 text-white sm:p-6">
                                    <i data-lucide="bell-ring" class="h-6 w-6 text-brand-mint"
                                        aria-hidden="true"></i>
                                    <h3 class="mt-5 text-lg font-semibold">Low-stock notification</h3>
                                    <p class="mt-3 leading-7 text-white/70">The dashboard can notify an owner when an
                                        item such as shampoo is running low.</p>
                                </article>
                            </div>
                        </section>

                        <section id="dashboard-panel-retention" role="tabpanel"
                            aria-labelledby="dashboard-tab-retention" x-show="tab === 'retention'">
                            <div class="grid gap-5 lg:grid-cols-2">
                                <article class="rounded-2xl border border-gray-200/80 p-5 sm:p-6">
                                    <span
                                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary"><i
                                            data-lucide="message-circle-heart" class="h-5 w-5"
                                            aria-hidden="true"></i></span>
                                    <h3 class="mt-5 text-lg font-semibold text-text-dark">Smart CRM and Retention</h3>
                                    <p class="mt-3 leading-7 text-muted">Example: when hair colour commonly needs a
                                        touch-up after four weeks, the system can send a Zalo or SMS reminder in week
                                        three with a small discount code.</p>
                                    <p
                                        class="mt-4 rounded-xl bg-surface p-4 text-xs font-semibold leading-5 text-primary-dark">
                                        Sample cycle: Hair colour · reminder prepared for week 3</p>
                                </article>
                                <article class="rounded-2xl border border-gray-200/80 p-5 sm:p-6">
                                    <span
                                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-light text-primary"><i
                                            data-lucide="images" class="h-5 w-5" aria-hidden="true"></i></span>
                                    <h3 class="mt-5 text-lg font-semibold text-text-dark">Digital Beauty Portfolio</h3>
                                    <p class="mt-3 leading-7 text-muted">Before-and-after service images are stored
                                        chronologically and automatically combined so customer progress is easier to
                                        see.</p>
                                    <div class="mt-4 grid grid-cols-2 gap-3" aria-label="Sample portfolio comparison">
                                        <div
                                            class="rounded-xl bg-gray-100 p-4 text-center text-xs font-semibold text-muted">
                                            Before · demo</div>
                                        <div
                                            class="rounded-xl bg-brand-light p-4 text-center text-xs font-semibold text-primary-dark">
                                            After · demo</div>
                                    </div>
                                </article>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
