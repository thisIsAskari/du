@extends('admin.layouts.master')
@section('content')
    <main class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4>FAQ'S</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('faq.index')}}">FAQ'S</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View All FAQ'S</li>
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
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>

                                @foreach($faqs as $faq)
                                    <tr>
                                        <th>{{$faq->id}}</th>
                                        <th>{{Str::limit($faq->question,30,'...')}}</th>
                                        <th>{{Str::limit($faq->answer,50,'...')}}</th>

                                        <th>
                                            <a href="{{route('faq.edit',$faq)}}"><i class="fa fa-edit"></i></a>
                                            <form method="POST" action="{{route('faq.destroy',$faq)}}">
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
                                    <th>Question</th>
                                    <th>Answer</th>
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
