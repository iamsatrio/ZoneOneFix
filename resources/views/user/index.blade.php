<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Zone One - User Area</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('philbert/favicon.ico')}}">
    <link rel="icon" href="{{asset('philbert/favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap Dropify CSS -->
    <link href="{{asset('philbert/vendors/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="{{asset('philbert/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<div class="wrapper theme-1-active pimary-color-green">

    <!-- Top Menu Items -->
@include('user.top_menu')
<!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
@include('user.left_sidebar')
<!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
{{--@include('user.right_sidebar')--}}
<!-- /Right Sidebar Menu -->


    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Home</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}l">Home</a></li>

                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Quick Action</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <p class="text-muted">Select the <code>menu</code> below .</p>
                                        <div class="button-list mt-25">

                                            <a href="{{route('products')}}" class="btn btn-primary btn-anim"><i class="zmdi zmdi-apps"></i><span
                                                        class="btn-text">Main Menu</span></a>

                                            <a href="{{route('order.index')}}" class="btn btn-primary btn-anim"><i class="fa fa-shopping-bag"></i><span
                                                        class="btn-text">Order History</span></a>

                                            <a href="{{route('transaction.index')}}" class="btn btn-primary btn-anim"><i class="zmdi zmdi-money-box"></i><span
                                                        class="btn-text">Transaction History</span></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
    @include('footer')
    <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->
@include('layouts.js')

</body>
</html>