@extends('website.layouts.app')
@section('title','Pharmacy Services')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- ============================
			  Slider
		  ============================== -->
		  <section class="slider">
			<div class="slick-carousel m-slides-0"
			  data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
			  <div class="slide-item align-v-h">
				<div class="bg-img"><img src="{{asset('assets/images/sliders/2.jpg')}}" alt="slide img"></div>
				<div class="container">
				  <div class="row align-items-center">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
					  <div class="slide__content">
						<h2 class="slide__title">Caring For The Health And Well Being Of Family.</h2>
						<p class="slide__desc">The health and well-being of our patients and their health care team will
						  always be our priority, so we follow the best practices for cleanliness.</p>
						<div class="d-flex flex-wrap align-items-center">
						  <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
							<span>Find A Doctor</span>
							<i class="icon-arrow-right"></i>
						  </a>
						  <a href="services.html" class="btn btn__white btn__rounded">
							<span>Our Services</span>
							<i class="icon-arrow-right"></i>
						  </a>
						</div>
					  </div><!-- /.slide-content -->
					</div><!-- /.col-xl-7 -->
				  </div><!-- /.row -->
				</div><!-- /.container -->
			  </div><!-- /.slide-item -->
			  <div class="slide-item align-v-h">
				<div class="bg-img"><img src="{{asset('assets/images/sliders/3.jpg')}}" alt="slide img"></div>
				<div class="container">
				  <div class="row align-items-center">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
					  <div class="slide__content">
						<h2 class="slide__title">All Aspects Of Medical Practice</h2>
						<p class="slide__desc">The health and well-being of our patients and their health care team will
						  always be our priority, so we follow the best practices for cleanliness.</p>
						<div class="d-flex flex-wrap align-items-center">
						  <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
							<span>Find A Doctor</span>
							<i class="icon-arrow-right"></i>
						  </a>
						  <a href="services.html" class="btn btn__white btn__rounded">
							<span>Our Services</span>
							<i class="icon-arrow-right"></i>
						  </a>
						</div>
					  </div><!-- /.slide-content -->
					</div><!-- /.col-xl-7 -->
				  </div><!-- /.row -->
				</div><!-- /.container -->
			  </div><!-- /.slide-item -->
			</div><!-- /.carousel -->
		  </section><!-- /.slider -->

    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 pt-130">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-60">
              <h2 class="heading__subtitle">The Best Medical And General Practice Care!</h2>
              <h3 class="heading__title">Providing Medical Care For The Sickest In Our Community.</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        @foreach($services as $service)
          <!-- service item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
                <div class="service_img">
                    <img src="{{asset($service->main_image)}}" alt="">
                </div>
              <div class="service__content">
                <h4 class="service__title">{{ $lang === 'ar' ? $service->name_ar : $service->name_en }}</h4>
                <p class="service__desc">{!! $lang === 'ar' ? $service->description_ar : $service->description_en !!}</p>
              </div><!-- /.service__content -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          @endforeach
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
@endsection