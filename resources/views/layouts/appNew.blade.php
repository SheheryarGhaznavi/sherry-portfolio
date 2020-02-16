
<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Sunshine - Responsive vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sunshine - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/transition-animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- This styles needs for demo -->
    <link rel="stylesheet" href="{{ asset('preview/lmpixels-demo-panel.css') }}" type="text/css">
    <!-- /This styles needs for demo -->
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-92992662-1', 'auto');
      ga('send', 'pageview');

    </script>

    <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header">
        <div class="my-photo">
          <img src="{{ asset('images/my_photo.jpg') }}" alt="image">
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">Alex Smith</h1>
          <p class="site-description">Web Designer</p>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </header>
      <!-- /Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Navigation & Social buttons -->
          <div class="site-nav mobile-menu-hide">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <!-- About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#about_me" data-animation="58" data-goto="1">About me</a><!-- href value = data-id without # of .pt-page -->
              </li>
              <!-- /About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#resume" data-animation="59" data-goto="2">Resume</a>
              </li>
              <li>
                <a class="pt-trigger" href="#portfolio" data-animation="60" data-goto="3">Portfolio</a>
              </li>
              <li>
                <a class="pt-trigger" href="#blog" data-animation="61" data-goto="4">Blog</a>
              </li>
              <li>
                <a class="pt-trigger" href="#contact" data-animation="58" data-goto="5">Contact</a>
              </li>
              <li>
                <ul id="nav" class="site-main-menu">
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
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
                                    <a class="dropdown-item" href="">Comments</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            @endguest
              </ul>
              </li>
            </ul>
            <!-- /Main menu -->


            <!-- Social buttons -->
            <ul class="social-links">
              <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
              <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
              <li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>
              <li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
            </ul>
            <!-- /Social buttons -->
          </div>
          <!-- Navigation & Social buttons -->
          @yield('content')
          
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

    <script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script><script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/page-transition.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Demo Color changer Script -->
    <script src="preview/lmpixels-demo-panel.js') }}"></script>
    <!-- /Demo Color changer Script -->
  </body>
</html>
