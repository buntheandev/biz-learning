@extends('layouts.master')
@section('meta')
    <title>All Product</title>
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
                    <h5 class="card-title">All Users</h5>
                    <a href="{{route('product.create')}}" class="btn btn-success pull-right"><i class="feather icon-plus mr-2"></i> Add New</a>
                </div>
                <div class="card-body">
                    @if ( Session::has('success') )
                        <div class="alert-list">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Well Done!</strong> You have deleted product successful!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Description</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($products as $item)
                                        <tr>
                                            <td scope="row">{{ $i++ }}</td>
                                            <td>
                                                <img src="{{ asset($item->image) }}" class="img-fluid" width="35" alt="product">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>${{ number_format($item->price, 2) }}</td>
                                            <td>
                                                @if ($item->quantity >= 1 )
                                                    <label class="text-success">In Stock </label>
                                                @else
                                                    <label class="text-danger">Out Stock </label>
                                                @endif
                                            </td>
                                            <td style="width: 40%">{{ $item->description }}</td>
                                            <td>{{ $item->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{ route('product.delete', $item->id) }}" class="btn btn-danger-rgba" onclick="confirm('are you sure!')">
                                                  <i class="feather icon-trash"></i></a>
                                                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-success-rgba"><i class="feather icon-edit-2"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
