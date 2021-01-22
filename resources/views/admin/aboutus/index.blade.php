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
                            <a href="#">About Us</a>
                        </li>

                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->
            <form method="POST" action="{{route('aboutus.update',$aboutus)}}" enctype="multipart/form-data">
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
                                <h6 class="card-title">Headings</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Short Heading</label>
                                            <input type="text" name="short_title" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Short Heading" value="{{$aboutus->short_title != null ? $aboutus->short_title : ''}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" name="main_title" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Title" value="{{$aboutus->main_title != null ? $aboutus->main_title : ''}}">
                                            @error('main_title')
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
                                <h6 class="card-title">Main Image</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Choose Image</label>
                                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        @if($aboutus->image != null)
                                            <img src="{{asset('/storage/images/otherImages/'.$aboutus->image)}}" width="30%">
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">About</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add About Content</label>
                                            <input type="text" name="about_content" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" value="{{$aboutus->about_content}}">

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
