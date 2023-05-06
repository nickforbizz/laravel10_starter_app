<!doctype html>
<html lang="en">

<!-- Mirrored from www.kri8thm.in/html/the-appo/homepage-one-default.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Apr 2023 08:56:39 GMT -->
<head>

<!-- Meta Tag -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Seo Meta -->
<meta name="description" content="{{ env('APP_NAME') }} - App Landing Template HTML5 and CSS3">
<meta name="keywords" content="app landing, app lander, app, one page landing page, themeforest, multi purpose, app, css3, html5">

<title>{{ env('APP_NAME') }}</title>

<!-- Favicon -->
<link href="{{ asset('assets/frontend/img/favicon.png') }}" rel="icon" />
<link href="{{ asset('assets/frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

<!-- Styles -->
<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/frontend/css/aos.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/frontend/css/colors/color-blue.css') }}" rel="stylesheet" id="color_theme" type="text/css" />

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,500,600,700" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> 

<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

@stack('styles')
  
</head>

<body id="parallaxAos">

<!-- Wrapper Start -->
<div id="wrapper">
    <!-- Page Loading -->
    <div id="loading">
        <div id="loader"></div>
    </div> 
      
    <!-- Header Start -->
    <header id="header" class="fixed-top fill-sm-bg">
        <!-- Navigation Start -->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand nb-two" href="{{ route('wellcome') }}">
                    <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="logo-normal">
                    <img src="{{ asset('assets/frontend/img/logo-white.png') }}" alt="{{ env('APP_NAME') }}" class="logo-scroll">
                </a>
                <!-- Navigation Button -->
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navigation Collapse Start -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                        @if(Route::is('wellcome'))  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle scroll-nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#about">About</a>
                                <a class="dropdown-item" href="#features">Features</a>
                                <a class="dropdown-item" href="#pricing">Pricing</a>
                                <a class="dropdown-item" href="#team">Team</a>
                                <a class="dropdown-item" href="#support">Support</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item mr-3">
                            <a class="nav-link scroll-nav-link" href="{{ route('wellcome') }}">Home</a>
                        </li>
                        @endif
                        <li class="nav-item mr-3">
                            <a class="nav-link scroll-nav-link" href="{{ url('blogs') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-nav-link" href="#support">Support</a>
                        </li>
                    </ul>
                </div>
                <!-- Navigation Collapse End -->
            </div>
        </nav>
        <!-- Navigation End -->
    </header>
    <!-- Header End -->



    @yield('content')





       
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto mt-5">
                    <!-- Footer logo -->
					<div class="text-center mx-auto mb-4">
						<img src="{{ asset('assets/frontend/img/logo-white.png') }}" alt="Footer logo" class="d-inline">
					</div>
                    <!-- Subscription Start -->
                    <div id="subscribe-frm">
                        <!-- Subscription Form -->
                        <form action="https://www.kri8thm.in/html/the-appo/php/subscribe.php" method="post" id="subscribe">
                            <input id="newsletterEmail" name="email" type="text" placeholder="Enter your email" class="form-control form-input-line input-rounded white-placeholder">
                            <input type="submit" value="Subscribe" class="btn btn-white btn-rounded">
                        </form>
                        <!-- Subscription Message -->
                        <div id="response"></div>
                    </div>
                    <!-- Subscription End -->
                    <!-- Social Start -->
                    <div class="social-link d-flex justify-content-around my-4">
                        <a href="#">facebook</a>
                        <a href="#">twitter</a>
                        <a href="#">linkedin</a>
                        <a href="#">github</a>
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Last Footer Start -->
        <div class="last-footer">
            <div class="container text-center">
                <p>© {{ date('Y') }}, All Right Reserved | <a href="homepage-one-default.html">{{ env('APP_NAME') }}</a></p>
            </div>
        </div>
        <!-- Last Footer End -->
    </footer>
    <!-- Footer End -->
    
</div>
<!-- Wrapper End -->



@stack('scripts')
</body>


</html>
