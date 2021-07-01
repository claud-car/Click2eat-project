<footer id="footer" class="mt-40">
    {{-- footer --}}
    <div class="md:h-80 md:flex relative bg-footer justify-center items-center text-white">
         {{-- footer orange icon absolute --}}
        <div class="bg-white h-40 w-40 rounded-full flex justify-center items-center absolute top-1/2 left-1/2 transform translate-y-1/4 md:translate-y-0 -translate-x-1/2 -top-1/4">
            <div class="w-32 h-32 border-2 rounded-full flex justify-center items-center" style="box-shadow: 0 0 10px 0 rgba(247, 191, 50, 1)">
                <div class="h-24 w-24 bg-orange bg-gradient-to-r from-yellow to-orange rounded-full flex justify-center items-center">
                    <i class="fas fa-hamburger text-5xl text-white"></i>
                </div>
            </div>
        </div>
        {{-- footer contact info --}}
        <div class="md:flex justify-around items-center w-4/5 lg:w-3/5 overflow-hidden">
            <div class="m-10">
                <div>
                    <h2 class="text-3xl text-yellow mb-5">Click2eat</h2>
                </div>
                <div class="mb-2">
                    <h3>Working schedule</h3>
                </div>
                <div>
                    <p>Mon - Sat: 9:00 am - 10:00 pm</p>
                    <p>Sun: 10:00 am - 8:00 pm</p>
                </div>
            </div>
            <div class="mt-20 mb-10 mx-10">
                <h2 class="mb-2"><span class="text-yellow">Call us</span> to make an order!</h2>
                <p>Don’t be shy, we don’t bite :)</p>
                <p>+1 666 888 52 25</p>
            </div>
            <div class="m-10">
                <div>
                    <div class="mb-2">
                        <p>Payment options</p>
                    </div>
                    <img src="{{url('/images/credit-cards-icons.png')}}" alt="icone carte di credito">
                </div>
                <div class="mt-5">
                    <div class="mb-2">
                        <p>Download the app</p>
                    </div>
                    <div class="">
                        <div class="my-2 lg:w-30">
                            <img src="{{url('/images/google-app.png')}}" alt="icone app google" class="object contain">
                        </div>
                        <div class="my-2 lg:w-30">
                            <img src="{{url('/images/apple-app.png')}}" alt="icona app apple" class="object contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer copyright --}}
   <div class="bg-blue-footer text-gray_text md:h-10">
        <div class="md:h-10 lg:mx-40 md:flex justify-between text-sm text-white">
            <div class="flex" style="align-items: center">
                <p class="text-gray_text">© All Rights Reserved. DeliTaste 2020</p>
            </div>
            <div class="flex" style="align-items: center">
                <ul class="flex justify-between text-gray_text">
                    <li><p class="pr-5 text-white">Find us:</p></li>
                    <li><a href="">Facebook</a></li>
                    <li><span class="px-2">-</span></li>
                    <li><a href="">Twitter</a></li>
                    <li><span class="px-2">-</span></li>
                    <li><a href="">Instagram</a></li>
                </ul>
            </div>
        </div>
   </div>
</footer>
