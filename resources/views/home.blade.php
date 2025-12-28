<x-layout>
    <x-slot:heading>Home</x-slot:heading>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor temporibus, tempore commodi ea suscipit
    laboriosam, soluta exercitationem alias ipsum nam sunt aliquid, quibusdam minus nobis esse reiciendis impedit
    iste.

    <h3 class="mt-8">Basic Site Pages</h3>
    <div class="mb-8 bg-gray-800 flex flex-wrap gap-4">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
    </div>

    <h3>Laravel 30 Days Pages</h3>
    <div class="mb-8 bg-gray-800 flex flex-wrap gap-4">
        <x-nav-link href="/ourjobs" :active="request()->is('ourjobs')">Jobs</x-nav-link>
        <x-nav-link href="/employers" :active="request()->is('employers')">Employers</x-nav-link>
    </div>

    <h3>Fox Valley Live Pages</h3>
    <div class="mb-8 bg-gray-800 flex flex-wrap gap-4">
        <x-nav-link href="/bands" :active="request()->is('bands')">Bands</x-nav-link>
        <x-nav-link href="/cities" :active="request()->is('cities')">Cities</x-nav-link>
        <x-nav-link href="/events" :active="request()->is('events')">Events</x-nav-link>
        <x-nav-link href="/images" :active="request()->is('images')">Images</x-nav-link>
    </div>
</x-layout>
