<div class="bg-gray-200 rounded-2xl py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    
    <ul>
        @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <a class="flex items-center text-sm" href="{{ route('profiles.show', $user) }}">
                <img src="{{ $user->avatar }}" alt="{{ $user->name }}'s Avatar" class="rounded-full mr-2">
    
                {{ $user->name }}
            </a>
        </li>
        @endforeach
    </ul>
</div>