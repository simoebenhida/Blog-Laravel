<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    @yield('styles')
  </head>
  <body>
    @include('partials.navbar')
    @yield('body')
  </body>
  @yield('scripts')
  <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>
