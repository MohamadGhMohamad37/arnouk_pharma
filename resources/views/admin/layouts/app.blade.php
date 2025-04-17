<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

        <!-- DataTables -->
        <link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     

        <!-- Bootstrap Css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        @yield('style')
    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative mt-3">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group mt-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block language-switch">
                            <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="14">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-2" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-tune"></i>
                            </button>
                        </div>

                        <!-- light dark btn -->
                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="light-dark-mode">
                                <i class="mdi mdi-moon-waning-crescent align-middle fs-4"></i>
                            </button>
                        </div>

            

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ms-1">Smith</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end ">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle me-1"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                            </div>
                        </div>


                    </div>
                </div>

            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">{{ __('admin.menu') }}</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <div class="d-inline-block icons-sm me-1"><i class="uim uim-airplay"></i></div><span class="badge rounded-pill text-bg-success float-end">3</span>
                                    <span>{{ __('admin.Dashboard') }}</span>
                                </a>
                            </li>
                                <!-- Arnouk Pharma -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm me-1"><i class="uim uim-comment-message"></i></div>
                                    <span>{{ __('admin.arnouk_pharma') }}</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('about.index', ['lang' => app()->getLocale()]) }}">{{ __('admin.about') }}</a></li>
                                    <li><a href="{{ route('service.index', ['lang' => app()->getLocale()]) }}">{{ __('admin.serviec') }}</a></li>
                                    <li><a href="{{ route('category_arnouk_pharma.index', ['lang' => app()->getLocale()]) }}">{{ __('admin.category') }}</a></li>
                                    <li><a href="{{ route('products_arnouk_pharma.index', ['lang' => app()->getLocale()]) }}">{{ __('admin.product') }}</a></li>
                                    <li><a href="{{ route('event_arnouk_pharma.index', ['lang' => app()->getLocale()]) }}">{{ __('admin.event') }}</a></li>
                                    <li><a href="">{{ __('admin.blog') }}</a></li>
                                    <li><a href="">{{ __('admin.contact_us') }}</a></li>
                                    <li><a href="">{{ __('admin.job') }}</a></li>
                                </ul>
                            </li>
                                <!-- Arnouk Pharma for pharmceutical Distribution -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm me-1"><i class="uim uim-comment-message"></i></div>
                                    <span>{{ __('admin.arnouk_pharma_pharmceutical') }}</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">{{ __('admin.about') }}</a></li>
                                    <li><a href="email-read.html">{{ __('admin.serviec') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.product') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.event') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.blog') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.contact_us') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.job') }}</a></li>
                                </ul>
                            </li>
                                <!-- Arnouk Pharma Labs pharmceutical industry -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm me-1"><i class="uim uim-layers-alt"></i></div>
                                    <span>{{ __('admin.arnouk_pharma_pharmceutical_industry') }}</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" class="has-arrow">{{ __('admin.company') }}</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">{{ __('admin.about') }}</a></li>
                                            <li><a href="javascript: void(0);">{{ __('admin.international_certificate') }}</a></li>
                                            <li><a href="javascript: void(0);">{{ __('admin.company_news') }}</a></li>
                                            <li><a href="javascript: void(0);">{{ __('admin.team') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript: void(0);" class="has-arrow">{{ __('admin.product') }}</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">{{ __('admin.category') }}</a></li>
                                            <li><a href="javascript: void(0);">{{ __('admin.product') }}</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript: void(0);" class="has-arrow">{{ __('admin.company') }}</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">{{ __('admin.event') }}</a></li>
                                            <li><a href="javascript: void(0);">{{ __('admin.blog') }}</a></li>
                                            <li><a href="javascript: void(0);">{{ __('admin.contact') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                                <!-- CTL -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm me-1"><i class="uim uim-comment-message"></i></div>
                                    <span>{{ __('admin.CTL') }}</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">{{ __('admin.about') }}</a></li>
                                    <li><a href="email-read.html">{{ __('admin.serviec') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.product') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.event') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.blog') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.contact_us') }}</a></li>
                                    <li><a href="email-compose.html">{{ __('admin.job') }}</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            @yield('content')
        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{url('https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js')}}"></script>
        
        <!-- Required datatable js -->
        <script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>
        @yield('script')
        <script src="{{asset('admin/assets/js/app.js')}}"></script>

    </body>
</html>
