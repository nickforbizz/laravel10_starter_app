@extends('layouts.frontend')

@section('content')



    <!-- WELCOME -->
    <section class="position-relative pt-12 pt-md-14 mt-n11">

      <!-- Shape -->
      <div class="shape shape-fluid-x shape-blur-2 text-light">
        <svg viewBox="0 0 1313 768" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M442.794 768c163.088 0 305.568-88.227 382.317-219.556l.183.556s.249-.749.762-2.181a440.362 440.362 0 0033.192-71.389C901.996 397.81 989.306 277.09 1144.29 206l-.92-.693C1230.34 171.296 1295.63 94.049 1312.83 0H1.294v295.514c-.663 9.909-1 19.908-1 29.986 0 244.386 198.114 442.5 442.5 442.5z" fill="currentColor"/></svg>      </div>

      <!-- Content -->
      <div class="container">
        <div class="row align-items-center text-center text-md-start">
          <div class="col-12 col-md-6">

            <!-- Image -->
            <img src="{{ asset('assets/frontend/img/illustrations/illustration-4.png') }}" alt="..." class="img-fluid mw-130 float-end mb-6 mb-md-0" data-aos="fade-right">

          </div>
          <div class="col-12 col-md-6">

            <!-- Heading -->
            <h1 class="display-1 fw-bold">
              <div data-aos="fade-left">Work Smart.</div>
              <div data-aos="fade-left" data-aos-delay="100">Not Hard.</div>
            </h1>

            <!-- Text -->
            <p class="fs-lg text-body-secondary mb-0" data-aos="fade-left" data-aos-delay="200">
              Productivity tools can either help you or get in the way. Landkit aims to remove all barriers between you and just getting stuff done. Give us a try and we promise you won't regret it.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </section>

    <!-- HUB -->
    <section class="py-8 py-md-11">
      <div class="container" id="services">
        <div class="row">
          <div class="col-12 col-md-4 text-center" data-aos="fade-up">

            <!-- Icon -->
            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M7 3h10a4 4 0 110 8H7a4 4 0 110-8zm0 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA"/><path d="M7 13h10a4 4 0 110 8H7a4 4 0 110-8zm10 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA" opacity=".3"/></g></svg>            </div>

            <!-- Heading -->
            <h3>
              Built for developers
            </h3>

            <!-- Text -->
            <p class="text-body-secondary mb-6 mb-md-0">
              Landkit is built to make your life easier. Variables, build tooling, documentation, and reusable components.
            </p>

          </div>
          <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-delay="50">

            <!-- Icon -->
            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M5.5 4h4A1.5 1.5 0 0111 5.5v1A1.5 1.5 0 019.5 8h-4A1.5 1.5 0 014 6.5v-1A1.5 1.5 0 015.5 4zm9 12h4a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-1a1.5 1.5 0 011.5-1.5z" fill="#335EEA"/><path d="M5.5 10h4a1.5 1.5 0 011.5 1.5v7A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-7A1.5 1.5 0 015.5 10zm9-6h4A1.5 1.5 0 0120 5.5v7a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-7A1.5 1.5 0 0114.5 4z" fill="#335EEA" opacity=".3"/></g></svg>            </div>

            <!-- Heading -->
            <h3>
              Designed to be modern
            </h3>

            <!-- Text -->
            <p class="text-body-secondary mb-6 mb-md-0">
              Designed with the latest design trends in mind. Landkit feels modern, minimal, and beautiful.
            </p>

          </div>
          <div class="col-12 col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">

            <!-- Icon -->
            <div class="icon text-primary mb-3">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z" fill="#335EEA"/><rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2" height="16" rx="1"/></g></svg>            </div>

            <!-- Heading -->
            <h3>
              Documentation for everything
            </h3>

            <!-- Text -->
            <p class="text-body-secondary mb-0">
              We've written extensive documentation for components and tools, so you never have to reverse engineer anything.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- ABOUT -->
    <section class="py-8 py-md-11 bg-gray-200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">

            <!-- Heading -->
            <h2 class="fw-bold">
              Built for teams of all kinds.
            </h2>

            <!-- Text -->
            <p class="fs-lg text-body-secondary mb-7 mb-md-9">
              No matter what you're working on, who you're with, or how many of you there are, Landkit can help.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="row gx-4">
          <div class="col-12 col-lg-6 d-lg-flex mb-4">

            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">

                  <!-- Image -->
                  <img src="{{ asset('assets/frontend/img/illustrations/illustration-8.png') }}" class="h-75 position-absolute end-0 mt-7 me-n4" alt="...">

                </div>
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9 text-center">

                    <!-- Heading -->
                    <h4 class="fw-bold">
                      Unlimited Team Size
                    </h4>

                    <!-- Text -->
                    <p class="text-body-secondary mb-0">
                      Landkit works well for a scrappy team of 3 or scales to the enterprise level needs of Forture 500 companies.
                    </p>

                  </div>

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
          <div class="col-12 col-lg-6 d-lg-flex mb-4">

            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center" data-aos="fade-up">
              <div class="row">
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">

                    <!-- Heading -->
                    <h4 class="fw-bold">
                      Emoji Responses
                    </h4>

                    <!-- Text -->
                    <p class="text-body-secondary mb-0">
                      Instead of bombarding team members with huge messages, simply reply with an emoji to express your reply.
                    </p>

                  </div>

                </div>
                <div class="col-md-4">

                  <!-- Image -->
                  <img src="{{ asset('assets/frontend/img/illustrations/illustration-6.png') }}" class="h-75 position-absolute start-0 mt-7" alt="...">

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-12">

            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center text-lg-start" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">

                  <!-- Image -->
                  <img src="{{ asset('assets/frontend/img/illustrations/illustration-2.png') }}" class="h-75 position-absolute end-0 mt-6" alt="...">

                </div>
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">

                    <!-- Heading -->
                    <h4 class="fw-bold">
                      Building a community.
                    </h4>

                    <!-- Text -->
                    <p class="text-body-secondary mb-0">
                      Landkit is focused on helping foster a community. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis diam tempus tortor egestas blandit. Aliquam erat volutpat. Phasellus rhoncus pretium molestie. Nulla facilisi. Etiam sollicitudin lectus ac nisi tincidunt porttitor. Phasellus eros metus, gravida eu mi ac, gravida convallis ipsum.
                    </p>

                  </div>

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

   

    <!-- ABOUT -->
    <section class="pt-5 pt-md-7" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">

            <!-- Heading -->
            <h2 class="fw-bold">
              Rich dashboards keep your entire company in sync.
            </h2>

            <!-- Text -->
            <p class="fs-lg text-body-secondary mb-5">
              Visualizing all your company's data and commication in one place helps reveal opportunities and expose trouble areas. Stop cobbling together spreadsheets, charts, graphs, CSVs, emails, and documents.
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-primary-desat mb-6 mb-md-0 lift">
              Start for free <i class="fe fe-arrow-right ms-3"></i>
            </a>

          </div>
          <div class="col-12 col-md-6">

            <!-- iPhone + Macbook -->
            <div class="w-md-130">
              <div class="device-combo device-combo-iphonex-macbook">

                <!-- iPhone -->
                <div class="device device-iphonex">
                  <img src="{{ asset('assets/frontend/img/screenshots/mobile/dashkit-alt.jpg') }}" class="device-screen" alt="...">
                  <img src="{{ asset('assets/frontend/img/devices/iphonex.svg') }}" class="img-fluid" alt="...">
                </div>

                <!-- Macbook -->
                <div class="device device-macbook">
                  <img src="{{ asset('assets/frontend/img/screenshots/desktop/dashkit-alt.jpg') }}" class="device-screen" alt="...">
                  <img src="{{ asset('assets/frontend/img/devices/macbook.svg') }}" class="img-fluid" alt="...">
                </div>

              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- STATS -->
    <section class="py-8 pt-md-11 pb-md-12">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 text-center">

            <!-- Heading -->
            <h1 class="display-2 fw-bold text-primary-desat">
              <span data-countup='{"startVal": 0}' data-to="97" data-aos data-aos-id="countup:in">0</span>%
            </h1>

            <!-- Text -->
            <p class="text-body-secondary mb-6 mb-md-0">
              Monthly customer retention. Folks love Landkit and come back.
            </p>

          </div>
          <div class="col-12 col-md-4 text-center">

            <!-- Heading -->
            <h1 class="display-2 fw-bold text-primary-desat">
              <span data-countup='{"startVal": "00.0", "decimalPlaces": 1}' data-to="99.9" data-aos data-aos-id="countup:in">00.0</span>%
            </h1>

            <!-- Text -->
            <p class="text-body-secondary mb-6 mb-md-0">
              Guaranteed uptime for all of our services no matter what.
            </p>

          </div>
          <div class="col-12 col-md-4 text-center">

            <!-- Heading -->
            <h1 class="display-2 fw-bold text-primary-desat">
              <span data-countup='{"startVal": "0.0", "decimalPlaces": 1}' data-to="5.0" data-aos data-aos-id="countup:in">0.0</span>/5.0
            </h1>

            <!-- Text -->
            <p class="text-body-secondary mb-0">
              Our average review across all of our company product lines.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- CTA -->
    <section class="py-10 py-md-13 bg-gray-200 bg-between" style="background-image: url({{ asset('assets/frontend/img/illustrations/illustration-1-cropped.png') }}), url({{ asset('assets/frontend/img/illustrations/illustration-3-cropped.png') }});">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Heading -->
            <h2 class="fw-bold">
              Try Landkit for free anytime, anywhere.
            </h2>

            <!-- Text -->
            <p class="fs-lg text-body-secondary mb-8 px-lg-9">
              We can help you build a better business faster. Tried and true systems for projects small and large.
            </p>

            <!-- Button -->
            <a href="#!" class="btn btn-primary-desat lift">
              Get started for free
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- SHAPE -->
    <div class="position-relative">
      <div class="shape shape-bottom shape-fluid-x text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
    </div>

   


    
</body>
</html>




@endsection


@push('scripts')
<!-- <script src='../api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script> -->

<!-- Vendor JS -->
<script src="{{ asset('assets/frontend/js/vendor.bundle.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('assets/frontend/js/theme.bundle.js') }}"></script>


@endpush