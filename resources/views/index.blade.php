@extends('frontend.layouts.master')
@section('content')
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="Du_logo.png" width="10%">
                    <!-- <h5 class="modal-title">Pop Up Form</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span style="color: white;" aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <!-- <h2 style="text-align: center;color:  #fa8185;">Welcome to du</h2> -->

                    <form action="/action_page.php">
                        <label for="fname">Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Area Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Area Name">

                        <label for="lname">Building No.</label>
                        <input type="text" id="lname" name="lastname" placeholder="Building No">

                        <label for="lname">Contact No.</label>
                        <input type="text" id="lname" name="lastname" placeholder="Contact No">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" style="background-color: #fa8185; color: white;" class="btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="main-banner">
        <div class="container">
            <div class="row align-items-center m-0">
                <div class="col-lg-6 p-0">
                    <div class="main-banner-content">
                        <span class="sub-title"><i class="flaticon-wifi-signal"></i> {{$home->main_image_content_one}}</span>
                        <h1>{{$home->main_image_content_two != null ? $home->main_image_content_two : ''}}</h1>
                        <p>{{$home->main_image_content_three != null ? $home->main_image_content_three : ''}}</p>
                        <div class="price">
                            {{$home->main_image_content_four != null ? $home->main_image_content_four : ''}}<span> /mon</span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="banner-image">
                        @if($home->main_image != null)
                            <img src="{{asset('/storage/images/backgroundImage/'. $home->main_image)}}" alt="image">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-img1"><img src="{{asset('frontend/img/shape-image/1.png')}}" alt="imgae"></div>
    </div>

    @if($home->section_two_status == 1)
        <section class="features-area bg-image ptb-100">
        <div class="container">
            <div class="section-title">
                <span>
                <span class="icon">
                <i class="flaticon-wifi"></i>
                </span>
                <span>{{$home->section_two_short_heading != null ? $home->section_two_short_heading : ''}}</span>
                </span>
                <h2>{{$home->section_two_main_heading != null ? $home->section_two_main_heading : ''}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-speedometer"></i>
                        </div>
                        <h3>Download 1Gbps</h3>
                        <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        <div class="back-icon">
                            <i class="flaticon-speedometer"></i>
                        </div>
                        <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-speedometer-1"></i>
                        </div>
                        <h3>99% Internet Uptime</h3>
                        <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        <div class="back-icon">
                            <i class="flaticon-speedometer-1"></i>
                        </div>
                        <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="single-features-box">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3>24/7 Customer Support</h3>
                        <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                        <div class="back-icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if($home->section_three_status == 1)
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title"><i class="flaticon-care-about-environment"></i> {{$home->section_three_short_heading != null ? $home->section_three_short_heading : ''}}</span>
                            <h2>{{$home->section_three_main_heading != null ? $home->section_three_main_heading : ''}}</h2>
                            <p>{{$home->section_three_about != null ? $home->section_three_about : ''}}</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            @if($home->section_three_image != null)
                                <img src="{{asset('/storage/images/otherImages/'.$home->section_three_image)}}" alt="image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($home->section_four_status == 1)
        <section class="services-area ptb-100">
            <div class="container">
                <div class="section-title">
                <span>
                <span class="icon">
                <i class="flaticon-technical-support"></i>
                </span>
                <span>{{$home->section_four_short_heading != null ? $home->section_four_short_heading : ''}}</span>
                </span>
                    <h2>{{$home->section_four_main_heading != null ? $home->section_four_main_heading : ''}}</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-box">
                            <div class="icon">
                                <i class="flaticon-router"></i>
                            </div>
                            <h3>Home Broadband</h3>
                            <p>Lorem ipsu dolors itamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-box">
                            <div class="icon">
                                <i class="flaticon-wifi-1"></i>
                            </div>
                            <h3>Home WIFI</h3>
                            <p>Lorem ipsu dolors itamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-box">
                            <div class="icon">
                                <i class="flaticon-wifi-signal-tower"></i>
                            </div>
                            <h3>Satellite TV</h3>
                            <p>Lorem ipsu dolors itamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-box">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                            <h3>Nexa TV Box</h3>
                            <p>Lorem ipsu dolors itamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-box">
                            <div class="icon">
                                <i class="flaticon-key"></i>
                            </div>
                            <h3>Mobile Connection</h3>
                            <p>Lorem ipsu dolors itamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-box">
                            <div class="icon">
                                <i class="flaticon-shield"></i>
                            </div>
                            <h3>Home Security</h3>
                            <p>Lorem ipsu dolors itamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>
                            <div class="image-box">
                                <img src="assets/img/shape-image/1.png" alt="image">
                                <img src="assets/img/shape-image/1.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif

    @if($home->section_five_status == 1)
        <section class="pricing-area ptb-100 extra-mb pb-0">
        <div class="container">
            <div class="section-title">
            <span>
            <span class="icon">
            <i class="flaticon-resume"></i>
            </span>
            <span>{{$home->section_five_short_heading != null ? $home->section_five_short_heading : ''}}</span>
            </span>
                <h2>{{$home->section_five_main_heading !=  null ? $home->section_five_main_heading : ''}}</h2>
            </div>


                <div class="row">
                    @foreach($packages as $package)
                    @if($package->id == $home->section_five_package_one_id)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-table">
                            <div class="pricing-header">
                                <div class="icon">
                                    <i class="flaticon-online-shop"></i>
                                </div>
                                <span>{{$package->name != null ? $package->name : ''}}</span>
                                <h3>{{$package->col_1 != null ? $package->col_1 : ''}}</h3>
                            </div>
                            <ul class="pricing-features-list">
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_2 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_3 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_4 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_5 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_6 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_7 : ''}}}</li>
                            </ul>
                            <div class="price">
                                <span>From</span>
                                <span>$</span>
                                {{$package->col_8 != null ? $package->col_8 : ''}}
                                <span>/mo</span>
                            </div>

                            <div class="image-box">
                                <img src="{{asset('frontend/img/shape-image/2.png')}}" alt="image">
                                <img src="{{asset('frontend/img/shape-image/2.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($package->id == $home->section_five_package_two_id)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-table active">
                            <div class="pricing-header">
                                <div class="icon">
                                    <i class="flaticon-online-shop"></i>
                                </div>
                                <span>{{$package->name != null ? $package->name : ''}}</span>
                                <h3>{{$package->col_1 != null ? $package->col_1 : ''}}</h3>
                            </div>
                            <ul class="pricing-features-list">
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_2 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_3 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_4 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_5 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_6 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_7 : ''}}}</li>
                            </ul>
                            <div class="price">
                                <span>From</span>
                                <span>$</span>
                                {{$package->col_8 != null ? $package->col_8 : ''}}
                                <span>/mo</span>
                            </div>

                            <div class="image-box">
                                <img src="{{asset('frontend/img/shape-image/2.png')}}" alt="image">
                                <img src="{{asset('frontend/img/shape-image/2.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($package->id == $home->section_five_package_three_id)
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                        <div class="single-pricing-table">
                            <div class="pricing-header">
                                <div class="icon">
                                    <i class="flaticon-online-shop"></i>
                                </div>
                                <span>{{$package->name != null ? $package->name : ''}}</span>
                                <h3>{{$package->col_1 != null ? $package->col_1 : ''}}</h3>
                            </div>
                            <ul class="pricing-features-list">
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_2 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_3 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_4 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_5 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_6 : ''}}</li>
                                <li><i class="flaticon-check-mark"></i> {{$package->col_1 != null ? $package->col_7 : ''}}}</li>
                            </ul>
                            <div class="price">
                                <span>From</span>
                                <span>$</span>
                                {{$package->col_8 != null ? $package->col_8 : ''}}
                                <span>/mo</span>
                            </div>
                            <div class="image-box">
                                <img src="{{asset('frontend/img/shape-image/2.png')}}" alt="image">
                                <img src="{{asset('frontend/img/shape-image/2.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
        </div>
    </section>
    @endif

    @if($home->section_six_status == 1)
    <section class="faq-area bg-image ptb-100 extra-pt">
        <div class="container">
            <div class="section-title">
            <span>
            <span class="icon">
            <i class="flaticon-help"></i>
            </span>
            <span>{{$home->section_six_short_heading != null ? $home->section_six_short_heading : ''}}</span>
            </span>
                <h2>{{ $home->section_six_main_heading != null ? $home->section_six_main_heading : '' }}</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> How do permissions work in Google Play Instant?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Is Smart Lock required for instant apps?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Can I have multiple activities in a single feature?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Can I share resources between features?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Is multidex supported for instant apps?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Can I share resources between features?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif

@endsection
