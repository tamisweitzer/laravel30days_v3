<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel Playground</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/">
                                <img class="h-8 w-8" src="{{ asset('favicon.ico') }}" alt="Your Company">
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                                <x-nav-link href="/ourjobs" :active="request()->is('ourjobs')">Jobs</x-nav-link>
                                <x-nav-link href="/employers" :active="request()->is('employers')">Employers</x-nav-link>
                                <!-- FVL Tests -->
                                <x-nav-link href="/bands" :active="request()->is('bands')">Bands</x-nav-link>
                                <x-nav-link href="/cities" :active="request()->is('cities')">Cities</x-nav-link>
                                <x-nav-link href="/events" :active="request()->is('events')">Events</x-nav-link>
                                <x-nav-link href="/venues" :active="request()->is('venues')">Venues</x-nav-link>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            @guest
                                <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
                                {{-- <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link> --}}
                            @endguest
                            @auth
                                <form action="/logout" method="POST">
                                    @csrf
                                    <input type="submit" value="Logout"
                                        class="bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-white">
                                </form>
                            @endauth
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" id="mobile-toggle"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden transition-all duration-5000 ease-in-out pb-12" id="mobile-menu">
                <div class="space-y-1 px-2 py-4">
                    <x-nav-link-mobile href="/" :active="request()->is('/')">Home</x-nav-link-mobile>
                    <x-nav-link-mobile href="/about" :active="request()->is('about')">About</x-nav-link-mobile>
                    <x-nav-link-mobile href="/ourjobs" :active="request()->is('ourjobs')">Jobs</x-nav-link-mobile>
                    <x-nav-link-mobile href="/contact" :active="request()->is('contact')">Contact</x-nav-link-mobile>
                    <x-nav-link-mobile href="/bands" :active="request()->is('bands')">Bands</x-nav-link-mobile>
                    <x-nav-link-mobile href="/cities" :active="request()->is('cities')">Cities</x-nav-link-mobile>
                    <x-nav-link-mobile href="/events" :active="request()->is('events')">Events</x-nav-link-mobile>
                    <x-nav-link-mobile href="/venues" :active="request()->is('venues')">Venues</x-nav-link-mobile>
                </div>
                @guest
                    <div class="border-t border-gray-700 px-2 pb-3 pt-4">
                        <x-nav-link-mobile href="/login" :active="request()->is('login')">Login</x-nav-link-mobile>
                        {{-- <x-nav-link-mobile href="/register" :active="request()->is('register')">Register</x-nav-link-mobile> --}}
                    </div>
                @endguest
                @auth
                    <form action="/logout" method="POST" class="mx-4">
                        @csrf
                        <button type="submit" value="Logout"
                            class="bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-white">Log out </button>
                    </form>
                @endauth
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                @auth
                    <div>
                        <x-button href="/ourjobs/create">Create Job</x-button>
                        <x-button href="/bands/create">Create Band</x-button>
                        <x-button href="/events/create">Create Event</x-button>
                    </div>
                @endauth
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
