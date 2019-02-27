<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.head')
</head>

<body {{ Session::has('notification') ? 'data-notification' : '' }} data-notification-type='{{ Session::get('success') }}' data-notification-message='{{ json_encode(Session::get('message')) }}'>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-green">
		<!-- Top Menu Items -->
		@include('admin.layout.top-menu')
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		@include('admin.layout.left-sidebar')
		<!-- /Left Sidebar Menu -->
		
		<!-- Right Sidebar Menu -->
		@include('admin.layout.right-sidebar')
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
					  <h5 class="txt-dark">Dashboard Product</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li class="active"><span>Product</span></li>
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
									<h6 class="panel-title txt-dark" id="okkk">Product</h6>
								</div>
								<div class="pull-right">
									<a href="{{('dashboard-add-product')}}" class="btn btn-primary m-1 mb-3" style="float: right;">Create Product </a>
								</div>							
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									@if (session('status'))
										
						                {{-- <div class="alert alert-success" role="alert">
						                    				                    
						                </div> --}}
						            @elseif (session('success'))
						            	{{-- <div class="alert alert-success alert-dismissable" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<i class="zmdi zmdi-check pr-15 pull-left"></i>
											<p class="pull-left">{{ session('success') }}</p> 
											<div class="clearfix"></div>
										</div> --}}
						                {{-- <div class="alert alert-success" role="success">
						                    {{ session('success') }}
						                </div> --}}
						            @endif
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_product" class="table table-hover table-bordered display mb-30" >
												<thead>
													<tr>
														<th rowspan="2">Product Name</th>
														<th colspan="3">Product Information</th>
														<th colspan="3">Action</th>
													</tr>
													<tr>
														<th>Price</th>
														<th>Image</th>
														<th>Description</th>
														<th>Show</th>
														<th>Edit</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>Product Name</th>
														<th>Price</th>
														<th>Image</th>
														<th>Description</th>
														<th>Show</th>
														<th>Edit</th>
														<th>Delete</th>
													</tr>
												</tfoot>
												<tbody>
												@foreach ($products as $data)
							                        <tr>
							                            <td>{{$data->name}}</td>
							                            <td>Rp. {{number_format($data->price - $data->discount)}}</td>
							                            {{-- <td>{{$data->image}}</td> --}}
							                            <td><img src="{{asset('storage/'.$data->image)}}" width="200px"></td>
							                            <td>{{$data->description}}</td>
							                            <td><a class="btn btn-success" href="{{route('product.show',$data->id)}}">Show</a></td>
							                            <td>
							                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#edit-product-modal{{$data->id}}">Edit</button>
							                                @include('admin.modal.edit-product')
							                            </td>
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
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; Philbert. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	@include('admin.layout.body')
</body>

</html>
