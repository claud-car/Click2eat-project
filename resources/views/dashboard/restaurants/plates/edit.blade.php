<x-app-layout>
<x-slot name="header">
</x-slot>

<h1 class="text-blue text-center text-5xl py-16">Edit Plate</h1>
    
<div class="border text-blue container m-auto flex flex-wrap md:justify-evenly w-96 h-96 py-8 border rounded-2xl">

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
    
    
        <x-button class="bg-blue mt-4">
            {{ __('Apply') }}
        </x-button>
    </form>
</div>
       
        
        


</x-app-layout>
