<x-layout>
    <x-slot:heading>Cities</x-slot:heading>

    @if (!$cities->isEmpty())
        <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
            @foreach ($cities as $city)
                <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                    <a href="/cities/{{ $city->id }}">
                        {{ $city->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <div>No cities found. </div>
    @endif
</x-layout>
