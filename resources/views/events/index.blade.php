<x-layout class="">
    <x-slot:heading>Events</x-slot:heading>
    <ul class="text-slate-500">

        @if (!$events)
            {
            <div>No events found. </div>
            die();
            }
        @endif

        @foreach ($events as $event)
            {{-- {{ dd($event) }} --}}
            <li class="p-4 mb-2 bg-slate-50 shadow-inner border ">

                <h2 class="mb-2 text-slate-900 font-bold tracking-widest">
                    <x-link-inline href="/bands/{{ $event->band->id }}"
                        class="text-2xl">{{ $event->band->name }}</x-link-inline>
                </h2>

                <div class="text-base mb-1">
                    <x-link-inline href="venues/{{ $event->venue->id }}"
                        class="text-lg">{{ $event->venue->name }}</x-link-inline>
                    <span> in </span>
                    <x-link-inline href="cities/{{ $event->band->city->id }}"
                        class="text-lg">{{ $event->band->city->name }}</x-link-inline>
                </div>

                <div class="text-xs">
                    {{ date('M d, Y', strtotime($event->event_time)) }}
                    at 8:00 pm
                </div>

                <div class="text-sm">
                    {{ $event->details }}
                </div>

            </li>
        @endforeach
    </ul>
</x-layout>
