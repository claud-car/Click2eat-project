<x-dashboard-layout>
    <dashboard>
        <order-information :details="{{ json_encode($order) }}" :plates="{{ json_encode($order->plates) }}"/>
    <dashboard/>

</x-dashboard-layout>
