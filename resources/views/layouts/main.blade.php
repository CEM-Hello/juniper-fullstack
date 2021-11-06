<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('includes.metatags')
</head>
<body>
  <div class="main-wrap">
    @include('includes.header')
    <div class="page-sections">
  @yield('content')
  @include('includes.footer')

 
</body>
</html>