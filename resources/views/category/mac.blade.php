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
    <link rel="stylesheet" href="{{asset('css/categories.css')}}">
    <link rel="stylesheet" href="{{asset('css/categories_responsive.css')}}">
  </head>
  <body>
    
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      
      <ul class="navbar-nav ml-pull">
        <a href="{{-- {{route('home')}} --}}/"><span class="navbar-text">ZoneOne.</span></a>
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
                    <a href="ipad" class="nav-link"><small>iPad</small></a>
                </li>
                <li class="nav-item pr-5">
                    <a href="iphone" class="nav-link"><small>iPhone</small></a>
                </li>
                <li class="nav-item pr-5">
                    <a href="watch" class="nav-link"><small>Watch</small></a>
                </li>
                <li class="nav-item pr-5">
                    <a href="#" class="nav-link"><small>Accessories</small></a>
                </li>

            </ul>
            <ul class="navbar-nav mr-pull">
                <li class="nav-item ">
                  <a href="#" class="nav-link"><small>Cart (0)</small></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"><small>Login</small></a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- navbar --}}

    {{-- banner --}}
    
    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url({{asset('img/category.jpg')}})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Mac<span>.</span></div>
                                <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- banner --}}

    {{-- product --}}
    <div class="products">
        <div class="container">
            <h2>Product</h2>
            <div class="row">
                <div class="col">
                    <div class="product_grid">

                        <!-- Product -->
                        <div class="product" >
                            <div class="product_image"><img src="{{asset('img/product_3.jpg')}}" alt=""></div>
                            <div class="product_extra product_new"><a href="product"{{-- {{ route('product') }} --}}">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product">Macbook</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('img/product_5.jpg')}}" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Macbook Air</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('img/product_4.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Macbook Pro</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                           <div class="product_image"><img src="{{asset('img/product_1.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Macbook</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('img/product_2.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('img/product_3.jpg')}}" alt=""></div>
                            <div class="product_extra product_hot"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('img/product_2.jpg')}}" alt=""></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Macbook</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{asset('img/product_5.jpg')}}" alt=""></div>
                            <div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">Smart Phone</a></div>
                                <div class="product_price">$670</div>
                            </div>
                        </div>

                    </div>                        
                </div>
            </div>
        </div>
    </div>
    {{-- product --}}

    {{-- footer --}}

    
    
    {{-- footer --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/product.js')}}"></script>
  </body>
</html>