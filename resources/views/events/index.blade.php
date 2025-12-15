<x-layout class="">
    <x-slot:heading>Events</x-slot:heading>

    @if (!$events->isEmpty())
        <ul class="text-slate-500 grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($events as $event)
                {{-- {{ dd($event) }} --}}
                <a class="p-4 mb-2 bg-slate-50 border b-slate-100 hover:shadow-inner hover:border-slate-300 hover:bg-white"
                    href="">
                    <li>
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
                            {{ date('h:i A', strtotime($event->event_time)) }}
                        </div>

                        <div class="text-sm">
                            {{ $event->details }}
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    @else
        <div>No events found. </div>
    @endif
</x-layout>
