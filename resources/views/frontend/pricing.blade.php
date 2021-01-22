@extends('frontend.layouts.master')
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Pricing</h2>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Pricing</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="pricing-area ptb-100">
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
                @endforeach
            </div>
        </div>
    </section>

@endsection
