@extends('layouts.index')
@section('body')
    <div class="super_container">

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

		<section class="page-header">
			<div class="container">
			  <div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="page-header-content">
					  <h1>Who we are</h1>
					  <ul class="list-inline mb-0">
						<li class="list-inline-item">
						  <a href="#">Home</a>
						</li>
						<li class="list-inline-item">/</li>
						<li class="list-inline-item">
							About Us
						</li>
					  </ul>
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
							 <img src="https://img.freepik.com/photos-gratuite/etudiant-presentant-quelque-chose_1368-9233.jpg?w=360&t=st=1688819536~exp=1688820136~hmac=e195f8d9077ccdf598eabc822321d6932ec45967f1c6ef5294e008df8261fb1f" alt="" class="img-fluid">
						 </div>
					  </div>
					  <div class="col-lg-6 col-md-12">
						  <div class="section-heading">
							  <span class="subheading">Top Categories</span>
							  <h3>Learn new skills to go ahead for your career</h3>
						  </div>
		  
						  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores excepturi explicabo esse nisi molestias molestiae magni porro magnam, 
							  iusto sunt aliquid necessitatibus optio quod iste facilis similique eos voluptatum sint?</p>
		  
						  <a href="#" class="btn btn-main"><i class="fa fa-check mr-2"></i>Learn More</a>
						  
					  </div>
				  </div>
			  </div>
		  </section>
		  
		  <section class="counter-wrap pb-100">
			  <div class="container">
				  <div class="row">
					   <div class="col-lg-12 counter-inner">
						  <div class="row">
							  <div class="col-lg-3 col-md-6">
								  <div class="counter-item">
									  <i class="ti-desktop"></i>
									  <div class="count">
										  <span class="counter h2">90</span>
									  </div>
									  <p>Expert Instructors</p>
								  </div>
							  </div>
							  <div class="col-lg-3 col-md-6">
								  <div class="counter-item">
									  <i class="ti-agenda"></i>
									  <div class="count">
										  <span class="counter h2">1450</span>
									  </div>
									  <p>Total Courses</p>
								  </div>
							  </div>
		  
							  <div class="col-lg-3 col-md-6">         
								  <div class="counter-item">
									  <i class="ti-heart"></i>
									  <div class="count">
										  <span class="counter h2">5697</span>
									  </div>
									  <p>Happy Students</p>
								  </div>
							  </div>
						  
							  <div class="col-lg-3 col-md-6">
								  <div class="counter-item">
									  <i class="ti-microphone-alt"></i>
									  <div class="count">
										  <span class="counter h2">24</span>
									  </div>
									  <p>Creative Events</p>
								  </div>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
		  </section>
		  <section class="about-section section-padding pt-0">
			  <div class="container">
				  <div class="row align-items-center">
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
		  
						  </div>
					  </div>
					  <div class="col-lg-6 col-md-12">
						  <div class="about-img">
							  <img src="assetss/images/bg/2-2.png" alt="" class="img-fluid">
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
							  <p class="mt-3">Veniam Sequi molestias aut necessitatibus optio magni at natus accusamus.Lorem ipsum dolor sit amet, consectetur adipisicin gelit, sed do eiusmod tempor incididunt .</p>
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
								  <img src="assetss/images/logo-white.png" alt="Edutim" class="img-fluid">
							  </div>
						  </div>
						  <div class="col-lg-6">
							  <div class="copyright text-lg-center">
								  <p>@ Copyright reserved to Edutim.Proudly Crafted by <a href="https://themeturn.com">Dreambuzz</a> </p>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
		  </section>
       

       
    </div>
@endsection
