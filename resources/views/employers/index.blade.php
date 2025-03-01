<x-layout>
    <x-slot:heading>Employers</x-slot:heading>

    <ul>
        @foreach ($employers as $employer)
            <li class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <a href="/employers/{{ $employer->id }}">{{ $employer->name }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
