<x-dashboard-layout>
    <dashboard>
        <h2 class="text-2xl">Orders</h2>
        <orders-pagination name="id #" subcol="customer address" :items="{{ json_encode($orders) }}" />
    <dashboard/>
    
</x-dashboard-layout>
