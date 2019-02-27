<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('sublime/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/cart.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/cart_responsive.css')}}">
</head>
<body>

<div class="super_container">

@include('layouts.header')

<!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url({{asset('sublime/images/cart.jpg')}})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="{{route('products')}}">Home</a></li>
                                        <li><a href="{{route('productCategory.index')}}">Products</a></li>
                                        <li>Shopping Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Info -->

    <div class="cart_info">
        <div class="container">

            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()-> get('success_message')}}
                </div>
            @elseif (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ ($error) }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Cart::count() >0 )
                <h6>{{ Cart::count() }} item(s) in Shopping Cart</h6>
            @else
                <h6>No items in Cart!</h6>
            @endif
            <div class="row">
                <div class="col">
                    <!-- Column Titles -->
                    <div class="cart_info_columns clearfix">
                        <div class="cart_info_col cart_info_col_product">Product</div>
                        <div class="cart_info_col cart_info_col_price">Price</div>
                        <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                        <div class="cart_info_col cart_info_col_total">Total</div>
                    </div>
                </div>
            </div>

            <div class="row cart_items_row">
                <div class="col">
                @php ($no = 0)
                @foreach (Cart::content() as $item)
                    @php ($no++)
                    <!-- Cart Item -->
                        <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <!-- Name -->
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_item_image">
                                    <div><img src="{{asset('storage/'.$item->options->image)}}" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="#">{{$item->name}}</a></div>
                                    <div class="cart_item_edit">
                                        <form action="{{route('cart.destroy',$item->rowId)}}" method="POST"
                                              id="remove{{ $no }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a href=""
                                           onclick="event.preventDefault(); document.getElementById('remove{{ $no }}').submit();"><i
                                                    class="fa fa-trash"></i> Remove</a>
                                    </div>

                                </div>
                            </div>
                            <!-- Price -->
                            <div class="cart_item_price">Rp. {{number_format($item->price-$item->discount)}}</div>
                            <!-- Quantity -->
                            <input id="row_id{{ $no }}" type="hidden" value="{{$item->rowId}}" name="row_id{{ $no }}"
                                   class="row_id">
                            <div class="cart_item_quantity">
                                <div class="product_quantity_container">
                                    <div class="product_quantity clearfix">
                                        <span>Qty</span>
                                        <input id="quantity_input{{ $no }}" type="text" pattern="[0-9]*"
                                               value="{{$item->qty}}" name="quantity_input{{ $no }}"
                                               class="quantity_input">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button{{ $no }}" onclick="increase(this)"
                                                 no="{{ $no }}" class="quantity_inc quantity_control"><i
                                                        class="fa fa-chevron-up"></i></div>
                                            <div id="quantity_dec_button{{ $no }}" onclick="decrease(this)"
                                                 no="{{ $no }}" class="quantity_dec quantity_control"><i
                                                        class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Total -->
                            <div class="cart_item_total">Rp. {{$item->subtotal()}}</div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="row row_cart_buttons">
                <div class="col">
                    <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="button continue_shopping_button"><a href="{{ route('products') }}">Continue
                                shopping</a></div>
                        <div class="cart_buttons_right ml-lg-auto">
                            <div class="button clear_cart_button">
                                <a href="" onclick="event.preventDefault();
                                         document.getElementById('clear').submit();">Clear cart</a>
                                <form class="" action="{{ route('cart.destroyall') }}" method="POST" id="clear">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                </form>
                            </div>
                            {{--<div class="button update_cart_button"><a href="#">Update cart</a></div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row_extra">
                <div class="col-lg-4">

                    <!-- Delivery -->
                    <div class="delivery">
                        <div class="section_title">Shipping method</div>
                        <div class="section_subtitle">Select the one you want</div>
                        <div class="delivery_options">
                            <label class="delivery_option clearfix">Next day delivery
                                <input type="radio" name="radio" class="deliv" id="Next day delivery"
                                       value="79000">
                                <span class="checkmark"></span>
                                <span class="delivery_price">Rp. {{ number_format(79000) }}</span>
                            </label>
                            <label class="delivery_option clearfix">Standard delivery
                                <input type="radio" name="radio" class="deliv" id="Standard delivery"
                                       value="29000">
                                <span class="checkmark"></span>
                                <span class="delivery_price">Rp. {{ number_format(29000) }}</span>
                            </label>
                            <label class="delivery_option clearfix">Personal pickup
                                <input type="radio" checked="checked" class="deliv" name="radio" id="Personal pickup"
                                       value="0">
                                <span class="checkmark"></span>
                                <span class="delivery_price">Free</span>
                            </label>
                        </div>
                    </div>

                    <!-- Coupon Code -->
                    {{--<div class="coupon">--}}
                        {{--<div class="section_title">Coupon code</div>--}}
                        {{--<div class="section_subtitle">Enter your coupon code</div>--}}
                        {{--<div class="coupon_form_container">--}}
                            {{--<form action="#" id="coupon_form" class="coupon_form">--}}
                                {{--<input type="text" class="coupon_input" required="required">--}}
                                {{--<button class="button coupon_button"><span>Apply</span></button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <div class="col-lg-6 offset-lg-2">
                    <div class="cart_total">
                        <div class="section_title">Cart total</div>
                        <div class="section_subtitle">Final info</div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Subtotal</div>
                                    <div class="cart_total_value ml-auto">Rp. {{ Cart::subtotal() }}</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Shipping</div>
                                    <div class="cart_total_value ml-auto delivstat"></div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Total</div>
                                    <div class="cart_total_value ml-auto">Rp. {{ Cart::total() }}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="button checkout_button">
                            <a href=""
                               onclick="event.preventDefault(); document.getElementById('checkout').submit();">
                                Proceed to checkout
                            </a>
                        </div>
                        <form action="{{route('checkout.pages')}}" method="POST" id="checkout">
                            @csrf
                            <input type="hidden" id="shipping_method" name="shipping_method">
                            <input type="hidden" id="shipping_price" name="shipping_price">
                            <input type="hidden" id="shipping_cost" name="shipping_cost">
                        </form>
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
<script src="{{asset('sublime/plugins/easing/easing.js')}}"></script>
<script src="{{asset('sublime/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('sublime/js/cart.js')}}"></script>

<script>
    $( document ).ready(function() {
        var shipment = $('input[name=radio]:checked').val();
        var method = $('input[name=radio]:checked').attr('id');
        if (shipment == 0){
            $('.delivstat').html('Free');
            $('#shipping_price').val('Free');
        } else {
            $('.delivstat').html('Rp. ' + currencyFormat(shipment));
            $('#shipping_price').val('Rp. ' + currencyFormat(shipment));
        }
        $('#shipping_cost').val(shipment);
        $('#shipping_method').val(method);

    });


    function currencyFormat(number) {
        var bilangan = number;

        var number_string = bilangan.toString(),
            sisa = number_string.length % 3,
            rupiah = number_string.substr(0, sisa),
            ribuan = number_string.substr(sisa).match(/\d{3}/g);
        if (ribuan) {
            separator = sisa ? ',' : '';
            rupiah += separator + ribuan.join(',');
        }
        return rupiah;

    }



    $('.deliv').on('change', function () {
        var delivery = $(this).val();
        var method = $(this).attr('id');
        if (delivery == 0) {
            $('.delivstat').html('Free');
            $('#shipping_price').val('Free');
        } else {
            $('.delivstat').html('Rp. ' + currencyFormat(delivery));
            $('#shipping_price').val('Rp. ' + currencyFormat(delivery));
        }
        $('#shipping_cost').val(delivery);
        $('#shipping_method').val(method);
    });

    var increase = function (param) {

        var tempincrease = $(param).attr('no');
        var input = $('#quantity_input' + tempincrease).val();
        var input2 = $('#quantity_input' + tempincrease);
        var row_id = $('#row_id' + tempincrease).val();

        var incButton = $('#quantity_inc_button' + tempincrease);
        var decButton = $('#quantity_dec_button' + tempincrease);

        var originalVal;
        var endVal;

        originalVal = input;
        endVal = parseInt(input) + 1;
        input2.val(endVal);

        var qty = input2.val();

        $.ajax({
            type: 'GET',
            url: 'cart/update/' + row_id + '/' + qty,
            success: function (response) {
                window.location.href = '{{route('cart.index')}}';
            }
        });
    }

    var decrease = function (param) {

        var tempdecrease = $(param).attr('no');
        var input = $('#quantity_input' + tempdecrease).val();
        var input2 = $('#quantity_input' + tempdecrease);
        var row_id = $('#row_id' + tempdecrease).val();

        var incButton = $('#quantity_inc_button' + tempdecrease);
        var decButton = $('#quantity_dec_button' + tempdecrease);

        var originalVal;
        var endVal;

        originalVal = input;
        if (originalVal > 0) {
            endVal = parseInt(input) - 1;
            input2.val(endVal);

            var qty = input2.val();

            $.ajax({
                type: 'GET',
                url: 'cart/update/' + row_id + '/' + qty,
                success: function (response) {
                    window.location.href = '{{route('cart.index')}}';
                }
            });
        }
    }

</script>

</body>
</html>