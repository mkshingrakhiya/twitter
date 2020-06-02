<x-master>
  <div class="flex justify-center">
    <div class="bg-gray-200 rounded-2xl w-1/3 py-6 px-12">
      <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

      <form method="POST" action="{{ route('login') }}">
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
            value="{{ old('email') }}"
            required
          />
    
          @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>
    
        <div class="mb-6">
          <label
            class="block uppercase font-bold text-xs text-gray-700 mb-2"
            for="password"
          >
            Password
          </label>
    
          <input
            autocomplete="current-password"
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

        <div class="mb-6">
          <div class="flex items-center">
            <input
              @if (old('remember') ? 'checked' : '') checked @endif
              type="checkbox"
              name="remember"
              id="remember"
            />

            <label
              class="uppercase font-bold text-xs text-gray-700 ml-2"
              for="remember"
            >
              Remember Me
            </label>
          </div>
    
          @error('remember')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <x-inputs.button shade="400" type="submit">Login</x-inputs.button>

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