<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('tittle')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="icon" type="image/x-icon" href="{{ asset("/banhcode/assets/img/Banh Code.ico") }}" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset("/admin/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset("/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/admin/dist/css/adminlte.min.css") }}">
      <style type="text/css">
        .user {
            display: inline-block;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset("/banhcode/assets/img/Banh_Code-(no-background).png") }}" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- Navbar -->
  
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <a class="nav-link" data-widget="pushmenu" role="button"><i class="nav-icon fas fa-bars"></i></a>


    <!-- Left navbar links -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      

      <!-- Navbar Search -->



      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="{{ url("#") }}">
          <i class="far fa-user"></i>
        </a>
        
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{ url("#") }}" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> @if (
              Auth::check()
            )
                <span class="text-center">{{ Auth::user()->name }}</span>
            @endif
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ url("#") }}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 
            <span class="text-center">{{ Auth::user()->email }}</span>
          </a>
          <div class="dropdown-divider"></div>
          <form class="text-center" action="{{ route('logout') }}" method="POST">
                @csrf
          <button type="submit" class="btn btn-block btn-danger">Log Out</button>
        </form>
        </div>
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    @include('admin.header')
    <!-- /.content-header -->

    <!-- Main content -->
  
    @yield('admin')
    <!-- /.content -->
  {{-- </div> --}}
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

  @include('admin.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset("admin/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("admin/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset("admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/admin/dist/js/adminlte.js") }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset("admin/plugins/jquery-mousewheel/jquery.mousewheel.js") }}"></script>
<script src="{{ asset("admin/plugins/raphael/raphael.min.js") }}"></script>
<script src="{{ asset("admin/plugins/jquery-mapael/jquery.mapael.min.js") }}"></script>
<script src="{{ asset("admin/plugins/jquery-mapael/maps/usa_states.min.js") }}"></script>
<!-- ChartJS -->
<script src="{{ asset("admin/plugins/chart.js/Chart.min.js") }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset("/admin/dist/js/demo.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("/admin/dist/js/pages/dashboard2.js") }}"></script>
</body>
</html>
