<a href="{{ route('plate.create', ['restaurant' => $restaurant->slug]) }}">Aggiungi un piatto</a>

@foreach ($plates as $plate)
    <h3>{{ $plate->name }}</h3>
    <h5>{{ $plate->description }}</h5>
    <span>{{ $plate->price }}</span>   
    <a href="{{ route('plate.edit',['plate' => $plate->slug, 'restaurant' => $restaurant->slug]) }}">Edit</a> 
    <!-- <form action="{{route('plate.destroy',['plate'=>$plate->slug, 'restaurant' => $restaurant->slug])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form> -->

@endforeach
