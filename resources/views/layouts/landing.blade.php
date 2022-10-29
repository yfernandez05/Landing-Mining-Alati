<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    
    <title>Mining Alati</title>
  </head>
  <body>

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.utils.modalterminos')

    @include('layouts.partials.footer')
    @include('layouts.partials.utils.backtop')
    

    <script src="{{asset('js/app.js')}}" ></script>
  </body>
</html>