<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">My Cart</h1>
            </div>
        </div>
    </x-slot>

    <div>
        <cart-products />
    </div>

    {{-- coupon --}}
    <div class="mt-20 flex justify-center">
        <div class="mx-10 md:mx-0 border-2 rounded-full inline-block transform lg:translate-x-60">
            <input type="text" class="w-36 md:w-56 border-none pl-5 rounded-full" placeholder="Coupon">
            <button class="w-32 bg-orange bg-gradient-to-r from-yellow to-orange rounded-full">
                <h3 class="text-white p-5">Apply</h3>
            </button>
        </div>
    </div>

    <checkout-table />

    <x-slot name="content"></x-slot>
</x-app-layout>
