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
                    <h1 class="text-white">Benvenuto nella tua pagina personale!</h1>
                </div>
            </div>
        </div>
        @foreach ($restaurants as $restaurant)
            <p><a class="text-orange" href="{{ route('restaurant.show', ['restaurant' => $restaurant->slug]) }}">{{ $restaurant->name }}</a></p>
            <p>{{ $restaurant->address }}</p>
            @foreach ($restaurant->types as $type)
            <p>{{ $type->name }}</p>
            @endforeach
            <a href="{{ route('restaurant.edit',['restaurant' => $restaurant->slug]) }}">Edit</a>
            <br>
            <a href="{{ route('plate.index',['restaurant' => $restaurant->slug]) }}">Gestici menu</a> 
            <form action="{{route('restaurant.destroy',['restaurant'=>$restaurant->slug])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        @endforeach
    </div>
    <div>
        <a href="{{ route('restaurant.create') }}">Crea il tuo ristorante</a>
    </div>
</x-app-layout>
