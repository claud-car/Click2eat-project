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
        <login />
    </x-auth-card>
</x-app-layout>
