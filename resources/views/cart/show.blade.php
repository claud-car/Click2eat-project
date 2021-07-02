<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">My Cart</h1>
            </div>
        </div>
    </x-slot>

    <div class="flex justify-center mt-20">
        {{-- orders list --}}
        <div class="w-full flex flex-col items-center">
            {{-- orders title --}}
            <div class="h-14 w-11/12 xl:w-1/2 bg-blue rounded-full text-white text-lg flex flex-row justify-around items-center">
                <div class="w-1/3 md:w-1/2">
                    <h3 class="md:ml-10">Product</h3>
                </div>
                <div class="w-1/4">
                    <h3>Quantity</h3>
                </div>
                <div class="w-1/4">
                    <h3>Price</h3>
                </div>
            </div>
            {{-- orders card --}}
            <div class="w-11/12 xl:w-1/2 h-36 border-b-2 border-gray-200 flex flex-row justify-around items-center">
                {{-- food picture and info --}}
                <div class="w-1/3 md:w-1/2 flex flex-row items-center transform md:translate-x-10">
                    <div class="hidden md:inline-block bg-blue h-20 w-20">
                        <img src="" alt="">
                    </div>
                    <div class="md:ml-5">
                        <p class="font-bold">Product name</p>
                        <span class="text-gray-400">price per portion</span>
                    </div>
                </div>
                {{-- quantity --}}
                <div class="w-1/4 transform -translate-x-5">
                    <div class="text-gray-400 flex flex-row items-center">
                       <div class="flex flex-row items-center border-2 rounded-full box-content px-5 py-2">
                            <div>
                                <button>
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <div>
                                <input type="text" class="h-10 w-5 md:w-14 text-xl font-bold border-none text-center focus:ring-0">
                            </div>
                            <div>
                                <button>
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                       </div>
                    </div>
                </div>
                {{-- price --}}
                <div class="w-1/4 flex items-center">
                    <div>
                        <h3 class="text-2xl text-bold text-yellow">20$</h3>
                    </div>
                    <div class="text-gray-400 ml-5 md:ml-16 xl:ml-32">
                        <i class="fas fa-times text-3xl text-yellow"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- coupon --}}
    <div class="mt-20 flex justify-center">
        <div class="mx-10 md:mx-0 border-2 rounded-full inline-block transform lg:translate-x-60">
            <input type="text" class="w-36 md:w-56 border-none pl-5 rounded-full focus:ring-0" placeholder="Coupon">
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

