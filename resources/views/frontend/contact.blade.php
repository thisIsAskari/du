@extends('frontend.layouts.master')
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact</h2>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Send Message</span>
                <h2>Drop us message for any query</h2>
                <p></p>
            </div>
            <form method="POST" action="{{route('contact.store')}}">
                @csrf()
                @if(Session::has('contact'))

                    <div class="alert alert-success" role="alert">
                        {{Session::get('contact')}}
                    </div>

                @endif

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="username" id="name" data-error="Please enter your name" value="{{old('username')}}" >
                            @if($errors->has('username'))
                                <div class="error">
                                    {{ $errors->first('username') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Area Name" name="area_name" id="email" data-error="Please enter your area name" value="{{old('area_name')}}" >
                            @if($errors->has('area_name'))
                                <div class="error">
                                    {{ $errors->first('area_name') }}
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="building_no" placeholder="Building No" id="phone_number" data-error="Please enter your building no" value="{{old('building_no')}}" >
                            @if($errors->has('building_no'))
                                <div class="error">
                                    {{ $errors->first('building_no') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <input type="number" class="form-control" name="contact_no" placeholder="Contact No" id="msg_subject" data-error="Please enter your contact no" value="{{old('contact_no')}}" >
                            @if($errors->has('contact_no'))
                                <div class="error">
                                    {{ $errors->first('contact_no') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
