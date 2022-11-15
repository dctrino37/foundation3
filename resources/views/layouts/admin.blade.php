<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Admin Panel</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
    <style>
      .required:after {
        content:" *";
        color: red;
      }
      /* td {
  height: 100px;
  line-height: 100px;
  text-align: center;
  border: 2px dashed #f69c55;
} */
    </style>

  </head>

  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}" role="button"><i class="fas fa-sign-out-alt"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('admin/dashboard')}}" class="brand-link">
          <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{asset('assets/img/'.Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="{{url('admin/my-profile')}}" class="d-block">{{Auth::check()?Auth::user()->name:"admin"}}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{url('admin/dashboard')}}"
                  class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                   Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/users')}}"
                  class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    All Users
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/delete-users')}}"
                  class="nav-link {{ Request::is('admin/delete-users') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Delete Users
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/send-emails')}}"
                  class="nav-link {{ Request::is('admin/send-emails') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Send Emails
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/admin-seo')}}"
                  class="nav-link {{ Request::is('admin/admin-seo') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Seo Page
                  </p>
                </a>
              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      @yield('content')
      <!-- Main Footer -->
      {{-- <footer class="main-footer">
        <strong>Copyright &copy; 2020 01S.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <!-- <b>Version</b> 3.0.5 -->
        </div>
      </footer> --}}
    </div>
    <!-- ./wrapper -->



<style>
  
.hidden{
  visibility: hidden;
}

.white-color{
  /*opacity: 0.0;*/
  /*font-size: 1px;*/
}

.fright{
  float: right;
}

</style>





    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('js/jquery_3.6.1.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{asset('assets/dist/js/demo.js')}}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{asset('assets/dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>

    {{-- ck editor --}}
    {{--
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script> --}}
    <script>
setTimeout(function() {
    $('.alert').fadeOut('slow');
}, 3000);

</script>
    @yield('script')
  </body>

</html>