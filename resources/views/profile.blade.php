<div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
            </div>
            <div class="modal-body">
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pa-0">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-wrap">
                                            <form action="{{route('profile', Auth::user()->id)}}" id="edit-profile-form" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-body overflow-hide">
                                                    <div class="form-group">
                                                        <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="{{asset('storage/'.Auth::user()->photo)}}" name="photo"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="name">Full Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="{{Auth::user()->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="email">Email address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                            <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" value="{{Auth::user()->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="password">Password</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                            <input type="password" class="form-control" id="password" placeholder="Fill if you want to change your password" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label mb-10" for="confirm_passwordprofile.blade.php">Confirm Password</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirmation password" name="confirm_password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success waves-effect" onclick="event.preventDefault();
                                         document.getElementById('edit-profile-form').submit();">Save</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>