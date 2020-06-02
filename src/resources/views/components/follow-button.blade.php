@if (auth()->user()->isNot($user))
<form action="{{ route('toggle-follow', $user) }}" class="inline" method="POST">
  @csrf
  
  <x-inputs.button rounded="2xl" type="submit">
    {{ Auth::user()->following($user->id) ? 'Unfollow Me' : 'Follow Me' }}
  </x-inputs.button>
</form>
@endif