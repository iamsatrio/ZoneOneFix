<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Order History</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="active"><span>order history</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body row">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display responsive product-overview mb-30" id="myTable">
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Photo</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transactions as $transaction)
                                                @php
                                                $details = \App\DetailTransaction::where('transaction_id',$transaction->id)->get();
                                                foreach ($details as $detail) {
                                                @endphp
                                            <tr>
                                                <td class="txt-dark">#{{$transaction->code}}</td>
                                                <td>
                                                    <img src="{{asset('storage/'.$detail->product->image)}}" alt="mac_mouse" width="80">
                                                </td>
                                                <td><a href="{{route('product.show',$detail->product)}}">{{$detail->product->name}}</a></td>
                                                <td>{{$detail->qty}}</td>
                                                <td>{{date('d F Y H:i:s',strtotime($detail->created_at))}}</td>
                                            </tr>
                                                @php
                                                    }
                                                @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
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