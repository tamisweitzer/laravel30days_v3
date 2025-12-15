<x-layout>
    <x-slot:heading>Venues</x-slot:heading>

    <ul class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
        @foreach ($venues as $venue)
            <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <a href="/cities/{{ $venue->id }}">
                    {{ $venue['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
