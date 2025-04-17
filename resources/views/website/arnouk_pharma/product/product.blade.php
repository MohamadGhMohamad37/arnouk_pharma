@extends('website.layouts.app')
@section('title','Pharmacy Products')
@section('content')
<body>
    <div class="wrapper">
      <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
      </div><!-- /.preloader -->
  
      <!-- ========================
         page title 
      =========================== -->
      <section class="page-title page-title-layout5 text-center">
        <div class="bg-img"><img src="{{asset('assets/images/backgrounds/6.jpg')}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading">Our Products</h1>
              <nav>
                <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">shop</li>
                </ol>
              </nav>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ========================
         shop 
      =========================== -->
      <section class="shop-grid">
        <div class="container">
          <div class="row">
            <div class="sorting-options d-flex flex-wrap justify-content-between align-items-center mb-30">
                <select>
                  <option selected="" value="0">Sort by latest</option>
                  <option value="1">Sort by Popular</option>
                  <option value="2">Sort by highest Price </option>
                  <option value="3">Sort by lowest Price </option>
                </select>
              </div>
            <div class="col-sm-12 col-md-8 col-lg-9">
              <div class="row">
                <!-- Product item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <div class="product-item">
                    <div class="product__img">
                      <img src="assets/images/products/1.jpg" alt="Product" loading="lazy">
                    </div><!-- /.product-img -->
                    <div class="product__info">
                      <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                    </div><!-- /.product-content -->
                  </div><!-- /.product-item -->
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
            </div><!-- /.col-lg-9 -->>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.shop -->

      <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
    </div><!-- /.wrapper -->
  
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>