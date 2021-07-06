<x-app-layout>
    <x-slot name="header">
        <div class="bg-jumbo-others bg-cover h-96 w-full flex justify-center items-center">
            <div class="text-white text-4xl md:text-6xl">
                <h1 class="capitalize">{{ $restaurant->name }}</h1>
            </div>
        </div>
    </x-slot>

    <div class="text-blue">
        <div class="text-center h-80 w-full px-6 lg:w-2/3 xl:w-1/2 lg:mx-auto flex flex-col justify-center mt-12 lg:mt-32">
            <div class="w-full h-80 rounded-lg" style="background:url({{ $restaurant->thumb_path }});background-repeat: no-repeat; background-size:cover; background-repeat: round"></div>
        </div>
        <h2 class="text-5xl text-center mt-16">{{ $restaurant->name }}</h2>
        <h2 class="norican text-center text-4xl my-14 text-yellow">Amazing Taste</h2>
        <h1 class="text-blue text-center text-4xl">Menu</h1>

        <plates :items="{{ json_encode($plates) }}" />
    </div>

    <x-slot name="content">
    </x-slot>
</x-app-layout>
