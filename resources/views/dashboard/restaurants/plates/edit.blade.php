<x-dashboard-layout>
    <dashboard>
        <update-plates-form :restaurant="{{ json_encode($restaurant) }}" :original-data="{{ json_encode($plate) }}" />
    </dashboard>
</x-dashboard-layout>
