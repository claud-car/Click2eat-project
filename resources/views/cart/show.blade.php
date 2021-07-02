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

    {{-- checkout --}}
    <div class="">
        {{-- checkout table --}}
        <div class="my-20 flex flex-col justify-center">
            <div class="mx-auto bg-gray-100 w-11/12 md:w-96 rounded-lg transform lg:translate-x-60">
                <div class="box-content p-10">
                    <div class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                        <div>
                            <p>Subtotal</p>
                        </div>
                        <div>
                            <p>Costo$</p>
                        </div>
                    </div>
                    <div class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                        <div>
                            <p>Delivery</p>
                        </div>
                        <div>
                            <p>25$</p>
                        </div>
                    </div>
                    <div class="py-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                        <div>
                            <p>Total</p>
                        </div>
                        <div>
                            <p>Costo$</p>
                        </div>
                    </div>
                </div> 
                 {{-- button --}}
                <div class="mb-10 mx-5 flex justify-center items-center">
                    <button class="w-full bg-orange bg-gradient-to-r from-yellow to-orange rounded-full">
                        <h3 class="text-white text-xl p-5"><a href="cart/checkout">Checkout</a></h3>
                    </button>
                </div>             
            </div>           
        </div>
    </div>

    <x-slot name="content">
    </x-slot>
    
</x-app-layout>

    <x-slot name="content"></x-slot>
</x-app-layout>
