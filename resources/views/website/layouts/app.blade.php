<!DOCTYPE html>
<html lang="en">

	<head>
		<title>@yield('title')</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
		<link href="{{asset('assets/images/favicon/favicon.png')}}" rel="icon">	  
		<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
		<link rel="stylesheet" href="{{asset('assets/css/libraries.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	</head>


	<body>
		<div class="wrapper">
		  <div class="preloader">
			<div class="loading"><span></span><span></span><span></span><span></span></div>
		  </div><!-- /.preloader -->
	  
		  <!-- =========================
			  Header
		  =========================== -->
		  <header class="header header-layout2">
			<div class="header-topbar">
			  <div class="container-fluid">
				<div class="row align-items-center">
				  <div class="col-12">
					<div class="d-flex align-items-center justify-content-between">
					  <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
						<li>
						  <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002) 01061245741</a>
						</li>
						<li>
						  <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
						</li>
						<li>
						  <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
						</li>
					  </ul><!-- /.contact__list -->
					  <div class="d-flex">
						<ul class="social-icons list-unstyled mb-0 mr-30">
						  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
						  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul><!-- /.social-icons -->
					  </div>
					</div>
				  </div><!-- /.col-12 -->
				</div><!-- /.row -->
			  </div><!-- /.container -->
			</div><!-- /.header-top -->
			<nav class="navbar navbar-expand-lg sticky-navbar">
			  <div class="container-fluid">
				<a class="navbar-brand" href="index.html">
				  <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
				  <img src="{{asset('assets/images/logo/logo-dark.png')}}" class="logo-dark" alt="logo">
				</a>
				<button class="navbar-toggler" type="button">
				  <span class="menu-lines"><span></span></span>
				</button>
				<div class="collapse navbar-collapse" id="mainNavigation">
				  <ul class="navbar-nav ml-auto">
					<li class="nav__item has-dropdown">
					  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link"><img src="{{asset('assets/images/logo/favourite_icon.png')}}" width='34px' alt=""> {{ __('messages.arnouk_pharmacy') }}</a>
					  <ul class="dropdown-menu">
						<li class="nav__item">
						  <a href="{{ route('about.arnoukPharma.page', ['lang' => app()->getLocale()]) }}" class="nav__item-link">{{ __('messages.about') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="{{ route('services.arnoukPharma.page', ['lang' => app()->getLocale()]) }}" class="nav__item-link">{{ __('messages.serviec') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.product') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.event') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.blog') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
							<a href="" class="nav__item-link">{{ __('messages.contact') }}</a>
						  </li><!-- /.nav-item -->
						  <li class="nav__item">
							<a href="" class="nav__item-link">{{ __('messages.job') }}</a>
						  </li><!-- /.nav-item -->
					  </ul><!-- /.dropdown-menu -->
					</li><!-- /.nav-item -->
					<li class="nav__item has-dropdown">
					  <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link"><img src="{{asset('assets/images/logo/favourite_icon.png')}}" width='34px' alt=""> {{ __('messages.arnoulk_distribution') }}</a>
					  <ul class="dropdown-menu">
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.about') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.serviec') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.product') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.event') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.blog') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
							<a href="" class="nav__item-link">{{ __('messages.contact') }}</a>
						  </li><!-- /.nav-item -->
						  <li class="nav__item">
							<a href="" class="nav__item-link">{{ __('messages.job') }}</a>
						  </li><!-- /.nav-item -->
					  </ul><!-- /.dropdown-menu -->
					</li><!-- /.nav-item -->
					<li class="nav__item has-dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">
							<img src="{{asset('assets/images/logo/favourite_icon.png')}}" width='34px' alt=""> {{ __('messages.arnoulk_labs_distribution') }}
						</a>
					  <ul class="dropdown-menu">
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.about') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.serviec') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.product') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.event') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
						  <a href="" class="nav__item-link">{{ __('messages.blog') }}</a>
						</li><!-- /.nav-item -->
						<li class="nav__item">
							<a href="" class="nav__item-link">{{ __('messages.contact') }}</a>
						  </li><!-- /.nav-item -->
						  <li class="nav__item">
							<a href="" class="nav__item-link">{{ __('messages.job') }}</a>
						  </li><!-- /.nav-item -->
					  </ul><!-- /.dropdown-menu -->
					</li><!-- /.nav-item -->
					<li class="nav__item has-dropdown">
						<a href="#!" data-toggle="dropdown" class="dropdown-toggle nav__item-link ">
							<img src="{{asset('assets/images/logo/ctl.png')}}" width='34px' alt="">
						</a>
						<ul class="dropdown-menu">
							<li class="nav__item"><a href="" class="nav__item-link">{{ __('messages.about') }}</a></li>
                            <li class="nav__item"><a href="" class="nav__item-link">{{ __('messages.serviec') }}</a></li>
							<li class="nav__item"><a href="" class="nav__item-link">{{ __('messages.product') }}</a></li>
                            <li class="nav__item"><a href="" class="nav__item-link">{{ __('messages.event') }}</a></li>
                            <li class="nav__item"><a href="" class="nav__item-link">{{ __('messages.blog') }}</a></li>
                            <li class="nav__item"><a href="" class="nav__item-link">{{ __('messages.contact') }}</a></li>
                            <li class="nav__item"><a href="" class="nav__item-link">{{ __('messages.job') }}</a></li>
						</ul>
					</li>
					<li class="nav__item ">
						<a class="nav__item-link " href="contact.html" >
							<img src="{{asset('assets/images/logo/logo.webp')}}" width="34px" alt="">
						</a>
					</li>
					<li class="nav__item has-dropdown">
						<a href="#!" data-toggle="dropdown" class="dropdown-toggle nav__item-link">
							<img src="{{asset('assets/images/flags/en.png')}}" alt="en" width="34px">
						</a>
						<ul class="dropdown-menu">
							<li class="nav__item">
								<a class="nav__item-link" href="#">
									<img src="{{asset('assets/images/flags/fr.png')}}" alt="fr" width="34px">
								</a>
							</li>
						</ul>
					</li>
				  </ul>
				  <!-- /.navbar-nav -->
				  <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container -->
			</nav><!-- /.navabr -->
		  </header><!-- /.Header -->
	  @yield('content')
		  <!-- ========================
			Footer
		  ========================== -->
		  <footer class="footer">
			<div class="footer-primary">
			  <div class="container">
				<div class="row">
				  <div class="col-sm-12 col-md-12 col-lg-3">
					<div class="footer-widget-about">
					  <img src="{{asset('assets/images/logo/logo-dark.png')}}" alt="logo" class="mb-30">
					  <p class="color-gray">Our goal is to deliver quality of care in a courteous, respectful, and
						compassionate manner. We hope you will allow us to care for you and strive to be the first and best
						choice for your family healthcare.
					  </p>
					  <a href="appointment.html" class="btn btn__primary btn__primary-style2 btn__link">
						<span>Make Appointment</span> <i class="icon-arrow-right"></i>
					  </a>
					</div><!-- /.footer-widget__content -->
				  </div><!-- /.col-xl-2 -->
				  <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
					<div class="footer-widget-nav">
					  <h6 class="footer-widget__title">Departments</h6>
					  <nav>
						<ul class="list-unstyled">
						  <li><a href="#">Neurology Clinic</a></li>
						  <li><a href="#">Cardiology Clinic</a></li>
						  <li><a href="#">Pathology Clinic</a></li>
						  <li><a href="#">Laboratory Analysis</a></li>
						  <li><a href="#">Pediatric Clinic</a></li>
						  <li><a href="#">Cardiac Clinic</a></li>
						</ul>
					  </nav>
					</div><!-- /.footer-widget__content -->
				  </div><!-- /.col-lg-2 -->
				  <div class="col-sm-6 col-md-6 col-lg-2">
					<div class="footer-widget-nav">
					  <h6 class="footer-widget__title">Links</h6>
					  <nav>
						<ul class="list-unstyled">
						  <li><a href="#">About Us</a></li>
						  <li><a href="#">Our CLinic</a></li>
						  <li><a href="#">Our Doctors</a></li>
						  <li><a href="#">News & Media</a></li>
						  <li><a href="#">Appointments</a></li>
						</ul>
					  </nav>
					</div><!-- /.footer-widget__content -->
				  </div><!-- /.col-lg-2 -->
				  <div class="col-sm-12 col-md-6 col-lg-4">
					<div class="footer-widget-contact">
					  <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
					  <ul class="contact-list list-unstyled">
						<li>If you have any questions or need help, feel free to contact with our team.</li>
						<li>
						  <a href="tel:01061245741" class="phone__number">
							<i class="icon-phone"></i> <span>01061245741</span>
						  </a>
						</li>
						<li class="color-body">2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
					  </ul>
					  <div class="d-flex align-items-center">
						<a href="contact-us.html" class="btn btn__primary btn__link mr-30">
						  <i class="icon-arrow-right"></i> <span>Get Directions</span>
						</a>
						<ul class="social-icons list-unstyled mb-0">
						  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
						  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul><!-- /.social-icons -->
					  </div>
					</div><!-- /.footer-widget__content -->
				  </div><!-- /.col-lg-2 -->
				</div><!-- /.row -->
			  </div><!-- /.container -->
			</div><!-- /.footer-primary -->
			<div class="footer-secondary">
			  <div class="container">
				<div class="row align-items-center">
				  <div class="col-sm-12 col-md-6 col-lg-6">
					<span class="fz-14">&copy; 2020 DataSoft, All Rights Reserved. With Love by</span>
					<a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
				  </div><!-- /.col-lg-6 -->
				  <div class="col-sm-12 col-md-6 col-lg-6">
					<nav>
					  <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Cookies</a></li>
					  </ul>
					</nav>
				  </div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			  </div><!-- /.container -->
			</div><!-- /.footer-secondary -->
		  </footer><!-- /.Footer -->
		  <div class="search-popup">
			<button type="button" class="search-popup__close"><i class="fas fa-times"></i></button>
			<form class="search-popup__form">
			  <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
			  <button class="search-popup__btn"><i class="icon-search"></i></button>
			</form>
		  </div><!-- /. search-popup -->
		  <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
		</div><!-- /.wrapper -->
	  
		<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
		<script src="{{asset('assets/js/plugins.js')}}"></script>
		<script src="{{asset('assets/js/main.js')}}"></script>
	  </body>
</html>