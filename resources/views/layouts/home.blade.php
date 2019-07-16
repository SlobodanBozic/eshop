<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

  @include('inc.navbar')
  @include('inc.hotdeal_header')
  @yield('hot_products')
  @include('inc.messages')

<div class="container-fluid mb-4">
  <div class='row'>
      @yield('sidebar')
      @yield('content')
    </div>
</div>

  @yield('newsletter')
  @include('inc.footer')

    <!-- Scripts -->
    @yield('editor-scripts')

    <div id='app'></div>
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('js/countDownTimer.js') }}"></script>
     <script src="{{ asset('js/main.js') }}"></script>


</body>
</html>
