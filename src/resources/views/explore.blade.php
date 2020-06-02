<x-app>
  @foreach ($users as $user)
  <a class="flex items-center mb-4" href="{{ route('profiles.show', $user) }}">
    <img class="rounded-lg" src="{{ $user->avatar }}" alt="User's avatar" width="50" />

    <h4 class="font-bold p-2">{{ "@{$user->username}" }}</h4>
  </a>
  @endforeach

  {{ $users->links() }}
</x-app>