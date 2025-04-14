<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>@yield('title')</title>
		<link rel="shortcut icon" href="{{asset('assets/images/logo/favourite_icon.png')}}">

		<!-- css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/line-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery-ui.css')}}">
		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

	</head>


	<body class="home-v1">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div id="backtotop">
			<a href="#" id="scroll">
				<i class="las la-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<!-- <div id="preloader"></div> -->
		<!-- preloader - end -->


		<!-- header-section - start
		================================================== -->
		<header id="header-section" style="background: #fff" class="header-section header-primary sticky-header clearfix">
			<div class="content-wrap d-flex align-items-center">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-2 col-md-6 col-sm-6 col-xs-6">
							<div class="brand-logo clearfix">
								<a href="index.html" class="brand-link">
									<img src="{{asset('assets/images/logo/logo.png')}}"alt="logo_not_found">
								</a>

								<div class="btns-group ul-li-right clearfix">
									<ul class="clearfix">
										<li>
											<button type="button" class="mobile-menu-btn">
												<i class="las la-bars"></i>
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<nav class="main-menu ul-li-center clearfix">
								<ul class="clearfix">
                                <li class="menu-item-has-child">
										<a href="#!"><img src="{{asset('assets/images/logo/favourite_icon.png')}}" width='34px' alt=""> {{ __('messages.arnouk_pharmacy') }}</a>
										<ul class="submenu">
                                            
                                        <li><a href="">{{ __('messages.about') }}</a></li>
                                                    <li><a href="">{{ __('messages.serviec') }}</a></li>
                                                    <li><a href="">{{ __('messages.product') }}</a></li>
                                                    <li><a href="">{{ __('messages.event') }}</a></li>
                                                    <li><a href="">{{ __('messages.blog') }}</a></li>
                                                    <li><a href="">{{ __('messages.contact') }}</a></li>
                                                    <li><a href="">{{ __('messages.job') }}</a></li>
										</ul>
									</li>
                                <li class="menu-item-has-child">
										<a href="#!"><img src="{{asset('assets/images/logo/favourite_icon.png')}}" width='34px' alt=""> {{ __('messages.arnoulk_distribution') }}</a>
										<ul class="submenu">
                                            
                                        <li><a href="">{{ __('messages.about') }}</a></li>
                                                    <li><a href="">{{ __('messages.serviec') }}</a></li>
                                                    <li><a href="">{{ __('messages.product') }}</a></li>
                                                    <li><a href="">{{ __('messages.event') }}</a></li>
                                                    <li><a href="">{{ __('messages.blog') }}</a></li>
                                                    <li><a href="">{{ __('messages.contact') }}</a></li>
                                                    <li><a href="">{{ __('messages.job') }}</a></li>
										</ul>
									</li>
                                    <li class="menu-item-has-child">
										<a href="#!"><img src="{{asset('assets/images/logo/favourite_icon.png')}}" width='34px' alt=""> {{ __('messages.arnoulk_labs_distribution') }}</a>
										<div class="mega_menu">
											<div class="row">
												<div class="col-lg-3">
													<div class="useful-links ul-li-block clearfix">
														<h3 class="list-title">{{ __('messages.company') }}</h3>
														<ul class="clearfix">
															<li><a href="#!">{{ __('messages.about') }}</a></li>
															<li><a href="#!">{{ __('messages.ourclient') }}</a></li>
															<li><a href="#!">{{ __('messages.international_certificate') }}</a></li>
															<li><a href="#!">{{ __('messages.company_news') }}</a></li>
															<li><a href="#!">{{ __('messages.team') }}</a></li>
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="useful-links ul-li-block clearfix">
														<h3 class="list-title">{{ __('messages.product') }}</h3>
														<ul class="clearfix">
															<li><a href="#!">General Medicine</a></li>
															<li><a href="#!">Diabetes Insulin</a></li>
															<li><a href="#!">Food Suppliment</a></li>
															<li><a href="#!">Kids Medecine</a></li>
															<li><a href="#!">Pregnancy Medicine</a></li>
															<li><a href="#!">Health and Beauty</a></li>
															<li><a href="#!">Orthopedic</a></li>
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="useful-links ul-li-block clearfix">
														<h3 class="list-title">{{ __('messages.company') }}</h3>
														<ul class="clearfix">
															<li><a href="#!">{{ __('messages.event') }}</a></li>
															<li><a href="#!">{{ __('messages.blog') }}</a></li>
															<li><a href="#!">{{ __('messages.contact') }}</a></li>
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="promotion-fullimage clearfix">
														<a href="#!" class="item-image">
															<img src="{{asset('assets/images/logo/indutry.jpg')}}" alt="image_not_found">
														</a>
														<div class="promotion-content position-top">
															<small class="d-block text-white mb-1">{{ __('messages.arnoulk_labs_distribution') }}</small>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li><a href="contact.html"><img src="{{asset('assets/images/logo/logo.webp')}}" width='34px' alt=""> </a></li>
										
                                    <li class="menu-item-has-child">
										<a href="#!"><img src="{{asset('assets/images/logo/ctl.png')}}" width='34px' alt=""></a>
										<ul class="submenu">
                                            
                                        <li><a href="">{{ __('messages.about') }}</a></li>
                                                    <li><a href="">{{ __('messages.serviec') }}</a></li>
                                                    <li><a href="">{{ __('messages.product') }}</a></li>
                                                    <li><a href="">{{ __('messages.event') }}</a></li>
                                                    <li><a href="">{{ __('messages.blog') }}</a></li>
                                                    <li><a href="">{{ __('messages.contact') }}</a></li>
                                                    <li><a href="">{{ __('messages.job') }}</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>

					</div>
				</div>
			</div>

			<!-- collapse search - start -->
			<div class="main-search-collapse collapse" id="main-search-collapse">
				<div class="main-search-form card">
					<div class="container">
						<form action="#">
							<div class="form-item">
								<input type="search" name="search" placeholder="Search here...">
								<button type="submit" class="submit-btn"><i class="la la-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- collapse search - end -->
		</header>
        
		<!-- sidebar mobile menu - start -->
		<div class="sidebar-menu-wrapper">
			<div id="sidebar-menu" class="sidebar-menu">

				<span class="close-btn">
					<i class="las la-times"></i>
				</span>

				<div class="brand-logo text-center clearfix">
					<a href="index.html" class="brand-link">
						<img src="assets/images/logo/logo_3.png" alt="logo_not_found">
					</a>
				</div>

				<div class="search-wrap">
					<form action="#!">
						<div class="form-item mb-0">
							<input type="search" name="search" placeholder="Search your Products">
							<button type="submit"><i class="la la-search"></i></button>
						</div>
					</form>
				</div>

				<div id="mobile-accordion" class="mobile-accordion">
					<div class="card">
						<div class="card-header" id="heading-one">
							<button data-toggle="collapse" data-target="#collapse-one" aria-expanded="false" aria-controls="collapse-one">
								<i class="las la-shopping-bag"></i> 
								Cart Item
								<small>03</small>
							</button>
						</div>
						<div id="collapse-one" class="collapse" aria-labelledby="heading-one" data-parent="#mobile-accordion">
							<div class="card-body">
								<div class="cart-items-list ul-li-block clearfix">
									<ul class="clearfix">
										<li>
											<div class="item-image">
												<img src="assets/images/cart/img_1.png" alt="image_not_found">
											</div>
											<div class="item-content">
												<h4 class="item-title">Digital Thermometer</h4>
												<span class="item-price">$39.50</span>
											</div>
											<button type="button" class="remove-btn"><i class="las la-times"></i></button>
										</li>

										<li>
											<div class="item-image">
												<img src="assets/images/cart/img_2.png" alt="image_not_found">
											</div>
											<div class="item-content">
												<h4 class="item-title">Digital Infrared Thermometer</h4>
												<span class="item-price">$39.50</span>
											</div>
											<button type="button" class="remove-btn"><i class="las la-times"></i></button>
										</li>

										<li>
											<div class="item-image">
												<img src="assets/images/cart/img_3.png" alt="image_not_found">
											</div>
											<div class="item-content">
												<h4 class="item-title">Digital Blood Pressure Machine</h4>
												<span class="item-price">$39.50</span>
											</div>
											<button type="button" class="remove-btn"><i class="las la-times"></i></button>
										</li>
									</ul>
								</div>

								<div class="btns-group ul-li clearfix">
									<ul class="clearfix">
										<li><a href="cart.html" class="btn bg-default-black">View Cart</a></li>
										<li><a href="checkout.html" class="btn bg-royal-blue">Checkout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="heading-two">
							<button data-toggle="collapse" data-target="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
								<i class="las la-bars"></i> 
								All Categories
							</button>
						</div>
						<div id="collapse-two" class="collapse" aria-labelledby="heading-two" data-parent="#mobile-accordion">
							<div class="card-body all-categories-list ul-li-block clearfix">
								<ul class="clearfix">
									<li><a href="#!"><span><i class="las la-microscope"></i></span> Equipment</a></li>
									<li><a href="#!"><span><i class="las la-capsules"></i></span> General Medecine</a></li>
									<li><a href="#!"><span><i class="las la-dna"></i></span> Food Suppliment</a></li>
									<li><a href="#!"><span><i class="las la-first-aid"></i></span> Pharmacy</a></li>
									<li><a href="#!"><span><i class="las la-stethoscope"></i></span> Medical Tools</a></li>
									<li><a href="#!"><span><i class="las la-syringe"></i></span> Surgery Equipment</a></li>
									<li><a href="#!"><span><i class="las la-brain"></i></span> Neurology</a></li>
									<li><a href="#!"><span><i class="las la-x-ray"></i></span> Orthopredic</a></li>
									<li><a href="#!"><span><i class="las la-thermometer"></i></span> Diabetic Medicine</a></li>
									<li><a href="#!"><span><i class="las la-user-nurse"></i></span> ICU Euipment</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="menu_list ul-li-block clearfix">
					<h3 class="widget-title">Menu List</h3>

					<ul class="clearfix">
						<li class="active dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
							<ul class="dropdown-menu">
								<li><a href="index.html">Home V.1</a></li>
								<li><a href="index-2.html">Home V.2</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li class="dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
							<ul class="dropdown-menu">
								<li class="dropdown">
									<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Grid</a>
									<ul class="dropdown-menu">
										<li><a href="shop-grid-2-column.html">Grid 2 Column</a></li>
										<li><a href="shop-grid-3-column.html">Grid 3 Column</a></li>
										<li><a href="shop-grid-4-column.html">Grid 4 Column</a></li>
									</ul>
								</li>
								<li><a href="shop-list.html">Shop List</a></li>
								<li class="dropdown">
									<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop Details</a>
									<ul class="dropdown-menu">
										<li><a href="shop-details-1.html">Shop Details v1</a></li>
										<li><a href="shop-details-2.html">Shop Details v2</a></li>
										<li><a href="shop-details-3.html">Shop Details v3</a></li>
										<li><a href="shop-details-4.html">Shop Details v4</a></li>
									</ul>
								</li>
								<li><a href="cart.html">Cart Page</a></li>
								<li><a href="checkout.html">Checkout Page</a></li>
								<li><a href="wishlist.html">Wishlist Page</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
							<ul class="dropdown-menu">
								<li><a href="cart.html">Cart Page</a></li>
								<li><a href="checkout.html">Checkout Page</a></li>
								<li><a href="wishlist.html">Wishlist Page</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
							<ul class="dropdown-menu">
								<li><a href="blog-standard.html">Blog Standard</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>

				<div class="user-dropdown ul-li-block clearfix">
					<h3 class="widget-title">User Settings</h3>
					<ul class="clearfix">
						<li><a href="#!"><i class="las la-user-circle"></i> Profile</a></li>
						<li><a href="#!"><i class="las la-user-cog"></i> Settings</a></li>
						<li><a href="#!"><i class="las la-sign-out-alt"></i> Logout</a></li>
					</ul>
				</div>

			</div>
			<div class="overlay"></div>
		</div>
            @yield('content')
        <!-- footer-section - start
		================================================== -->
		<footer id="footer-section" class="footer-section pb-30 clearfix">
			<div class="container">

				<div class="widget-area mb-60 clearfix">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-md-center">

						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="about-content">
								<div class="brand-logo mb-4 clearfix">
									<a href="index.html" class="brand-link">
										<img src="assets/images/logo/medicia_2.png" alt="logo_not_found">
									</a>
								</div>
								<p class="mb-30">
									Medicia is an online medical service and
									medicinewooCommerce theme for your ultimate
									online store and medical service.
								</p>
								<div class="contact-info ul-li-block clearfix">
									<ul class="clearfix">
										<li>
											<span><i class="las la-map-marked-alt"></i></span>
											<a href="#!">
												16122 Collins Street West Victoria 8007 Australia
											</a>
										</li>
										<li>
											<span><i class="las la-envelope-open-text"></i></span>
											<a href="#!">
												yourmail@gmail.com
											</a>
										</li>
										<li>
											<span><i class="las la-phone-volume"></i></span>
											<a href="#!">
												+88022 533 655
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="useful-links ul-li-block clearfix">
								<h3 class="widget-title">Products</h3>
								<ul class="clearfix">
									<li><a href="#!">Medicines</a></li>
									<li><a href="#!">Vitamins & Supplements</a></li>
									<li><a href="#!">Accessories</a></li>
									<li><a href="#!">Medical Equipment</a></li>
									<li><a href="#!">All Products</a></li>
									<li><a href="#!">Doctor Equipment</a></li>
									<li><a href="#!">Offer Sale</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
							<div class="useful-links ul-li-block clearfix">
								<h3 class="widget-title">Quick Link</h3>
								<ul class="clearfix">
									<li><a href="#!">Support</a></li>
									<li><a href="#!">Refund Policy</a></li>
									<li><a href="#!">Shipping & Returns</a></li>
									<li><a href="#!">Tearms & Condition</a></li>
									<li><a href="#!">Help Center</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
							<div class="payment-cards ul-li mb-30 clearfix">
								<h3 class="widget-title">Payments</h3>
								<p class="mb-3">Secure Payments</p>
								<ul class="mb-3 clearfix">
									<li><a href="#!"><img src="assets/images/payment_card/card_1.png" alt="_not_found"></a></li>
									<li><a href="#!"><img src="assets/images/payment_card/card_2.png" alt="_not_found"></a></li>
									<li><a href="#!"><img src="assets/images/payment_card/card_3.png" alt="_not_found"></a></li>
									<li><a href="#!"><img src="assets/images/payment_card/card_4.png" alt="_not_found"></a></li>
									<li><a href="#!"><img src="assets/images/payment_card/card_5.png" alt="_not_found"></a></li>
								</ul>
								<p class="mb-0">Powred by <a href="#!">stripe</a></p>
							</div>

							<div class="social-icon-circle ul-li clearfix">
								<ul class="clearfix">
									<li><a href="#!"><i class="lab la-facebook-f"></i></a></li>
									<li><a href="#!"><i class="lab la-twitter"></i></a></li>
									<li><a href="#!"><i class="lab la-instagram"></i></a></li>
									<li><a href="#!"><i class="lab la-pinterest-p"></i></a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				<div class="footer-bottom bg-gray text-center clearfix">
					<p class="mb-0">©Copyright 2020 <a href="#!">Marvel_Theme</a>. All Rights Reserved.</p>
					<span class="decoration-image pill-image-1">
						<img src="assets/images/decoration/pill_3.png" alt="pill_image_not_found">
					</span>
				</div>

			</div>
		</footer>
		<!-- footer-section - end
		================================================== -->

		
		<!-- jquery include -->
		<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
		<script src="{{asset('assets/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
		<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/js/owl.carousel2.thumbs.min.js')}}"></script>
		<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('assets/js/countdown.js')}}"></script>

		<!-- google map - jquery include -->
        <script src="{{url('https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6')}}"></script>
        <script src="{{asset('assets/js/gmaps.min.js')}}"></script>

		<!-- mobile menu - jquery include -->
        <script src="{{asset('assets/js/mCustomScrollbar.js')}}"></script>

		<!-- custom - jquery include -->
		<script src="{{asset('assets/js/custom.js')}}"></script>


	</body>
</html>