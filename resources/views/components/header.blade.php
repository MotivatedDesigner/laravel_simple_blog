<header class="site-header header-style-one intro-element">
  <div class="navigation-area">
    <div class="container-medium">
      <div class="row">
        <div class="col-12">
          <div class="site-navigation">
            <div class="intro-socail-share">
              <div class="share-alt"><span class="fa fa-share-alt"></span></div>
              <div class="socail-share">
                <a href="#"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-twitter"></span></a>
                <a href="#"><span class="fab fa-instagram"></span></a>
                <a href="#"><span class="fab fa-pinterest-p "></span></a>
              </div>
            </div><!-- /.intro-socail-share -->
            <nav class="navigation">
              <div class="menu-wrapper">
                <div class="menu-content">
                  <ul class="mainmenu">
                    <li><a class="@if (Route::is('home')) active @endif" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li class="megamenu">
                      <a class="@if (Route::is('categories')) active @endif"href="#">{{ __('Categories') }}</a>
                      <ul class="sub-menu megamenu-main">
                        <li>
                          <div class="megamenu-wrapper">
                            <div class="container megamenu-container">
                              <div class="row">
                                <div class="col-lg-3 megamenu-column">
                                  <div class="megamenu-column-inner">
                                    <h3 class="megamenu-heading">Home Group
                                    </h3>
                                    <ul class="custom-megamenu">
                                      <li><a href="index.html">Home
                                          One</a></li>
                                      <li><a href="index02.html">Home
                                          Two</a></li>
                                      <li><a href="index03.html">Home
                                          Three</a></li>
                                      <li><a href="index04.html">Home
                                          Four</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-lg-3 megamenu-column">
                                  <div class="megamenu-column-inner">
                                    <h3 class="megamenu-heading">Home Group
                                    </h3>
                                    <ul class="custom-megamenu">
                                      <li><a href="index05.html">Home
                                          Five</a></li>
                                      <li><a href="index06.html">Home
                                          Six</a></li>
                                      <li><a href="index07.html">Home
                                          Seven</a></li>
                                      <li><a href="index08.html">Home
                                          Eight</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-lg-3 megamenu-column">
                                  <div class="megamenu-column-inner">
                                    <h3 class="megamenu-heading">Home Group
                                    </h3>
                                    <ul class="custom-megamenu">
                                      <li><a href="index09.html">Home
                                          Nine</a></li>
                                      <li><a href="index10.html">Home Ten</a></li>
                                      <li><a href="index11.html">Home
                                          Eleven</a></li>
                                      <li><a href="index12.html">Home
                                          Twelve</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="col-lg-3 megamenu-column">
                                  <div class="megamenu-column-inner">
                                    <h3 class="megamenu-heading">Single Pages
                                    </h3>
                                    <ul class="custom-megamenu">
                                      <li><a href="single-post.html">Single Post One</a></li>
                                      <li><a href="single-post-two.html">Single Post Two</a></li>
                                      <li><a href="single-post-three.html">Single Post Three</a></li>
                                      <li><a href="single-post-four.html">Single Post Four</a></li>
                                      <li><a href="single-post-five.html">Single Post Five</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li><a class="@if (Route::is('contact')) active @endif">{{ __('Contact Us') }}</a></li>
                    <li><a class="@if (Route::is('about')) active @endif">{{ __('About Us') }}</a></li>
                  </ul> <!-- /.menu-list -->
                </div> <!-- /.hours-content-->
              </div><!-- /.menu-wrapper -->
            </nav>
            <div class="header-right-area mainmenu">
              @guest
                <li><a href="{{ route('login') }}" class="@if (Route::is('login')) active @endif">{{ __('Login') }}</a></li>
                <li><a href="{{ route('register') }}" class="@if (Route::is('register')) active @endif">{{ __('Register') }}</a></li>
              @else
                <li><a>{{ Auth::user()->name }}</a></li>
              @endguest
              <div class="hamburger-menus">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div><!-- /.header-top-right-area -->
          </div><!-- /.site-navigation -->
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.navigation-area -->

  <div class="mobile-sidebar-menu sidebar-menu">
    <div class="overlaybg"></div>
  </div>
</header>

		<!--~~~ Sticky Header ~~~-->
		<div id="sticky-header" class="active"></div>