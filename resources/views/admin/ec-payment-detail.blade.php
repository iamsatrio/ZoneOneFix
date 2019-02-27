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
					  <h5 class="txt-dark">payment-detail</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>apps</span></a></li>
						<li><a href="#"><span>payment</span></a></li>
						<li class="active"><span>detail</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view  pa-0">
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
															<div class="heading-inbox">
																<div class="container-fluid">
																	<div class="pull-left">
																		<div class="compose-btn">
																			<a class="btn btn-sm mr-10" href="#" data-toggle="modal" title="Compose"><i class="zmdi zmdi-chevron-left"></i></a>
																		</div>
																	</div>
																	<div class="pull-right text-right">
																		<button class="btn btn-sm mr-10" title="" type="button" ><i class="zmdi zmdi-print"></i> </button>
																		<button class="btn btn-sm mr-10" title=""><i class="zmdi zmdi-delete"></i></button>
																		<div class="inline-block dropdown">
																			<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more"></i></a>
																			<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Mark as Unread</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Mark as Important</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Report Spam</a></li>
																			</ul>
																		</div>
										
																	</div>
																</div>
																<hr class="light-grey-hr mt-10 mb-15"/>
																<div class="container-fluid mb-20">	
																	<h4 class="weight-500"> Payment : Apple iPhone X 256 GB</h4>
																</div>	
															</div>
															<div class="sender-info">
																<div class="container-fluid">
																	<div class="sender-img-wrap pull-left mr-20">
																		<img class="sender-img" alt="user" src="{{asset('img/user1.png')}}">
																	</div>
																	<div class="sender-details   pull-left">
																		<span class="capitalize-font pr-5 txt-dark block font-15 weight-500 head-font">John Doe</span>
																		<span class="block">
																			to
																			<span>me</span>
																		</span>	
																	</div>	
																	<div class="pull-right">
																		<div class="inline-block mr-5">
																			<span class="inbox-detail-time-1 font-12">10:06 AM</span>
																			<span class="inbox-detail-time-2 font-12 inline-block">(2 hours ago)</span>
																		</div>
																		<div class="inline-block dropdown">
																			<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi   zmdi-more-vert"></i></a>
																			<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Reply</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Forward</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</div>
															<div class="container-fluid view-mail mt-20">
																<div class="panel panel-default panel-tabs card-view" style="min-height: 700px">
																	<div class="panel-heading">
																		<div class="pull-left">
																			<h6 class="panel-title txt-dark">Payment</h6>
																		</div>
																		<div class="pull-right">
																			<div  class="tab-struct custom-tab-1">
																				<ul role="tablist" class="nav nav-tabs" id="myTabs_9">
																					<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_9" href="#payment-detail">Payment Details</a></li>
																					<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_9" role="tab" href="#metadata" aria-expanded="false">Metadata</a></li>
																					<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_9" role="tab" href="#card" aria-expanded="false">Card</a></li>
																					
																				</ul>
																			</div>	
																		</div>
																		
																		<div class="clearfix"></div>
																	</div>
																	<div class="panel-wrapper collapse in">
																		<div class="panel-body">
																			<div class="tab-content" id="myTabContent_9">
																				<div  id="payment-detail" class="tab-pane fade active in" role="tabpanel">
																					<div class="col-md-12 text-left">
																						<p class="">ID: ch_1B7966JfdphtrGE89</p>
																						<p class="">Amount: Rp.7.690.569</p>
																						<p class="">Fee: Rp.5.060</p>
																					 	<p class="">Date: 2019/02/18 03:50:53</p>
																					 	<p class="">Description: Order</p>
																					</div>
																					<div class="col-md-6">
																						{{-- <p class="text-left">Center aligned text.</p> --}}
																					</div>
																				</div>
																				<div id="metadata" class="tab-pane fade" role="tabpanel">
																					<div class="col-md-12 text-left">
																						<p>Meta Data : 1</p>
																						<p>Meta Data : 1</p>
																						<p>Meta Data : 1</p>
																					</div>
																					<div class="col-md-6">
																						{{-- <p class="text-left">Center aligned text.</p> --}}
																					</div>
																				</div>
																				<div id="card" class="tab-pane fade" role="tabpanel">
																					<div class="col-md-6 text-left">
																						<p class="">ID: card_1B7966Jfdpht7GE89</p>
																						<p class="">Name: Salazar</p>
																						<p class="">Number: ....4242</p>
																					 	<p class="">Fingerprint: zxccdllkgtot</p>
																					 	<p class="">Expires: 4/2020</p>
																					 	<p class="">Type: visa Credit Card</p>
																					</div>
																					<div class="col-md-6 text-left">
																						{{-- <p class="text-left">Center aligned text.</p> --}}
																						<p class="">Address: address st </p>
																					 	<p class="">&nbsp city,prov,postal</p>
																						<p class="">Origin: United States</p>
																						<p class="">CVC Check: </p>
																					 	<p class="">Street Check: </p>
																					 	<p class="">Zip Check: </p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<hr class="light-grey-hr mt-20 mb-20"/>
															<div class="container-fluid attachment-mail mt-40 mb-40">
																<div class="form-actions">
																	<button type="submit" class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Confirm</span></button>
																	<button type="button" class="btn btn-warning pull-left">Cancel</button>
																	<div class="clearfix"></div>
																</div>
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
