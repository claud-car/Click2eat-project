<x-dashboard-layout>
    <dashboard>
        <update-businesses-form :original-data="{{ json_encode($restaurant) }}" :types="{{ json_encode($types) }}" :old-types="{{ json_encode($old_types) }}" />
    </dashboard>
</x-dashboard-layout>
