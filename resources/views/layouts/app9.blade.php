<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
            width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
                <div class="image">
                    <img src="../dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">

                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    @can('profile')
                        <li class="nav-item">
                            <a href="{{route('admin.profile')}}" class="nav-link @yield('profile')">
                                <i class="nav-icon fas fa-user-alt"></i>
                                <p>
                                    Profile
                                </p>
                            </a>
                        </li>
                    @endcan
                    @can('cours')
                        <li class="nav-item @yield('cours')">
                            <a href="#" class="nav-link @yield('c')">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Cours
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('cours-list')
                                    <li class="nav-item">
                                        <a href="{{route('admin.cours')}}" class="nav-link @yield('course')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Cours</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('cours-categorie')
                                    <li class="nav-item">
                                        <a href="{{route('admin.categorie')}}" class="nav-link @yield('categorie') ">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Categorie</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('cours-enroll')
                                    <li class="nav-item">
                                        <a href="{{route('admin.enroll')}}" class="nav-link @yield('enrol')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Enroll</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('cours-review')
                                    <li class="nav-item">
                                        <a href="{{route('admin.review')}}" class="nav-link @yield('review')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Review</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('user')
                        <li class="nav-item @yield('student')">
                            <a href="#" class="nav-link @yield('s')">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('user-student')
                                    <li class="nav-item">
                                        <a href="{{route('admin.student')}}" class="nav-link @yield('so')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Student</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('user-profe')
                                    <li class="nav-item">
                                        <a href="{{route('admin.prof')}}" class="nav-link @yield('p')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Professeur</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    
                    @can('controle')
                        <li class="nav-item @yield('controle')">
                            <a href="#" class="nav-link @yield('co')">
                                <i class="nav-icon fas fa-bars"></i>
                                <p>
                                    Controle
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('controle-roles')
                                    <li class="nav-item">
                                        <a href="{{route('admin.roles')}}" class="nav-link @yield('r')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Roles</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('controle-user')
                                    <li class="nav-item">
                                        <a href="{{route('admin.users')}}" class="nav-link @yield('users')">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>User</p>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('meet')
                    <li class="nav-item @yield('meete')">
                        <a href="#" class="nav-link @yield('m')">
                            <i class="nav-icon fas fa-comment-dots"></i>
                            <p>
                                Meet
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('meet-list')
                            <li class="nav-item">
                                <a href="{{route('admin.meet')}}" class="nav-link @yield('m')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Meet</p>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    <li class="nav-item">
                        <form method="post" action="{{ route('admin.logout') }}">
                            @csrf
                            <a  class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <button type="submit" style="font-style: none;border: none;background: none;color: #C2C7D0">
                                        Logout
                                    </button>
                                </a> 
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    @yield('body')

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
</body>

</html>
