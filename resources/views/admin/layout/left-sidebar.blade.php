<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
	<ul class="nav navbar-nav side-nav nicescroll-bar">
		<li class="navigation-header">
			<span>Super Admin</span> 
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a href="{{route('dashboard-home')}}"><div class="pull-left"><i class="zmdi zmdi-home mr-20"></i><span class="right-nav-text">Home</span></div><div class="clearfix"></div></a>
		</li>
		<li>
			<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="dashboard_dr" class="collapse collapse-level-1">
				<li>
					<a class="active-page" href="{{route('dashboard-product')}}">Product</a>
				</li>
				<li>
					<a href="{{-- {{route('dashboard-banner')}} --}}">Banner</a>
				</li>
				<li>
					<a href="{{route('dashboard-user')}}">User</a>
				</li>
			</ul>
		</li>		
		<li><hr class="light-grey-hr mb-10"/></li>
		<li class="navigation-header">
			<span>e-commerce</span> 
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a href="order-history"><div class="pull-left"><i class="zmdi zmdi-money-box mr-20"></i><span class="right-nav-text">Order History</span></div><div class="clearfix"></div></a>
		</li>		
		<li>
			<a href="mail"><div class="pull-left"><i class="zmdi zmdi-email mr-20"></i><span class="right-nav-text">Mail</span></div><div class="clearfix"></div></a>
		</li>
		<li>
			<a href="payment"><div class="pull-left"><i class="zmdi zmdi-money-box mr-20"></i><span class="right-nav-text">Payment</span></div><div class="clearfix"></div></a>
		</li>
		<li>
			<a href="invoice-list"><div class="pull-left"><i class="zmdi zmdi-money-box mr-20"></i><span class="right-nav-text">Invoice</span></div><div class="clearfix"></div></a>
		</li>
		<li><hr class="light-grey-hr mb-10"/></li>
		<li class="navigation-header">
			<span>featured</span> 
			<i class="zmdi zmdi-more"></i>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Special Pages</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
				<li>
					<a href="blank.html">Blank Page</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#auth_dr">Authantication pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="auth_dr" class="collapse collapse-level-2">
						<li>
							<a href="login.html">Login</a>
						</li>
						<li>
							<a href="signup.html">Register</a>
						</li>
						<li>
							<a href="forgot-password.html">Recover Password</a>
						</li>
						<li>
							<a href="reset-password.html">reset Password</a>
						</li>
						<li>
							<a href="locked.html">Lock Screen</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="invoice_dr" class="collapse collapse-level-2">
						<li>
							<a href="invoice.html">Invoice</a>
						</li>
						<li>
							<a href="invoice-archive.html">Invoice Archive</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#error_dr">error pages<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="error_dr" class="collapse collapse-level-2">
						<li>
							<a href="404.html">Error 404</a>
						</li>
						<li>
							<a href="500.html">Error 500</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="gallery.html">Gallery</a>
				</li>
				<li>
					<a href="timeline.html">Timeline</a>
				</li>
				<li>
					<a href="faq.html">FAQ</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
		</li>
		<li>
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><div class="pull-left"><i class="zmdi zmdi-filter-list mr-20"></i><span class="right-nav-text">multilevel</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
			<ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
				<li>
					<a href="#">Item level 1</a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown level 2<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
						<li>
							<a href="#">Item level 2</a>
						</li>
						<li>
							<a href="#">Item level 2</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>
<!-- /Left Sidebar Menu -->
