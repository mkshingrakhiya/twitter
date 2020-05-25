<div class="flex p-4 border-b border-gray-400">
  <a class="flex-shrink-0 mr-3" href="{{ route('profiles.show', $tweet->user) }}">
    <img
      src="{{ $tweet->user->avatar }}"
      alt=""
      class="rounded-full"
    >
  </a>

  <div>
    <a href="{{ route('profiles.show', $tweet->user) }}">
      <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
    </a>

    <p class="text-sm">
      {{ $tweet->body }}
    </p>
  </div>
</div>