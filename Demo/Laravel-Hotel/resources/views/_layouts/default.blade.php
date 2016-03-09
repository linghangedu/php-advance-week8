<!DOCTYPE html>
<html lang="zh-EN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Hotel</title>
 <link rel="stylesheet" href="{{ URL('booking/bower_components/html5-boilerplate/dist/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ URL('booking/bower_components/html5-boilerplate/dist/css/main.css') }}">
  <link rel="stylesheet" href="{{ URL('booking/bower_components/materialize/dist/css/materialize.css') }}">

  <link href="{{ URL('css/app.css') }}" rel="stylesheet">
  <link href="{{ URL('css/custom.css') }}" rel="stylesheet">
  <script src="{{ URL('booking/bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>
<body>

<nav class="blue-grey darken-2">
  <div class="nav-wrapper black ">
    <a href="{{ URL('/') }}" class="brand-logo">Laravel Hotel</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ URL('blog') }}">Blog</a></li>
      <li><a href="{{ URL('about') }}">About Us</a></li>
      <li><a href="{{ URL('contact') }}">Contact</a></li>
    </ul>
  </div>
</nav>

  <!-- <div class="container" style="margin-top: 20px;"> -->
    @yield('content')
    <div id="footer" style="text-align: center;padding: 40px 20px;background:black;color:white;">
@2015 Linghang Laravel Tutorial
<a href="{{ URL('admin/')}}">Admin Panel</a>
    </div>
  <!-- </div> -->

<!-- <script type="text/javascript" src="https://js.stripe.com/v2/"></script> -->
<script type="text/javascript">
  // Stripe.setPublishableKey('pk_test_p0QQDCeJQA7W9X9y0VP7QOz5');
</script>
<script src="{{ URL('booking/bower_components/jquery/dist/jquery.js') }}"></script>
<script src="{{ URL('booking/bower_components/materialize/dist/js/materialize.js') }}"></script>
<script src="{{ URL('booking/bower_components/angular/angular.js') }}"></script>
<script src="{{ URL('booking/bower_components/angular-route/angular-route.js') }}"></script>
<script src="{{ URL('booking/bower_components/angular-materialize/src/angular-materialize.js') }}"></script>
<script src="{{ URL('booking/bower_components/angular-payments/lib/angular-payments.js') }}"></script>
<script type="text/javascript" charset="utf-8">

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal({
      opacity: .5 // Opacity of modal background
    }
  );
  });
</script>

</body>
</html>
