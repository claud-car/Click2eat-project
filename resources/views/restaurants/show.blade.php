<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">{{ $restaurant->name }}</h1>
            </div>
        </div>
    </x-slot>

    <div class="text-blue">
        <div class="text-center h-80 w-full px-6 lg:w-2/3 xl:w-1/2 lg:mx-auto flex flex-col justify-center mt-12 lg:mt-32">
            <div class="w-full h-80 rounded-lg bg-no-repeat" style="background:url(/storage/{{ $restaurant->thumb_path }}); background-repeat: round"></div>
        </div>
        <h2 class="text-5xl text-center mt-16">{{ $restaurant->name }}</h2>
        <h2 class="norican text-center text-4xl my-14 text-yellow">Amazing Taste</h2>
        <h1 class="text-blue text-center text-4xl">Menu</h1>

        <div class="w-full xl:w-4/5 2xl:w-3/4 xl:mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 pt-16 text-blue">
            @foreach ($plates as $plate)
            <div class="card flex flex-col border rounded-2xl justify-between overflow-hidden">
                <div class="image-card h-56">
                    <img class="w-full h-full object-cover" src="/storage/{{ $plate->thumb_path }}">
                </div>
                <div class="text-card flex flex-col items-center pt-8 px-16 overflow-anywhere text-center">
                    <h3 class="py-2 text-3xl">{{ $plate->name }}</h3>
                    <h5 class="my-4">{{ $plate->description }}</h5>
                    <h3 class="py-2 text-2xl">€ {{ $plate->price }}</h3>
                </div>
                <div class="flex justify-center">
                    <a class="m-16 bg-orange hover:bg-orange text-white font-bold py-3 px-12 rounded-full whitespace-nowrap" href="">Add To Cart</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <x-slot name="content">
    </x-slot>
</x-app-layout>

