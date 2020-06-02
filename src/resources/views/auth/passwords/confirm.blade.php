<x-master>
  <div class="flex justify-center">
		<div class="bg-gray-200 rounded-2xl w-1/3 py-6 px-12">
      <div class="font-bold text-lg mb-4">{{ __('Confirm Password') }}</div>

      <p class="text-sm mb-6">
        {{ __('Please confirm your password before continuing.') }}
      </p>

      <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="mb-6">
					<label
						class="block uppercase font-bold text-xs text-gray-700 mb-2"
						for="password"
					>
						Password
					</label>
		
					<input
						class="p-2 border border-gray-400 w-full"
						type="password"
						name="password"
						id="password"
						required
					/>
		
					@error('password')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
					@enderror
				</div>

        <div>
          <x-inputs.button shade="400" type="submit">Confirm Password</x-inputs.button>

          @if (Route::has('password.request'))
            <a class="text-xs text-gray-700 ml-2" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
          @endif
        </div>
      </form>
    </div>
  </div>
</x-master>