        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('plate.update', ['plate' => $plate->slug, 'restaurant' => $restaurant->slug]) }}">
            @csrf
            @method('PATCH')


            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
            </div>

            <!-- Price -->
            <div class="mt-4">
                <x-label for="price" :value="__('Price')" />

                <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus />
            </div>


            <x-button class="bg-blue ml-4">
                {{ __('Apply') }}
            </x-button>
        </form>
