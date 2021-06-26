<x-dashboard-layout>
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
        <div class="container mx-auto flex justify-center mt-12">
            <button class="h-20 w-520 border-2 border-yellow rounded-2xl"><a href="{{ route('restaurant.create') }}" class="text-yellow px-5">Crea il tuo ristorante</a></button>
        </div>
        <div class="container mx-auto grid grid-cols-2 gap-10 mt-20">
            @foreach ($restaurants as $restaurant)
            <div class="container w-full h-52 rounded-2xl flex flex-row border-2 border-orange m-5">
                <div class="bg-blue h-full w-2/5 inline-block rounded-2xl overflow-hidden">
                    <img src="storage/{{ $restaurant->thumb_path }}" class="w-full h-full">
                </div>
                <div class="inline-block h-full w-3/5 box-border p-4 overflow-x-auto">
                    <h1 class="capitalize text-xl"><a class="text-orange" href="{{ route('restaurant.show', ['restaurant' => $restaurant->slug]) }}">{{ $restaurant->name }}</a></h1>
                    <p>{{ $restaurant->address }}</p>
                       <div class="flex flex-row overflow-x">
                            @foreach ($restaurant->types as $type)
                                <button class="bg-orange rounded-xl mt-4"><p class="text-white p-2">{{ $type->name }}</p></button>
                            @endforeach
                       </div>
                    <hr class="border-orange m-2">
                   <div class="flex justify-between">
                        <div>
                            <button class="bg-blue rounded-xl p-2"><a href="{{ route('restaurant.edit',['restaurant' => $restaurant->slug]) }}" class="text-white p-2">Edit</a></button>
                            <a href="{{ route('plate.index',['restaurant' => $restaurant->slug]) }}" class="text-orange m-2">Menu -></a>
                        </div>
                        <div class="">
                            <form action="{{route('restaurant.destroy',['restaurant'=>$restaurant->slug])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="bg-orange text-white p-2 rounded-xl">
                            </form>
                        </div>
                   </div>

                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-dashboard-layout>
