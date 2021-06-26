<x-app-layout>
<x-slot name="header">
</x-slot>


<h1 class="text-blue text-center text-5xl">Menu</h1>
<div class=" text-blue flex justify-center">
    <a href="{{ route('plate.create', ['restaurant' => $restaurant->slug]) }}">
        <div class="card flex flex-col w-96 mx-16 my-16 border rounded-2xl h-48">
            <div class="text-card flex flex-col items-center my-8">
                <i class="text-orange fas fa-plus text-5xl py-4"></i>
                <p class="pt-4">Aggiungi un piatto</p>
            </div>
        </div>
    </a>
</div>


<div class="text-blue container m-auto flex flex-wrap md:justify-evenly">

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

        <div class="edit-delete flex justify-evenly py-4 px-4">
            <a class="bg-blue hover:bg-blue text-white font-bold py-2 px-4 rounded-full" href="{{ route('plate.edit',['plate' => $plate->slug, 'restaurant' => $restaurant->slug]) }}">Edit</a>

            <form action="{{route('plate.destroy',['plate' => $plate->slug, 'restaurant' => $restaurant->slug])}}" method="post">
                @csrf
                @method('DELETE')
                <input class="bg-blue hover:bg-blue text-white font-bold py-2 px-4 rounded-full cursor-pointer" type="submit" value="Delete">
            </form>
        </div>

    </div>
        @endforeach

</div>
<div class="container m-auto py-8">
    <a class="2xl:m-16 xl:m-32 md:m-48 m-16 bg-blue hover:bg-blue text-white font-bold py-2 px-4 rounded-full" href="{{ route('dashboard')}}">Indietro</a>
</div>


</x-app-layout>


<style>
    .overflow-anywhere{
        overflow-wrap: anywhere;
    }
</style>
