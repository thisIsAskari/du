@extends('frontend.layouts.master')
@section('content')
    <div class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h2>Services</h2>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
            <span>
            <span class="icon">
            <i class="flaticon-technical-support"></i>
            </span>
            <span>{{$home->section_four_short_heading}}</span>
            </span>
                <h2>{{$home->section_four_main_heading}}</h2>
            </div>
            <div class="row">
                @foreach($services as $service)
                    @if($service->id == 1) @continue @endif
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services-box">
                        <div class="icon">
                            <i class="flaticon-router"></i>
                        </div>
                        <h3>{{$service->main_title}}</h3>
                        <p>{{$service->about_content}}</p>

                        <div class="image-box">
                            <img src="{{asset('frontend/img/shape-image/1.png')}}" alt="image">
                            <img src="{{asset('frontend/img/shape-image/1.png')}}" alt="image">
                        </div>
                    </div>
                </div>


                @endforeach
            </div>
        </div>
    </section>


@endsection
