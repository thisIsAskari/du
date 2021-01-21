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
                            <a href="#">Packages Section</a>
                        </li>

                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

            <form method="POST" action="{{route('home.packagessection.update',$home)}}" enctype="multipart/form-data">
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
                                <h6 class="card-title">Status</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Show this section on home page</label>
                                            <select name="section_five_status" class="form-control" id="exampleFormControlSelect1">

                                                <option value="1" {{$home->section_five_status == 1 ? 'selected' : ''}}>Yes</option>
                                                <option value="0" {{$home->section_five_status == 0 ? 'selected' : ''}}>No</option>
                                            </select>
                                            @error('section_five_status')
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
                                <h6 class="card-title">Headings</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Main Heading</label>
                                            <input type="text" name="section_five_short_heading" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Enter Facebook Link" value="{{$home->section_five_short_heading}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" name="section_five_main_heading" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Enter Instagram Link" value="{{$home->section_five_main_heading}}">

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Choose Packages</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Package 1</label>
                                            <select name="section_five_package_one_id" class="form-control" id="exampleFormControlSelect1">
                                                @foreach($packages as $package)
                                                    <option value="{{$package->id}}" {{$home->section_five_package_one_id == $package->id ? 'selected' : ''}}>{{$package->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Package 2</label>
                                            <select name="section_five_package_two_id" class="form-control" id="exampleFormControlSelect1">
                                                @foreach($packages as $package)
                                                    <option value="{{$package->id}}" {{$home->section_five_package_two_id == $package->id ? 'selected' : ''}}>{{$package->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Package 3</label>
                                            <select name="section_five_package_three_id" class="form-control" id="exampleFormControlSelect1">
                                                @foreach($packages as $package)
                                                    <option value="{{$package->id}}" {{$home->section_five_package_three_id == $package->id ? 'selected' : ''}}>{{$package->name}}</option>
                                                @endforeach
                                            </select>
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
