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
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $restaurant->address) }}">
        @error ('address')
            <small class=" text-danger"> {{ $message }} </small>
        @enderror
    </div>

    @error ('type_id')
    @php ($old_types = [])
    <small class=" text-danger"> {{ 'You may select at least one type' }} </small>
    @enderror

    @foreach ($types as $type)
        <br>
        <label for="name">{{ $type->name }}</label>
        <input type="checkbox" name="type_id[]" value="{{ $type->id }}" {{ in_array($type->id, $old_types) ? 'checked' : ''  }}>
    @endforeach

    <br>

    <button class="btn btn-primary" type="submit">Salva</button>
    <a href="{{ route('dashboard') }}">Indietro</a>

</form>
