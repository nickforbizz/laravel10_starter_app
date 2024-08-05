
<!doctype html>
<html lang="en">
  
<!-- Mirrored from landkit.goodthemes.co/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Aug 2024 19:44:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/favicon/favicon.ico') }}" type="image/x-icon">
    
    <!-- Map CSS -->
    <link rel="stylesheet" href="../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css">
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/libs.bundle.css') }}">
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.bundle.css') }}">
    
    <!-- Title -->
    <title>Landkit</title>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156446909-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
    
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-156446909-2");
    
    </script>
  </head>
  <body>



    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
    
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('wellcome') }}">
          <img src="{{ asset('assets/frontend/img/brand.svg') }}" class="navbar-brand-img" alt="...">
        </a>
    
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-x"></i>
          </button>
          @if(Route::currentRouteName() == 'wellcome')
          <!-- Navigation -->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link " href="#services"> Services </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#about" > About </a>
            </li>
          </ul>
          @endif
    
          <!-- Button -->
          <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="{{ route('login') }}">
            Login
          </a>
    
        </div>
    
      </div>
    </nav>



    @yield('content')





       
 <!-- FOOTER -->
 <footer class="py-8 py-md-11 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 col-lg-3">
    
            <!-- Brand -->
            <img src="{{ asset('assets/frontend/img/brand.svg') }}" alt="..." class="footer-brand img-fluid mb-2">
    
            <!-- Text -->
            <p class="text-gray-700 mb-2">
              A better way to build.
            </p>
    
            <!-- Social -->
            <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
              <li class="list-inline-item list-social-item me-3">
                <a href="#!" class="text-decoration-none">
                  <img src="{{ asset('assets/frontend/img/icons/social/instagram.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item me-3">
                <a href="#!" class="text-decoration-none">
                  <img src="{{ asset('assets/frontend/img/icons/social/facebook.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item me-3">
                <a href="#!" class="text-decoration-none">
                  <img src="{{ asset('assets/frontend/img/icons/social/twitter.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item">
                <a href="#!" class="text-decoration-none">
                  <img src="{{ asset('assets/frontend/img/icons/social/pinterest.svg') }}" class="list-social-icon" alt="...">
                </a>
              </li>
            </ul>
    
          </div>
          <div class="col-6 col-md-4 col-lg-2">
    
            <!-- Heading -->
            <h6 class="fw-bold text-uppercase text-gray-700">
              Products
            </h6>
    
            <!-- List -->
            <ul class="list-unstyled text-body-secondary mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Page Builder
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  UI Kit
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Styleguide
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
            </ul>
    
          </div>
          <div class="col-6 col-md-4 col-lg-2">
    
            <!-- Heading -->
            <h6 class="fw-bold text-uppercase text-gray-700">
              Services
            </h6>
    
            <!-- List -->
            <ul class="list-unstyled text-body-secondary mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Pagebuilder
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  UI Kit
                </a>
              </li>
            </ul>
    
          </div>
          <div class="col-6 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
    
            <!-- Heading -->
            <h6 class="fw-bold text-uppercase text-gray-700">
              Connect
            </h6>
    
            <!-- List -->
            <ul class="list-unstyled text-body-secondary mb-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Page Builder
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  UI Kit
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Styleguide
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
            </ul>
    
          </div>
          <div class="col-6 col-md-4 col-lg-2">
    
            <!-- Heading -->
            <h6 class="fw-bold text-uppercase text-gray-700">
              Legal
            </h6>
    
            <!-- List -->
            <ul class="list-unstyled text-body-secondary mb-0">
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Documentation
                </a>
              </li>
              <li class="mb-3">
                <a href="#!" class="text-reset">
                  Changelog
                </a>
              </li>
              <li>
                <a href="#!" class="text-reset">
                  Pagebuilder
                </a>
              </li>
            </ul>
    
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </footer>
    




@stack('scripts')
</body>


</html>
