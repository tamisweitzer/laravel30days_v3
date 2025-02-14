<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/ourjobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded ">
                <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year.
            </a>
        @endforeach
    </div>
</x-layout>
