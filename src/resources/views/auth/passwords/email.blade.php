<x-master>
	<div class="flex justify-center">
		<div class="bg-gray-200 rounded-2xl w-1/3 py-6 px-12">
			<div class="font-bold text-lg mb-4">{{ __('Reset Password') }}</div>

			@if (session('status'))
				<p class="text-green-500 text-xs mb-2">
					{{ session('status') }}
				</p>
			@endif

			<form method="POST" action="{{ route('password.email') }}">
				@csrf

				<div class="mb-6">
          <label
            class="block uppercase font-bold text-xs text-gray-700 mb-2"
            for="email"
          >
            Email
          </label>
    
          <input
            autocomplete="email"
            autofocus
            class="p-2 border border-gray-400 w-full"
            type="email"
            name="email"
            id="email"
            value="{{ $email ?? old('email') }}"
            required
          />
    
          @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
				</div>

				<x-inputs.button shade="400" type="submit">{{ __('Send Password Reset Link') }}</x-inputs.button>
			</form>
		</div>
	</div>
</x-master>