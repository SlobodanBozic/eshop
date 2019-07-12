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
  @yield('jumbotron_header')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
            integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>


     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/main.js') }}"></script>
     <script src="{{ asset('js/countDownTimer.js') }}"></script>
     <div id='app'></div>
</body>
</html>
