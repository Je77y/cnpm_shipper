<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Admin · @yield('title')</title>
  <link rel="icon" href="./favicon.ico">
  <base href="{{ asset('') }}">
  <link href="backend/css/font-family.css" rel="stylesheet">
  <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
  <link href="backend/css/admin4b.min.css" rel="stylesheet">
</head>

<body>
  <div class="app">
    <div class="app-body">

      @include('backend.base.nav')

      <div class="app-content">
        <nav class="navbar navbar-expand navbar-light bg-white">
          <button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="fa fa-bars"></i></button>
          <div class="navbar-brand">@yield('title') </div>
        </nav>

        @yield('content')

      </div>
    </div>
  </div>
  <script src="backend/js/moment.min.js"></script>
  <script src="backend/js/jquery-3.2.1.slim.min.js"></script>
  <script src="backend/js/popper.min.js"></script>
  <script src="backend/js/highlight.min.js"></script>
  <script src="backend/js/admin4b.min.js"></script>
  <script src="backend/js/admin4b.docs.js"></script>
</body>

</html>
