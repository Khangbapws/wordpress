@php
    $products = ['CRM', 'POS', 'Booking', 'Inventory', 'Analytics', 'Payments'];
@endphp

<div class="mt-16 flex flex-wrap justify-center gap-3">

    @foreach ($products as $product)
        <x-ui.badge>

            {{ $product }}

        </x-ui.badge>
    @endforeach

</div>
