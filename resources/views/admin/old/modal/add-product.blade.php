<!--  Edit Client-->
<div id="add-product-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="oi oi-close" title="close" aria-hidden="true"></span></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                <div class="col-md-6">
                    <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required min="0">

                    @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>

                <div class="col-md-6">
                    <input id="discount" type="number" class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" required name="discount">

                    @if ($errors->has('discount'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('discount') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                <div class="col-md-6">
                    <input id="stock" type="number" class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}" required name="stock">

                    @if ($errors->has('stock'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('stock') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required name="image">
                    {{-- <input type="file" class="my-pond" name="filepond"/> --}}

                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required name="description">

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Product Images') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required name="product_images[]" multiple>

                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">{{ __('Create') }}</button>
        </form>
        {{-- <button type="button" class="btn btn-success">Save</button> --}}
      </div>
    </div>
  </div>
</div>
<!--  /Edit Client -->
