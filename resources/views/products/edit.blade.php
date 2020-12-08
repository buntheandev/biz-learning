@extends('layouts.master')
@section('meta')
    <title>edit Product</title>
@endsection
@section('css')

    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/flag-icon.min.css') }}">
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #0080ff;
            color: #ffffff;
            border: none;
            border-radius: 50px;
            cursor: default;
            float: left;
            margin-right: 5px;
            margin-top: 5px;
            padding: 2px 10px;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #ffffff;
            margin-right: 5px;
        }
        img.product-image{
            width: 200px;
        }
    </style>
@endsection
@section('content')
 <form class="form-validate" action="{{route('product.update', $product->id)}}" method="POST" novalidate="novalidate" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <!-- End col -->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Product</h5>
                        </div>
                        <div class="card-body">
                            @if ( Session::has('success') )
                                <div class="alert-list">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Well Done!</strong> You have updated product successful!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="name">Product Name <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Product Name" value="{{ $product->name }}">
                                    @error('name')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="price">Product Price <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                   <input type="number" value="{{ $product->price }}" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="$ 0.00" style="text-align: right;">
                                    @error('price')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="cost_of_good">Cost of Good <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                   <input type="number" class="form-control @error('cost_of_good') is-invalid @enderror" id="cost_of_good" name="cost_of_good" value="{{ $product->cost_of_good }}" style="text-align: right;">
                                    @error('cost_of_good')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="quantity">Product quantity <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                   <input type="number" value="{{ $product->quantity }}" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" placeholder="0" style="text-align: right;">
                                    @error('quantity')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="description">Product Description <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                   <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Description">{{ $product->description }}</textarea>
                                     @error('description')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="email">Product Category <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                   <select class="select2-multi-select form-control" id="category" name="categories[]" multiple="multiple">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                   </select>
                                     @error('description')
                                           <span class="text-danger">
                                                {{ $message }}
                                           </span>
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="image">Product Image <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <img class="card-img-top product-image" id="profile" src="{{ asset($item->image) }}">
                                    <input type="file" name="image" id="image" class="ima-pro" onchange="preview(event)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="button-list">
                                    <a href="{{route('product')}}" class="btn btn-danger "><i class="fa fa-mail-reply"></i> Back</a>
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
@section('js')
    <script src="{{ asset('backend/assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-tagsinput/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/custom-form-select.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap-inputmask/jquery.inputmask.bundle.min.js') }}"></script>

    <script>
        function preview(evt){
            let img   = document.getElementById('profile');
            img.src = URL.createObjectURL(evt.target.files[0]);
        }
        $(document).ready(function(){
            var select2 = $('#category').select2();
            var select_data = <?php echo json_encode($product->categories->pluck('id')->toArray() );?>;
            select2.val(select_data).trigger('change');
        });
    </script>

@endsection

