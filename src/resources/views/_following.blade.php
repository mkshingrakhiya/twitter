<div class="bg-gray-200 rounded-2xl py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    
    <ul>
        @forelse (auth()->user()->follows as $user)
        <li class="mb-4">
            <a class="flex items-center text-sm" href="{{ route('profiles.show', $user) }}">
                <img
                    alt="{{ $user->name }}'s Avatar"
                    class="rounded-full mr-2"
                    src="{{ $user->avatar }}"
                    width="40"
                />
    
                {{ $user->name }}
            </a>
        </li>
        @empty
        <li>You're not following anyone yet!</li>
        @endforelse
    </ul>
</div>