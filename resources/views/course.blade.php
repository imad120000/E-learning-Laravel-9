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
                                <li><a href="https://web.facebook.com/imad.amjid.12/"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://web.facebook.com/imad.amjid.12/"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="https://web.facebook.com/imad.amjid.12/"><i
                                            class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://web.facebook.com/imad.amjid.12/"><i
                                            class="fab fa-pinterest"></i></a></li>
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
                            <a href="{{ route('homee') }}" class="nav-link js-scroll-trigger">
                                Home
                            </a>

                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('aboute') }}" class="nav-link js-scroll-trigger">
                                About us
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Professeur<i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbar3">
                                <a class="dropdown-item " href="{{ route('prof.login') }}">
                                    Login
                                </a>
                                <a class="dropdown-item " href="{{ route('prof.register') }}">
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
                                <a class="dropdown-item " href="{{ route('student.login') }}">
                                    Login
                                </a>
                                <a class="dropdown-item " href="{{ route('student.register') }}">
                                    Register
                                </a>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('courseee') }}" class="nav-link">
                                Course
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('contact') }}" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>



                </div> <!-- / .navbar-collapse -->
            </div> <!-- / .container -->
        </nav>
    </div>
</header>








    <section class="pb-100 course-grid">
        <div class="container">
            <br>
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
        {{--  <div class="course-item cat2 cat4 col-lg-4 col-md-6" style="position: absolute; left: 380px; top: 0px;">
                    <div class="course-block">
                        <div class="course-img">
                            <img src="../assetss/images/course/course2.jpg" alt="" class="img-fluid">
                            <span class="course-label">Advanced</span>
                        </div>

                        <div class="course-content">
                            <div class="course-price ">$80 <span class="del">$120</span></div>

                            <h4><a href="#">Photography Crash Course for Photographer</a></h4>
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <span>(5.00)</span>
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>

                            <div class="course-footer d-lg-flex align-items-center justify-content-between">
                                <div class="course-meta">
                                    <span class="course-student"><i class="bi bi-group"></i>340</span>
                                    <span class="course-duration"><i class="bi bi-badge3"></i>82 Lessons</span>
                                </div>

                                <div class="buy-btn"><a href="#" class="btn btn-main-2 btn-small">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div> --}}

        {{--  <div class="course-item cat5 cat2 col-lg-4 col-md-6" style="position: absolute; left: 760px; top: 0px;">
                    <div class="course-block">
                        <div class="course-img">
                            <img src="../assetss/images/course/course1.jpg" alt="" class="img-fluid">
                            <span class="course-label">Beginner</span>
                        </div>

                        <div class="course-content">
                            <div class="course-price ">$50</div>

                            <h4><a href="#">Information About UI/UX Design Degree</a></h4>
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <span>(5.00)</span>
                            </div>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, alias.</p>

                            <div class="course-footer d-lg-flex align-items-center justify-content-between">
                                <div class="course-meta">
                                    <span class="course-student"><i class="bi bi-group"></i>340</span>
                                    <span class="course-duration"><i class="bi bi-badge3"></i>82 Lessons</span>
                                </div>

                                <div class="buy-btn"><a href="#" class="btn btn-main-2 btn-small">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div> --}}

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="blog-pagination text-center">
                        <ul>
                            <li class="page-num active"><a href="#">1</a></li>
                            <li class="page-num"><a href="#">2</a></li>
                            <li class="page-num"><a href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
