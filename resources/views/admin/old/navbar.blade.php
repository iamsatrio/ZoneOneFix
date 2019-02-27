{{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      
      <ul class="navbar-nav ml-pull">
        <a href="{{ route('products') }}"><span class="navbar-text">ZoneOne.</span></a>
      </ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="position: absolute;float: right;right: 10px;">
            <ul class="navbar-nav">
                <li class="nav-item ">
                  <a href="{{ route('cart.index') }}" class="nav-link"><small>Cart (0)</small></a>
                </li>
                @auth()
                @if(\Illuminate\Support\Facades\Auth::user()->role == 'super admin')
                <li class="nav-link hassubs"><small>Super</small>
                    <ul>
                        {{-- <li><a href="{{ route('user.index') }}">User</a></li> --}}
                        <li><a href="{{ route('index') }}">Dashboard</a></li>
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