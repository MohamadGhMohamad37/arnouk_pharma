@extends('admin.layouts.app')
@section('title','About Arvnouk Pharma Show')
@section('style')

        <!-- Lightbox css -->
        <link href="{{asset('admin/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('https://vjs.zencdn.net/7.21.1/video-js.css')}}" rel="stylesheet" />
        
@endsection
@section('content')

<div class="main-content">

<div class="page-content">

    <!-- Page-Title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">Starter page</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div>
                <div class="col-md-4">
                    <div class="float-end d-none d-md-block">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-light rounded-pill user text-start d-flex align-items-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings-outline me-1"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            
                        <div class="container mt-5">
                            <h2>{{ $about->{'name_' . app()->getLocale()} }}</h2>

                            <p><strong>Description:</strong></p>
                            <p>{!! $about->{'description_' . app()->getLocale()} !!}</p>

                            @if ($about->main_image)
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="gallery-box mt-4">
                                    <a class="gallery-popup" href="{{ asset($about->main_image) }}" title="Main Image">
                                        <img class="gallery-demo-img img-fluid mx-auto" src="{{ asset($about->main_image) }}" alt="1" />
                                        
                                        <div class="overlay-content">
                                            <h5 class="overlay-title">Main Image</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endif
                            @if ($about->video)
                                <div class="mb-3">
                                    <strong>Video:</strong><br>
                                    <video
                                        id="my-video"
                                        class="video-js vjs-default-skin"
                                        controls
                                        preload="auto"
                                        width="640"
                                        height="360"
                                        data-setup='{}'>
                                        <source src="{{ asset($about->video) }}" type="video/mp4" />
                                        {{ __('Your browser does not support the video tag.') }}
                                    </video>
                                </div>
                            @endif


                            @if ($about->images && is_array(json_decode($about->images)))
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <h4 class="header-title">Other Images</h4>

                                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        @foreach (json_decode($about->images) as $index => $img)
                                                            <button type="button"
                                                                    data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide-to="{{ $index }}"
                                                                    class="{{ $index == 0 ? 'active' : '' }}"
                                                                    @if($index == 0) aria-current="true" @endif
                                                                    aria-label="Slide {{ $index + 1 }}">
                                                            </button>
                                                        @endforeach
                                                    </div>

                                                    <div class="carousel-inner">
                                                        @foreach (json_decode($about->images) as $index => $img)
                                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                <img class="d-block img-fluid mx-auto" src="{{ asset($img) }}" alt="Slide {{ $index + 1 }}">
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <a href="{{ route('about.index', ['lang' => app()->getLocale()]) }}" class="btn btn-secondary">Back</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div> 
    <!-- end page-content-wrapper -->
</div>
<!-- End Page-content -->

@endsection
@section('script')

        <!-- Isotope Filter -->
        <script src="{{asset('admin/assets/libs/isotope-layout/isotope.pkgd.min.js')}}"></script>

        <!-- Magnific Popup-->
        <script src="{{asset('admin/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/pages/gallery.init.js')}}"></script>
        <script src="{{url('https://vjs.zencdn.net/7.21.1/video.min.js')}}"></script>

@endsection