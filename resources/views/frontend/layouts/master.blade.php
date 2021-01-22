<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/bahama/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2021 11:11:06 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="icon" type="image/png" href="{{asset('frontend/img/favicon.png')}}">

    <title>du- Broadband & Internet Service Providers HTML Template</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        /* body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;} */

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        .modal-header{
            color: #f8f9fa;
            background-color: #343a40;
        }
        .modal-body{
            text-align:left ;
            color:  #f8f9fa;
            background-color:#343a40 ;
        }
        .modal-footer{
            background-color:#343a40 ;
            color: #fa8185;

        }



    </style>
</head>
<body>

<div class="preloader">
    <div class="spinner"></div>
</div>


<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="top-header-left">
                        @if($home->facebook_link != null)
                            <p><span>Call Now At:</span> <a href="#">{{$home->contact}}</a></p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="top-header-right">
                        <!-- <div class="login-signup-btn">
                        <p><a href="#">Login</a> <span>or</span> <a href="#">Register</a></p>
                        </div> -->
                        <ul class="social">
                            @if($home->facebook_link != null)
                                <li><a href="{{$home->facebook_link}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if($home->twitter_link != null)
                                <li><a href="{{$home->twitter_link}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if($home->instagram_link != null)
                                <li><a href="{{$home->twitter_link}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="bahama-mobile-nav">
            <div class="logo">
                <a href="index.html">
                    @if($home->logo != null)
                        <img src="{{asset('/storage/images/logo/'.$home->logo)}}" alt="logo">
                    @endif
                </a>
            </div>
        </div>
        <div class="bahama-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        @if($home->logo != null)
                            <img src="{{asset('/storage/images/logo/'.$home->logo)}}" alt="logo">
                        @endif
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{route('home')}}" class="nav-link active">Home </a></li>
                            <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link">Pricing </a></li>
                            <li class="nav-item"><a href="{{route('aboutus')}}" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services </a></li>
                            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>

<!-- <div class="modal-backdrop fade show"></div> -->
@yield('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $('#exampleModal').modal('show');
</script>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <a href="#"><img src="{{asset('/storage/image/otherImage'.$home->section_three_image)}}" alt="image"></a>
                        <p>{{$home->section_three_about}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer Services</h3>
                    <ul class="services-widget-list">
                        <li><a href="#">My Bahama</a></li>
                        <li><a href="#">Bahama Media</a></li>
                        <li><a href="#">Connection and Configuration</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Video Tutorials</a></li>
                        <li><a href="#">Bahama Application</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="links-widget-list">
                        <li><a href="#">Coverage Map</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">License</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Our Partners</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Get In Touch</h3>
                    <div class="widget-contact-info">
                        <p>
                            <a href="#">1 (800) 216 20 20</a>
                            <span>(Customer service and support)</span>
                            <a href="#">1 (800) 216 20 20</a>
                            <span>(For new customers)</span>
                            1600 Harrison ave, office 203 New York, NY 309090
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <p><i class="far fa-copyright"></i> Copyright Bahama 2019 All Rights Reserved</p>
        </div>
    </div>
</footer>

<div class="go-top"><i class="fas fa-arrow-up"></i></div>


<script src="{{asset('frontend/js/jquery.min.js')}}"></script>

<script src="{{asset('frontend/js/popper.min.js')}}"></script>

<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('frontend/js/parallax.min.js')}}"></script>

<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('frontend/js/wow.min.js')}}"></script>

<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('frontend/js/form-validator.min.js')}}"></script>

<script src="{{asset('frontend/js/contact-form-script.js')}}"></script>

<script src="{{asset('frontend/js/bahama-map.js')}}"></script>

<script src="{{asset('frontend/js/main.js')}}"></script>
</body>

<!-- Mirrored from templates.envytheme.com/bahama/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2021 11:11:20 GMT -->
</html>
