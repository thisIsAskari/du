@extends('admin.layouts.master')
@section('content')
    <main class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>Services</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('service.index')}}">Services</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View All Services</li>
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
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Tools</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($services as $service)
                                    <tr>
                                        @if($service->id == 1) @continue @endif
                                        <th>{{$service->id}}</th>
                                        <th>{{$service->main_title}}</th>
                                        <th>{{$service->about_content}}</th>
                                        <th>
                                            <a href="{{route('service.edit',$service)}}"><i class="fa fa-edit"></i></a>
                                            <form method="POST" action="{{route('service.destroy',$service)}}">
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
                                    <th>Title</th>
                                    <th>Content</th>
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
