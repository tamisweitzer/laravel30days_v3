<x-layout>
    <x-slot:heading>City: {{ $city->name }}</x-slot:heading>
    <h2 class="text-2xl">{{ $city->name }}</h2>

    <p>{{ $city->name }}</p>

    <h3 class="mt-8 mb-4">All Bands Playing in {{ $city->name }}</h3>
    <div>
        @foreach ($events as $event)
            <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <div class="text-xl">{{ $event->band_name }}</div>
                <div class="text-sm text-gray-600">{{ $event->venue_name }}</div>
                <div class="text-sm text-gray-600">
                    {{ $event->event_date }} -
                    {{ $event->event_time }}
                </div>

            </div>
        @endforeach
    </div>

    <h3 class="mt-8 mb-4">All Venues Located in {{ $city->name }}</h3>
    <div class="flex">
        @foreach ($venues as $venue)
            <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <a href="/venues/{{ $venue->venue_id }}">{{ $venue->venue_name }}</a>
            </div>
        @endforeach
    </div>
</x-layout>
