
@extends('layouts.master')
@section('meta')
    <title>Admin Dashboard</title>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-xl-6">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-danger-inverse"><i class="fa fa-bar-chart"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Stock Value Qnantity</p>
                        <h5 class="mb-0">{{ $stock_value_quantity }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-6 col-xl-6">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-primary-inverse"><i class="fa fa-bank"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Stock Valeu</p>
                        <h5 class="mb-0">{{ number_format($stock_value, 2) }}$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-primary-inverse"><i class="fa fa-opencart"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Order Weekly</p>
                        <h5 class="mb-0">{{ $new_orders }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-danger-inverse"><i class="fa fa-dollar"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Sale Weekly</p>
                        <h5 class="mb-0">{{ number_format($sale_orders, 2 ) }}$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-warning-inverse"><i class="fa fa-dollar"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Total Cost of Goods</p>
                        <h5 class="mb-0">{{ number_format($cost_of_goods, 2) }}$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-success-inverse"><i class="fa fa-dollar"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Gross profits</p>
                        <h5 class="mb-0">{{ number_format($profits, 2) }}$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-primary-inverse"><i class="fa fa-opencart"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Order Daily</p>
                        <h5 class="mb-0">{{ $daily_new_orders }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-danger-inverse"><i class="fa fa-dollar"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Sale Daily</p>
                        <h5 class="mb-0">{{ number_format($daily_sale_orders, 2 ) }}$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-warning-inverse"><i class="fa fa-dollar"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Total Cost of Goods Daily</p>
                        <h5 class="mb-0">{{ number_format($daily_cost_of_goods, 2) }}$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-3 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <span class="align-self-center mr-3 action-icon badge badge-success-inverse"><i class="fa fa-dollar"></i></span>
                    <div class="media-body">
                        <p class="mb-0">Gross profits Daily</p>
                        <h5 class="mb-0">{{ number_format($daily_profits, 2) }}$</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
