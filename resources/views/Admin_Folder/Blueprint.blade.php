<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel = "icon" href ="{{ asset('/image/logo-1.png') }}" type = "image/x-icon">
    <!-- ========================================================================= -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dashboard/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/summernote/summernote-bs4.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- ========================================================================= -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
    <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- ini mau tak pasang icon admin !!!!!!-->
                <div class="info">
                    <a href="/Admin" class="d-block" style="font-size: 15pt;">Admin</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/Admin/pegawai" class="nav-link">
                            <i class="nav-icon fas fa-user-cog"></i>
                            <p>Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Admin/barang" class="nav-link">
                            <i><img class="nav-icon fas" src=" {{ asset('/images/category.png') }}" style="width: 25px;" alt="error"></i>
                            <p>Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Admin/kategori" class="nav-link">
                            <i><img class="nav-icon fas" src=" {{ asset('/images/category.png') }}" style="width: 25px;" alt="error"></i>
                            <p>Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Admin/promo" class="nav-link">
                            <i><img class="nav-icon fas" src=" {{ asset('/images/coupon.png') }}" style="width: 25px;" alt="error"></i>
                            <p>Promo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Admin/member" class="nav-link">
                            <i><img class="nav-icon fas" src=" {{ asset('/images/membership.png') }}" style="width: 25px;" alt="error"></i>
                            <p>Member</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i><img class="nav-icon fas" src=" {{ asset('/images/exit-door.png') }}" style="width: 25px;" alt="error"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    @yield('table-master')
    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('container-body-page')
        </div>
    </div>
</div>



<!-- jQuery -->
<!-- <script src="{{ asset('/dashboard/plugins/jquery/jquery.min.js') }}"></script> -->
<script src="https://kit.fontawesome.com/3a577a0a76.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="{{ asset('/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('/dashboard/dist/js/adminlte.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- DataTables -->

<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

