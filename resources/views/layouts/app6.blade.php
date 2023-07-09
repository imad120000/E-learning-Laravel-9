<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <link href="../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/icons.css" rel="stylesheet">
    <title>@yield('title')</title>
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="../assets/css/dark-theme.css" />
    <link rel="stylesheet" href="../assets/css/semi-dark.css" />
    <link rel="stylesheet" href="../assets/css/header-colors.css" />
</head>
<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Amdash</h4>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class='@yield('profile')'>
            <a href="{{route('student.profile')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title ">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">UI Pages</li>
        <li class="@yield('cours')">
            <a href="{{route('student.cours')}}">
                <div class="parent-icon"><i class='bx bx-columns'></i>
                </div>
                <div class="menu-title">Cours</div>
            </a>
        </li>
        <li class='@yield('demande')'>
            <a href="{{route('student.demande')}}">
                <div class="parent-icon"><i class='bx bx-envelope-open'></i>
                </div>
                <div class="menu-title">Enrollement</div>
            </a>
        </li>
        <li class='@yield('review')'>
            <a href="{{route('student.review')}}">
                <div class="parent-icon"><i class='bx bx-comment'></i>
                </div>
                <div class="menu-title">Review</div>
            </a>
        </li>
        <li class='@yield('meet')'>
			<a href="{{route('student.meet')}}">
                <div class="parent-icon"><i class='bx bx-bookmarks'></i>
                </div>
                <div class="menu-title">Meet</div>
            </a>
        </li>



    </ul>
    <!--end navigation-->
</div>

<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">


            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">



                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('etd/' . auth('etd')->user()->image) }}" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ auth('etd')->user()->name }} {{ auth('etd')->user()->prenom }}</p>

                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <form method="post" action="{{ route('student.logout') }}">
                        @csrf

                        <button type="submit" id="logoutBtn" class="dropdown-item"><i
                                class='bx bx-log-out-circle'></i>Logout</button>
                    </form>

                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->
<!--start page wrapper -->
@yield('body')

<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="../assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="../assets/js/app.js"></script>
<script src="../assets/plugins/select2/js/select2.min.js"></script>
<script>
    $('.single-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
    $('.multiple-select').select2({
        theme: 'bootstrap4',
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
        allowClear: Boolean($(this).data('allow-clear')),
    });
</script>



</body>

</html>
