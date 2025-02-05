<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="text-2xl">{{ $job['title'] }}</h2>

    <p>{{ $job['title'] }} pays {{ $job['salary'] }} </p>
</x-layout>
