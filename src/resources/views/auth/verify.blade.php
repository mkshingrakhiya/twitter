<x-master>
  <div class="flex justify-center">
		<div class="bg-gray-200 rounded-2xl w-1/3 py-6 px-12">
      <div class="font-bold text-lg mb-4">{{ __('Verify Your Email Address') }}</div>

      @if (session('resent'))
        <p class="text-green-500 text-xs mb-2">
          {{ __('A fresh verification link has been sent to your email address.') }}
        </p>
      @endif

      <p class="text-sm mb-6">
        {{ __('Before proceeding, please check your email for a verification link.') }}
      </p>

      <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf

        <x-inputs.button shade="400" type="submit">
          {{ __('Request Link, Again!') }}
        </x-inputs.button>
      </form>
    </div>
  </div>
</x-master>