<x-layout>
    <x-slot:heading>{{ $band->name }}</x-slot:heading>

    <h2 class="text-2xl mb-4">About</h2>

    <div class="mb-4">{{ $band->excerpt }}</div>

    <div class="mb-4">{{ $band->bio }}</div>

    <h2 class="text-2xl mt-8 mb-4">Upcoming Shows</h2>

    {{-- @dd($events) --}}

    @if (!$events->isEmpty())
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($events as $event)
                <a class="p-4 mb-2 bg-slate-50 border b-slate-100 hover:shadow-inner hover:border-slate-300 hover:bg-white"
                    href="/events/{{ $event->id }}">
                    <h2 class="mb-2 text-slate-900 font-bold tracking-widest">
                        {{ $event->band->name }}
                    </h2>

                    <div class="text-base mb-1">
                        {{ $event->venue->name }}
                        <span> in </span>
                        {{ $event->venue->city->name }}
                    </div>

                    <div class="text-xs">
                        {{ date('M d, Y', strtotime($event->event_date)) }}
                        at
                        {{ date('g:i A', strtotime($event->event_time)) }}
                    </div>

                    <div class="text-sm">
                        {{ $event->details }}
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <p>No events found.</p>
    @endif


</x-layout>
