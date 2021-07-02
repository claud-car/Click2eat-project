<div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
    <div class="text-white text-4xl md:text-6xl">
        <h1 class="capitalize">Checkout</h1>
    </div>
</div>

<div class="w-4/5 font-bold m-auto">
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
                <h3 class="text-xl lg:text-2xl pl-5">Finish</h3>
            </div>
        </div>
    </div>
    <img class="m-auto text-4xl w-28 mt-10 mb-4" src="{{url('/images/icons/check-circle.svg')}}" alt="">
    <h2 class="text-center text-3xl">Thank you!</h2>
    <p class="text-center font-light mt-8">We have accepted your order and have already begun to cook. Your favorite food will be on your table soon.</p>
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
    
</body>
</html>