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
					  <h5 class="txt-dark">Dashboard User</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li class="active"><span>User</span></li>
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
									<h6 class="panel-title txt-dark">User</h6>
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
														<th rowspan="2">User Name</th>
														<th colspan="2">User Information</th>
														<th colspan="3">Action</th>
													</tr>
													<tr>
														<th>Email</th>
														<th>Role</th>
														<th>Show</th>
														<th>Edit</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>User Name</th>
														<th>Price</th>
														<th>Image</th>
														<th>Show</th>
														<th>Edit</th>
														<th>Delete</th>
													</tr>
												</tfoot>
												<tbody>
												@foreach ($users as $data)
							                        <tr>
							                            <td>{{$data->name}}</td>
							                            <td>{{$data->email}}</td>
							                            {{-- <td>{{$data->image}}</td> --}}
							                            <td>{{$data->role}}</td>
							                            <td><button class="btn btn-success" type="button" data-toggle="modal" data-target="#show-user-modal{{$data->id}}">Show</button>
							                            </td>
							                                @include('admin.modal.show-user')
							                            <td>
							                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#edit-user-modal{{$data->id}}">Edit</button>
							                                @include('admin.modal.edit-user')
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
