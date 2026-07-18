@props(['icon', 'title', 'wide' => false])

<article {{ $attributes->class([
    'rounded-3xl border border-gray-200/80 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 sm:p-8',
    'lg:col-span-2' => $wide,
]) }}>
    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-light text-primary">
        <i data-lucide="{{ $icon }}" class="h-5 w-5" aria-hidden="true"></i>
    </span>

    <h3 class="mt-6 text-xl font-semibold text-text-dark sm:text-2xl">{{ $title }}</h3>
    <div class="mt-3 leading-7 text-muted">{{ $slot }}</div>
</article>
