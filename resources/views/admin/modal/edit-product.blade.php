<!--  Edit Client-->
<div id="edit-product-modal{{$data->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="oi oi-close"
                                                                                                  title="close"
                                                                                                  aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('product.update',$data) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                   value="{{ $data->name }}" required autofocus>

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
                            <input id="price" type="number"
                                   class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price"
                                   value="{{ $data->price}}" required min="0">

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
                            <input id="discount" type="number"
                                   class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}"
                                   value="{{ $data->discount}}" name="discount">

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
                            <input id="stock" type="number"
                                   class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                   value="{{ $data->stock}}" name="stock">

                            @if ($errors->has('stock'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('stock') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                        <div class="col-md-6">
                            <select name="category_id" id="category"
                                    class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}">
                                    @foreach($categories as $category)
                                        @if($data->category_id == $category->id)
                                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                        @else
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                            </select>

                            @if ($errors->has('category'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                        <div class="col-md-6">

                            <img src="{{asset('storage/'.$data->image)}}" alt="" width="30%"/>
                            <input id="image" type="file"
                                   class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                            {{-- <input type="file" class="my-pond" name="filepond"/> --}}

                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description"
                               class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text"
                                   class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                   name="description" value="{{ $data->description}}">

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image"
                               class="col-md-4 col-form-label text-md-right">{{ __('Product Images') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file"
                                   class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                   name="product_images[]" multiple>

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
                <button type="submit" class="btn btn-success">{{ __('Edit') }}</button>
                </form>
                {{-- <button type="button" class="btn btn-success">Save</button> --}}
            </div>
        </div>
    </div>
</div>
<!--  /Edit Client -->
