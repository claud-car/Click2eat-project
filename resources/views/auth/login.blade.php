<x-app-layout>
    <x-slot name="header">
            <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
                <div class="text-white text-4xl md:text-6xl">
                    <h1 class="capitalize">Login</h1>
                </div>
            </div>
    </x-slot>

    <h2 class="text-center text-4xl mt-48 mb-16">Sign in</h2>

    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full rounded-3xl" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full rounded-3xl"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="button flex justify-center">

            <button class="bg-orange hover:bg-orange text-white font-bold py-3 px-12 rounded-full text-center w-full mt-4">{{ __('Log in') }}</button>

            </div>
            <div class="flex items-center justify-between mt-8">
                <p class="text-sm">No account? <a class="text-orange" href="{{route('register')}}">Register now</a></p>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
