@props(['number', 'title', 'description'])

<div class="relative">

    <div
        class="mb-6 flex h-14 w-14 items-center justify-center rounded-full bg-primary text-lg font-semibold text-white">
        {{ $number }}
    </div>

    <h3 class="text-xl font-semibold text-text-dark">
        {{ $title }}
    </h3>

    <p class="mt-4 leading-7 text-muted">
        {{ $description }}
    </p>

</div>
