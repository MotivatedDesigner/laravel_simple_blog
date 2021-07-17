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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/simple-scrollbar.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/fontawesome.all.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>
<body>
  <div class="site-content">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'OMMA') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        @include('components.footer')
    </div>


</body>
</html>
