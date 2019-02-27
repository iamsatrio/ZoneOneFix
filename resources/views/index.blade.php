<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zone One</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/responsive.css')}}">
</head>
<body>

<div class="super_container">

@include('layouts.header')

<!-- Home -->

    <div class="home">

        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">
            @foreach($carousel as $data)    
                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background"
                         style="background-image:url({{asset('storage/'.$data->image)}})"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                         data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title">{{$data->title}}</div>
                                         <div class="home_slider_subtitle">{{$data->desc}}
                                        </div>
                                        <div class="button button_light home_button"><a href="{{route('productCategory.index')}}">Shop Now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

            <!-- Home Slider Dots -->

            <div class="home_slider_dots_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_dots">
                                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                    <li class="home_slider_custom_dot active">01.</li>
                                    <li class="home_slider_custom_dot">02.</li>
                                    <li class="home_slider_custom_dot">03.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Ads -->

    <div class="avds">
        <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
            <div class="avds_small">
                <div class="avds_background"
                     style="background-image:url({{asset('Storage/'.$banner1->image)}})"></div>
                <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="{{asset('sublime/images/discount.png')}}" alt="">
                        <div>
                            <div class="avds_discount">
                                <div>20<span>%</span></div>
                                <div>Discount</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content">
                        <div class="avds_title">{{$banner1->title}}</div>
                        <div class="avds_link"><a href="{{route('productCategory.index')}}">See More</a></div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background"
                     style="background-image:url({{asset('Storage/'.$banner2->image)}})"></div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title">{{$banner2->title}}</div>
                         <div class="avds_text">{{$banner2->desc}}</div>
                        <div class="avds_link avds_link_large"><a href="{{route('productCategory.index')}}">See More</a></div>
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

                    <div class="product_grid">

                    @foreach($products as $data)
                        <!-- Product -->
                            <div class="product">
                                <div class="product_image"><img src="{{asset('storage/'.$data->image)}}" alt=""></div>
                                @if($data->status == 'Sale')
                                    <div class="product_extra product_sale"><a href="{{route('productCategory.index')}}">Sale</a></div>
                                @elseif($data->status == 'Hot')
                                    <div class="product_extra product_hot"><a href="{{route('productCategory.index')}}">Hot</a></div>
                                @endif
                                <div class="product_content">
                                    <div class="product_title"><a
                                                href="{{route('product.show',$data->id)}}">{{$data->name}}</a></div>
                                    <div class="product_price">Rp. {{number_format($data->price)}}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Ad -->

    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background"
                             style="background-image:url({{asset('Storage/'.$footer->image)}})"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title">{{$footer->title}}</div>
                             <div class="avds_text">{{$footer->desc}}</div>
                            <div class="avds_link avds_xl_link"><a href="{{route('productCategory.index')}}">See More</a></div>
                        </div>
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
                        <div class="icon_box_title">Free Shipping Nusantara</div>
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
<script src="{{asset('sublime/js/custom.js')}}"></script>
</body>
</html>