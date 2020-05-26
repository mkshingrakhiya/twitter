<x-app>
    <header class="mb-6">
        <div class="relative">
            <img
                alt="Your cover image"
                class="mb-2 rounded-2xl"
                src="{{ $user->cover_image }}"
            />
    
            <img
                alt="Your avatar"
                class="rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                src="https://i.pravatar.cc/150?u={{ $user->id }}"
                style="left: 50%;"
            />
        </div>

        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="font-bold text-xl">{{ $user->name }}</h2>
                <p class="text-gray-600 text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <button class="border border-gray-300 rounded-full text-black text-sm py-2 px-4 mr-2" type="submit">
                    Edit Profile
                </button>

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm text-gray-700">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
            of Lorem Ipsum.
        </p>
    </header>

    @include('_timeline', ['tweets' => $user->tweets])
</x-app>