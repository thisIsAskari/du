@extends('admin.layouts.master')
@section('content')
    <main class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Packages</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('package.index')}}">Packages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View All Packages</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

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
                            <table id="example1" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Attribute 1</th>
                                    <th>Attribute 2</th>
                                    <th>Attribute 3</th>
                                    <th>Attribute 4</th>
                                    <th>Attribute 5</th>
                                    <th>Attribute 6</th>
                                    <th>Attribute 7</th>
                                    <th>Attribute 8</th>
                                    <th>Tools</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($packages as $package)
                                    <tr>
                                        <th>{{$package->id}}</th>
                                        <th>{{$package->name}}</th>
                                        <th>{{$package->col_1}}</th>
                                        <th>{{$package->col_2}}</th>
                                        <th>{{$package->col_3}}</th>
                                        <th>{{$package->col_4}}</th>
                                        <th>{{$package->col_5}}</th>
                                        <th>{{$package->col_6}}</th>
                                        <th>{{$package->col_7}}</th>
                                        <th>{{$package->col_8}}</th>
                                        <th>
                                            <a href="{{route('package.edit',$package)}}"><i class="fa fa-edit"></i></a>
                                            <form method="POST" action="{{route('package.destroy',$package)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button style="border: none;background-color: transparent;color: grey;" type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Attribute 1</th>
                                    <th>Attribute 2</th>
                                    <th>Attribute 3</th>
                                    <th>Attribute 4</th>
                                    <th>Attribute 5</th>
                                    <th>Attribute 6</th>
                                    <th>Attribute 7</th>
                                    <th>Attribute 8</th>
                                    <th>Tools</th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </main>
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{asset('admin/vendors/dataTable/dataTables.min.css')}}" type="text/css">
@endsection
@section('page_script')
    <script src="{{asset('admin/vendors/dataTable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/dataTable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/vendors/dataTable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/examples/datatable.js')}}"></script>
@endsection
