@extends('website.layouts.app')
@section('title','About')
@section('content')

<!DOCTYPE html>
<html lang="en">
<body>
  <div class="wrapper">

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
     gallery
    =========================== -->
    <section class="gallery pt-10 pb-90">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <a class="popup-gallery-item" href="{{asset('assets/images/gallery/1.jpg')}}">
                    <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="gallery img">
                  </a>
                  <a class="popup-gallery-item" href="{{asset('assets/images/gallery/1.jpg')}}">
                    <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="gallery img">
                  </a>
                  <a class="popup-gallery-item" href="{{asset('assets/images/gallery/1.jpg')}}">
                    <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="gallery img">
                  </a>
                  <a class="popup-gallery-item" href="{{asset('assets/images/gallery/1.jpg')}}">
                    <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="gallery img">
                  </a>
                  <a class="popup-gallery-item" href="{{asset('assets/images/gallery/5.png')}}">
                    <img src="{{asset('assets/images/gallery/5.png')}}" alt="gallery img">
                  </a>
                  <a class="popup-gallery-item" href="{{asset('assets/images/gallery/1.jpg')}}">
                    <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="gallery img">
                  </a>
                  <a class="popup-gallery-item" href="{{asset('assets/images/gallery/1.jpg')}}">
                    <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="gallery img">
                  </a>
              </div><!-- /.gallery-images-wrapper -->
            </div><!-- /.col-xl-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.gallery 2 -->

    <!-- ========================
      About Layout 1
    =========================== -->
    <section class="about-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2">
              <h3 class="heading__title mb-40">Improving The Quality Of Your Life Through Better Health.</h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
              <p class="mb-30">Our goal is to deliver quality of care in a courteous, respectful, and compassionate
                manner. We hope you will allow us to care for you and to be the first and best choice for healthcare.
              </p>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="video-banner">
              <img src="{{asset('assets/images/about/1.jpg')}}" alt="about">
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
        <div class="row pb-20 pt-20">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="video-banner">
                    <img src="{{asset('assets/images/about/1.jpg')}}" alt="about">
                    <a class="video__btn video__btn-white popup-video" href="{{asset('assets/videos/my-video.mp4')}}">
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                    </a>
                </div><!-- /.video-banner -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.container -->
      </div>
    </section><!-- /.About Layout 1 -->

    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>

@endsection