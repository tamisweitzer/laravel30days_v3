<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li class="mb-2">
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>: pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
