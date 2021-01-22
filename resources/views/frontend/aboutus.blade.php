@extends('frontend.layouts.master')
@section('content')
    <div class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h2>About Us</h2>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <span class="sub-title"><i class="flaticon-care-about-environment"></i> {{$aboutus->short_title != null ? $aboutus->short_title : ''}}</span>
                        <h2>{{$aboutus->main_title != null ? $aboutus->main_title : ''}}</h2>
                        <p>{{$aboutus->about_content != null ? $aboutus->about_content : ''}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-main-image">
                        @if($aboutus->image != null)
                            <img src="{{('/storage/images/otherImages/'.$aboutus->image)}}" alt="image">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
