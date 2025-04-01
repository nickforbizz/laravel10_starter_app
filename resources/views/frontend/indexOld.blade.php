@extends('layouts.frontend')
    
    @section('content')
    <!-- Intro Start -->
    <section id="intro" class="full-height">
        <!-- Intro Panel Start -->
        <div class="intro-panel">
            <div class="container">
                <!-- Row Start -->
                <div class="row d-flex flex-row-reverse">
                    <!-- Btn & Info Start -->
                    <div class="col-lg-7 col-md-7 col-sm-12 d-flex">
                        <div class="align-self-center">
                            <!-- Title and Description -->
                            <div class="intro-content">
                                <h1 class="h1">we connect people for better business</h1>
                                <p>Ne assum iracundia appellantur vel, mea cu alia fugit splendide, est in animal epicuri indoctum. Eam ignota intellegebat ad. Dolor utamur debitis eos at.</p>
                            </div>
                            <div class="icon-btn clearfix">  
                                
                                <!-- Btn Start -->
                                <a href="#support" class="btn rounded p-btn bxs-none">
                                    <!-- Icon Btn Start -->
                                    <span class="icon-btn-card">
                                        <!-- Btn Icon -->
                                        <span class="icon-btn-card-item">
                                            <i class="icon ti-email"></i>
                                        </span>
                                        <!-- Btn Text -->
                                        <span class="icon-btn-card-item pl-2">
                                            <span class="icon-head">Contact Us</span>
                                        </span>
                                    </span>
                                    <!-- Icon Btn End -->
                                </a>
                                <!-- Btn End -->
                            </div>
                        </div>
                    </div>
                    <!-- Btn & Info End -->
                    <!-- Mobile Screen Start -->
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <img src="{{ asset('assets/frontend/img/heroimg.png') }}"  id="mobile-img" alt="Mobile screen">
                    </div>
                    <!-- Mobile Screen End -->
                </div>
                <!-- Row End -->
            </div>
        </div>
        <!-- Intro Panel End -->
    </section>
    <!-- Intro End -->
    
    <!-- About Start -->
    <section id="about" class="pt-6">
        <div class="container">
            <!-- Heading Start -->
            <div class="heading text-center">
                <h2 class="h2">All about {{ env('APP_NAME') }}</h2>
                <span class="sub-head">Main moto to connect people for business</span>
            </div>
            <!-- Heading End -->
            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <!-- Row Start -->
                    <div class="row d-flex flex-row-reverse">
                        <!-- App Screen Start -->
                       <div class="col-lg-7 col-md-6 col-sm-12">
                            <div id="appScreen">
                                <img src="{{ asset('assets/frontend/img/02.jpg') }}" class="mob-screen mob-1" alt="Mobile screen 01">
                                <img src="{{ asset('assets/frontend/img/03.jpg') }}" class="mob-screen mob-2" alt="Mobile screen 02">
                            </div>
                        </div>
                        <!-- App Screen End -->
                        <!-- Description Start -->
                        <div class="col-lg-5 col-md-6 col-sm-12 d-flex about-desc">
                            <!-- Description Center Start -->
                            <div class="align-self-center">
                                <span class="h4 mb-4">{{ env('APP_NAME') }} deals with the business</span>
                                <p>Lorem ipsum dolor sit amet, pro populo principes ex. Sensibus petentium vim ut, in sed discere accusata. Eos cu facer populo pericula, in eam fastidii consequat persecuti, sea vocent vivendo eu. Eu qui aeque facilis, te mel ancillae sensibus cotidieque.</p>
                            </div>
                            <!-- Description Center End -->
                        </div>
                        <!-- Description End -->
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
    </section>
    <!-- About End -->
    
    <!-- Feature Start -->
    <section id="features" class="pt-6">
        <div class="container">
            <!-- Heading Start -->
            <div class="heading text-center">
                <h2 class="h2">Features</h2>
                <span class="sub-head">Best app features</span>
            </div>
            <!-- Heading End -->
            <!-- Informational Text Start -->
            <div class="info-txt text-center row">
                <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                    <p>Ridens labitur evertitur pri cu, eam ne omnis definiebas. Qui ne habemus maluisset. Te nam timeam legendos.</p>
                </div>
            </div>
            <!-- Informational Text End -->
            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Feature Card Start -->
                    <div class="feature-card p-4 d-flex align-items-stretch">
                        <!-- Feature Icon Start -->
                        <div class="align-self-center">
                            <div class="icon-circle white d-flex">
                                <i class="ti-rocket align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <!-- Feature Icon End -->
                        <!-- Feature Description Start -->
                        <div class="pl-3">
                            <span class="h5 mb-1">Launch</span>
                            <p>Altera persius expetendis ad qui, his mentitum postulant ut, facer iudico ea vix.</p>
                        </div>
                        <!-- Feature Description End -->                        
                    </div>
                    <!-- Feature Card End -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Feature Card Start -->
                    <div class="feature-card p-4 d-flex align-items-stretch">
                        <!-- Feature Icon Start -->
                        <div class="align-self-center">
                            <div class="icon-circle white d-flex">
                                <i class="ti-agenda align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <!-- Feature Icon End -->
                        <!-- Feature Description Start -->
                        <div class="pl-3">
                            <span class="h5 mb-1">Contact list</span>
                            <p>Altera persius expetendis ad qui, his mentitum postulant ut, facer iudico ea vix.</p>
                        </div>
                        <!-- Feature Description End -->                        
                    </div>
                    <!-- Feature Card End -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Feature Card Start -->
                    <div class="feature-card p-4 d-flex align-items-stretch">
                        <!-- Feature Icon Start -->
                        <div class="align-self-center">
                            <div class="icon-circle white d-flex">
                                <i class="ti-bell align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <!-- Feature Icon End -->
                        <!-- Feature Description Start -->
                        <div class="pl-3">
                            <span class="h5 mb-1">Notification</span>
                            <p>Altera persius expetendis ad qui, his mentitum postulant ut, facer iudico ea vix.</p>
                        </div>
                        <!-- Feature Description End -->                        
                    </div>
                    <!-- Feature Card End -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Feature Card Start -->
                    <div class="feature-card p-4 d-flex align-items-stretch">
                        <!-- Feature Icon Start -->
                        <div class="align-self-center">
                            <div class="icon-circle white d-flex">
                                <i class="ti-calendar align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <!-- Feature Icon End -->
                        <!-- Feature Description Start -->
                        <div class="pl-3">
                            <span class="h5 mb-1">Set Meeting</span>
                            <p>Altera persius expetendis ad qui, his mentitum postulant ut, facer iudico ea vix.</p>
                        </div> 
                        <!-- Feature Description End -->                       
                    </div>
                    <!-- Feature Card End -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Feature Card Start -->
                    <div class="feature-card p-4 d-flex align-items-stretch">
                        <!-- Feature Icon Start -->
                        <div class="align-self-center">
                            <div class="icon-circle white d-flex">
                                <i class="ti-location-pin align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <!-- Feature Icon End -->
                        <!-- Feature Description Start -->
                        <div class="pl-3">
                            <span class="h5 mb-1">Location</span>
                            <p>Altera persius expetendis ad qui, his mentitum postulant ut, facer iudico ea vix.</p>
                        </div> 
                        <!-- Feature Description End -->                       
                    </div>
                    <!-- Feature Card End -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- Feature Card Start -->
                    <div class="feature-card p-4 d-flex align-items-stretch">
                        <!-- Feature Icon Start -->
                        <div class="align-self-center">
                            <div class="icon-circle white d-flex">
                                <i class="ti-cloud align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <!-- Feature Icon End -->
                        <!-- Feature Description Start -->
                        <div class="pl-3">
                            <span class="h5 mb-1">Cloud</span>
                            <p>Altera persius expetendis ad qui, his mentitum postulant ut, facer iudico ea vix.</p>
                        </div> 
                        <!-- Feature Description End -->                       
                    </div>
                    <!-- Feature Card End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
    </section>
    <!-- Feature End -->
    
    <!-- Demo Start -->
    <section class="demo mt-6">
        <!-- Demo Link Start -->
        <div class="demo-link d-flex py-6">
            <!-- Container Start -->
            <div class="container text-center align-self-center">
                <!-- Heading -->
                <h3 class="h3 demo-head pb-4">This video informed how to use this app for better business</h3>
                <!-- Play Icon Start -->
                <a href="http://www.youtube.com/watch?v=7e90gBu4pas" class="icon-circle white d-flex mx-auto" data-lity>
                    <i class="ti-control-play align-self-center mx-auto"></i>
                </a>
                <!-- Play Icon End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Demo Link End -->
    </section>
    <!-- Demo End -->
    

    
    <!-- Pricing Start -->
    <section id="pricing" class="pt-6">
        <div class="container">
            <!-- Heading Start -->
            <div class="heading text-center">
                <h2 class="h2">Pricing</h2>
                <span class="sub-head">Select your best plan</span>
            </div>
            <!-- Heading End -->
            <!-- Informational Text Start -->
            <div class="info-txt text-center row">
                <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                    <p>Ridens labitur evertitur pri cu, eam ne omnis definiebas. Qui ne habemus maluisset. Te nam timeam legendos.</p>
                </div>
            </div>
            <!-- Informational Text End -->
            <!-- Row Start -->
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-auto">
                    <!-- Row Start -->
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0">
                            <!-- Price Card Start -->
                            <div class="price-card bg-white sm-shadow text-center">
                                <!-- Price Information Start -->
                                <div class="price-info py-5 px-3">
                                    <!-- Price Header Start -->
                                    <div class="price-header pb-5">
                                        <span class="btn-block pb-1 head">Starter</span>
                                        <span class="btn-block price">$29.00</span>
                                        <span class="btn-block sub-head">Per Month</span>
                                    </div>
                                    <!-- Price Header End -->
                                    <!-- Price Body Start -->
                                    <div class="price-body pb-5">
                                        <div class="pb-2">100 MB Disk Space</div>
                                        <div class="pb-2">2 Subdomains</div>
                                        <div class="pb-2">5 Email Accounts</div>
                                        <div>Webmail Support</div>
                                    </div>
                                    <!-- Price Body End -->
                                    <!-- Price Footer Start -->
                                    <div class="price-footer">
                                        <a href="#" class="btn p-btn line">
                                            <span class="txt">Buy Now</span>
                                            <span class="pf-icon ti-arrow-right position-relative"></span>
                                        </a>
                                    </div>
                                    <!-- Price Footer End -->
                                </div>
                                <!-- Price Information End -->
                            </div>
                            <!-- Price Card End -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0">
                            <!-- Price Card Start -->
                            <div class="price-card premium md-shadow text-center">
                                <!-- Price Information Start -->
                                <div class="price-info py-5 px-3">
                                    <!-- Price Header Start -->
                                    <div class="price-header pb-5">
                                        <span class="btn-block pb-1 head">PREMIUM</span>
                                        <span class="btn-block price">$49.00</span>
                                        <span class="btn-block sub-head">Per Month</span>
                                    </div>
                                    <!-- Price Header End -->
                                    <!-- Price Body Start -->
                                    <div class="price-body pb-5">
                                        <div class="pb-2">100 MB Disk Space</div>
                                        <div class="pb-2">2 Subdomains</div>
                                        <div class="pb-2">5 Email Accounts</div>
                                        <div>Webmail Support</div>
                                    </div>
                                    <!-- Price Body End -->
                                    <!-- Price Footer Start -->
                                    <div class="price-footer">
                                        <a href="#" class="btn btn-white line">
                                            <span class="txt">Buy Now</span>
                                            <span class="pf-icon ti-arrow-right position-relative"></span>
                                        </a>
                                    </div>
                                    <!-- Price Footer End -->
                                </div>
                                <!-- Price Information End -->
                            </div>
                            <!-- Price Card End -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                            <!-- Price Card Start -->
                            <div class="price-card bg-white sm-shadow text-center">
                                <!-- Price Information Start -->
                                <div class="price-info py-5 px-3">
                                    <!-- Price Header Start -->
                                    <div class="price-header pb-5">
                                        <span class="btn-block pb-1 head">UNLIMITED</span>
                                        <span class="btn-block price">$99.00</span>
                                        <span class="btn-block sub-head">Per Month</span>
                                    </div>
                                    <!-- Price Header End -->
                                    <!-- Price Body Start -->
                                    <div class="price-body pb-5">
                                        <div class="pb-2">100 MB Disk Space</div>
                                        <div class="pb-2">2 Subdomains</div>
                                        <div class="pb-2">5 Email Accounts</div>
                                        <div>Webmail Support</div>
                                    </div>
                                    <!-- Price Body End -->
                                    <!-- Price Footer Start -->
                                    <div class="price-footer">
                                        <a href="#" class="btn p-btn line">
                                            <span class="txt">Buy Now</span>
                                            <span class="pf-icon ti-arrow-right position-relative"></span>
                                        </a>
                                    </div>
                                    <!-- Price Footer End -->
                                </div>
                                <!-- Price Information End -->
                            </div>
                            <!-- Price Card End -->
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
    </section>
    <!-- Pricing End -->
    
    <!-- Static Start -->
    <div id="counter" class="static py-6 mt-6">
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <!-- Static Card Start -->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center app-info">                   
                    <span class="counter-value d-block head pb-1" data-count="4.5">0</span>
                    <span class="d-block">App Ratings</span>
                </div>
                <!-- Static Card End -->
                <!-- Static Card Start -->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center app-info">                   
                    <span class="counter-value d-block head pb-1" data-count="3231">30</span>
                    <span class="d-block">Downloads</span>
                </div>
                <!-- Static Card End -->
                <!-- Static Card Start -->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center app-info">                   
                    <span class="counter-value d-block head pb-1" data-count="12000">12</span>
                    <span class="d-block">Likes</span>
                </div>
                <!-- Static Card End -->
                <!-- Static Card Start -->
                <div class="col-lg-3 col-md-3 col-sm-6 text-center app-info">                   
                    <span class="counter-value d-block head pb-1" data-count="2632">32</span>
                    <span class="d-block">Comment</span>
                </div>
                <!-- Static Card End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Static End -->
    
    <!-- Testimonial Start -->
    <div class="testimonial pt-6">
        <div class="container">
            <!-- Row Start -->
            <div class="row">
                <!-- Column Start -->
                <div class="col-lg-8 col-md-10 mx-auto">
                    <!-- Client Testimonial Start -->
                    <div id="client-testimonial" class="owl-dots-slider owl-carousel owl-theme">
                        <!-- Slider Item Start -->
                        <div class="item">
                            <!-- Client Cart Start -->
                            <div class="client-card d-md-flex">
                                <!-- Client Image -->
                                <div class="align-self-center">
                                    <div class="client-img img-circle position-relative mx-auto mb-4 mb-md-0">
                                        <img src="{{ asset('assets/frontend/img/team/01.jpg') }}" alt="Client 01">
                                    </div>
                                </div>
                                <!-- Client Words -->
                                <div class="client-desc align-self-center pl-md-3">
                                    <div class="pb-2">
                                        <span class="person-name d-block">Samuel J. Young</span>
                                        <span class="d-block f-italic">Founder of Furrybarkers</span>
                                    </div>
                                    <p>Est ad appetere forensibus, eu habeo essent oportere nec, est et feugait scribentur. Vim audire graecis intellegat ea, congue maiorum incorrupte id mei.</p>
                                </div>
                            </div>
                            <!-- Client Cart End -->
                        </div>
                        <!-- Slider Item End -->
                        <!-- Slider Item Start -->
                        <div class="item">
                            <!-- Client Cart Start -->
                            <div class="client-card d-md-flex">
                                <!-- Client Image -->
                                <div class="align-self-center">
                                    <div class="client-img img-circle position-relative mx-auto mb-4 mb-md-0">
                                        <img src="{{ asset('assets/frontend/img/team/02.jpg') }}" alt="Client 02">
                                    </div>
                                </div>
                                <!-- Client Words -->
                                <div class="client-desc align-self-center pl-md-3">
                                    <div class="pb-2">
                                        <span class="person-name d-block">Diana H. Allison</span>
                                        <span class="d-block f-italic">CEO of Ninawornham</span>
                                    </div>
                                    <p>Est ad appetere forensibus, eu habeo essent oportere nec, est et feugait scribentur. Vim audire graecis intellegat ea, congue maiorum incorrupte id mei.</p>
                                </div>
                            </div>
                            <!-- Client Cart End -->
                        </div>
                        <!-- Slider Item End -->
                        <!-- Slider Item Start -->
                        <div class="item">
                            <!-- Client Cart Start -->
                            <div class="client-card d-md-flex">
                                <!-- Client Image -->
                                <div class="align-self-center">
                                    <div class="client-img img-circle position-relative mx-auto mb-4 mb-md-0">
                                        <img src="{{ asset('assets/frontend/img/team/03.jpg') }}" alt="Client 03">
                                    </div>
                                </div>
                                <!-- Client Words -->
                                <div class="client-desc align-self-center pl-md-3">
                                    <div class="pb-2">
                                        <span class="person-name d-block">Kane William</span>
                                        <span class="d-block f-italic">Founder of Ixrmhy</span>
                                    </div>
                                    <p>Est ad appetere forensibus, eu habeo essent oportere nec, est et feugait scribentur. Vim audire graecis intellegat ea, congue maiorum incorrupte id mei.</p>
                                </div>
                            </div>
                            <!-- Client Cart End -->
                        </div>
                        <!-- Slider Item End -->
                    </div>
                    <!-- Client Testimonial End -->
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
        </div>
    </div>
    <!-- Testimonial End -->
    
    <!-- Team Start -->
    <section id="team" class="pt-6">
        <div class="container">
            <!-- Heading Start -->
            <div class="heading text-center">
                <h2 class="h2">Team</h2>
                <span class="sub-head">Our best team</span>
            </div>
            <!-- Heading End -->
            <!-- Informational Text Start -->
            <div class="info-txt text-center row">
                <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                    <p>Ridens labitur evertitur pri cu, eam ne omnis definiebas. Qui ne habemus maluisset. Te nam timeam legendos.</p>
                </div>
            </div>
            <!-- Informational Text End -->
            <!-- Row Start -->
            <div class="row">
                <!-- Column Start -->
                <div class="col-lg-10 col-md-11 mx-auto">
                    <!-- Our Team Start -->
                    <div id="our-team" class="owl-dots-slider owl-carousel owl-theme">
                        <!-- Slider Item Start -->
                        <div class="item">
                            <!-- Team Cart Start -->
                            <div class="team-card text-center">
                                <div class="pb-4">
                                    <!-- Image Circle Start -->
                                    <div class="img-circle position-relative">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/frontend/img/team/03.jpg') }}" alt="Team Member 01">
                                        <!-- Overlay Start -->
                                        <div class="overlay d-flex">
                                            <!-- Social Icons Start -->
                                            <ul class="social mx-auto align-self-center clearfix">
                                                <li><a href="#" class="ti-facebook"></a></li>
                                                <li><a href="#" class="ti-twitter-alt"></a></li>
                                                <li><a href="#" class="ti-linkedin"></a></li>
                                                <li><a href="#" class="ti-github"></a></li>
                                            </ul>
                                            <!-- Social Icons End -->
                                        </div>
                                        <!-- Overlay End -->
                                    </div>
                                    <!-- Image Circle End -->
                                </div>
                                <span class="person-name d-block">Kane William</span>
                                <span class="d-block">Founder</span>
                            </div>
                            <!-- Team Cart End -->
                        </div>
                        <!-- Slider Item End -->
                        <!-- Slider Item Start -->
                        <div class="item">
                            <!-- Team Cart Start -->
                            <div class="team-card text-center">
                                <div class="pb-4">
                                    <!-- Image Circle Start -->
                                    <div class="img-circle position-relative">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/frontend/img/team/01.jpg') }}" alt="Team Member 02">
                                        <!-- Overlay Start -->
                                        <div class="overlay d-flex">
                                            <!-- Social Icons Start -->
                                            <ul class="social mx-auto align-self-center clearfix">
                                                <li><a href="#" class="ti-facebook"></a></li>
                                                <li><a href="#" class="ti-twitter-alt"></a></li>
                                                <li><a href="#" class="ti-linkedin"></a></li>
                                                <li><a href="#" class="ti-github"></a></li>
                                            </ul>
                                            <!-- Social Icons End -->
                                        </div>
                                        <!-- Overlay End -->
                                    </div>
                                    <!-- Image Circle End -->
                                </div>
                                <span class="person-name d-block">Samuel J. Young</span>
                                <span class="d-block">CEO</span>
                            </div>
                            <!-- Team Cart End -->
                        </div>
                        <!-- Slider Item End -->
                        <!-- Slider Item Start -->
                        <div class="item">
                            <!-- Team Cart Start -->
                            <div class="team-card text-center">
                                <div class="pb-4">
                                    <!-- Image Circle Start -->
                                    <div class="img-circle position-relative">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/frontend/img/team/02.jpg') }}" alt="Team Member 03">
                                        <!-- Overlay Start -->
                                        <div class="overlay d-flex">
                                            <!-- Social Icons Start -->
                                            <ul class="social mx-auto align-self-center clearfix">
                                                <li><a href="#" class="ti-facebook"></a></li>
                                                <li><a href="#" class="ti-twitter-alt"></a></li>
                                                <li><a href="#" class="ti-linkedin"></a></li>
                                                <li><a href="#" class="ti-github"></a></li>
                                            </ul>
                                            <!-- Social Icons End -->
                                        </div>
                                        <!-- Overlay End -->
                                    </div>
                                    <!-- Image Circle End -->
                                </div>
                                <span class="person-name d-block">Diana H. Allison</span>
                                <span class="d-block">Team Leader</span>
                            </div>
                            <!-- Team Cart End -->
                        </div>
                        <!-- Slider Item End -->
                        <!-- Slider Item Start -->
                        <div class="item">
                            <!-- Team Cart Start -->
                            <div class="team-card text-center">
                                <div class="pb-4">
                                    <!-- Image Circle Start -->
                                    <div class="img-circle position-relative">
                                        <!-- Image -->
                                        <img src="{{ asset('assets/frontend/img/team/01.jpg') }}" alt="Team Member 05">
                                        <!-- Overlay Start -->
                                        <div class="overlay d-flex">
                                            <!-- Social Icons Start -->
                                            <ul class="social mx-auto align-self-center clearfix">
                                                <li><a href="#" class="ti-facebook"></a></li>
                                                <li><a href="#" class="ti-twitter-alt"></a></li>
                                                <li><a href="#" class="ti-linkedin"></a></li>
                                                <li><a href="#" class="ti-github"></a></li>
                                            </ul>
                                            <!-- Social Icons End -->
                                        </div>
                                        <!-- Overlay End -->
                                    </div>
                                    <!-- Image Circle End -->
                                </div>
                                <span class="person-name d-block">Samuel J. Young</span>
                                <span class="d-block">CEO</span>
                            </div>
                            <!-- Team Cart End -->
                        </div>
                        <!-- Slider Item End -->
                    </div>
                    <!-- Our Team End -->
                </div>
                <!-- Column End -->
            </div>
            <!-- Row End -->
        </div>
    </section>
    <!-- Team End -->
    
    <!-- Blog Start -->
    <section id="blog" class="pt-6">
        <div class="container">
            <!-- Heading Start -->
            <div class="heading text-center">
                <h2 class="h2">Latest Blog</h2>
                <span class="sub-head">Explore our blog</span>
            </div>
            <!-- Heading End -->
            <!-- Informational Text Start -->
            <div class="info-txt text-center row">
                <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                    <p>Ridens labitur evertitur pri cu, eam ne omnis definiebas. Qui ne habemus maluisset. Te nam timeam legendos.</p>
                </div>
            </div>
            <!-- Informational Text End -->


            <!-- Row Start -->
            <div class="row">


                @forelse($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0">
                        <!-- Blog Card Start -->
                        <div class="blog-card sm-shadow p-3">
                            <!-- Blog Image Start -->
                            <div class="blog-img mb-3">
                                <a href="blog-details-right-sidebar.html" class="d-block setImgBack"><img src="{{ url('storage/' . $post->featured_img) }}" alt="Blog 01"></a>
                            </div>
                            <!-- Blog Image End -->
                            <!-- Blog Header Start -->
                            <div class="mb-3">
                                <!-- Blog Date -->
                                <span class="d-block mb-3"><i class="ti-calendar mr-1"></i> {{ $post->created_at->format('F j, Y') }}</span>
                                <span class="blog-head d-block">
                                    <a href="blog-details-right-sidebar.html">{{ Str::limit($post->title, 25) }}</a>
                                </span>
                            </div>
                            <!-- Blog Header End -->
                            <!-- Blog Description Start -->
                            <p>{{ Str::limit($post->content, 125) }}</p>
                            <!-- Blog Description End -->
                            <!-- Blog Read More Button -->
                            <a href="blog-details-right-sidebar.html" class="btn arrow-btn p-0"><span>Read More</span><i class="ti-arrow-right"></i></a>
                        </div>
                        <!-- Blog Card End -->
                    </div>
                @empty
                    <p>No Posts</p>
                @endforelse
              
            </div>
            <!-- Row End -->
            <div class="text-center mt-5">
                <a href="blog-right-sidebar.html" class="btn btn-rounded p-btn line">View All</a>
            </div>
        </div>
    </section>
    <!-- Blog End -->
    
    <!-- Support Start -->
    <section id="support" class="pt-6">
        <div class="container">
            <!-- Heading Start -->
            <div class="heading text-center">
                <h2 class="h2">Get the App</h2>
                <span class="sub-head">Download best app for your business</span>
            </div>
            <!-- Heading End -->
            <!-- Informational Text Start -->
            <div class="info-txt text-center row">
                <div class="col-lg-8 col-md-10 col-sm-12 mx-auto">
                    <p>Ridens labitur evertitur pri cu, eam ne omnis definiebas. Qui ne habemus maluisset. Te nam timeam legendos.</p>
                </div>
            </div>
            <!-- Informational Text End -->


        </div>
        <!-- Contact Start -->
        <div class="contact position-relative">
            <div class="container">
                <!-- Row Start -->
                <div class="row">
                    <div class="col-lg-10 col-md-12 mx-auto">
                        <!-- Contact Card Start -->
                        <div class="d-md-flex xs-shadow contact-card">
                            <!-- Contact Form Start -->
                            <div class="col-lg-7 col-md-7 col-sm-12 contact-form">
                                <div class="px-md-3 py-md-4 py-4">
                                    <span class="head d-block mb-3">Get in touch</span>
                                    <!-- Form Start -->
                                    <form action="#" id="contact-frm" class="position-relative">
                                        <!-- Form Field -->
                                        <div class="form-field mb-3">
                                            <input name="name" id="name" type="text" placeholder="Name" class="form-control fc-line" required>
                                            <label for="name" class="input-line"></label>
                                        </div>
                                        <!-- Form Field -->
                                        <div class="form-field mb-3">
                                            <input name="email" id="email" type="email" placeholder="Email" class="form-control fc-line" required>
                                            <label for="email" class="input-line"></label>
                                        </div>
                                        <!-- Form Field -->
                                        <div class="form-field mb-4">
                                            <textarea name="msg" id="msg" cols="6" rows="3" placeholder="Message" class="form-control fc-line"></textarea>
                                            <label for="msg" class="input-line"></label>
                                        </div>
                                        <!-- Submit Button -->
                                        <div class="mb-3">
                                            <input type="submit" value="Send" class="btn btn-rounded p-btn line">
                                        </div>
                                        <!-- Display Message -->
                                        <div id="success"></div>
                                    </form>
                                    <!-- Form End -->
                                </div>
                            </div>
                            <!-- Contact Form End -->
                            <!-- Address Start -->
                            <div class="col-lg-5 col-md-5 col-sm-12 address">
                                <div class="px-md-3 py-md-4 py-4">
                                    <span class="head d-block mb-2">Address</span>
                                    <p>Sed elit erant maiestatis te, cum ad sale dicant vocibus. Mei fabellas salutandi facilisis ea, ius libris platonem ullamcorper ne.</p>
                                    <!-- Address Information Start -->
                                    <div class="add-info mt-5">
                                        <!-- Icon with Text -->
                                        <div class="mb-4 clearfix">
                                            <i class="ti-mobile float-left mr-3"></i>
                                            <span class="d-block float-left">513-255-8743</span>
                                        </div>
                                        <!-- Icon with Text -->
                                        <div class="mb-4 clearfix">
                                            <i class="ti-email float-left mr-3"></i>
                                            <a href="mailto:example@yourdomain.com" class="d-block float-left">info@supertechnomads.com</a>
                                        </div>
                                        <!-- Icon with Text -->
                                        <div class="add mb-4 clearfix">
                                            <i class="ti-location-pin float-left mr-3"></i>
                                            <p class="float-left">4212 Walnut Hill Drive <br>Cincinnati, OH 45202 </p>
                                        </div>
                                    </div>
                                    <!-- Address Information End -->
                                </div>
                            </div>
                            <!-- Address End -->
                        </div>
                        <!-- Contact Card End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
        <!-- Contact End -->
    </section>
    <!-- Support End -->



@endsection


@push('scripts')
<!-- Scripts -->
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/lity.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
@endpush