<!--  Edit User-->
<div id="edit-banner-modal{{$data->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="oi oi-close" title="close" aria-hidden="true"></span></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('banner.update',$data) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                <div class="col-md-6">
                    <input type="file" id="input-file-now" class="dropify" name="image" required data-default-file="{{asset('storage/'.$data->image)}}"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $data->title}}" required autofocus>

                </div>
            </div>

            <div class="form-group row">
                <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <input id="desc" type="text" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" value="{{ $data->desc}}" required autofocus>

                </div>
            </div>
            
            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                <div class="col-md-6">
                    <input id="category" type="text" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ $data->category}}" required readonly autofocus>
                </div>
            </div>           

            <div class="form-group row">
                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('user_id') }}</label>

                <div class="col-md-6">
                    <input id="#" type="text" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="#" value="{{ $data->user->name}}" required readonly autofocus>
                    <input type="hidden" id="user_id" name="user_id" value="{{$data->user_id}}">
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