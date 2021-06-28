<x-app-layout>
    <x-slot name="header">
        {{-- jumbo title --}}
        <div class="h-screen bg-jumbo-home bg-cover pt-32 md:pt-60 pl-10 lg:pl-80 text-white text-6xl md:text-8xl">
            <h1>Choose it</h1>
            <h1>Click it</h1>
            <h1>Eat it</h1>
        </div>
        {{-- jumbo cards --}}
        <div class="transform -translate-y-1/4 lg:-translate-y-1/2 flex flex-wrap justify-center gap-10">
            <div class="bg-blue rounded-xl h-52 w-80 relative">
                <div class="absolute top-0 right-0">
                    <h1 class="text-gray_card text-6xl">01.</h1>
                </div>
                <div class="m-10">
                    <p class="text-yellow text-lg ml-2 mb-2"><i class="fas fa-pizza-slice mr-2"></i>Step 1</p>
                    <h3 class="text-white text-xl font-bold mb-5">Decide what you want</h3>
                    <p class="text-gray_text">From our vast selection of restaurants</p>
                </div>
            </div>
            <div class="bg-blue rounded-xl h-52 w-80 relative">
                <div class="absolute top-0 right-0">
                    <h1 class="text-gray_card text-6xl">02.</h1>
                </div>
                <div class="m-10">
                    <p class="text-yellow text-lg ml-2 mb-2"><i class="fas fa-drumstick-bite mr-2"></i>Step 2</p>
                    <h3 class="text-white text-xl font-bold mb-5">Change your mind</h3>
                    <p class="text-gray_text">Looking at all the new places we bring you</p>
                </div>
            </div>
            <div class="bg-blue rounded-xl h-52 w-80 relative">
                <div class="absolute top-0 right-0">
                    <h1 class="text-gray_card text-6xl">03.</h1>
                </div>
               <div class="m-10">
                    <p class="text-yellow text-lg ml-2 mb-2"><i class="fas fa-ice-cream mr-2"></i>Step 3</p>
                    <h3 class="text-white text-xl font-bold mb-5">Find it now</h3>
                    <p class="text-gray_text">With just one click</p>
               </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="slot">
        <search-by-type />
    </x-slot>
</x-app-layout>
