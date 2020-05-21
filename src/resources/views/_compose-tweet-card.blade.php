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
      >

      @error('body')
        <small class="text-red-500 ml-2 mr-auto self-center">{{ $message }}</small>
      @enderror

      <button
        class="bg-blue-600 rounded-full shadow text-white py-2 px-4"
        type="submit"
      >
        Tweet
      </button>
    </footer>
  </form>
</div>