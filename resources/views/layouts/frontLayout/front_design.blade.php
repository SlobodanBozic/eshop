<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if(!empty($meta_title)){{ $meta_title }} @else Home | E-Shop @endif</title>
    @if(!empty($meta_description))<meta name="description" content="{{ $meta_description }}">@endif

    @if(!empty($meta_keywords))<meta name="keywords" content="{{ $meta_keywords }}">@endif

    <link href="{{ asset('css/frontend_css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/animate.css') }}" rel="stylesheet">
	  <link href="{{ asset('css/frontend_css/main.css') }}" rel="stylesheet">

  	<link href="{{ asset('css/frontend_css/main-new.css') }}" rel="stylesheet">

	<link href="{{ asset('css/frontend_css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/easyzoom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend_css/passtrength.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="/images/frontend_images/home/logo.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cc08788f3971d0012e248e5&product=inline-share-buttons' async='async'></script>
  </head><!--/head-->

<body>
	@include('layouts.frontLayout.front_header')

  <div class="container mb-4">
        @yield('content')
  </div>

	@include('layouts.frontLayout.front_footer')

    <script src="{{ asset('js/frontend_js/jquery.js') }}"></script>
	<script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/price-range.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/frontend_js/easyzoom.js') }}"></script>
    <script src="{{ asset('js/frontend_js/main.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/frontend_js/passtrength.js') }}"></script>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <scipt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></scipt>

    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })


    $(document).ready(function(){

    $('.newsletter-btn').click(function(e){
       e.preventDefault();
       /*Ajax Request Header setup*/
       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      var subscriber_email = $("#subscriber_email").val();


       $.ajax({
          url: "{{ url('check-and-add-subscriber_email')}}",
          method: 'post',
          data:{subscriber_email:subscriber_email},

          success: function(resp){
          if(resp == "exists"){
          $('#statusSubscribe').show();
          $("#statusSubscribe").html("<p class='alert alert-danger'>Subscriber email is already exists!</p>").delay(2000).fadeOut('slow');
          }
          else {
            $('#statusSubscribe').show();
            $("#statusSubscribe").html("<p class='alert alert-success'>Subscriber email is added successfully!</p>").delay(2000).fadeOut('slow');
          }

          },error:function(){
            $('#statusSubscribe').show();
            $("#statusSubscribe").html("<p class='alert alert-info'>Please enter valid email</p>").delay(2000).fadeOut('slow');
          }
      });
       });
    });
  </script>
</body>

</html>
