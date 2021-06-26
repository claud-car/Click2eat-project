<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-blue border-b border-gray-200">
                    <h1 class="text-white italic">Benvenuto nella tua pagina personale!</h1>
                </div>
            </div>
        </div>
        {{-- <div class="container mx-auto flex justify-center mt-12">
            <button class="h-20 w-520 border-2 border-yellow rounded-2xl"><a href="{{ route('restaurant.create') }}" class="text-yellow px-5">Crea il tuo ristorante</a></button>
        </div> --}}
        <div class="container box-border mx-auto grid gap-10 mt-20">
            <a href="{{ route('restaurant.create') }}" class="">
                <div class="card flex flex-col w-auto md:w-96 mx-auto my-16 border rounded-2xl h-48">
                    <div class="text-card flex flex-col items-center my-8">
                        <i class="text-orange fas fa-plus text-5xl py-4"></i>
                        <p class="pt-4 font-semibold">Crea il tuo ristorante</p>
                    </div>
                </div>                
            </a>
        </div>
        <div class="container mx-auto box-border grid lg:grid-cols-2 gap-10 mt-20 mx-10">
            @foreach ($restaurants as $restaurant)
            <div class="container w-full h-52 rounded-2xl flex flex-row border-2 border-orange m-5">
                <div class="bg-blue h-full w-2/5 inline-block rounded-2xl overflow-hidden">
                    <img src="storage/{{ $restaurant->thumb_path }}" class="w-full h-full">
                </div>
                <div class="inline-block h-full w-full md:w-3/5 box-border p-4 overflow-x-auto">
                    <h1 class="capitalize text-xl"><a class="text-orange" href="{{ route('restaurant.show', ['restaurant' => $restaurant->slug]) }}">{{ $restaurant->name }}</a></h1>
                    <p>{{ $restaurant->address }}</p>
                       <div class="flex flex-row overflow-x">
                            @foreach ($restaurant->types as $type)
                                <button class="bg-orange rounded-xl mt-4 mr-2"><p class="text-white p-2">{{ $type->name }}</p></button>
                            @endforeach
                       </div>
                    <hr class="border-orange mt-2 mb-6">
                   <div class="flex justify-between">
                        <div>
                            <button class="bg-blue rounded-xl p-2"><a href="{{ route('restaurant.edit',['restaurant' => $restaurant->slug]) }}" class="text-white p-2">Edit</a></button>
                            <a href="{{ route('plate.index',['restaurant' => $restaurant->slug]) }}" class="text-orange m-2">Menu -></a>
                        </div>
                        <div class="">
                            <form action="{{route('restaurant.destroy',['restaurant'=>$restaurant->slug])}}" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- <input type="submit" value="Delete" class="text-orange px-2 rounded-xl"> --}}
                                <button type="submit" value="Delete" class="mx-1 text-orange px-2 border-2 border-orange rounded-xl">Delete</button>
                            </form>
                        </div>
                        <div class="">
                            <a href="{{ route('plate.index',['restaurant' => $restaurant->slug]) }}" class="text-orange text-lg m-2">Menu <i class="fas fa-angle-right"></i></a>
                        </div>
                   </div>

                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-app-layout>
