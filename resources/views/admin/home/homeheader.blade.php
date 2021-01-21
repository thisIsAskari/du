@extends('admin.layouts.master')
@section('content')
    <div class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Home</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home Header</a>
                        </li>

                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->
            <form method="POST" action="{{route('home.homeheader.update',$home)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">

                        @if(Session::has('message'))
                            @if(Session::has('alert-type') == 'success')
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message')}}
                                </div>
                            @endif

                        @endif

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Contact</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Contact No</label>
                                                <input type="number"
                                                       name="contact"
                                                       class="form-control @error('contact') is-invalid @enderror"
                                                       id="exampleInputEmail1"
                                                       aria-describedby="emailHelp"
                                                       placeholder="Enter Contact No"
                                                        value="{{$home->contact}}">
                                                @error('contact')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Socail Media Links</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Facebook</label>
                                                <input type="text" name="facebook_link" class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter Facebook Link" value="{{$home->facebook_link}}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Instagram</label>
                                                <input type="text" name="instagram_link" class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter Instagram Link" value="{{$home->instagram_link}}">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Twitter</label>
                                                <input type="text" name="twitter_link" class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter Twitter Link" value="{{$home->twitter_link}}">

                                            </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Main Logo</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Logo</label>
                                                <input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">

                                            </div>
                                        <img src="{{asset('/storage/images/logo/'.$home->logo)}}" width="30%">

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Main Background Image</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Select Image</label>
                                                <input type="file" name="main_image" class="form-control-file @error('main_image') is-invalid @enderror" id="exampleFormControlFile1">

                                                @error('main_image')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                                @enderror

                                            </div>
                                        <img src="{{asset('/storage/images/backgroundImage/'.$home->main_image)}}" width="30%">


                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Main Image Content</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Short Text</label>
                                                <input type="text" name="main_image_content_one" class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter Contact No" value="{{$home->main_image_content_one}}">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Main Heading</label>
                                                <input type="text" name="main_image_content_two" class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter Contact No" value="{{$home->main_image_content_two}}">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Add Some Text</label>
                                                <input type="text" name="main_image_content_three" class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter Contact No" value="{{$home->main_image_content_three}}">

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Package Start With</label>
                                                <input type="text" name="main_image_content_four" class="form-control" id="exampleInputEmail1"
                                                       aria-describedby="emailHelp" placeholder="Enter Contact No" value="{{$home->main_image_content_four}}">

                                            </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Changes</button>

                    </div>
                </div>
            </form>

        </div>

    </div>
@endsection
@section('page_css')
    <link rel="stylesheet" href="vendors/prism/prism.css" type="text/css">
@endsection

@section('page_script')
    <script src="vendors/prism/prism.js"></script>
@endsection
