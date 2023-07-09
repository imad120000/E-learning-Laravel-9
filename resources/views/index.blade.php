@extends('layouts.index')
@section('body')
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="header-contact">
                            <li>
                                <span>Call :</span>
                                0644608345
                            </li>
                            <li>
                                <span>Email :</span>
                                amjidimad88@gmail.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header-right float-right">
                            <div class="header-socials">
                                <ul>
                                    <li><a href="https://web.facebook.com/imad.amjid.12/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://web.facebook.com/imad.amjid.12/"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://web.facebook.com/imad.amjid.12/"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="https://web.facebook.com/imad.amjid.12/"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Menu Start -->

        <div class="site-navigation main_menu " id="mainmenu-area">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="../assetss/images/logo-dark.png" alt="Edutim" class="img-fluid">
                    </a>

                    <!-- Toggler -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
                        aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a href="{{route('homee')}}" class="nav-link js-scroll-trigger">
                                    Home
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a href="{{route('aboute')}}" class="nav-link js-scroll-trigger">
                                    About us
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Professeur<i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbar3">
                                    <a class="dropdown-item " href="{{route('prof.login')}}">
                                        Login
                                    </a>
                                    <a class="dropdown-item " href="{{route('prof.register')}}">
                                        Register
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Etudiant<i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbar3">
                                    <a class="dropdown-item " href="{{route('student.login')}}">
                                        Login
                                    </a>
                                    <a class="dropdown-item " href="{{route('student.register')}}">
                                        Register
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a href="{{route('courseee')}}" class="nav-link">
                                    Course
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a href="{{route('contact')}}" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>



                    </div> <!-- / .navbar-collapse -->
                </div> <!-- / .container -->
            </nav>
        </div>
    </header>

    <section class="banner"
        style="background-image:url('https://www.daysoftheyear.com/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cheight=675%2Cq=85%2Cwidth=1200/wp-content/uploads/world-student-day1.jpg')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <div class="banner-content center-heading">
                        <span class="subheading">Expert instruction</span>
                        <h1>Convenient easy way of learning new skills!</h1>
                        <a href="#" class="btn btn-main"><i class="fa fa-list-ul mr-2"></i>our Courses </a>
                        <a href="#" class="btn btn-tp ">get Started <i class="fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


    <section class="feature">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="bi bi-badge2"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Learn from Industry Experts</h4>
                            <p>Behind the word mountains, far from the countries Vokalia </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="bi bi-article"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Learn the Latest Top Skills</h4>
                            <p>Behind the word mountains, far from the countries Vokalia </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Lifetime Access & Support</h4>
                            <p>Behind the word mountains, far from the countries Vokalia </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--course section start-->
    <section class="section-padding course-grid">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">Top Trending Courses</span>
                        <h3>Over 200+ New Online Courses</h3>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <ul class="course-filter">
                    <li class="active"><a href="#" data-filter="*"> All</a></li>
                    @foreach ($cat as $s)
                        <li class=""><a href="#" data-filter=".{{ $s->name }}">{{ $s->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="row course-gallery ">
                @foreach ($cours as $item)
                    <div class="course-item {{ $item->categorie }} col-lg-4 col-md-6">
                        <div class="course-block">
                            <div class="course-img">
                                <img src="{{ asset('cours/' . $item->image) }}" alt="" class="img-fluid">
                                <span class="course-label">Expert</span>
                            </div>

                            <div class="course-content">
                                <h4><a><strong>{{ $item->title }}</strong></a></h4>
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <span>(5.00)</span>
                                </div>
                                <p>{{ $item->des }}</p>

                                <div class="course-footer d-lg-flex align-items-center justify-content-between">
                                    <div class="course-meta">
                                        <span class="course-student"></span>
                                        <span class="course-duration"></span>
                                    </div>

                                    <div class="buy-btn"><a href="{{ route('courseDetail', $item->id) }}"
                                            class="btn btn-main-2 btn-small">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <!--course-->
    </section>
    <!--course section end-->
    <section class="feature-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="bi bi-badge2"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Expert Teacher</h4>
                            <p>Behind the word mountains, far from the countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="bi bi-article"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Quality Education</h4>
                            <p>Behind the word mountains, far from the countries </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Life Time Support</h4>
                            <p>Behind the word mountains, far from the countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item feature-style-2">
                        <div class="feature-icon">
                            <i class="bi bi-rocket2"></i>
                        </div>
                        <div class="feature-text">
                            <h4>HD Video</h4>
                            <p>Behind the word mountains, far from the countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section section-padding about-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img2">
                        <img src="https://img.freepik.com/photos-gratuite/etudiant-presentant-quelque-chose_1368-9233.jpg?w=360&t=st=1688819536~exp=1688820136~hmac=e195f8d9077ccdf598eabc822321d6932ec45967f1c6ef5294e008df8261fb1f"
                            alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading">
                        <span class="subheading">Top Categories</span>
                        <h3>Learn new skills to go ahead for your career</h3>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores excepturi explicabo esse
                        nisi molestias molestiae magni porro magnam,
                        iusto sunt aliquid necessitatibus optio quod iste facilis similique eos voluptatum sint?</p>

                    <a href="#" class="btn btn-main"><i class="fa fa-check mr-2"></i>Learn More</a>

                </div>
            </div>
        </div>
    </section>

    <!--course section start-->

    <!--course section end-->
    <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <img src="../assetss/images/bg/2-2.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading">
                        <span class="subheading">Top Categories</span>
                        <h3>Learn new skills to go ahead for your career</h3>
                    </div>

                    <div class="about-content">
                        <div class="about-text-block">
                            <i class="bi bi-film"></i>
                            <h4>Details Video tutorial</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicin gelit</p>
                        </div>

                        <div class="about-text-block">
                            <i class="bi bi-support"></i>
                            <h4>World Class Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicin gelit</p>
                        </div>

                        <a href="#" class="btn btn-main-2"><i class="fa fa-check mr-2"></i>Course</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="footer pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6 col-md-6">
                    <div class="widget footer-widget mb-5 mb-lg-0">
                        <h5 class="widget-title">About Us</h5>
                        <p class="mt-3">Veniam Sequi molestias aut necessitatibus optio magni at natus
                            accusamus.Lorem ipsum dolor sit amet, consectetur adipisicin gelit, sed do eiusmod tempor
                            incididunt .</p>
                        <ul class="list-inline footer-socials">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"> <a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6 col-md-6">
                    <div class="footer-widget mb-5 mb-lg-0">
                        <h5 class="widget-title">Company</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-md-6">
                    <div class="footer-widget mb-5 mb-lg-0">
                        <h5 class="widget-title">Courses</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">SEO Business</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Site Development</a></li>
                            <li><a href="#">Social Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="footer-widget footer-contact mb-5 mb-lg-0">
                        <h5 class="widget-title">Contact </h5>

                        <ul class="list-unstyled">
                            <li><i class="bi bi-headphone"></i>
                                <div>
                                    <strong>Phone number</strong>
                                    (68) 345 5902
                                </div>

                            </li>
                            <li> <i class="bi bi-envelop"></i>
                                <div>
                                    <strong>Email Address</strong>
                                    info@yourdomain.com
                                </div>
                            </li>
                            <li><i class="bi bi-location-pointer"></i>
                                <div>
                                    <strong>Office Address</strong>
                                    Moon Street Light Avenue
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="footer-logo">
                            <img src="../assetss/images/logo-white.png" alt="Edutim" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright text-lg-center">
                            <p>@ Copyright reserved to Edutim.Proudly Crafted by <a
                                    href="https://themeturn.com">Dreambuzz</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="fixed-btm-top">
        <a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection
