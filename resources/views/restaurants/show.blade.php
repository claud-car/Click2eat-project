<x-app-layout>
    <x-slot name="header">
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
                    <a class="2xl:m-16 xl:m-32 md:m-48 m-16 bg-orange hover:bg-orange text-white font-bold py-2 px-4 rounded-full" href="">Add To Cart</a>
                </div>
            </div>
            @endforeach
        </div>


    
    
    
    
    
    
    
    </div>



</x-app-layout>

