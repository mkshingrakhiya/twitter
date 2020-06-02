<ul>
  <li>
    <a class="font-bold text-lg mb-1 block" href="{{ route('home') }}">
      Home
    </a>
  </li>

  <li>
    <a class="font-bold text-lg mb-1 block" href="{{ route('explore') }}">
      Explore
    </a>
  </li>

  <li>
    <a class="font-bold text-lg mb-1 block" href="/">
      Notifications
    </a>
  </li>

  <li>
    <a class="font-bold text-lg mb-1 block" href="/">
      Messages
    </a>
  </li>

  <li>
    <a class="font-bold text-lg mb-1 block" href="/">
      Bookmarks
    </a>
  </li>

  <li>
    <a class="font-bold text-lg mb-1 block" href="/">
      Lists
    </a>
  </li>

  <li>
    <a class="font-bold text-lg mb-1 block" href="{{ route('profiles.show', auth()->user()) }}">
      Profile
    </a>
  </li>

  <li>
    <a class="font-bold text-lg mb-1 block" href="/">
      More
    </a>
  </li>

  <li>
    <form action="{{ route('logout') }}" id="logout-form" method="POST">
      @csrf
    </form>

    <a
      class="font-bold text-lg mb-1 block"
      href="{{ route('logout') }}"
      onclick="event.preventDefault(); document.querySelector('#logout-form').submit()">
      Logout
    </a>
  </li>
</ul>