<x-dashboard-layout>
    <dashboard>
        <orders-pagination name="id #" subcol="customer address" :items="{{ json_encode($orders) }}" />
    <dashboard/>
</x-dashboard-layout>
