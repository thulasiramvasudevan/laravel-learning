<x-layout>
    <x-slot:heading> Register</x-slot:heading>
<form method="POST" action="/register">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-label for="title">First Name</x-form-label>
          <div class="mt-2">
            <x-form-input type='text' name='first_name' id='first_name' value="{{ old('first_name') }}" placeholder="First Name" required />
            <x-form-error name="first_name" />
          </div>
        </x-form-field>
        <x-form-field>
          <x-form-label for="title">Last Name</x-form-label>
          <div class="mt-2">
            <x-form-input type='text' name='last_name' id='last_name' value="{{ old('last_name') }}" placeholder="Last Name" required />
            <x-form-error name="last_name" />
          </div>
        </x-form-field>
        <x-form-field>
          <x-form-label for="title">Email</x-form-label>
          <div class="mt-2">
            <x-form-input name='email' id='email' type='email' value="{{ old('email') }}" placeholder="Email" required />
            <x-form-error name="email" />
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="title">Password</x-form-label>
          <div class="mt-2">
            <x-form-input name='password' id='password' type='password' value="{{ old('password') }}" placeholder="Password" required />
            <x-form-error name="email" />
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="title">Confirm Password</x-form-label>
          <div class="mt-2">
            <x-form-input type='text' name='confirm_password' id='confirm_password' value="{{ old('confirm_password') }}" placeholder="Confirm Password" required />
            <x-form-error name="email" />
          </div>
        </x-form-field>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <x-form-button> Register</x-form-button>
  </div>
</form>
</x-layout>