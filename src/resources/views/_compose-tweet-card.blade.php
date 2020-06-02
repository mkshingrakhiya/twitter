<div class="border border-blue-400 rounded-lg py-4 px-6 mb-8">
  <form action="{{ route('tweets.store') }}" method="POST">
    @csrf

    <textarea
      class="w-full mb-2"
      name="body"
      placeholder="What's happening?"
      required
    ></textarea>

    <footer class="flex justify-between">
      <img
        src="{{ Auth::user()->avatar }}"
        alt="Your Avatar"
        class="rounded-full"
        width="35"
      >

      @error('body')
        <small class="text-red-500 ml-2 mr-auto self-center">{{ $message }}</small>
      @enderror

      <x-inputs.button rounded="2xl" type="submit">Tweet</x-inputs.button>
    </footer>
  </form>
</div>