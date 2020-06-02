<x-app>
  <form action="{{ route('profiles.update', $user) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-6">
      <label
        class="block uppercase font-bold text-xs text-gray-700 mb-2"
        for="avatar"
      >
        Avatar
      </label>

      <div class="flex">
        <input
          class="p-2 border border-gray-400 w-full"
          type="file"
          name="avatar"
          id="avatar"
        />

        <img
          src="{{ $user->avatar }}"
          alt="Your avatar"
          width="45"
        />
      </div>

      @error('avatar')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
      @enderror
    </div>

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
        value="{{ $user->username }}"
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
        value="{{ $user->name }}"
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
        value="{{ $user->email }}"
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

    <x-inputs.button class="mr-4" rounded="2xl" type="submit">Submit</x-inputs.button>

    <a class="hover:underline" href="{{ route('profiles.show', $user) }}">Cancel</a>
  </form>
</x-app>
