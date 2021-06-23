<form action="{{route('type.update', ['type' => $type->slug])}}" method= "post" enctype="multipart/form-data">
    @csrf 
    @method('PATCH')


    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name', $type->name) }}">
        @error ('name')
            <small class=" text-danger"> {{ $message }} </small>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Salva</button>
    <a href="{{ route('type.index') }}">Indietro</a>

</form>