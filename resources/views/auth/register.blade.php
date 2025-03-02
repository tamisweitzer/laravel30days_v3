<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <form method="POST" action"/register">
        @csrf
        <div class="border-b border-gray-900/10 pb-4">
            <h2 class="text-base/7 font-semibold text-gray-900">Register a new account</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need a few details from you.</p>

            <div class="mt-10 mb-6 grid sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-label-default for="first_name">First Name</x-label-default>
                    <div class="mt-2">
                        <x-input-text type="text" name="first_name" id="first_name" required></x-input-text>
                        <x-form-error field="first_name"></x-form-error>
                    </div>
                </div>
            </div>
            <div class="mb-6 grid sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-label-default for="last_name">Last Name</x-label-default>
                    <div class="mt-2">
                        <x-input-text type="text" name="last_name" id="last_name" required></x-input-text>
                        <x-form-error field="last_name"></x-form-error>
                    </div>
                </div>
            </div>
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
            <div class="mb-6 grid sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-label-default for="password_confirmation">Confirm Password</x-label-default>
                    <div class="mt-2">
                        <x-input-text type="password" name="password_confirmation" id="password_confirmation"
                            required></x-input-text>
                        <x-form-error field="password_confirmation"></x-form-error>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <x-button href="/">Cancel</x-button>
                <x-button-purple type="submit">Register</x-button-purple>
            </div>
        </div>
    </form>
</x-layout>
