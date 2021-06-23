 <!-- Validation Errors -->
 <x-auth-validation-errors class="mb-4" :errors="$errors" />

 <form method="POST" action="{{ route('type.store') }}">
     @csrf

     <!-- Type -->
     <div>
         <x-label for="name" :value="__('Type')" />

         <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
     </div>

     <x-button class="bg-blue ml-4">
         {{ __('Apply') }}
     </x-button>
 </form>
