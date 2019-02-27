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
                    <h5 class="txt-dark">Transaction History</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li class="active"><span>transaction history</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <i class="zmdi zmdi-check pr-15 pull-left"></i>
                                    <p class="pull-left">{{ session('success') }}</p> 
                                    <div class="clearfix"></div>
                                </div>
                            @endif
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Invoice List</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="datable_1" class="table  display table-hover mb-30">
                                            <thead>
                                            <tr>
                                                <th>#Invoice</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>issue date</th>
                                                <th>View</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($transactions as $transaction)
                                            <tr>
                                                <td>#{{$transaction->code}}</td>
                                                <td>Rp. {{number_format($transaction->total+$transaction->shipment->shipping_cost)}}</td>
                                                <td>
                                                    @if($transaction->status == 'Confirmed')
                                                        <span class="label label-primary">{{$transaction->status}}</span>
                                                    @elseif($transaction->status == 'Paid')
                                                        <span class="label label-success">{{$transaction->status}}</span>
                                                    @elseif($transaction->status == 'Declined')
                                                        <span class="label label-danger">{{$transaction->status}}</span>
                                                    @else
                                                        <span class="label label-warning">{{$transaction->status}}</span>
                                                    @endif

                                                </td>
                                                <td>{{date('d F Y H:i:s',strtotime($transaction->created_at))}}</td>
                                                <td>
                                                    <a href="{{route('transaction.show',$transaction)}}">
                                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
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