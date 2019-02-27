<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('sublime/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/product.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/product_responsive.css')}}">

    <!-- Custom CSS -->
    {{--    <link href="{{asset('philbert/dist/css/style.css')}}" rel="stylesheet" type="text/css">--}}

    <style>
        .checked {
            color: orange;
        }

        .card-inner{
            margin-left: 4rem;
        }
    </style>
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
                                <div class="home_title">{{$product->productCategory->name}}<span>.</span></div>
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

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large"><img src="{{asset('storage/'.$product->image)}}" alt="">
                            <div class="product_extra product_new"><a href="categories.html">New</a></div>
                        </div>
                        <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                            <div class="details_image_thumbnail active"
                                 data-image="{{asset('storage/'.$product->image)}}"><img
                                        src="{{asset('storage/'.$product->image)}}" alt=""></div>
                            @foreach ($multiple_images as $data)
                                <div class="details_image_thumbnail" data-image="{{asset('storage/'.$data->images)}}">
                                    <img src="{{asset('storage/'.$data->images)}}" alt=""></div>
                            @endforeach
                            {{--<div class="details_image_thumbnail active" data-image="images/details_1.jpg"><img src="images/details_1.jpg" alt=""></div>--}}
                            {{--<div class="details_image_thumbnail" data-image="images/details_2.jpg"><img src="images/details_2.jpg" alt=""></div>--}}
                            {{--<div class="details_image_thumbnail" data-image="images/details_3.jpg"><img src="images/details_3.jpg" alt=""></div>--}}
                            {{--<div class="details_image_thumbnail" data-image="images/details_4.jpg"><img src="images/details_4.jpg" alt=""></div>--}}
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content">
                        <div class="details_name">{{$product->name}}</div>
                        @if ($product->discount > 0)
                            <div class="details_discount">Rp.{{number_format($product->price)}}</div>
                            <div class="details_price">Rp.{{number_format($product->price=$product->price-($product->price*$product->discount/100))}}</div>
                        @else
                            <div class="details_price">Rp.{{number_format($product->price)}}</div>                    
                        @endif
                        {{-- <div class="details_discount">Rp. {{number_format($product->discount)}}</div>
                        <div class="details_price">Rp. {{number_format($product->price)}}</div> --}}

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>
                            <span>In Stock ({{$product->stock}})</span>
                        </div>
                        <div class="details_text">
                            <p>{{$product->description}}</p>
                        </div>

                        <!-- Product Quantity -->
                        <form action="{{ route('cart.store')}}" method="POST" id="add">
                            {{csrf_field()}}
                            <div class="product_quantity_container">
                                <div class="product_quantity clearfix">
                                    <span>Qty</span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1" name="qty">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                    class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                    class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                                @auth
                                    <div class="button cart_button"><a href="" onclick="event.preventDefault();
                                         document.getElementById('add').submit();" class="">Add to cart</a>
                                    </div>
                                @else
                                    <div class="button cart_button"><a href="{{route('login')}}">Add to cart</a></div>
                                @endauth
                            </div>
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                        </form>

                        <!-- Share -->
                        <div class="details_share">
                            <span>Share:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <nav>
                        <div class="nav nav-tabs description_title_container" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link description_title active " id="nav-home-tab" data-toggle="tab"
                               href="#nav-description" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                            <a class="nav-item nav-link description_title" id="nav-profile-tab" data-toggle="tab"
                               href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Review
                                ({{count($reviews)}})</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade description_text show active" id="nav-description" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="tab-pane fade description_text" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            @if(count($reviews) == 0)
                            <p class="muted review-tag pt-15">No reviews yet.</p>
                                @else
                                @foreach($reviews as $data)
                                    <br>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                @if(empty(Auth::user()->photo))
                                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                                @else
                                                    <img src="{{asset('storage/'.Auth::user()->photo)}}" class="img img-rounded img-fluid"/>
                                                @endif
                                                <p class="text-secondary text-center">{{date('d F Y H:i',strtotime($data->created_at))}}</p>
                                            </div>
                                            <div class="col-md-10">
                                                <p>
                                                    <strong>{{$data->user->name}}</strong>
                                                        @for($i=1;$i<=5; $i++)
                                                            @if($i<=$data->rating)
                                                                <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                            @else
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            @endif
                                                        @endfor
                                                </p>
                                                <div class="clearfix"></div>
                                                <p>{{$data->review}}.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                            <div class="row mt-40">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        @if(!empty($transaction))
                                            @if(empty($review))
                                                <hr>
                                            <form action="{{route('review.store')}}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="control-label mb-10" for="review">What do you think about this product ? </label>
                                                    <span class="fa fa-star" id="star1" onclick="add(this,1)"></span>
                                                    <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
                                                    <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
                                                    <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
                                                    <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
                                                    <textarea class="form-control" id="review" name="review"
                                                              placeholder="add review"></textarea>
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                    <input type="hidden" name="rating" id="star">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <button type="submit" class="btn btn-success  mr-10">Submit</button>
                                                </div>
                                            </form>
                                                @else
                                                <br>
                                                <div class="alert alert-success">
                                                    <p class="muted review-tag pt-15">You have been review this product.</p>
                                                </div>
                                                @endif
                                        @else
                                            <br>
                                            <div class="form-group mb-0">
                                                <p class="muted review-tag pt-15">You must buy this product to
                                                    review.</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
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
                <div class="col text-center">
                    <div class="products_title">Related Products</div>
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
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

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
<script src="{{asset('sublime/js/product.js')}}"></script>


<!-- Starrr JavaScript -->
<script src="{{asset('philbert/dist/js/starrr.js')}}"></script>

<!-- Product Detail Data JavaScript -->
<script src="{{asset('philbert/dist/js/product-detail-data.js')}}"></script>

<script>
    function add(ths, sno) {


        for (var i = 1; i <= 5; i++) {
            var cur = document.getElementById("star" + i)
            cur.className = "fa fa-star"
        }

        for (var i = 1; i <= sno; i++) {
            var cur = document.getElementById("star" + i)
            if (cur.className == "fa fa-star") {
                $('#star').val(i);
                cur.className = "fa fa-star checked"
            }
        }

    }
</script>

</body>
</html>