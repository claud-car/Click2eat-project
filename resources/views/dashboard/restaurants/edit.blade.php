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


    <button class="btn btn-primary" type="submit">Salva</button>
    <a href="{{ route('dashboard') }}">Indietro</a>

</form>