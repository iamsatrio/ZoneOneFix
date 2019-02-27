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
@include('admin.new.layouts.top_menu')
<!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
@include('admin.new.layouts.left_sidebar')
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
                    <h5 class="txt-dark">invoice</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="active"><span>invoice</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->
            <!-- Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Invoice</h6>
                            </div>
                            <div class="pull-right">
                                @if($transaction->status == 'Confirmed')
                                    <h2 class="txt-primary head-font capitalize-font mb-5">{{$transaction->status}}</h2>
                                @elseif($transaction->status == 'Paid')
                                    <h2 class="txt-success head-font capitalize-font mb-5">{{$transaction->status}}</h2>
                                    <br>
                                @else
                                    <h2 class="txt-danger head-font capitalize-font mb-5">{{$transaction->status}}</h2>
                                    <br>
                                @endif
                                <h6 class="txt-dark">Order # {{$transaction->code}}</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <span class="txt-dark head-font inline-block capitalize-font mb-5">Billed to:</span>
                                        <address class="mb-15">
                                            <span class="address-head mb-5">{{$transaction->shipment->name}}</span>
                                            {{$transaction->shipment->address}} <br>
                                            Desa {{$transaction->shipment->village->name}} <br>
                                            Kecamatan {{$transaction->shipment->district->name}} <br>
                                            Kota / Kab. {{$transaction->shipment->regency->name}} <br>
                                            {{$transaction->shipment->province->name}} <br>
                                            {{$transaction->zipcode}} <br>
                                            Telepon : {{$transaction->shipment->phone}}
                                        </address>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <address>
                                            <span class="txt-dark head-font capitalize-font mb-5">order date:</span><br>
                                            {{date("d F Y", strtotime($transaction->created_at))}}<br><br>
                                        </address>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <address>
                                            <span class="txt-dark head-font capitalize-font mb-5">Payment Method:</span>
                                            <br>
                                            {{$transaction->payment_method}}<br>
                                            {{$transaction->shipment->email}}
                                        </address>
                                    </div>
                                </div>

                                <div class="seprator-block"></div>

                                <div class="invoice-bill-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Item</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-center">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($details as $detail)
                                                <tr>
                                                    <td>{{$detail->product->name}}</td>
                                                    <td class="text-right">Rp. {{number_format($detail->price)}}</td>
                                                    <td class="text-center">{{$detail->qty}}</td>
                                                    <td class="text-right">Rp. {{number_format($detail->subtotal)}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <th colspan="3"><h6>Grand Total</h6></th>
                                            <th class="text-right"><h6>
                                                    Rp. {{number_format($transaction->total+$transaction->shipment->shipping_cost)}}</h6>
                                            </th>
                                            </tfoot>
                                            <tfoot>
                                            <th colspan="3"><h6>Delivery Fee</h6></th>
                                            <th class="text-right"><h6>
                                                    Rp. {{number_format($transaction->shipment->shipping_cost)}}</h6>
                                            </th>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="button-list pull-right">
                                        @if($transaction->status == 'Paid')
                                            <button class="btn btn-success mr-10" data-toggle="modal"
                                                    data-target="#responsive-modal">
                                                Show Payment Proof
                                            </button>
                                            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog"
                                                 aria-labelledby="myModalLabel" aria-hidden="true"
                                                 style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                            <h5 class="modal-title">Payment proof for invoice
                                                                # {{$transaction->code}}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <img src="{{asset('storage/'.$transaction->payment_proof)}}"
                                                                     alt="payment proof" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="" class="btn btn-primary" onclick="event.preventDefault();
                                                                    document.getElementById('confirm').submit();">
                                                                Confirm
                                                            </a>
                                                            <a href="" class="btn btn-danger" onclick="event.preventDefault();
                                                                    document.getElementById('decline').submit();">
                                                                Decline
                                                            </a>
                                                            <form action="{{route('transaction.update',$transaction)}}"
                                                                  method="POST" id="confirm">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status" value="Confirmed">
                                                            </form>
                                                            <form action="{{route('transaction.update',$transaction)}}"
                                                                  method="POST" id="decline">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status" value="Declined">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <button type="button" class="btn btn-primary btn-outline btn-icon left-icon"
                                                onclick="javascript:window.print();">
                                            <i class="fa fa-print"></i><span> Print</span>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
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