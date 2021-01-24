@extends('admin.layouts.master')
@section('content')
    <div class="main-content">

        <!-- begin::container -->
        <div class="container">

            <div class="page-header">
                <h4>DU Dashboard</h4>
                <small class="">Welcome, <span class="text-primary">{{Auth::user()->name}}</span></small>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Quries</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-success text-white rounded-circle">
                                                <i class="fa fa-question"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">{{sizeof($quries)}}</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-success">Total quries</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Packages</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-warning text-white rounded-circle">
                                                <i class="fa fa-database"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">{{sizeof($packages)}}</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-warning">Total Packaes</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Services</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-danger text-white rounded-circle">
                                                <i class="fa fa-server"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">{{sizeof($services)}}</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-danger">Total Services</span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                        <span>Admins</span>
                                        <span class="avatar">
                                            <span class="avatar-title bg-info text-white rounded-circle">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </span>
                                    </h6>
                                    <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                        <h3 class="mb-0 mr-2">{{sizeof($users)}}</h3>
                                        <p class="small text-muted mb-0 line-height-20">
                                            <span class="text-info">Total Admins</span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- end::container -->

    </div>
@endsection
@section('page_css')
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('admin/vendors/datepicker/daterangepicker.css')}}">

    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('admin/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/slick/slick-theme.css')}}">

    <!-- Vmap -->
    <link rel="stylesheet" href="{{asset('admin/vendors/vmap/jqvmap.min.css')}}">
@endsection
@section('page_script')
    <script src="{{asset('admin/vendors/charts/chartjs/chart.min.js')}}"></script>

    <!-- Apex chart -->
    <script src="{{asset('admin/vendors/charts/apex/apexcharts.min.js')}}"></script>

    <!-- Circle progress -->
    <script src="{{asset('admin/vendors/circle-progress/circle-progress.min.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('admin/vendors/charts/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/examples/charts/peity.js')}}"></script>

    <!-- Datepicker -->
    <script src="{{asset('admin/vendors/datepicker/daterangepicker.js')}}"></script>

    <!-- Slick -->
    <script src="{{asset('admin/vendors/slick/slick.min.js')}}"></script>

    <!-- Vamp -->
    <script src="{{asset('admin/vendors/vmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/vmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('admin/assets/js/examples/vmap.js')}}"></script>

    <!-- Dashboard scripts -->
    <script src="{{asset('admin/assets/js/examples/dashboard.js')}}"></script>
@endsection
