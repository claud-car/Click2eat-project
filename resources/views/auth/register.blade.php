<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">Register</h1>
            </div>
        </div>
    </x-slot>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <h2 class="text-center text-4xl mt-8 mb-16">Sign up</h2>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="xl:flex xl:justify-center xl:items-center">
                <!-- Name -->
                <div class="xl:w-2/5 xl:mr-2 mb-4">
                    <x-input id="name" class="block w-full rounded-full p-input" placeholder="Name *" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- LastName -->
                <div class="xl:w-2/5 xl:ml-2 mb-4">
                    <x-input id="lastname" class="block w-full rounded-full p-input" placeholder="LastName *" type="text" name="lastname" :value="old('lastname')" required autofocus />
                </div>         
            </div>

            <div class="xl:flex xl:justify-center xl:items-center mt-4">

                <!-- Email Address -->
                <div class="xl:w-2/5 xl:mr-2 mb-4">
                    <x-input id="email" class="block w-full rounded-full p-input" placeholder="Email *" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- P_iva -->
                <div class="xl:w-2/5 xl:ml-2 mb-4">
                    <x-input id="p_iva" class="block w-full rounded-full p-input"
                        type="text"
                        name="p_iva" 
                        placeholder="Partita Iva *"
                        required />
                </div>

            </div>

            <div class="xl:flex xl:justify-center xl:items-center mt-4">
                <!-- Password -->
                <div class="xl:w-2/5 xl:mr-2 mb-4">
                    <x-input id="password" class="block mt-1 w-full rounded-full p-input"
                        placeholder="Password *"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="xl:w-2/5 xl:ml-2 mb-4">
                    <x-input id="password_confirmation" class="block mt-1 w-full rounded-full p-input"
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm Password *"
                        required />
                </div>
            </div>

            <div class="px-16">
                <button class="bg-orange hover:bg-orange text-white my-4 rounded-full p-input text-center w-full mt-4">
                    {{ __('Create Account') }}
                </button>
            </div>



            <div class="flex items-center justify-center mt-4">
                <p class="text-sm">Already have an account? <a class="text-orange" href="{{ route('login') }}"> Log in</a></p>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
