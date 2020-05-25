<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <section class="px-8 py-4 mb-6">
      <header class="container mx-auto">
        <a class="inline-flex items-center" href="{{ route('home') }}">
          <img alt="Twitter Logo" src="{{ asset('/images/logo.svg') }}" width="50">

          <h1 class="font-bold text-xl">Twitter</h1>
        </a>
      </header>
    </section>

    <section class="px-8">
      <main class="container mx-auto">
        {{ $slot }}
      </main>
    </section>
  </div>
</body>

</html>