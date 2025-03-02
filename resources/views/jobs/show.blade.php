<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2 class="text-2xl">{{ $job['title'] }}</h2>

    <p>{{ $job['title'] }} pays {{ $job['salary'] }} </p>

    <x-button href="/ourjobs" class="ml-0 mt-8">Back to Jobs list</x-button>
</x-layout>
