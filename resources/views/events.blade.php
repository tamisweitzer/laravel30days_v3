<x-layout>
    <x-slot:heading>Events</x-slot:heading>

    <ul>
        @foreach ($events as $event)
            <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <h2 class="text-2xl">
                    <a href="/events/{{ $event->id }}">{{ $event->band->name }}</a>
                </h2>

                <a href="cities/xx">{{ $event->name }}</a>
                at
                <span>{{ $event->band->city->name }}</span>
                on
                <a href="{{ $event->edate }}">{{ date('m-d-Y', strtotime($event->edate)) }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
