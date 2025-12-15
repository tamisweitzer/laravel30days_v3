<x-layout>
    <x-slot:heading class="mb-4">City: {{ $city->name }}</x-slot:heading>

    <div class="mb-4">{{ $city->excerpt }}</div>

    <div class="mb-4">{{ $city->bio }}</div>

    <h3 class="mt-8 mb-4">All Bands Playing in {{ $city->name }}</h3>

    @if (!$events->isEmpty())
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
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
    @else
        <p class="italic text-gray-600">No events found</p>
    @endif


    <h3 class="mt-8 mb-4">All Venues Located in {{ $city->name }}</h3>

    @if (!$venues->isEmpty())
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($venues as $venue)
                <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                    <a href="/venues/{{ $venue->venue_id }}">{{ $venue->venue_name }}</a>
                </div>
            @endforeach
        </div>
    @else
        <p class="italic text-gray-600">No venues found</p>
    @endif
</x-layout>
