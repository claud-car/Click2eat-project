<div>
    <a href="{{ route('type.create') }}">Crea la tipologia del tuo ristorante</a>
</div>


@foreach ( $types as $type )
    <p>{{ $type->name }}</p>
    <a href="{{ route('type.edit',['type' => $type->slug]) }}">Edit</a>
    <form action="{{route('type.destroy',['type'=>$type->slug])}}" method="post">
        @csrf 
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>

@endforeach
<a href="{{ route('dashboard') }}">Indietro</a>
