@extends('layouts.master')
@section('meta')
    <title>All categories</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/sets/plugins/datatables/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">All category</h5>
                    <a href="{{route('category.create')}}" class="btn btn-success pull-right"><i class="feather icon-plus mr-2"></i> Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table foo-basic-table">
                            <thead>
                                <tr>
                                    <th data-breakpoints="xs">ID</th>
                                    <th>Name</th>
                                    <th >Created Date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($categories as $item)
                                    <tr data-expanded="true">
                                        <td>1</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{date_format(date_create($item->created_at), 'M-d-Y')}}</td>
                                        <td>
                                            <a href="{{route('category.edit', $item->id)}}" class="btn btn-success-rgba">
                                                <span class="ti-pencil"></span>
                                            </a>
                                        <a href="{{ route('category.delete', $item->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger-rgba">
                                                <span class="ti-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
@endsection

@section('js')
    <script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/dataTables.responsive.min.jss') }}"></script>
    <script src="{{ asset('backend/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

     <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
