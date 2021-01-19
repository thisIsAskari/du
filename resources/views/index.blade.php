@extends('frontend.layouts.master')
@section('content')
    <div class="main-banner">
        <div class="container">
            <div class="row align-items-center m-0">
                <div class="col-lg-6 p-0">
                    <div class="main-banner-content">
                        <span class="sub-title"><i class="flaticon-wifi-signal"></i> Bahama Broadband Service</span>
                        <h1>Built for Internet Service</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis.</p>
                        <div class="price">
                            $45 <span>/mo</span>
                        </div>
                        <div class="btn-box">
                            <a href="#" class="btn btn-primary">Request A Quote</a>
                            <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="flaticon-multimedia"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="banner-image">
                        <img src="{{asset('frontend/img/banner-img1.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-img1"><img src="{{asset('frontend/img/shape-image/1.png')}}" alt="imgae"></div>
    </div>

    <section class="features-area bg-image ptb-100">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-wifi"></i>
</span>
<span>Bahama Isp Features</span>
</span>
                <h2>We are internet service provider company in United States</h2>
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

    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <span class="sub-title"><i class="flaticon-care-about-environment"></i> About Bahama</span>
                        <h2>Experience the magic of tech to serve you a best</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisseLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="assets/img/about-img1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-technical-support"></i>
</span>
<span>Bahama Services</span>
</span>
                <h2>Explore the next Isp unlimited possibilities</h2>
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

    <section class="pricing-area ptb-100 extra-mb pb-0">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-resume"></i>
</span>
<span>Bahama Pricing</span>
</span>
                <h2>Discover our best plans</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                            <span>TV + Internet</span>
                            <h3>Player Bundle</h3>
                        </div>
                        <ul class="pricing-features-list">
                            <li><i class="flaticon-check-mark"></i> 150+ channels</li>
                            <li><i class="flaticon-check-mark"></i> Catch Up & On Demand</li>
                            <li><i class="flaticon-check-mark"></i> Cell Phone Connection</li>
                            <li><i class="flaticon-check-mark"></i> Up to 100Mbps fibre</li>
                            <li><i class="flaticon-check-mark"></i> Made for 1-4 devices</li>
                        </ul>
                        <div class="price">
                            <span>From</span>
                            <span>$</span>
                            67.99
                            <span>/mo</span>
                        </div>
                        <a href="#" class="view-plans-btn">View Plans</a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-pricing-table active">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                            <span>TV + Internet</span>
                            <h3>Bahama TV Box</h3>
                        </div>
                        <ul class="pricing-features-list">
                            <li><i class="flaticon-check-mark"></i> 150+ channels</li>
                            <li><i class="flaticon-check-mark"></i> Catch Up & On Demand</li>
                            <li><i class="flaticon-check-mark"></i> Cell Phone Connection</li>
                            <li><i class="flaticon-check-mark"></i> Up to 100Mbps fibre</li>
                            <li><i class="flaticon-check-mark"></i> Made for 1-4 devices</li>
                        </ul>
                        <div class="price">
                            <span>From</span>
                            <span>$</span>
                            79.99
                            <span>/mo</span>
                        </div>
                        <a href="#" class="view-plans-btn">View Plans</a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                    <div class="single-pricing-table">
                        <div class="pricing-header">
                            <div class="icon">
                                <i class="flaticon-online-shop"></i>
                            </div>
                            <span>TV + Internet</span>
                            <h3>Broadband & WIFI</h3>
                        </div>
                        <ul class="pricing-features-list">
                            <li><i class="flaticon-check-mark"></i> 150+ channels</li>
                            <li><i class="flaticon-check-mark"></i> Catch Up & On Demand</li>
                            <li><i class="flaticon-check-mark"></i> Cell Phone Connection</li>
                            <li><i class="flaticon-check-mark"></i> Up to 100Mbps fibre</li>
                            <li><i class="flaticon-check-mark"></i> Made for 1-4 devices</li>
                        </ul>
                        <div class="price">
                            <span>From</span>
                            <span>$</span>
                            99.99
                            <span>/mo</span>
                        </div>
                        <a href="#" class="view-plans-btn">View Plans</a>
                        <div class="image-box">
                            <img src="assets/img/shape-image/2.png" alt="image">
                            <img src="assets/img/shape-image/2.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-area bg-image ptb-100 extra-pt">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-help"></i>
</span>
<span>Frequently Questions</span>
</span>
                <h2>Why you should choose <br>our services</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
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
                <div class="col-lg-6 col-md-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> What things will be provided by Bahama internet?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Why we are the best in this fields?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> It’s better to be first in the mind than in the market?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Positioning is what you do to the prospect?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> The person who will help you from Bahama?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"><i class="flaticon-add"></i> Why you should choose us than others?</a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="cta-content">
                        <h3>Call Us Now For Connect Bahama</h3>
                        <a href="#">+7(887) 332 43 43</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="cta-btn">
                        <a href="#" class="btn btn-primary">Check Coverage in Your Area</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area ptb-100">
        <div class="container">
            <div class="section-title">
<span>
<span class="icon">
<i class="flaticon-wifi-1"></i>
</span>
<span>Bahama News Update</span>
</span>
                <h2>What’s news update is <br>coming</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="assets/img/blog-img1.jpg" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="fas fa-user-tie"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock"></i> January 23, 2020</li>
                            </ul>
                            <h3><a href="#">I Used The Web For A Day On A 50 MB Budget</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="assets/img/blog-img2.jpg" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="fas fa-user-tie"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock"></i> January 25, 2020</li>
                            </ul>
                            <h3><a href="#">The hardest leadership advice to follow</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="assets/img/blog-img3.jpg" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="fas fa-user-tie"></i> <a href="#">Admin</a></li>
                                <li><i class="far fa-clock"></i> January 27, 2020</li>
                            </ul>
                            <h3><a href="#">The Most Popular New Top Business Apps</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
