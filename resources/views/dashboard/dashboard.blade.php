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
        @foreach ($restaurants as $restaurant)
            <div class="container w-2/5 h-52 m-4 rounded-2xl flex flex-row border-2 border-orange">
                <div class="bg-blue h-full w-2/5 inline-block">
                    <img src="" alt="" class="">
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
                   <div class="flex flex-row">
                    <a href="{{ route('restaurant.edit',['restaurant' => $restaurant->slug]) }}" class="text-blue m-2">Edit</a>
                    <br>
                    <a href="{{ route('plate.index',['restaurant' => $restaurant->slug]) }}" class="text-orange m-2">Menu -></a> 
                    <div class="float-right">
                        <form action="{{route('restaurant.destroy',['restaurant'=>$restaurant->slug])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="bg-orange text-white m-2">
                        </form>
                    </div>
                   </div>

                </div>
            </div>
        @endforeach
    </div>
    <div>
        <a href="{{ route('restaurant.create') }}">Crea il tuo ristorante</a>
    </div>
</x-app-layout>

{{-- @foreach ($restaurants as $restaurant)
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
@endforeach --}}