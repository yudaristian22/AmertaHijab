<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <span class="ml-2 brand-text fw-bold">Amerta Hijab</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">


                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="/admin/dashboard" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/" target="_blank" class="nav-link">
                                    <i class="nav-icon fas fa-external-link-alt"></i>
                                    <p>
                                        Lihat Website
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link ">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/sliders" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Sliders</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/services" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Services</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/testimonials" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Testimonials</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/portfolios" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Gallery</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/clients" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Categories</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/teams" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Teams</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/bestsellers" class="nav-link ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Teams</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/about" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        About
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/contact" class="nav-link">
                                    <i class="nav-icon fas fa-phone"></i>
                                    <p>
                                        Contact
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/logout" class="nav-link">
                                    <i class="nav-icon fas fa-arrow-right"></i>
                                    <p>
                                        Logout
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="mb-2 row">
                            <div class="col-sm-6">
                                <h1 class="m-0 fw-bold">@yield('title')</h1>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- /.col-md-6 -->
                            <div class="col-lg-12">
                                <div class="card card-dark card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">@yield('title')</h5>
                                    </div>
                                    <div class="card-body">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->

                <!-- Default to the left -->
                <strong>Copyright &copy; {{ date('Y') }} <span>Amerta Hijab</span>.</strong> All
                rights
                reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="/lte/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/lte/dist/js/adminlte.min.js"></script>
    </body>

</html>
