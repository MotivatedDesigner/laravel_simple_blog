<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'OMMA') }}</title>
  
  <!-- Favicons -->
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/android-icon-72x72.png') }}" />
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-icon-144x144.png') }}" />
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/modernizr.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery.js') }}" defer></script>
  <script src="{{ asset('js/popper.min.js') }}" defer></script>
  <script src="{{ asset('js/plugins.js') }}" defer></script>
  <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}" defer></script>
  <script src="{{ asset('js/simple-scrollbar.min.js') }}" defer></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
  <script src="{{ asset('js/masonry.pkgd.min.js') }}" defer></script>
  <script src="{{ asset('js/theia-sticky-sidebar.min.js') }}" defer></script>
  <script src="{{ asset('js/ResizeSensor.min.js') }}" defer></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
  <script src="{{ asset('js/scrolla.jquery.min.js') }}" defer></script>
  <script src="{{ asset('js/main.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link
  href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;500;600;700;800&family=Barlow:wght@400;500;600;700&family=Roboto+Slab:wght@400;500;600;700;800&family=Roboto:wght@400;500;700&display=swap"
  rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/simple-scrollbar.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>
<body>
  <div class="site-content">
    @include('components.header')
    @yield('content')
    @include('components.footer')
  </div>
</body>
</html>
