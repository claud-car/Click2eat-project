<x-dashboard-layout>
    <dashboard>
        <h2 class="text-2xl mb-4">Last Received Orders</h2>
        <div>
            <Stats :id="{{ json_encode(\Illuminate\Support\Facades\Auth::id()) }}"/>
        </div>
        <h2 class="text-2xl">Orders</h2>
        <orders-pagination name="id #" subcol="customer address" :items="{{ json_encode($orders) }}" />
    <dashboard/>
</x-dashboard-layout>
