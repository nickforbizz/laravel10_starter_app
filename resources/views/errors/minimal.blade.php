<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>404 - Page Not Found</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom styles -->
    <style>
      body {
        background-color: #f8f9fa;
      }
      .container {
        margin-top: .5rem;
        text-align: center;
      }
      .img-lost {
        max-width: 100%;
        height: auto;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                @yield('img')

            </div>
            <div class="col-4 mt-5">
                <h1 class="display-4 mt-4 pt-5"> @yield('code') </h1>
                <p class="lead"> @yield('message') </p>
                <a href="{{ route('home') }}" class="btn btn-primary">Go Back Home</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
