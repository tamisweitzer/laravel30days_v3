 <x-layout>
     <x-slot:heading>Register</x-slot:heading>

     @auth
         <form method="POST" action"/register">
             @csrf
             <div class="border-b border-gray-900/10 pb-4">
                 <h2 class="text-base/7 font-semibold text-gray-900">Register a new account</h2>
                 <p class="mt-1 text-sm/6 text-gray-600">We just need a few details from you.</p>

                 <div class="mt-10 mb-4 grid sm:grid-cols-6">
                     <div class="sm:col-span-4">
                         <x-label-default for="name">Display Name</x-label-default>
                         <div>
                             <x-input-text type="text" name="name" id="name" required></x-input-text>
                             <x-form-error field="first_name"></x-form-error>
                         </div>
                     </div>
                 </div>
                 {{-- <div class="mb-4 grid sm:grid-cols-6">
                 <div class="sm:col-span-4">
                     <x-label-default for="last_name">Last Name</x-label-default>
                     <div>
                         <x-input-text type="text" name="last_name" id="last_name" required></x-input-text>
                         <x-form-error field="last_name"></x-form-error>
                     </div>
                 </div>
             </div> --}}
                 <div class="mb-4 grid sm:grid-cols-6">
                     <div class="sm:col-span-4">
                         <x-label-default for="email">Email</x-label-default>
                         <div>
                             <x-input-text type="email" name="email" id="email" placeholder="name@mail.com"
                                 required></x-input-text>
                             <x-form-error field="email"></x-form-error>
                         </div>
                     </div>
                 </div>
                 <div class="mb-4 grid sm:grid-cols-6">
                     <div class="sm:col-span-4">
                         <x-label-default for="password">Password</x-label-default>
                         <div>
                             <x-input-text type="password" name="password" id="password" required></x-input-text>
                             <x-form-error field="password"></x-form-error>
                         </div>
                     </div>
                 </div>
                 <div class="mb-4 grid sm:grid-cols-6">
                     <div class="sm:col-span-4">
                         <x-label-default for="password_confirmation">Confirm Password</x-label-default>
                         <div>
                             <x-input-text type="password" name="password_confirmation" id="password_confirmation"
                                 required></x-input-text>
                             <x-form-error field="password_confirmation"></x-form-error>
                         </div>
                     </div>
                 </div>
                 <div class="mt-6 mb-8 flex items-center justify-end gap-x-6">
                     <x-button href="/">Cancel</x-button>
                     <x-button-purple type="submit">Register</x-button-purple>
                 </div>
             </div>
         </form>
     @endauth

     @guest
         <div>Registration is not allowed.</div>
     @endguest
 </x-layout>
