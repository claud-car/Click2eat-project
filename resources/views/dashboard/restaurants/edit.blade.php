<form action="{{route('restaurant.update', ['restaurant' => $restaurant->slug])}}" method= "post" enctype="multipart/form-data">
    @csrf 
    @method('PATCH')


    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name', $restaurant->name) }}">
        @error ('name')
            <small class=" text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address">{{ old('address', $restaurant->address) }}</textarea>
        @error ('address')
            <small class=" text-danger"> {{ $message }} </small>
        @enderror
    </div>
    @foreach ($types as $type )
        <br>
        <label for="name">{{ $type->name }}</label>
        <input id="id" type="checkbox" name="type_id[]" value="{{ $type->id }}">
        @error ('type_id[]')
            <small class=" text-danger"> {{ $message }} </small>
        @enderror

    @endforeach

    <br>

    <button class="btn btn-primary" type="submit">Salva</button>
    <a href="{{ route('dashboard') }}">Indietro</a>

</form>