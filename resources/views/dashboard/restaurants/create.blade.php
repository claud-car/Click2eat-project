     
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('restaurant.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- NameAddress -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>

            <div class="form-group">
                <label for="name">Category</label>
                @foreach ($types as $type )
                    <br>
                    <label for="name">{{ $type->name }}</label>
                    <input type="checkbox" name="type_id[]" value="{{ $type->id }}">
                @endforeach
            </div>

            <x-button class="bg-blue ml-4">
                {{ __('Apply') }}
            </x-button>
        </form>