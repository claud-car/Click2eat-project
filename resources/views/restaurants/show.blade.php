<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">{{ $restaurant->name }}</h1>
            </div>
        </div>
    </x-slot>

    <div class="text-blue container m-auto">
        <div class="container-img text-center h-80 w-1/2 m-auto flex flex-col justify-center mt-32">
            <div class="w-full h-80 rounded-lg" style="background:url(/storage/{{ $restaurant->thumb_path }});background-repeat:no-repeat; background-size:cover; background-repeat: round"></div>
        </div>
        <h2 class="text-5xl text-center mt-16">{{ $restaurant->name }}</h2>
        <h2 class="norican text-center text-4xl my-14 text-yellow">Amazing Taste</h2>
        <h1 class="text-blue text-center text-4xl">Menu</h1>

        <div class="flex flex-wrap md:justify-evenly text-blue">
            @foreach ($plates as $plate)
            <div class="card flex flex-col w-96 mx-16 my-16 border rounded-2xl justify-between">
                <div class="image-card h-56">
                    <img class="w-96 h-56" src="/storage/{{ $plate->thumb_path }}">
                </div>
                <div class="text-card flex flex-col items-center pt-8 px-16 overflow-anywhere text-center">
                    <h3 class="py-2 text-3xl">{{ $plate->name }}</h3>
                    <h5 class="my-4">{{ $plate->description }}</h5>
                    <h3 class="py-2 text-2xl">€ {{ $plate->price }}</h3>
                </div>
                <div class="flex justify-center">
                    <a class="2xl:m-16 xl:m-32 md:m-48 m-16 bg-orange hover:bg-orange text-white font-bold py-3 px-12 rounded-full" href="">Add To Cart</a>
                </div>
            </div>
            @endforeach
        </div>


    
    
    
    
    
    
    
    </div>

    <div class="flex justify-center mt-20">
        {{-- orders list --}}
        <div class="w-full flex flex-col items-center">
            {{-- orders title --}}
            <div class="h-14 w-11/12 xl:w-1/2 bg-blue rounded-full text-white text-lg flex flex-row justify-around items-center">
                <div class="w-1/3 md:w-1/2">
                    <h3 class="ml-10">Product</h3>
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
                                <input type="text" class="h-10 w-5 md:w-14 text-xl font-bold border-none text-center">
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

    {{-- checkout --}}
    <div class="">
        {{-- checkout table --}}
        <div class="my-20 flex flex-col justify-center lg:relative lg:left-60">
            <div class="mx-auto bg-gray-100 w-11/12 lg:w-96 rounded-lg">
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
                        <h3 class="text-white text-xl p-5">Checkout</h3>
                    </button>
                </div>             
            </div>           
        </div>
    </div>


</x-app-layout>

