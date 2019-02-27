<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Zone One - Member Area</title>
    <meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('philbert/favicon.ico')}}">
    <link rel="icon" href="{{asset('philbert/favicon.ico')}}" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{asset('philbert/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>



    <!-- Custom CSS -->
    <link href="{{asset('philbert/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="{{route('home')}}">
                <img class="brand-img mr-10" src="{{asset('philbert/dist/img/logo.png')}}" alt="brand"/>
                <span class="brand-text">Zone One</span>
            </a>
        </div>
        <div class="form-group mb-0 pull-right">
            <span class="inline-block pr-10">Already have an account?</span>
            <a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="{{route('login')}}">Sign In</a>
        </div>
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Sign up to Zone One</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                </div>
                                <div class="form-wrap">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="name">Full Name</label>
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="email">Email address</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="password">Password</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="password-confirm">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox checkbox-primary pr-10 pull-left">
                                                <input id="checkbox_2" required="" type="checkbox">
                                                <label for="checkbox_2"> I agree to all <span class="txt-primary">Terms</span></label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info btn-success btn-rounded">sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{asset('philbert/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('philbert/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('philbert/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('philbert/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('philbert/dist/js/init.js')}}"></script>
</body>
</html>
