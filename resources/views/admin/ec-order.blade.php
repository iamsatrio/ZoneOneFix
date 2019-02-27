<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.head')
</head>

<body>
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
					  <h5 class="txt-dark">product orders</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>e-commerce</span></a></li>
						<li class="active"><span>product-orders</span></li>
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
											<table class="table display responsive product-overview mb-30" id="datable_order_history">
												<thead>
													<tr>
														<th>Name</th>
														<th>Order ID</th>
														<th>Photo</th>
														<th>Product</th>
														<th>Quantity</th>
														<th>Date</th>
														<th>Status</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="txt-dark">Madalyn Sandy</td>
														<td class="txt-dark">#85457898</td>
														<td>
															<img src="dist/img/chair.jpg" alt="iMac" width="80">
														</td>
														<td>Square Chair</td>
														<td>20</td>
														<td>10-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Evie Ono</td>
														<td class="txt-dark">#85457897</td>
														<td>
															<img src="dist/img/chair2.jpg" alt="iPhone" width="80">
														</td>
														<td>Semi Circle Chair</td>
														<td>15</td>
														<td>09-10-2016</td>
														<td>
															<span class="label label-warning font-weight-100">Pending</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Masse Sarah</td>
														<td class="txt-dark">#85457896</td>
														<td>
															<img src="dist/img/chair3.jpg" alt="apple_watch" width="80">
														</td>
														<td>Rounded Chair</td>
														<td>10</td>
														<td>08-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Rascon Sandy</td>
														<td class="txt-dark">#85457895</td>
														<td>
															<img src="dist/img/chair4.jpg" alt="mac_mouse" width="80">
														</td>
														<td>Wooden chair</td>
														<td>15</td>
														<td>02-10-2016</td>
														<td>
															<span class="label label-default font-weight-100">Failed</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Mitsuko Heid</td>
														<td class="txt-dark">#85457894</td>
														<td>
															<img src="dist/img/chair.jpg" alt="iMac" width="80">
														</td>
														<td>Rounded Chair</td>
														<td>20</td>
														<td>08-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Jonnie Metoyer</td>
														<td class="txt-dark">#85457893</td>
														<td>
															<img src="dist/img/chair2.jpg" alt="iPhone" width="80">
														</td>
														<td>Wooden Chair</td>
														<td>24</td>
														<td>06-10-2016</td>
														<td>
															<span class="label label-warning font-weight-100">Pending</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Ezequiel Merideth</td>
														<td class="txt-dark">#85457892</td>
														<td>
															<img src="dist/img/chair3.jpg" alt="apple_watch" width="80">
														</td>
														<td>Square Chair</td>
														<td>30</td>
														<td>05-10-2016</td>
														<td>
															<span class="label label-success font-weight-100">Paid</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
													<tr>
														<td class="txt-dark">Angelic Lauver</td>
														<td class="txt-dark">#85457891</td>
														<td>
															<img src="dist/img/chair4.jpg" alt="mac_mouse" width="80">
														</td>
														<td>Semi Circle Chair</td>
														<td>28</td>
														<td>01-10-2016</td>
														<td>
															<span class="label label-default font-weight-100">Failed</span>
														</td>
														<td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
													</tr>
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
