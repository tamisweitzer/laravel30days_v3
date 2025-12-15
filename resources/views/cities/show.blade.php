<x-layout>
    <x-slot:heading>{{ $city->name }}</x-slot:heading>

    <h2 class="text-2xl mb-4">About</h2>

    <div class="mb-4">{{ $city->excerpt }}</div>

    <div class="mb-4">{{ $city->bio }}</div>

    <h2 class="text-2xl mt-8 mb-4">Upcoming Events in {{ $city->name }}</h2>

    {{-- @dd($events) --}}

    @if (!$events->isEmpty())
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($events as $event)
                <a class="p-4 mb-2 bg-slate-50 border b-slate-100 hover:shadow-inner hover:border-slate-300 hover:bg-white"
                    href="/events/{{ $event->event_id }}">
                    <h2 class="mb-2 text-slate-900 font-bold tracking-wide">
                        {{ $event->band_name }}
                    </h2>

                    <div class="text-base mb-1">
                        {{ $event->venue_name }}
                    </div>

                    <div class="text-xs">
                        {{ date('M d, Y', strtotime($event->event_date)) }}
                        at
                        {{ date('h:i A', strtotime($event->event_time)) }}
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <p class="italic text-gray-600">No events found</p>
    @endif


    <h2 class="text-2xl mt-8 mb-4">All Venues Located in {{ $city->name }}</h2>

    {{-- @dd($venues) --}}


    @if (!$venues->isEmpty())
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($venues as $venue)
                <a class="p-4 mb-2 bg-slate-50 border b-slate-100 hover:shadow-inner hover:border-slate-300 hover:bg-white"
                    href="/venues/{{ $venue->venue_id }}">
                    <h2 class="mb-2 text-slate-900 font-bold tracking-wide">
                        {{ $venue->venue_name }}
                    </h2>

                    <div class="text-sm">
                        {{ $venue->venue_address1 }}
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <p class="italic text-gray-600">No venues found</p>
    @endif
</x-layout>
