<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        @if(Auth::user()->role == 'super admin')
        @elseif(Auth::user()->role == 'admin')

        @elseif(Auth::user()->role == 'user')
            <li>
                <a href="{{route('home')}}">
                    <div class="pull-left"><i class="zmdi zmdi-home mr-20"></i><span
                                class="right-nav-text">Home </span></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('products')}}">
                    <div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span
                                class="right-nav-text">Main Menu </span></div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('order.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Order History </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="{{route('transaction.index')}}">
                    <div class="pull-left"><i class="zmdi zmdi-money-box mr-20"></i><span class="right-nav-text">Transaction History </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
        @endif
        <li>
            <hr class="light-grey-hr mb-10"/>
        </li>
        <li>
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                <div class="pull-left"><i class="zmdi zmdi-power mr-20"></i><span
                            class="right-nav-text">Log Out </span></div>
                <div class="clearfix"></div>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>