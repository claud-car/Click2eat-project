<x-app-layout>
    <x-slot name="header">
            <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
                <div class="text-white text-4xl md:text-6xl">
                    <h1 class="capitalize">Login</h1>
                </div>
            </div>
    </x-slot>

    <h2 class="text-center text-4xl mt-24 mb-4">Sign in</h2>

    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full rounded-full p-input" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-8 w-full rounded-full p-input"
                                type="password"
                                name="password"
                                placeholder="Password"
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

            <button class="bg-orange hover:bg-orange text-white my-4 text-center w-full rounded-full p-input">{{ __('Log in') }}</button>

            </div>
            <div class="flex items-center justify-between md:mt-2">
                <p class="text-sm w-full">No account? <a class="text-orange" href="{{route('register')}}">Register now</a></p>
                @if (Route::has('password.request'))
                    <a class="md:whitespace-nowrap underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
