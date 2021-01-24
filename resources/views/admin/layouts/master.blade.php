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

<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="{{route('admin.index')}}">
            <img class="logo" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="logo">
            <img class="logo-sm" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="small logo">
            <img class="logo-dark" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="dark logo">
        </a>
    </div>
    <!-- end::logo -->

    <!-- begin::navigation header -->
    <header class="navigation-header">
        <div>
            <h5>{{Auth::user()->name}}</h5>
            <p class="text-muted">Administrator</p>
            <ul class="nav">

                <li class="nav-item">
                    <a class="btn nav-link bg-danger-bright" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i>
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
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
                    <img class="logo" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="logo">
                    <img class="logo-sm" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="small logo">
                    <img class="logo-dark" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="dark logo">
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
            <div>© Copyright DU 2021 All Rights Reserved.</div>

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
