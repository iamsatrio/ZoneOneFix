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
					  <h5 class="txt-dark">Payment</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>apps</span></a></li>
						<li class="active"><span>payment</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="mail-box">
										<div class="row">
											<aside class="col-lg-3 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													
												</div>
												<ul class="inbox-nav mb-30">
													<li class="active">
														<a href="#"><i class="zmdi zmdi-inbox"></i> Payment Box <span class="label label-danger ml-10">2</span></a>
													</li>
												</ul>
												<h6 class="pl-15 mb-20">Labels</h6>
												<ul class="inbox-nav mb-30">
													<li> <a href="#"> <i class=" fa fa-stop txt-danger"></i> Payment </a> </li>
													<li> <a href="#"> <i class=" fa fa-stop txt-success"></i> Payment </a> </li>
													<li> <a href="#"> <i class=" fa fa-stop txt-info "></i> Payment </a>
													</li>
													<li> <a href="#"> <i class=" fa fa-stop txt-warning "></i> Payment </a>
													</li>
													<li> <a href="#"> <i class=" fa fa-stop txt-primary "></i> Payment </a>
													</li>
												</ul>
											</aside>
											
											<aside class="col-lg-9 col-md-8 pl-0">
												<div class="panel panel-refresh pa-0">
													<div class="refresh-container">
														<div class="la-anim-1"></div>
													</div>
													<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
														<div class="pull-left">
															<h6 class="panel-title txt-dark">Payment</h6>
														</div>
														<div class="pull-right">
															<form role="search" class="inbox-search inline-block pull-left mr-15">
																<div class="input-group">
																	<input name="example-input1-group2" class="form-control" placeholder="Search" type="text">
																	<span class="input-group-btn">
																	<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
																	</span>
																</div>
															</form>
															<a href="#" class="pull-left inline-block refresh">
																<i class="zmdi zmdi-replay"></i>
															</a>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="panel-wrapper collapse in">
														<div class="panel-body inbox-body pa-0">
															<div class="mail-option pl-15 pr-15">
																<div class="chk-all">
																	<div class="checkbox checkbox-default inline-block">
																		<input type="checkbox" id="checkbox051"/>
																		<label for="checkbox051"></label>
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  all" aria-expanded="false">
																		All
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#"> None</a></li>
																			<li><a href="#"> Read</a></li>
																			<li><a href="#"> Unread</a></li>
																		</ul>
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  blue">
																		Move to
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#">Personal</a></li>
																			<li><a href="#">Social</a></li>
																			<li class="divider"></li>
																			<li><a href="#">Promotional</a></li>
																			<li class="divider"></li>
																			<li><a href="#">Updates</a></li>
																		</ul>
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  blue" aria-expanded="false">
																		More
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
																			<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
																			<li class="divider"></li>
																			<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
																		</ul>
																	</div>
																</div>
																<ul class="unstyled inbox-pagination">
																	<li><span>1-10 of 234</span></li>
																	<li>
																		<a class="pl-15 pr-15" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
																	</li>
																	<li>
																		<a href="#"><i class="fa fa-angle-right pagination-right"></i></a>
																	</li>
																</ul>
															</div>
															<div class="table-responsive mb-0">
																<table class="table table-inbox table-hover mb-0">
																	<tbody>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox012"/>
																					<label for="checkbox012"></label>
																				</div>
																				<a href="payment-detail"><i class="zmdi zmdi-star inline-block font-16"></i></a>
																			</td>
																			<td class="view-message  dont-show">Joojo Roz<span class="label label-warning pull-right">new</span></td>
																			<td class="view-message ">Payment : Apple Watch 4 40mm</td>
																			<td class="view-message  text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">9:55 AM</span>
																			</td>
																		</tr>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox012"/>
																					<label for="checkbox012"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			<td class="view-message  dont-show">Zelda Alq<span class="label label-danger pull-right">new</span></td>
																			<td class="view-message ">Payment : Apple iPhone X 256 GB</td>
																			<td class="view-message  text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">9:43 AM</span>
																			</td>
																		</tr>
																		<tr class="unread">
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox012"/>
																					<label for="checkbox012"></label>
																				</div>
																				<i class="zmdi zmdi-star inline-block font-16"></i>
																			</td>
																			<td class="view-message  dont-show">Salazar Z<span class="label label-success pull-right">new</span></td>
																			<td class="view-message ">Payment : Apple Watch 4 42mm,Apple iPhone 7 Bla..</td>
																			<td class="view-message  text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">9:27 AM</span>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</aside>
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
