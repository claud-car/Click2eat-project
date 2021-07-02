<div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
    <div class="text-white text-4xl md:text-6xl">
        <h1 class="capitalize">Checkout</h1>
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

</body>
</html>
