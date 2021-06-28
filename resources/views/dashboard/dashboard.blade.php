<x-dashboard-layout>
    <dashboard>
        <a href="{{ route('restaurant.create') }}" class="flex items-center w-min whitespace-nowrap px-6 py-1 bg-green-600 rounded-md text-white font-medium tracking-wide hover:bg-green-500 cursor-pointer">Add new business</a>
        <table-pagination name="businesses" subcol="address" :items="{{ json_encode($restaurants) }}"/>
    <dashboard/>
</x-dashboard-layout>
