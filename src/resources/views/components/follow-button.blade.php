@if (auth()->user()->isNot($user))
<form action="{{ route('toggle-follow', $user) }}" class="inline" method="POST">
  @csrf
  
  <button
    class="bg-blue-500 rounded-full shadow text-white text-sm py-2 px-4"
    type="submit"
  >
    {{ Auth::user()->following($user->id) ? 'Unfollow Me' : 'Follow Me' }}
  </button>
</form>
@endif