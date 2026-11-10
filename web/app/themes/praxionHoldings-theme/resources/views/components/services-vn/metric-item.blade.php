@props(['value', 'label'])

<div
    class="group rounded-3xl border border-gray-200/70 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5">

    <h3 class="text-5xl font-bold tracking-tight text-primary">
        {{ $value }}
    </h3>

    <p class="mt-3 text-base text-muted">
        {{ $label }}
    </p>

</div>
