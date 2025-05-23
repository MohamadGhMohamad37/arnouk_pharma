<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login | Arnouk Pharma</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo/favourite_icon.png')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{url('https://cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>

    </head>

    <body class="bg-primary bg-pattern">
    <script>
        @if(session('verify_error'))
            Swal.fire({
                icon: 'warning',
                title: "{{ __('validate.Warning') }}",
                text: "{{ session('verify_error') }}",
            });
        @endif

        @if(session('login_error'))
            Swal.fire({
                icon: 'error',
                title: "{{ __('validate.Error') }}",
                text: "{{ session('login_error') }}",
            });
        @endif
    </script>
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                
                                <div class="col-lg-12">
                                    <div class="text-center mb-5">
                                        <a href="index.html" class="logo" ><img src="{{asset('assets/images/logo/logo.png')}}" alt="logo"></a>
                                        <h5 class="font-size-16 text-white-50 mb-4">{{ __('messages.arnouk_pharma') }}</h5>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">{{ __('messages.Sign in to continue to') }} {{ __('messages.arnouk_pharma') }}.</h5>
                                    <form class="form-horizontal" method="POST" action="{{ route('login', ['lang' => app()->getLocale()]) }}">
                                     @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="email" class="form-control" id="username" required>
                                                    <label for="username">{{ __('messages.email') }}</label>
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="userpassword" required>
                                                    <label for="userpassword">{{ __('messages.Password') }}</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label" for="customControlInline">{{ __('messages.Remember me') }}</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> {{ __('messages.Forgot your password') }} ?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success d-block w-100 waves-effect waves-light" type="submit">{{ __('messages.Log In') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{url('https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js')}}"></script>

        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
</html>
