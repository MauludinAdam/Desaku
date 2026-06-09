<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('assets') }}/assets/css/styles.min.css" />
  {{-- link font awesome cdn --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body style="background-color: 	#cae8e8">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
     @include('component.sidebar')
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">

      <!--  Header Start -->
      <header class="app-header">
        @include('component.navbar')
      </header>
      <!--  Header End -->

      <div class="container-fluid">
        {{-- content starts --}}
        <h5 class="py-3" style="font-weight: 700">{{ $subtitle }}</h5>
        <div class="content">
            @yield('content')    
        </div>
        {{-- content ends --}}

      </div>
    </div>
  </div>
  <script src="{{ asset('assets') }}/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/assets/js/sidebarmenu.js"></script>
  <script src="{{ asset('assets') }}/assets/js/app.min.js"></script>
  <script src="{{ asset('assets') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset('assets') }}/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{ asset('assets') }}/assets/js/dashboard.js"></script>
</body>

</html>