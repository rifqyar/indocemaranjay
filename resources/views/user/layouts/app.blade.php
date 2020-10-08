<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Scripts -->
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/style.css"') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/addons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  @yield('css')
  </script>
</head>
<body class="welcome">
@yield('content')
</body>
</html>
