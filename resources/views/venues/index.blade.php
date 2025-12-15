<x-layout>
    <x-slot:heading>Venues</x-slot:heading>

    @if (!$venues->isEmpty())
        <ul class="text-slate-500 grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($venues as $venue)
                <a class="p-4 mb-2 bg-slate-50 border b-slate-100 hover:shadow-inner hover:border-slate-300 hover:bg-white"
                    href="/venues/{{ $venue->id }}">
                    <li>
                        <h2 class="mb-2 text-slate-900 font-bold tracking-widest"> {{ $venue->name }}</h2>

                        <div class="text-xs mb-1">
                            Lorem ipsum sit dolor
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    @else
        <p>No venues found. </p>
    @endif
</x-layout>
