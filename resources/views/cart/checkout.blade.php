<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">Checkout</h1>
            </div>
        </div>
    </x-slot>
   
    @include('layouts.checkout1')

    <x-slot name="content">
    </x-slot>

</x-app-layout>

