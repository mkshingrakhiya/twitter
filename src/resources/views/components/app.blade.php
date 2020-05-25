<x-master>
  <div class="md:flex md:justify-between">
    <div class="md:w-32">
      @include('_sidebar')
    </div>

    <div class="md:flex-1 md:mx-10" style="max-width: 700px;">
      {{ $slot }}
    </div>

    <div class="md:w-1/6">
      @include('_following')
    </div>
  </div>
</x-master>