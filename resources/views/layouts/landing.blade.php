<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#457b80"/>   
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    
    <title>Mining Alati | @yield('title')</title>

    @yield('css')

    @yield('head')

  </head>
  <body>   

    {{-- @include('layouts.partials.header') --}}

    @include('layouts.partials.secondary_header')
    
    @yield('content')    

    @include('layouts.partials.utils.modalterminos')

    @include('layouts.partials.footer')
    @include('layouts.partials.utils.backtop')
    @include('layouts.partials.utils.loading')
    

    <script src="{{asset('js/app.js')}}" ></script>
  </body>
</html>