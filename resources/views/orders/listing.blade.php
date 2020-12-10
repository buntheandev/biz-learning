@extends('layouts.master')
@section('meta')
    <title>All Orders</title>
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
                    <h5 class="card-title">All Orders</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Buyer</th>
                                        <th>Product name</th>
                                        <th>Amount</th>
                                        <th>Discount</th>
                                        <th>Order Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td scope="row">{{ $i++ }}</td>
                                            <td>
                                               <img src="{{ asset($item->image) }}" class="img-fluid" width="35" alt="product">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->product_name }}</td>
                                            <td>${{ number_format($item->amount, 2) }}</td>
                                            <td>{{ number_format($item->discount, 1) }}%</td>
                                            <td>{{ $item->created_at->diffForHumans()}}</td>
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
