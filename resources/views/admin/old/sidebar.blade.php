{{-- sidebar --}}
 <style>
        .sidebar {
          margin: 0;
          padding: 0;
          width: 230px;
          position: fixed;
          height: 100%;
          overflow: auto;
        }

        .sidebar a {
          display: block;
          color: gray;
          padding: 16px;
          text-decoration: none;
        }
         
        .sidebar a.active {
          background-color: #2CA5D2;
          color: white;
        }

        .sidebar a:hover:not(.active) {
          background-color: #555;
          color: white;
        }

        div.content {
          margin-left: 230px;
          padding: 1px 16px;
          height: 1000px;
        }

        @media screen and (max-width: 700px) {
          .sidebar {
            width: 100%;
            height: auto;
            position: relative;
          }
          .sidebar a {float: left;}
          div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
          .sidebar a {
            text-align: center;
            float: none;
          }
        }
</style>
<div class="sidebar bg-dark text-white">
  <a class="" href="{{ route('index') }}">Dashboard Product</a>
  <a href="#news">Dashboard Banner</a>
  @if(\Illuminate\Support\Facades\Auth::user()->role == 'super admin')
    <a href="{{ route('user') }}">Dashboard User</a>  
  @endif
  <a href="#about">About</a>
</div>
{{-- sidebar --}}