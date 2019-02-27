{{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      
      <ul class="navbar-nav ml-pull">
        <a href="{{ route('products') }}"><span class="navbar-text">ZoneOne.</span></a>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            
                <li class="nav-item pr-5">
                    <a href="mac" class="nav-link"><small>Mac</small></a>
                </li>
                <li class="nav-item pr-5">
                    <a href="#" class="nav-link"><small>iPad</small></a>
                </li>
                <li class="nav-item pr-5">
                    <a href="#" class="nav-link"><small>iPhone</small></a>
                </li>
                <li class="nav-item pr-5">
                    <a href="#" class="nav-link"><small>Watch</small></a>
                </li>
                <li class="nav-item pr-5">
                    <a href="#" class="nav-link"><small>Accessories</small></a>
                </li>

            </ul>
            <ul class="navbar-nav mr-pull">
                <li class="nav-item ">
                    @if (Cart::count() > 0 )

                    <a href="{{ route('cart.index') }}" class="nav-link"><small>Cart ({{ Cart::count()}})</small></a>
                    @else

                    <a href="{{ route('cart.index') }}" class="nav-link"><small>Cart</small></a>

                    @endif
                </li>
                @auth()
                @if(\Illuminate\Support\Facades\Auth::user()->role == 'super admin')
                <li class="nav-link hassubs"><small>Super</small>
                    <ul>
                        {{-- <li><a href="{{ route('user.index') }}">User</a></li> --}}
                        <li><a href="{{ route('dashboard-product') }}">Dashboard</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>

                    </ul>
                </li>
                @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                <li class="nav-link hassubs"><small>Admin</small>
                    <ul>    
                        {{-- <li><a href="{{ route('product.index') }}">Product</a></li> --}}
                        <li><a href="{{ route('dashboard-product') }}">Dashboard</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>

                    </ul>
                </li>
                @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'user')
                <li class="nav-link hassubs"><small>User</small>
                    <ul>
                        {{-- <li><a href="{{ route('product.index') }}">Product</a></li> --}}
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>

                    </ul>
                </li>
                @else
                
                @endif
                @endauth
                @guest()
                <a href="/login" class="nav-link"><small>Login</small></a>
                @endguest
            </ul>
        </div>
    </nav>
{{-- navbar --}}