<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Zone One - User Area</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('philbert/favicon.ico')}}">
    <link rel="icon" href="{{asset('philbert/favicon.ico')}}" type="image/x-icon">
    <!-- Chart JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
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
                                            <a href="{{route('home')}}" class="btn btn-primary btn-anim"><i
                                                        class="zmdi zmdi-apps"></i><span
                                                        class="btn-text">Dashboard</span></a>

                                            <a href="{{route('user.index')}}" class="btn btn-primary btn-anim"><i
                                                        class="fa fa-users"></i><span
                                                        class="btn-text">Manage Users</span></a>

                                            <a href="{{route('product.index')}}" class="btn btn-primary btn-anim"><i
                                                        class="fa fa-shopping-bag"></i><span
                                                        class="btn-text">Manage Product</span></a>

                                            <a href="{{route('transaction.index')}}" class="btn btn-primary btn-anim"><i
                                                        class="zmdi zmdi-money-box"></i><span
                                                        class="btn-text">Transaction</span></a>
                                            <a href="{{route('review.index')}}" class="btn btn-primary btn-anim"><i
                                                        class="zmdi zmdi-star"></i><span
                                                        class="btn-text">Review</span></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Grafik Penjualan</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <canvas id="chart_1" height="100"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Top Product</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <canvas id="chart_2" height="100"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>
    var url = "{{route('sales')}}";
    var day = new Array();
    var omzet = new Array();

    var url1 = "{{route('topProduct')}}";
    var sales = new Array();
    var product = new Array();
    $(document).ready(function(){
        $.get(url, function(response){
            response.forEach(function(data){
                day.push(data.day);
                omzet.push(data.omzet);

            });
            var ctx1 = document.getElementById("chart_1").getContext("2d");

            var data1 = {
                labels: day,
                datasets: [
                    {
                        backgroundColor: "rgba(46,205,153,.6)",
                        borderColor: "rgba(46,205,153,.6)",
                        pointBorderColor: "rgba(46,205,153,.6)",
                        pointHighlightStroke: "rgba(46,205,153,.6)",
                        data: omzet
                    }
                ]
            };

            var areaChart = new Chart(ctx1, {
                type: "line",
                data: data1,

                options: {
                    tooltips: {
                        mode: "label"
                    },
                    elements: {
                        point: {
                            hitRadius: 90
                        }
                    },

                    scales: {
                        yAxes: [{
                            scaleLabel: {
                                display: true,
                                labelString: 'Omzet (dalam Juta)'
                            },
                            stacked: true,
                            gridLines: {
                                color: "rgba(135,135,135,0)",
                            },
                            ticks: {
                                fontFamily: "Poppins",
                                fontColor: "#878787"
                            }
                        }],
                        xAxes: [{
                            scaleLabel: {
                                display: true,
                                labelString: 'Waktu'
                            },
                            stacked: true,
                            gridLines: {
                                color: "rgba(135,135,135,0)",
                            },
                            ticks: {
                                fontFamily: "Poppins",
                                fontColor: "#878787"
                            }
                        }]
                    },
                    animation: {
                        duration: 3000
                    },
                    responsive: true,
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        backgroundColor: 'rgba(33,33,33,1)',
                        cornerRadius: 0,
                        footerFontFamily: "'Poppins'"
                    }

                }
            });
        });

        $.get(url1, function(response){
            response.forEach(function(data){
                sales.push(data.sales);
                product.push(data.product);

            });
            var ctx6 = document.getElementById("chart_2").getContext("2d");
            var data6 = {
                labels: product,
                datasets: [
                    {
                        data:sales,
                        backgroundColor: [
                            "rgba(46,205,153,.6)",
                            "rgba(240,197,65,.6)",
                            "rgba(78,157,230,.6)"
                        ],
                        hoverBackgroundColor: [
                            "rgba(46,205,153,.6)",
                            "rgba(240,197,65,.6)",
                            "rgba(78,157,230,.6)"
                        ]
                    }]
            };

            var pieChart  = new Chart(ctx6,{
                type: 'pie',
                data: data6,
                options: {
                    animation: {
                        duration:	3000
                    },
                    responsive: true,
                    legend: {
                        labels: {
                            fontFamily: "Poppins",
                            fontColor:"#878787"
                        }
                    },
                    tooltip: {
                        backgroundColor:'rgba(33,33,33,1)',
                        cornerRadius:0,
                        footerFontFamily:"'Poppins'"
                    },
                    elements: {
                        arc: {
                            borderWidth: 0
                        }
                    }
                }
            });
        });
    });
</script>
</body>
</html>