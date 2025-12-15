<x-layout>
    <x-slot:heading>Cities</x-slot:heading>

    @if (!$cities->isEmpty())
        <ul class="text-slate-500 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
            @foreach ($cities as $city)
                <a class="p-4 mb-2 bg-slate-50 border b-slate-100 hover:shadow-inner hover:border-slate-300 hover:bg-white"
                    href="/cities/{{ $city->id }}">
                    <li>
                        <h2 class="mb-2 text-slate-900 font-bold tracking-wide"> {{ $city->name }}</h2>

                        <div class="text-xs mb-1">
                            Lorem ipsum sit dolor
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    @else
        <div>No cities found. </div>
    @endif
</x-layout>
