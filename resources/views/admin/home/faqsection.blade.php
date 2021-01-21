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
                            <a href="#">FAQ Section</a>
                        </li>

                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

            <form method="POST" action="{{route('home.faqsection.update',$home)}}" enctype="multipart/form-data">
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
                                            <select name="section_six_status" class="form-control" id="exampleFormControlSelect1">

                                                <option value="1" {{$home->section_six_status == 1 ? 'selected' : ''}}>Yes</option>
                                                <option value="0" {{$home->section_six_status == 0 ? 'selected' : ''}}>No</option>
                                            </select>
                                            @error('section_six_status')
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
                                            <input type="text" name="section_six_short_heading" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Enter Facebook Link" value="{{$home->section_six_short_heading}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" name="section_six_main_heading"  class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Enter Instagram Link" value="{{$home->section_six_main_heading}}">

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
