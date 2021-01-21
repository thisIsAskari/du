<!doctype html>
<html lang="en">

<!-- Mirrored from protable.laborasyon.com/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 17:29:48 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Protable - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/media/image/favicon.png')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('admin/vendors/bundle.css')}}" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('admin/vendors/datepicker/daterangepicker.css')}}">

    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('admin/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/slick/slick-theme.css')}}">

    @yield('page_css')
    <!-- Vmap -->
    <link rel="stylesheet" href="{{asset('admin/vendors/vmap/jqvmap.min.css')}}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.min.css')}}" type="text/css">
</head>
<body class="dark">

<!-- begin::preloader-->
<div class="preloader">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128"
         xml:space="preserve">
        <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF"/>
        <g>
            <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z"
                  fill="#000000" fill-opacity="1"/>
            <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64"
                              dur="500ms" repeatCount="indefinite">
            </animateTransform>
        </g>
    </svg>
</div>
<!-- end::preloader -->

<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="index.html">
            <img class="logo" src="assets/media/image/logo.png" alt="logo">
            <img class="logo-sm" src="assets/media/image/logo-sm.png" alt="small logo">
            <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="dark logo">
        </a>
    </div>
    <!-- end::logo -->

    <!-- begin::navigation header -->
    <header class="navigation-header">
        <figure class="avatar avatar-state-success">
            <img src="assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="image">
        </figure>
        <div>
            <h5>Nikos Pedlow</h5>
            <p class="text-muted">Administrator</p>
            <ul class="nav">
                <li class="nav-item">
                    <a href="profile.html" class="btn nav-link bg-info-bright" title="Profile" data-toggle="tooltip">
                        <i data-feather="user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn nav-link bg-success-bright" title="Settings" data-toggle="tooltip">
                        <i data-feather="settings"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="btn nav-link bg-danger-bright" title="Logout" data-toggle="tooltip">
                        <i data-feather="log-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- end::navigation header -->

    <!-- begin::navigation menu -->
    @include('admin.layouts.partials.leftside_navbar')
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->

<!-- begin::main -->
<div id="main">

    <!-- begin::header -->
    <div class="header">

        <!-- begin::header left -->
        <ul class="navbar-nav">

            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->

            <!-- begin::header-logo -->
            <li class="nav-item" id="header-logo">
                <a href="index.html">
                    <img class="logo" src="assets/media/image/logo.png" alt="logo">
                    <img class="logo-sm" src="assets/media/image/logo-sm.png" alt="small logo">
                    <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="dark logo">
                </a>
            </li>
            <!-- end::header-logo -->
        </ul>
        <!-- end::header left -->

        <!-- begin::header-right -->
        @include('admin.layouts.partials.top_navbar')
        <!-- end::header-right -->
    </div>
    <!-- end::header -->

    <!-- begin::main-content -->
 @yield('content')
    <!-- end::main-content -->

    <!-- begin::footer -->
    <footer>
        <div class="container">
            <div>© 2019 Protable v1.0.0 Made by <a href="http://laborasyon.com/">Laborasyon</a></div>
            <div>
                <nav class="nav">
                    <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                    <a href="#" class="nav-link">Change Log</a>
                    <a href="#" class="nav-link">Get Help</a>
                </nav>
            </div>
        </div>
    </footer>
    <!-- end::footer -->

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{asset('admin/vendors/bundle.js')}}"></script>

<script src="{{asset('admin/vendors/circle-progress/circle-progress.min.js')}}"></script>
@yield('page_script')

<script src="{{asset('admin/assets/js/examples/dashboard.js')}}"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<!-- App scripts -->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
</body>

<!-- Mirrored from protable.laborasyon.com/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 17:31:41 GMT -->
</html>
