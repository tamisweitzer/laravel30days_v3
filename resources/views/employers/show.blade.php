<x-layout>
    <x-slot:heading>Employer</x-slot:heading>
    <h2 class="text-2xl">{{ $employer['name'] }}</h2>

    <h3 class="mt-8 mb-4">This employers has the following jobs:</h3>
    <div>
        {{-- {{ dd($jobs) }} --}}
        @foreach ($jobs as $job)
            <div class="p-4 mb-2 bg-slate-50 border b-slate-100">
                <span class="text-bold">{{ $job['title'] }}</span>: pays {{ $job['salary'] }} per year.
            </div>
        @endforeach
    </div>
    <x-go-back-link href="/employers"></x-go-back-link>
</x-layout>
