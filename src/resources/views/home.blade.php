@extends('layouts.app')

@section('content')
<div class="container">
  <div class="lg:flex lg:justify-between">
    <div class="lg:w-32">
      @include('_sidebar')
    </div>
  
    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
      @include('_compose-tweet-card')

      <div class="border border-gray-300 rounded-lg">
        @each('_tweet', $tweets, 'tweet')
      </div>
    </div>
    
    <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
      @include('_following')
    </div>
  </div>
</div>
@endsection
