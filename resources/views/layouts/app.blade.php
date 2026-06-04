<!doctype html>
<html lang="vi" class="dark">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'BoostXVN' }}</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  @include('partials.nav')
  @include('partials.flash')
  <main>@yield('content')</main>
  @include('partials.footer')
</body>
</html>
