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


<section class="page-header">
	<div class="container">
	  <div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="page-header-content">
			  <h1>Contact Us</h1>
			  <ul class="list-inline mb-0">
				<li class="list-inline-item">
				  <a href="#">Home</a>
				</li>
				<li class="list-inline-item">/</li>
				<li class="list-inline-item">
					Contact
				</li>
			  </ul>
			</div>
		</div>
	  </div>
	</div>
  </section>
  
  <section class="contact-info section-padding">
	  <div class="container">
		  <div class="row align-items-center justify-content-center">
			  <div class="col-lg-6">
				  <div class="section-heading center-heading">
					  <span class="subheading">Contact Us</span>
					  <h3>Have any query?</h3>
					  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
				  </div>
			  </div>
		  </div>
		 
		  <div class="row justify-content-center">
			  <div class="col-lg-4">
				  <div class="row">
					  <div class="col-lg-12 col-md-6">
						  <div class="contact-item">
							  <p>Email Us</p>
							  <h4>amjidimad88@gmail.com</h4>
						  </div>
					  </div>
					   <div class="col-lg-12 col-md-6">
						  <div class="contact-item">
							  <p>Make a Call</p>
							  <h4>06 44 608 345</h4>
						  </div>
					  </div>
					   <div class="col-lg-12 col-md-6">
						  <div class="contact-item">
							  <p>Corporate Office</p>
							  <h4>Oujda  </h4>
						  </div>
					  </div>
				  </div>
			  </div>
  
			  <div class="col-lg-8">
				  <form class="contact__form form-row " method="POST" action="mail.php" id="contactForm">
					  <div class="row">
						 <div class="col-12">
							 <div class="alert alert-success contact__msg" style="display: none" role="alert">
								 Your message was sent successfully.
							 </div>
						 </div>
					 </div>
  
					 <div class="row">
						 <div class="col-lg-6">
							 <div class="form-group">
								 <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
							 </div>
						 </div>
						 
						 <div class="col-lg-6">
							 <div class="form-group">
								 <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
							 </div>
						 </div>
						 <div class="col-lg-12">
							 <div class="form-group">
								 <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
							 </div>
						 </div>
						 
						 <div class="col-lg-12">
							 <div class="form-group">
								 <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Your Message"></textarea>    
							 </div>
						 </div>
					 </div>
  
					 <div class="col-lg-12">
						 <div class="mt-4 text-right">
							 <button class="btn btn-main" type="submit">Send Message <i class="fa fa-angle-right ml-2"></i></button>
						 </div>
					 </div>
				 </form> 
			  </div>
		  </div>
	  </div>
  </section>
  
  <section class="cta-2">
	  <div class="container">
		  <div class="row align-items-center subscribe-section ">
			  <div class="col-lg-6">
				  <div class="section-heading white-text">
					  <span class="subheading">Newsletter</span>
					  <h3>Join our community of students</h3>
				  </div>
			  </div>
			  <div class="col-lg-6">
				  <div class="subscribe-form">
					  <form action="#">
						  <input type="text" class="form-control" placeholder="Email Address">
						  <a href="#" class="btn btn-main">Subscribe<i class="fa fa-angle-right ml-2"></i> </a>
					  </form>
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
								 06 44 60 83 45
							  </div>
							  
						  </li>
						  <li> <i class="bi bi-envelop"></i>
							  <div>
								  <strong>Email Address</strong>
								  amjidimad88@gmail.com
							  </div>
						  </li>
						  <li><i class="bi bi-location-pointer"></i>
							  <div>
								  <strong>Office Address</strong>
								 Oujda
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
@endsection
