<x-layout>
    <x-slot:heading>{{ $venue->name }}</x-slot:heading>

    <h2 class="text-2xl mt-8 mb-4">Upcoming Shows</h2>

    {{-- @dd($events) --}}

    @if (!$events->isEmpty())
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($events as $event)
                <a href="/events/{{ $event->id }}">
                    <div class="p-4 bg-slate-50 border b-slate-100">
                        <div class="text-xl">{{ $event->band_name }}</div>
                        <div class="text-sm text-gray-600">
                            {{ $event->event_date }} -
                            {{ $event->event_time }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <p>No events found.</p>
    @endif

</x-layout>
