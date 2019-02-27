<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('sublime/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/categories.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/categories_responsive.css')}}">
</head>
<body>

<div class="super_container">

@include('layouts.header')

<!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url({{asset('sublime/images/categories.jpg')}})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">{{$category}}<span>.</span></div>
                                <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis
                                        fermentum luctus.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Showing <span>12</span> results</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Sort by</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn"
                                                data-isotope-option='{ "sortBy": "original-order" }'>
                                                <span>Default</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                                <span>Price</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'>
                                                <span>Name</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                    @foreach($products as $data)
                        <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="{{asset('storage/'.$data->image)}}" alt=""></div>
                                @if($data->status == 'Sale')
                                    <div class="product_extra product_sale"><a href="categories.html">Sale</a></div>
                                @elseif($data->status == 'Hot')
                                    <div class="product_extra product_hot"><a href="categories.html">Hot</a></div>
                                @endif
                                <div class="product_content">
                                    <div class="product_title"><a
                                                href="{{route('product.show',$data->id)}}">{{$data->name}}</a></div>
                                    <div class="product_price">Rp. {{number_format($data->price)}}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="product_pagination">
                        <ul>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Icon Boxes -->

    <div class="icon_boxes">
        <div class="container">
            <div class="row icon_box_row">

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="{{asset('sublime/images/icon_1.svg')}}" alt=""></div>
                        <div class="icon_box_title">Free Shipping Worldwide</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="{{asset('sublime/images/icon_2.svg')}}" alt=""></div>
                        <div class="icon_box_title">Free Returns</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="{{asset('sublime/images/icon_3.svg')}}" alt=""></div>
                        <div class="icon_box_title">24h Fast Support</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
                                nec molestie.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>

<script src="{{asset('sublime/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('sublime/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('sublime/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('sublime/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('sublime/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('sublime/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('sublime/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('sublime/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('sublime/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('sublime/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('sublime/plugins/easing/easing.js')}}"></script>
<script src="{{asset('sublime/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('sublime/js/categories.js')}}"></script>
</body>
</html>