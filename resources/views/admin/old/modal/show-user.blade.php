<!--  Show User-->
<div id="show-user-modal{{$data->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="oi oi-close" title="close" aria-hidden="true"></span></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('product.update',$data) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $data->name }}" required disabled="true" autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>   
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $data->email}}" required disabled="truer" autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                <div class="col-md-6">
                    <select name="role" id="" class="form-control" disabled="true">                        
                        <option @if ( $data->role == "super admin" ) selected="true" @endif value="Super Admin">Super Admin</option>
                        <option @if ( $data->role == "admin" ) selected="true" @endif value="Admin">Admin</option>
                        <option @if ( $data->role == "user" ) selected="true" @endif value="User">User</option>
                    </select>

                    @if ($errors->has('role'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                </div>
            </div>           
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
        {{-- <button type="button" class="btn btn-success">Save</button> --}}
      </div>
    </div>
  </div>
</div>
<!--  /Edit Client -->
