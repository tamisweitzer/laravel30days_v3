<x-layout>
    <x-slot:heading>Login</x-slot:heading>

    <form method="POST" action"/login">
        @csrf
        <div class="border-b border-gray-900/10 pb-4">
            <h2 class="mb-8 text-base/7 font-semibold text-gray-900">Login to your account</h2>
            <div class="mb-6 grid sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-label-default for="email">Email</x-label-default>
                    <div class="mt-2">
                        <x-input-text type="email" name="email" id="email" placeholder="name@mail.com"
                            required></x-input-text>
                        <x-form-error field="email"></x-form-error>
                    </div>
                </div>
            </div>
            <div class="mb-6 grid sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-label-default for="password">Password</x-label-default>
                    <div class="mt-2">
                        <x-input-text type="password" name="password" id="password" required></x-input-text>
                        <x-form-error field="password"></x-form-error>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <x-button href="/">Cancel</x-button>
                <x-button-purple type="submit">Login</x-button-purple>
            </div>
        </div>
    </form>
</x-layout>
