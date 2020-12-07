@extends('layouts.master')
@section('meta')
    <title>create category</title>
@endsection
@section('content')
 <form class="form-validate" action="{{route('category.store')}}" method="POST" novalidate="novalidate">
    @csrf
    <div class="row">
        <!-- End col -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">category User</h5>
                        </div>
                        <div class="card-body">
                            @if ( Session::has('success') )
                                <div class="alert-list">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Well Done!</strong> You have add category successfully!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="name">Category Name <span class="text-danger">*</span></label>
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
                                <div class="button-list">
                                    <a href="{{route('category.index')}}" class="btn btn-danger "><i class="fa fa-mail-reply"></i> Back</a>
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

