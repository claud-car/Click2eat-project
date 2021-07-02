 {{-- checkout step index --}}
 <div class="mt-20 flex justify-center items-center">
    <div class="w-11/12 lg:w-1/2 md:flex flex-wrap justify-start justify-around border-b-2 pb-5 lg:pb-10">
        <div class="flex flex-row items-center">
            <h1 class="text-4xl lg:text-6xl text-yellow">01.</h1>
            <h3 class="text-xl lg:text-2xl pl-7">Order details</h3>
        </div>
        <div class="flex flex-row items-center">
            <h1 class="text-4xl lg:text-6xl text-yellow">02.</h1>
            <h3 class="text-xl lg:text-2xl text-gray-300 pl-5">Payment</h3>
        </div>
        <div class="md:mt-10 lg:mt-0 flex flex-row items-center">
            <h1 class="text-4xl lg:text-6xl text-yellow">03.</h1>
            <h3 class="text-xl lg:text-2xl text-gray-300 pl-5">Finish</h3>
        </div>
    </div>
</div>

 {{-- checkout table --}}
 <div class="my-20 flex flex-col justify-center">
    <div class="mx-auto bg-gray-100 w-11/12 lg:w-80 rounded-lg">            
        {{-- checkout orders summary --}}
        <div class="box-content p-10">
            <h1 class="mb-5 text-2xl">Your Order</h1>
            {{-- checkout summary card --}}
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
        {{-- checkout total costs --}}
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

 {{-- checkout orders summary --}}
 <div class="my-10 flex flex-col justify-center">
     <div class="mx-auto bg-gray-100 w-11/12 lg:w-3/5 rounded-lg">
        <div class="box-content p-10">
            <h1 class="mb-10 text-2xl">Your Order</h1>
            {{-- checkout summary card --}}
            <div>
                <div class="pb-2 flex flex-row justify-between border-b-2 border-gray-200 font-semibold text-gray-600">                    
                    <div class="text-gray-500">
                        <span class>Nome piatto</span>
                        <span class="pl-2 text-lg text-gray-800">1x</span>
                    </div>
                    <div class="text-gray-800">
                        <p>Costo$</p>
                    </div>
                </div>   
            </div>            
        </div>
     </div>
 </div>

 {{-- checkout total costs --}}
<div class="my-10 flex flex-col justify-center">
    <div class="mx-auto bg-gray-100 w-11/12 lg:w-3/5 rounded-lg">            
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
