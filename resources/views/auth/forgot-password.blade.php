<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">Forgotten password</h1>
            </div>
        </div>
    </x-slot>

    <x-auth-card>
        <div class="w-full md:w-3/5 md:mx-auto mt-10">
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
                </a>
            </x-slot>

            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
                <div>
                    <x-input
                        id="email"
                        class="block mt-1 w-full"
                        type="email"
                        name="email"
                        :value="old('email')"
                        class="block mt-1 w-full rounded-full p-input mb-2"
                        placeholder="Email"
                        required
                        autofocus
                    />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="bg-orange bg-gradient-to-r from-yellow to-orange text-white my-4 text-center w-full lg:w-3/5 rounded-full p-input">
                        Email Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-app-layout>
