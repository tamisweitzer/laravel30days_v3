<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/ourjobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded ">
                <div class="text-bold text-blue-500">
                    {{ $job->employer->name }}
                </div>

                <div>
                    <span class="text-bold">{{ $job['title'] }}</span>: pays ${{ $job['salary'] }} per
                    year.
                </div>
            </a>
        @endforeach

        <div class="pagination-links">
            {{ $jobs->links() }}
        </div>
    </div>

    <x-button href="/" class="ml-0 mt-8">Back to Home</x-button>
</x-layout>
