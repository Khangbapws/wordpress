@props(['icon', 'title', 'wide' => false])

<div
    {{ $attributes->merge([
        'class' =>
            ($wide ? 'lg:col-span-2 ' : '') .
            'rounded-3xl bg-surface p-10 transition duration-300 hover:-translate-y-1 hover:bg-[#eaf6ec]',
    ]) }}>

    <div class="mb-8 flex h-12 w-12 items-center justify-center rounded-xl bg-white text-xl shadow-sm">
        {{ $icon }}
    </div>

    <h3 class="mb-4 text-2xl font-semibold text-dark">
        {{ $title }}
    </h3>

    <p class="text-muted leading-relaxed">
        {{ $slot }}
    </p>

</div>
