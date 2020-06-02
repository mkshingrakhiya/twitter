<x-master>
	<!-- TODO: Pagination views -->
	<div class="flex justify-center">
		<div class="bg-gray-200 rounded-2xl w-1/3 py-6 px-12">
			<div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

			<form method="POST" action="{{ route('register') }}">
				@csrf

				<div class="mb-6">
					<label
						class="block uppercase font-bold text-xs text-gray-700 mb-2"
						for="username"
					>
						Username
					</label>
		
					<input
						class="p-2 border border-gray-400 w-full"
						type="text"
						name="username"
						id="username"
						value="{{ old('username') }}"
						required
					/>
		
					@error('username')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-6">
					<label
						class="block uppercase font-bold text-xs text-gray-700 mb-2"
						for="name"
					>
						Name
					</label>
		
					<input
						class="p-2 border border-gray-400 w-full"
						type="text"
						name="name"
						id="name"
						value="{{ old('name') }}"
						required
					/>
		
					@error('name')
						<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
					@enderror
				</div>
		
				<div class="mb-6">
					<label
						class="block uppercase font-bold text-xs text-gray-700 mb-2"
						for="email"
					>
						Email
					</label>
		
					<input
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
					<label
						class="block uppercase font-bold text-xs text-gray-700 mb-2"
						for="password-confirmation"
					>
						Confirm Password
					</label>
		
					<input
						class="p-2 border border-gray-400 w-full"
						type="password"
						name="password_confirmation"
						id="password-confirmation"
						required
					/>
				</div>

				<x-inputs.button shade="400" type="submit">Register</x-inputs.button>
			</form>
		</div>
	</div>
</x-master>