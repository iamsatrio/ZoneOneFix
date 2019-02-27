<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <style>
      /* Make the image fully responsive */
      .carousel-inner img {
        width: 100%;
        height: 100%;
      }
    </style>
  </head>
  <body>
    
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- navbar --}}
    
    {{-- carousel --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/home_slider_1.jpg" alt="apple">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Apple Mouse</h5>
                    <p>its expensive bitch</p>
                </div>
            </div>
            <div class="carousel-item">
              <img src="img/home_slider_1.jpg" alt="apple">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Apple</h5>
                    <p>expensive...</p>
                </div>
            </div>
            <div class="carousel-item">
              <img src="img/home_slider_1.jpg" alt="apple">
              <div class="carousel-caption d-none d-md-block">
                    <h5>New Apple Mouse</h5>
                    <p>so expensive.</p>
                </div>
            </div>
        </div>
          
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    {{-- carousel --}}

    {{-- product --}}
    <div class="products">
        <div class="container">
            <h2>Product</h2>
            <div class="row">
                <div class="col">
                    <div class="product_grid">

                        @foreach($products as $data)
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('storage/'.$data->image)}}" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="{{route('product.show',$data->id)}}">{{$data->name}}</a></div>
                                <div class="product_price">Rp.{{number_format($data->price)}}</div>
                            </div>
                        </div>
                        @endforeach

                    </div>                        
                </div>
            </div>
        </div>
    </div>
    {{-- product --}}


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
  </body>
</html>