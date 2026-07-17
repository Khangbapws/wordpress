<div class="dashboard-preview relative mx-auto max-w-6xl">

    {{-- Floating Card - Revenue --}}
    <div
        class="floating-card absolute -top-8 -left-8 z-20 hidden rounded-2xl border border-gray-200 bg-white p-4 shadow-xl lg:block">

        <div class="flex items-center gap-3">

            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">

                <i data-lucide="trending-up" class="h-5 w-5"></i>

            </div>

            <div>

                <p class="text-xs text-muted">
                    Revenue
                </p>

                <p class="text-xl font-bold text-text-dark">
                    +18%
                </p>

            </div>

        </div>

    </div>

    {{-- Floating Card - Bookings --}}
    <div
        class="floating-card absolute -right-8 top-28 z-20 hidden rounded-2xl border border-gray-200 bg-white p-4 shadow-xl lg:block">

        <div class="flex items-center gap-3">

            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">

                <i data-lucide="calendar-check-2" class="h-5 w-5"></i>

            </div>

            <div>

                <p class="text-xs text-muted">
                    Today's bookings
                </p>

                <p class="text-xl font-bold text-text-dark">
                    128
                </p>

            </div>

        </div>

    </div>

    {{-- Browser --}}
    <div class="overflow-hidden rounded-[32px] border border-gray-200/70 bg-white shadow-[0_30px_80px_rgba(0,0,0,.08)]">

        {{-- Browser Header --}}
        <div class="flex items-center justify-between border-b border-gray-100 px-6 py-4">

            <div class="flex gap-2">

                <span class="h-3 w-3 rounded-full bg-red-300"></span>
                <span class="h-3 w-3 rounded-full bg-yellow-300"></span>
                <span class="h-3 w-3 rounded-full bg-green-300"></span>

            </div>

            <div class="rounded-full bg-gray-100 px-5 py-2 text-xs text-muted">

                dashboard.prxholdings.com

            </div>

            <div class="w-16"></div>

        </div>

        {{-- Content --}}
        <div class="grid lg:grid-cols-[260px_1fr]">

            {{-- Sidebar --}}
            <aside class="border-r border-gray-100 bg-brand-light/40 p-6">

                <div class="mb-10">

                    <h3 class="text-xl font-bold text-primary">

                        PRX

                    </h3>

                </div>

                <nav class="space-y-2">

                    @foreach ([['layout-dashboard', 'Dashboard'], ['users', 'CRM'], ['calendar-days', 'Booking'], ['shopping-cart', 'POS'], ['boxes', 'Inventory'], ['chart-column-increasing', 'Analytics'], ['settings', 'Settings']] as [$icon, $label])
                        <div class="flex items-center gap-3 rounded-xl px-4 py-3 transition hover:bg-white">

                            <i data-lucide="{{ $icon }}" class="h-5 w-5 text-primary"></i>

                            <span class="text-sm font-medium text-text-dark">

                                {{ $label }}

                            </span>

                        </div>
                    @endforeach

                </nav>

            </aside>

            {{-- Main --}}
            <main class="bg-white p-8">

                {{-- KPI --}}
                <div class="grid gap-5 md:grid-cols-3">

                    @foreach ([['Revenue', '$32,480'], ['Customers', '542'], ['Appointments', '128']] as [$title, $value])
                        <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm">

                            <p class="text-sm text-muted">

                                {{ $title }}

                            </p>

                            <h3 class="mt-2 text-3xl font-bold tracking-tight text-text-dark">

                                {{ $value }}

                            </h3>

                        </div>
                    @endforeach

                </div>

                {{-- Chart --}}
                <div class="mt-8 rounded-2xl border border-gray-100 p-6">

                    <div class="mb-5 flex items-center justify-between">

                        <h4 class="font-semibold">

                            Revenue Overview

                        </h4>

                        <span class="text-sm text-muted">

                            Last 30 days

                        </span>

                    </div>

                    {{-- Fake Chart --}}
                    <div class="flex h-56 items-end gap-3">

                        @foreach ([30, 60, 45, 80, 65, 95, 70, 110, 90, 120, 105, 135] as $height)
                            <div class="flex-1 rounded-t-xl bg-primary/15">

                                <div class="chart-bar rounded-t-xl bg-primary" style="height: {{ $height }}px">
                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

                {{-- Bottom --}}
                <div class="mt-8 grid gap-6 lg:grid-cols-2">

                    {{-- Recent Orders --}}
                    <div class="dashboard-section rounded-2xl border border-gray-100 p-6">

                        <h4 class="mb-5 font-semibold">

                            Recent Orders

                        </h4>

                        @foreach ([['Anna', 'Haircut'], ['John', 'Latte'], ['Emily', 'Facial']] as [$customer, $service])
                            <div
                                class="flex items-center justify-between border-b border-gray-100 py-3 last:border-none">

                                <div>

                                    <p class="font-medium">

                                        {{ $customer }}

                                    </p>

                                    <p class="text-sm text-muted">

                                        {{ $service }}

                                    </p>

                                </div>

                                <span class="rounded-full bg-primary/10 px-3 py-1 text-xs font-medium text-primary">

                                    Completed

                                </span>

                            </div>
                        @endforeach

                    </div>

                    {{-- Top Products --}}
                    <div class="dashboard-section rounded-2xl border border-gray-100 p-6">

                        <h4 class="mb-5 font-semibold">

                            Top Products

                        </h4>

                        @foreach ([['Hair Care', '82 sold'], ['Coffee Beans', '64 sold'], ['Skin Serum', '52 sold']] as [$product, $count])
                            <div
                                class="flex items-center justify-between border-b border-gray-100 py-3 last:border-none">

                                <span>

                                    {{ $product }}

                                </span>

                                <span class="text-sm text-muted">

                                    {{ $count }}

                                </span>

                            </div>
                        @endforeach

                    </div>

                </div>

            </main>

        </div>

    </div>

</div>
