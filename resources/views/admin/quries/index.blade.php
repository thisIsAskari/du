@extends('admin.layouts.master')
@section('content')
    <main class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Quries</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.index')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('qurey.all')}}">Quires</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View All Quries</li>
                    </ol>
                </nav>
            </div>
            <!-- end::page-header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Area Name</th>
                                    <th>Building No</th>
                                    <th>Contact No</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>

                                @foreach($quries as $qurey)
                                    <tr>
                                        <th>{{$qurey->id}}</th>
                                        <th>{{$qurey->username}}</th>
                                        <th>{{$qurey->area_name}}</th>
                                        <th>{{$qurey->building_no}}</th>
                                        <th>{{$qurey->contact_no}}</th>

                                        <th>
                                            <form method="POST" action="{{route('qurey.destroy',$qurey)}}">
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
                                    <th>Username</th>
                                    <th>Area Name</th>
                                    <th>Building No</th>
                                    <th>Contact No</th>
                                    <th>Delete</th>
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
