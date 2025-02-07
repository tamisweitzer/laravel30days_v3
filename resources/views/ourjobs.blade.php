<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <ul class="mb-8">
        @foreach ($jobs as $job)
            <li class="border border-t-0 border-l-0 border-r-0 hover:bg-gray-200">
                <a href="/ourjobs/{{ $job['id'] }}" class="pt-4 pb-4 block">
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
