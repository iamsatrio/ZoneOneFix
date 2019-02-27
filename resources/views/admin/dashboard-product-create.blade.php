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
						  <h5 class="txt-dark">add-products</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-products</span></li>
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
									<div class="panel-body">
										<div class="form-wrap">
											<form action="{{ route('product.store') }}" method="POST">
											 @csrf
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about product</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Product Name</label>
															<input type="text" id="name" name="name" class="form-control" placeholder="Apple Watch 2 38mm" required>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Stock</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-tag"></i></div>
																<input type="text" class="form-control" id="stock" name="stock" placeholder="5" required>
															</div>
														</div>
													</div>
													{{-- <div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Sub text</label>
															<input type="text" id="lastName" class="form-control" placeholder="globe type chair for rest">
														</div>
													</div> --}}
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="">Rp.</i></div>
																<input type="text" class="form-control" id="price" name="price" placeholder="1530000" required>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Discount</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-cut"></i></div>
																<input type="text" class="form-control" id="discount" name="discount" placeholder="36%" required>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- Row -->
												<div class="row">
													
													{{-- <div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Category</label>
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div> --}}
													<!--/span-->
													{{-- <div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Status</label>
															<div class="radio-list">
																<div class="radio-inline pl-0">
																	<div class="radio radio-info">
																		<input type="radio" name="radio" id="radio1" value="option1">
																		<label for="radio1">Published</label>
																	</div>
																</div>
																<div class="radio-inline">
																	<div class="radio radio-info">
																		<input type="radio" name="radio" id="radio2" value="option2">
																		<label for="radio2">Draft</label>
																	</div>
																</div>
															</div>
														</div>
													</div> --}}
													<!--/span-->
												</div>
												<!--/row-->
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Description</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" id="description" name="description" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
														</div>
													</div>
												</div>
												<!--/row-->
												{{-- <div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Meta Title</label>
															<input type="text" class="form-control">
														</div>
													</div> --}}
													<!--/span-->
													{{-- <div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Meta Keyword</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div> --}}
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-lg-12">
														<div class="img-upload-wrap">
															<img class="img-responsive" src="dist/img/chair.jpg" alt="upload_img"> 
														</div>
														<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
															<input type="file" class="upload" id="image" name="image">
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload multiple image</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-lg-12">
														<div class="img-upload-wrap">
															<img class="img-responsive" src="dist/img/chair.jpg" alt="upload_img"> 
														</div>
														<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new multiple image</span>
															<input type="file" class="upload" id="image" name="product_images[]" multiple>
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<div class="form-actions">
													<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
													<button type="button" class="btn btn-warning pull-left">Cancel</button>
													<div class="clearfix"></div>
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
