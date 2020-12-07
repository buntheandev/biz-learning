@extends('layouts.master')
@section('meta')
    <title>Create User</title>
@endsection
@section('content')
 <form class="form-validate" action="{{route('user.store')}}" method="POST" novalidate="novalidate">
    @csrf
    <div class="row">
        <!-- End col -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Create User</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="name">Name <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Your Name" value="{{old('name')}}">
                                    @error('name')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="{{old('email')}}">
                                     @error('email')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="password">Password <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password">
                                     @error('password')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="password">Confirm Password <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password again">

                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="button-list">
                                    <a href="{{route('user')}}" class="btn btn-danger "><i class="fa fa-mail-reply"></i> Back</a>
                                    <button type="submit" class="btn btn-primary "><i class="feather icon-save mr-2"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>
@endsection

