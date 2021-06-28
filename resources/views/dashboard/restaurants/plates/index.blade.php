<x-dashboard-layout>
    <dashboard>
        <div class="flex">
            <a href="/dashboard"
              class="flex items-center w-min whitespace-nowrap px-6 py-1 bg-gray-900 mr-2 rounded-md text-white font-medium tracking-wide hover:bg-gray-800 cursor-pointer">
                Go back</a>
            <a
                href="{{ route('plate.create', ['restaurant' => $restaurant->slug]) }}"
               class="flex items-center w-min whitespace-nowrap px-6 py-1 bg-green-600 rounded-md text-white font-medium tracking-wide hover:bg-green-500 cursor-pointer"
            >
                Add
                new plate
            </a>
        </div>
        <plates-pagination name="plates" subcol="price" :restaurant="{{ json_encode($restaurant) }}" :items="{{ json_encode($plates) }}"/>
    </dashboard>
</x-dashboard-layout>
