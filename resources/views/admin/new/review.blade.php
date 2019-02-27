<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.new.layouts.head')
	<!-- Bootstrap Dropify CSS -->
		<link href="{{asset('philbert/vendors/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
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
					  <h5 class="txt-dark">Dashboard Review</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li class="active"><span>Review</span></li>
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
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Review</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									@if (session('status'))
						                <div class="alert alert-success" role="alert">
						                    {{ session('status') }}
						                </div>
						            @elseif (session('success'))
						                <div class="alert alert-success" role="success">
						                    {{ session('success') }}
						                </div>
						            @endif
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_product" class="table table-hover table-bordered display mb-30" >
												<thead>
													<tr>
														<th rowspan="2">Product</th>
														<th colspan="3">Review</th>
														<th colspan="1">Action</th>
													</tr>
													<tr>
														<th>Username</th>
														<th>Review</th>
														<th>Rating</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>Product</th>
														<th>Username</th>
														<th>Review</th>
														<th>Rating</th>
														<th>Delete</th>
													</tr>
												</tfoot>
												<tbody>
												@foreach ($review as $data)
							                        <tr>
							                            <td>{{$data->product->name}}</td>
							                            <td>{{$data->user->name}}</td>
							                            {{-- <td>{{$data->image}}</td> --}}
							                            <td>{{$data->review}}</td>
							                            <td>{{$data->rating}}</td>
							                            <td>
							                                <form action="{{route('product.destroy',$data->id)}}" method="POST">
							                                    @csrf
							                                    @method('DELETE')
							                                    <button type="submit" class="btn btn-danger">Delete</button>
							                                </form>
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
	@include('layouts.js')
	@include('admin.new.layouts.body')

</body>

</html>
