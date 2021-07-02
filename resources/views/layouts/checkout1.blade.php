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
                <h3 class="text-xl lg:text-2xl text-gray-300 pl-5">Payment</h3>
            </div>
            <div class="flex flex-row items-center">
                <h1 class="text-4xl lg:text-6xl text-yellow">03.</h1>
                <h3 class="text-xl lg:text-2xl text-gray-300 pl-5">Finish</h3>
            </div>
        </div>
    </div>

    <!-- Link ritorno -->
    <div class="my-12">
        <a href="" class="text-yellow"><i class="fas fa-long-arrow-alt-left"></i> Back To Cart</a>
    </div>

    <!-- user data input-->
    <div class=" w-full flex flex-wrap justify-center lg:justify-around">
        {{-- user data input --}}
        <div>
            <div class="w-3/5 mr-10">
                <div>
                    <h1>Info about you:</h1>
                </div>
                <div class="w-3/5 flex flex-wrap md:flex-nowrap items-center">
                    <input type="text" placeholder="First name*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                    <input type="text" placeholder="Last name*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                </div>
                <div class="w-3/5 flex flex-wrap md:flex-nowrap items center">
                    <input type="text" placeholder="Phone number*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                    <input type="text" placeholder="Email*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                </div>
            </div>
            <div class="w-3/5 mr-10">
                <div>
                    <h1>Delivery info:</h1>
                </div>
                <div class="w-3/5 flex flex-wrap md:flex-nowrap items-center">
                    <input type="text" placeholder="City*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                    <input type="text" placeholder="Address*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                </div>
                <div class="w-3/5 flex flex-wrap md:flex-nowrap items center">
                    <input type="text" placeholder="Delivery day*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                    <input type="text" placeholder="Delivery time*" class="p-3 mt-5 w-52 mr-5 rounded-full mb-6 border-gray-300">
                </div>
            </div>
            <div class="w-full mr-10">
                <div>
                    <h1>More details:</h1>
                </div>
                <div class="w-full flex flex-wrap md:flex-nowrap items-center">
                    <textarea placeholder="Specify any other information here*" name="" id="" cols="30" rows="10" class="p-3 mt-5 w-full h-32 mr-5 rounded-2xl mb-6 border-gray-300 resize-none">
                    </textarea>
                </div>
            </div>
            {{-- button --}}
            <button class="w-70 my-10 bg-orange bg-gradient-to-r from-yellow to-orange rounded-full">
                <h3 class="text-white text-xl p-5">Choose payment method</h3>
            </button>
        </div>
        <div class="w-96 mb-20 flex flex-col mt-12 lg:mt-0">
            <div class="lg:mx-auto bg-gray-100 w-11/12 lg:w-80 rounded-lg">
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
</div>
