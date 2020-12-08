
@extends('layouts.master')
@section('meta')
    <title>Admin Dashboard</title>
@endsection

@section('content')

<div class="row">
    <!-- Start col -->
  <div class="col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="action-icon badge badge-primary-inverse mr-0"><i class="feather icon-user"></i></span>
                    </div>
                    <div class="col-7 text-right">
                        <h5 class="card-title font-14">All users</h5>
                        <h4 class="mb-0">{{ $users }}</h4>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-8">
                       <a href="{{ route('user') }}"> <span class="font-13">See all</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->

     <div class="col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="action-icon badge badge badge-success-inverse mr-0"><i class="fa fa-shopping-bag"></i></span>
                    </div>
                    <div class="col-7 text-right">
                        <h5 class="card-title font-14">All Products</h5>
                        <h4 class="mb-0">{{ $products }}</h4>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-8">
                       <a href="{{ route('product') }}"> <span class="font-13">See all</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

     <div class="col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="action-icon badge badge-warning-inverse mr-0"><i class="fa fa-folder"></i></span>
                    </div>
                    <div class="col-7 text-right">
                        <h5 class="card-title font-14">All Categories</h5>
                        <h4 class="mb-0">{{ $categories }}</h4>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-8">
                       <a href="{{ route('category.index') }}"> <span class="font-13">See all</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

     <div class="col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-5">
                        <span class="action-icon badge badge-secondary-inverse mr-0"><i class="fa fa-cart-arrow-down"></i></span>
                    </div>
                    <div class="col-7 text-right">
                        <h5 class="card-title font-14">All Orders</h5>
                        <h4 class="mb-0">{{ $orders }}</h4>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row align-items-center">
                    <div class="col-8">
                       <a href="{{ route('order.listing') }}"> <span class="font-13">See all</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
