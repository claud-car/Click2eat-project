<x-app-layout>
    <x-slot name="header">
        <div class="pt-52 pl-10 lg:pl-96 text-white text-7xl">
            <h1>Choose it</h1>
            <h1>Click it</h1>
            <h1>Eat it</h1>
        </div>
    </x-slot>

    <x-slot name="slot">
        <!-- sezione featured -->
        <div class="text-blue text-center mt-16">
            <h3 class="text-3xl lg:text-4xl norican text-yellow">Featured</h3>
            <h2 class="text-3xl lg:text-5xl lg:m-4">Restourant & Cafes</h2>
            <p class="lg:mb-10">The best restaurants and cafes that <br> have been working with us for a long time</p>
        </div>
        <!-- sezione featured fine -->
        <search-by-type />
    </x-slot>

    <x-slot name="content">
        <!-- wy people chose us -->
        <div class="text-blue text-center mt-16">
            <div>
                <h3 class="text-3xl lg:text-4xl norican text-yellow">The reason why</h3>
                <h2 class="text-3xl lg:text-5xl lg:m-4">Why People Choose Us</h2>
                <p class="lg:mb-10">We have many advantages but we will highlight <br> only some of them, look below</p>
            </div>
            <!-- cards -->
            <div class="flex flex-wrap justify-center">
                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/discount.svg')}}" alt=""> 
                    </div>
                   <h4 class="font-bold">Discount System</h4>
                   <p>We have a favorable discount system for our regular customers.</p>
                </div>
                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/delivery.svg')}}" alt=""> 
                    </div>
                   <h4 class="font-bold">Express Delivery</h4>
                   <p>The hottest food & fastest delivery to any location of your city.</p>
                </div>
                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/food.svg')}}" alt=""> 
                    </div>
                   <h4 class="font-bold">50+ restaurants</h4>
                   <p>Large selection of restaurants and cafes throughout the country.</p>
                </div>
            </div>
        </div>
        <!-- wy people chose us fine-->
    </x-slot>
    

<!-- bg: 'big-pizza': "url('/images/homepage_images/bg-pizza.jpg)", -->

</x-app-layout>
