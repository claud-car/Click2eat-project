<div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
    <div class="text-white text-4xl md:text-6xl">
        <h1 class="capitalize">Checkout</h1>
    </div>
</div>

<div class="w-4/5 lg:w-3/5 font-bold m-auto">
    <!-- Tabella step -->
    <div class="flex justify-center items-center mt-12">
        <div class="w-full md:flex md:flex-wrap lg:flex-nowrap justify-start justify-around border-b-2 pb-5 lg:pb-10 ">
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">01.</h1>
                <h3 class="text-xl lg:text-2xl pl-7">Order details</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">02.</h1>
                <h3 class="text-xl lg:text-2xl pl-5">Payment</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">03.</h1>
                <h3 class="text-xl lg:text-2xl text-gray-300 pl-5">Finish</h3>
            </div>
        </div>
    </div>

    <!-- Link ritorno -->
    <div class="my-12">
        <a href="" class="text-yellow"><i class="fas fa-long-arrow-alt-left"></i> Back To Order Details(Working)</a>
    </div>

    <!-- Form dati carta -->
    <div class="tables flex lg:justify-around flex-col xl:flex-row">
        <div class="mr-10 mb-10 payment-table bg-gray-100 lg:w-3/5 p-8 rounded-lg lg:h-96">
                <div class="img flex mb-8">
                    <img src="{{url('/images/icons/check-circle.svg')}}" alt="">
                    <p class="ml-6 text-xl">Credit Card</p>
                </div>
                <hr>
                <div class="my-4">
                    <p class="text-lg">Card number</p>
                    <input placeholder="xxxx xxxx xxxx xxxx" type="text" class="block mt-2 w-full rounded-full p-input mb-6">
                        <div class="flex mt-4 flex-col lg:flex-row">
                            <div class="left">
                                <p class="text-lg">Expiration date</p>
                                <input placeholder="mm" type="text" class="block mt-2 w-full md:w-1/2 lg:w-11/12 rounded-full p-input mb-6">
                            </div>
                            <div class="center lg:mt-7">
                                <input placeholder="yy" type="text" class="block mt-2 w-full md:w-1/2 lg:w-11/12 rounded-full p-input mb-6">
                            </div>
                            <div class="right">
                                <p class="text-lg">Security code</p>
                                <input placeholder="CVV" type="text" class="block mt-2 w-full md:w-1/2 lg:w-11/12 rounded-full p-input mb-6">
                            </div>
                        </div>
                </div>
        </div>


                
        <!-- INIZIO -->

        <div class="flex flex-col mt-12 lg:mt-0">
            <div class="w-full bg-gray-100 w-11/12 lg:w-80 rounded-lg">
                <!-- {{-- checkout orders summary --}} -->
                <div class="box-content p-10">
                    <h1 class="mb-5 text-2xl">Your Order</h1>
                    <!-- {{-- checkout summary card --}} -->
                    <div>
                        <div class="w-full text-gray-500">
                            <p>Nome piatto</p>
                        </div>
                        <div class="pb-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">
                            <div class="text-gray-800">
                                <p>quantità</p>
                            </div>
                            <div class="text-gray-800">
                                <p>Costo$</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- {{-- checkout total costs --}} -->
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
            </div>
        </div>        
    </div>
    {{-- button --}}
    <button class="w-60 my-10 lg:ml-10 bg-orange bg-gradient-to-r from-yellow to-orange rounded-full">
        <h3 class="text-white text-xl p-5">Confirm order</h3>
    </button>
</div>
