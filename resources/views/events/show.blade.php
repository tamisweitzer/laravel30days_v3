<x-layout>
    {{-- @dd($event) --}}
    <x-slot:heading>{{ $event->name }}</x-slot:heading>

    <div class="text-lg">
        <dl class="max-w-md">
            <div class="mb-4 flex gap-x-4">
                <dt class="w-20 font-semibold">Band</dt>
                <dd>
                    <a class="underline hover:text-orange-600" href="/bands/{{ $event->band->id }}">
                        {{ $event->band->name }}
                    </a>
                </dd>
            </div>

            <div class="mb-4 flex gap-x-4">
                <dt class="w-20 font-semibold">Venue</dt>
                <dd>
                    <a class="underline hover:text-orange-600" href="/venues/{{ $event->venue->id }}">
                        {{ $event->venue->name }}
                    </a>
                </dd>
            </div>

            <div class="mb-4 flex gap-x-4">
                <dt class="w-20 font-semibold">City</dt>
                <dd>
                    <a class="underline hover:text-orange-600" href="/cities/{{ $event->venue->city->id }}">
                        {{ $event->venue->city->name }}
                    </a>
                </dd>
            </div>

            <div class="mb-4 flex gap-x-4">
                <dt class="w-20 font-semibold">Date</dt>
                <dd> {{ date('M d, Y', strtotime($event->event_date)) }}</dd>
            </div>

            <div class="mb-4 flex gap-x-4">
                <dt class="w-20 font-semibold">Time</dt>
                <dd>{{ date('g:i A', strtotime($event->event_time)) }}</dd>
            </div>

            <div class="mb-4 flex gap-x-4">
                <dt class="w-20 font-semibold">Details</dt>
                <dd>{{ $event->event_details }}</dd>
            </div>
        </dl>
    </div>
</x-layout>
