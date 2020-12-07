
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
                <div class="media">
                    <img class="mr-3 rounded-circle" src="{{ asset('backend/assets/images/crypto/bitcoin.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mb-2">Bitcoin</h5>
                        <p class="mb-0">1 BTC = 49 USD</p>
                    </div>
                    <img class="action-bg rounded-circle" src="{{ asset('backend/assets/images/crypto/1.png') }}" alt="Generic placeholder image">
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
    <!-- Start col -->
    <div class="col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <img class="mr-3 rounded-circle" src="{{ asset('backend/assets/images/crypto/ethereum.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mb-2">Ethereum</h5>
                        <p class="mb-0">1 ETC = 5.69 USD</p>
                    </div>
                    <img class="action-bg rounded-circle" src="{{ asset('backend/assets/images/crypto/2.png') }}" alt="Generic placeholder image">
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
    <!-- Start col -->
    <div class="col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <img class="mr-3 rounded-circle" src="{{ asset('backend/assets/images/crypto/ripple.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mb-2">Ripple</h5>
                        <p class="mb-0">1 RPC = 0.96 USD</p>
                    </div>
                    <img class="action-bg rounded-circle" src="{{ asset('backend/assets/images/crypto/3.png') }}" alt="Generic placeholder image">
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
    <!-- Start col -->
    <div class="col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="media">
                    <img class="mr-3 rounded-circle" src="{{ asset('backend/assets/images/crypto/bcc.png') }}" alt="Generic placeholder image">
                    <div class="media-body">
                        <h5 class="mb-2">Bitcoin Cash</h5>
                        <p class="mb-0">1 BCC = 58.85 USD</p>
                    </div>
                    <img class="action-bg rounded-circle" src="{{ asset('backend/assets/images/crypto/4.png') }}" alt="Generic placeholder image">
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->


</div>
@endsection
