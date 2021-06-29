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
            <div class="h-14 w-3/4 xl:w-1/2 bg-blue rounded-full text-white text-lg flex flex-row justify-around items-center">
                <div class="w-1/2">
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
            <div class="border-b-2 border-gray-200">
                <div>
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <p></p>
                        <span></span>
                    </div>
                </div>
                <div>
                    <div class="text-gray-400">
                        <div>
                            <button>
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <div>
                            <input type="text">
                        </div>
                        <div>
                            <button>
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div></div>
                <div>
                    <i class="far fa-times-circle"></i>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>

