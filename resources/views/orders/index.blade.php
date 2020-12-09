@extends('layouts.master')
@section('meta')
    <title>Order Product</title>
@endsection
@section('content')
    <div class="col-lg-12 col-xl-12">
        <div class="card m-b-30">
            <div class="card-header">
                <h5 class="card-title">Products</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Start col -->
                   @foreach ($products as $item)
                   <div class="col-lg-2 col-xl-2">

                            <div class="product-bar m-b-30">
                                <div class="product-head">
                                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="product">
                                </div>
                                <div class="product-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-inline-block">
                                                <span class="text-uppercase font-12 f-w-6">{{ $item->quantity }}</span>
                                            </div>
                                            <div class="d-inline-block float-right">
                                                @if ($item->quantity >= 1)
                                                    <label class="text-success">in stock</label>
                                                @else
                                                    <label class="text-danger">Out stock</label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h6 class="mt-1 mb-3">{{ $item->name }}</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="text-left">
                                                <h5 class="f-w-7 mb-0"><sup class="font-14">$</sup>{{ number_format($item->price, 2) }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                @if ($item->quantity >=1 )
                                                    <a href="{{ route('order_submit', $item->id) }}" class="btn btn-primary-rgba font-18"><i class="fa fa-cart-plus"></i></a>
                                                @else
                                                    <a href="#" class="btn btn-primary-rgba font-18" onclick="confirm('Product stock out you can not order! please wait later ')"><i class="fa fa-cart-plus"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                   @endforeach
                </div>
                <!-- Start row -->
            </div>
        </div>
    </div>
@endsection
