<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    @foreach ($jobs as $job)
        <h2 class="text-2xl mb-2">{{ $job->title }}</h2>
        <div class="mb-4">{{ $job->title }} pays ${{ $job->salary }} </div>
        <x-button href="/ourjobs/{{ $job->id }}/edit" class="">Edit Job</x-button>
    @endforeach

    <hr class="my-8">

    <x-link-inline href="/ourjobs">&laquo; Back to jobs list</x-link-inline>
</x-layout>
