@extends('admin.layouts.master')
@section('content')
    <div class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Package</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Create New Package</a>
                        </li>

                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->
            <form method="POST" action="{{route('package.update',$package)}}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Package Details</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Package Name</label>
                                            <input type="text"
                                                   name="name"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Package Name"
                                                   value="{{$package->name}}">
                                            @error('name')
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
                                <h6 class="card-title">Package Attributes</h6>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 1</label>
                                            <input type="text"
                                                   name="col_1"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 1"
                                                   value="{{$package->col_1}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 2</label>
                                            <input type="text"
                                                   name="col_2"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 2"
                                                   value="{{$package->col_2}}">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 3</label>
                                            <input type="text"
                                                   name="col_3"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 3"
                                                   value="{{$package->col_3}}">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 4</label>
                                            <input type="text"
                                                   name="col_4"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 4"
                                                   value="{{$package->col_4}}">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 5</label>
                                            <input type="text"
                                                   name="col_5"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 5"
                                                   value="{{$package->col_5}}">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 6</label>
                                            <input type="text"
                                                   name="col_6"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 6"
                                                   value="{{$package->col_6}}">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 7</label>
                                            <input type="text"
                                                   name="col_7"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 7"
                                                   value="{{$package->col_7}}">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Add Attribute 8</label>
                                            <input type="text"
                                                   name="col_8"
                                                   class="form-control"
                                                   id="exampleInputEmail1"
                                                   aria-describedby="emailHelp"
                                                   placeholder="Enter Attribute 8"
                                                   value="{{$package->col_8}}">

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
