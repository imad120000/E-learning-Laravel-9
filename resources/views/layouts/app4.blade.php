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
                    <img src="{{ asset('profimage/' . auth()->user('prof')->image) }}" class="img-circle elevation-2"
                        alt="User Image">

                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->name }} {{ auth()->user()->prenom }}</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('prof.profile')}}" class="nav-link @yield('profile')">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('prof.cate')}}" class="nav-link @yield('cate')">
                            <i class="nav-icon fas fa-bookmark"></i>
                            <p>
                                Categorie
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('prof.cours')}}" class="nav-link @yield('cours')">
                            <i class="nav-icon fas fa-book-open"></i>
                            <p>
                                Cours
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('prof.student')}}" class="nav-link @yield('student')">
                            <i class="nav-icon fas fa-user-graduate"></i>
                            <p>
                                Student
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('prof.enroll')}}" class="nav-link @yield('enrol')">
                            <i class="nav-icon fas fa-sign-in-alt"></i>
                            <p>
                                Erollement
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('prof.review')}}" class="nav-link @yield('rev')">
                            <i class="nav-icon fas fa-comments"></i>
                            <p>
                                Review
                            </p>
                        </a>
                    </li>
                    <li class="nav-item @yield('meet')">
                        <a href="" class="nav-link @yield('m')">
                            <i class="nav-icon fas fa-comment-dots"></i>
                            <p>
                                Meet
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('prof.meet')}}" class="nav-link @yield('add')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Meet</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('prof.meetlist')}}" class="nav-link @yield('list')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Meet</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <form method="post" action="{{ route('prof.logout') }}">
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
