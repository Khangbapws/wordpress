@props(['icon', 'title', 'description', 'href' => '#'])

<a href="{{ $href }}"
    class="group block rounded-3xl border border-gray-200/70 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 no-underline">

    <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-light text-primary">

        {!! $icon !!}

    </div>

    <h3 class="text-xl font-semibold text-text-dark">

        {{ $title }}

    </h3>

    <p class="mt-4 leading-7 text-muted">

        {{ $description }}

    </p>

    <div class="mt-8 flex items-center gap-2 font-medium text-primary transition-transform group-hover:translate-x-1">

        Learn more

        <i data-lucide="arrow-right" class="h-4 w-4"></i>

    </div>

</a>
