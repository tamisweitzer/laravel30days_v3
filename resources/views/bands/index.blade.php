<x-layout>
    <x-slot:heading>Bands</x-slot:heading>

    @if (!$bands->isEmpty())
        <ul class="grid sm:grid-cols-2 md:grid-cols-3 gap-2">
            @foreach ($bands as $band)
                <li
                    class="p-4 mb-2 bg-slate-50 border b-slate-100 inline-block rounded hover:bg-slate-200 hover:b-slate-200">
                    <a href="/bands/{{ $band->id }}">{{ $band->name }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <div>No bands found. </div>
    @endif
</x-layout>
