<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('sublime/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/checkout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('sublime/styles/checkout_responsive.css')}}">
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
                                        <li><a href="{{route('cart.index')}}">Shopping Cart</a></li>
                                        <li>Checkout</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout -->
    <div class="checkout">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">

                <!-- Billing Info -->
                <div class="col-lg-6">
                    <div class="billing checkout_section">
                        <div class="section_title">Billing Address</div>
                        <div class="section_subtitle">Enter your address info</div>
                        <div class="checkout_form_container">
                            <form action="{{route('checkout.store')}}" id="checkout_form" class="checkout_form" method="POST">
                                @csrf
                                <div>
                                    <!-- Name -->
                                    <label for="checkout_name">Nama Lengkap *</label>
                                    @if ($errors->any())
                                        <input type="text" id="checkout_name" class="checkout_input"
                                               required="required" name="checkout_name" value="{{old('checkout_name')}}">
                                    @else
                                        <input type="text" id="checkout_name" class="checkout_input"
                                               required="required" name="checkout_name" value="{{Auth::user()->name}}">
                                    @endif
                                </div>
                                <div>
                                    <!-- Email -->
                                    <label for="checkout_email">Email *</label>
                                    @if ($errors->any())
                                        <input type="email" id="checkout_email" class="checkout_input" required="required"
                                               name="checkout_email" value="{{old('checkout_email')}}">
                                    @else
                                        <input type="email" id="checkout_email" class="checkout_input" required="required"
                                               name="checkout_email" value="{{Auth::user()->email}}">
                                    @endif

                                </div>
                                <div>
                                    <!-- Phone no -->
                                    <label for="checkout_phone">No. Telepon *</label>
                                    @if ($errors->any())
                                        <input type="tel" id="checkout_phone" class="checkout_input" required="required" maxlength="12"
                                               name="checkout_phone" value="{{old('checkout_phone')}}">
                                    @else
                                        <input type="tel" id="checkout_phone" class="checkout_input" required="required" maxlength="12"
                                               name="checkout_phone">
                                    @endif

                                </div>
                                <div>
                                    <!-- Address -->
                                    <label for="checkout_address">Alamat *</label>
                                    @if ($errors->any())
                                        <textarea name="checkout_address" id="" cols="30" rows="10" class="checkout_input"
                                                  required="required">{{old('checkout_address')}}</textarea>
                                    @else
                                        <textarea name="checkout_address" id="" cols="30" rows="10" class="checkout_input"
                                                  required="required"></textarea>
                                    @endif

                                </div>
                                <div>
                                    <!-- Province -->
                                    <label for="checkout_province">Provinsi *</label>
                                    @if ($errors->any())
                                        <select name="checkout_province" id="checkout_province"
                                                class="dropdown_item_select checkout_input" require="required">
                                            @foreach($provinces as $province)
                                                @if(old('checkout_province')==$province->id)
                                                    <option value="{{$province->id}}" selected>{{$province->name}}</option>
                                                    @else
                                                    <option value="{{$province->id}}">{{$province->name}}</option>
                                                    @endif
                                                <option value="{{$province->id}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <select name="checkout_province" id="checkout_province"
                                                class="dropdown_item_select checkout_input" require="required">
                                            @foreach($provinces as $province)
                                                <option value="{{$province->id}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    @endif

                                </div>
                                <div>
                                    <!-- City / Town -->
                                    <label for="checkout_city">Kota / Kabupaten *</label>
                                    <select name="checkout_city" id="checkout_city"
                                            class="dropdown_item_select checkout_input" required="required">
                                    </select>

                                </div>
                                <div>
                                    <!-- District -->
                                    <label for="checkout_district">Kecamatan *</label>
                                    <select name="checkout_district" id="checkout_district"
                                            class="dropdown_item_select checkout_input" required="required">
                                    </select>
                                </div>
                                <div>
                                    <!-- Village -->
                                    <label for="checkout_village">Kelurahan *</label>
                                    <select name="checkout_village" id="checkout_village"
                                            class="dropdown_item_select checkout_input" required="required">
                                    </select>
                                </div>
                                <div>
                                    <!-- Zipcode -->
                                    <label for="checkout_zipcode">Kode Pos *</label>
                                    @if ($errors->any())
                                        <input type="tel" id="checkout_zipcode" class="checkout_input" required="required" name="checkout_zipcode" value="{{old('checkout_zipcode')}}" maxlength="5">
                                    @else
                                        <input type="tel" id="checkout_zipcode" class="checkout_input" required="required" name="checkout_zipcode" maxlength="5">
                                    @endif

                                </div>
                                @if ($errors->any())
                                    <input type="hidden" id="shipping_method" name="shipping_method" value="{{old('shipping_method')}}">
                                    <input type="hidden" id="shipping_price" name="shipping_price" value="{{old('shipping_price')}}">
                                    <input type="hidden" id="shipping_cost" name="shipping_cost" value="{{old('shipping_cost')}}">
                                    @else
                                    <input type="hidden" id="shipping_method" name="shipping_method" value="{{$shipping_method}}">
                                    <input type="hidden" id="shipping_price" name="shipping_price" value="{{$shipping_price}}">
                                    <input type="hidden" id="shipping_cost" name="shipping_cost" value="{{$shipping_cost}}">
                                @endif

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Info -->

                <div class="col-lg-6">
                    <div class="order checkout_section">
                        <div class="section_title">Your order</div>
                        <div class="section_subtitle">Order details</div>

                        <!-- Order details -->
                        <div class="order_list_container">
                            <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Product</div>
                                <div class="order_list_value ml-auto">Qty</div>
                                <div class="order_list_value ml-auto">Total</div>
                            </div>
                            <ul class="order_list">
                                @php ($no = 0)
                                @foreach (Cart::content() as $item)
                                    @php ($no++)
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title">{{$item->name}}</div>
                                        <div class="order_list_value ml-auto">{{$item->qty}}</div>
                                        <div class="order_list_value ml-auto">
                                            Rp. {{number_format($item->subtotal)}}</div>
                                    </li>
                                @endforeach
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Subtotal</div>
                                    <div class="order_list_value ml-auto">Rp. {{Cart::subtotal()}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Shipping</div>
                                    <div class="order_list_value ml-auto">{{$shipping_price}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="order_list_title">Total</div>
                                    <div class="order_list_value ml-auto">
                                        Rp. {{number_format(Cart::total(null, null, '')+$shipping_cost)}}</div>
                                </li>

                            </ul>
                        </div>

                        <!-- Payment Options -->
                        <div class="payment">
                            <div class="payment_options">
                                @if($shipping_cost == 0)
                                    <label class="payment_option clearfix">Personal pickup
                                        <input type="radio" checked="checked" class="payment" name="radio" id="personal"
                                               value="Personal pickup">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="payment_option clearfix">Bank transfer
                                        <input type="radio" class="payment" name="radio" id="transfer"
                                               value="Bank transfer" disabled>
                                        <span class="checkmark"></span>
                                    </label>
                                @else
                                    <label class="payment_option clearfix">Personal pickup
                                        <input type="radio" class="payment" name="radio" id="personal"
                                               value="Personal pickup" disabled>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="payment_option clearfix">Bank transfer
                                        <input type="radio" checked="checked" class="payment" name="radio" id="transfer"
                                               value="Bank transfer">
                                        <span class="checkmark"></span>
                                    </label>
                                @endif
                            </div>
                        </div>

                        <!-- Order Text -->
                        <div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra
                            temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te
                            mpus. Ut consectetur lacus.
                        </div>
                        <div class="button order_button">
                            <a href=""
                               onclick="event.preventDefault(); document.getElementById('checkout_form').submit();">Place Order</a>
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
<script src="{{asset('sublime/plugins/easing/easing.js')}}"></script>
<script src="{{asset('sublime/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('sublime/js/checkout.js')}}"></script>
<script>
    $(document).ready(function () {
        var province_id = null;
        var regency_id = null;
        var district_id = null;

        province_id = $('#checkout_province').val();
        $.ajax({
            type: 'GET',
            url: '{{route('indonesia.regency')}}',
            data: {'province_id': province_id},
            success: function (response) {
                $('#checkout_city').append(response);
                regency_id = $('#checkout_city').val();
                $.ajax({
                    type: 'GET',
                    url: '{{route('indonesia.district')}}',
                    data: {'regency_id': regency_id},
                    success: function (response) {
                        $('#checkout_district').append(response);
                        district_id = $('#checkout_district').val();

                        $.ajax({
                            type: 'GET',
                            url: '{{route('indonesia.village')}}',
                            data: {'district_id': district_id},
                            success: function (response) {
                                $('#checkout_village').append(response);
                            }
                        });
                    }
                });

            }
        });
    });

    $('#checkout_province').on('change', function () {
        $('#checkout_city option').remove();
        $('#checkout_district option').remove();
        $('#checkout_village option').remove();
        var province_id = null;
        var regency_id = null;
        var district_id = null;

        province_id = $(this).val();
        $.ajax({
            type: 'GET',
            url: '{{route('indonesia.regency')}}',
            data: {'province_id': province_id},
            success: function (response) {
                $('#checkout_city').append(response);
                regency_id = $('#checkout_city').val();
                $.ajax({
                    type: 'GET',
                    url: '{{route('indonesia.district')}}',
                    data: {'regency_id': regency_id},
                    success: function (response) {
                        $('#checkout_district').append(response);
                        district_id = $('#checkout_district').val();

                        $.ajax({
                            type: 'GET',
                            url: '{{route('indonesia.village')}}',
                            data: {'district_id': district_id},
                            success: function (response) {
                                $('#checkout_village').append(response);
                            }
                        });
                    }
                });

            }
        });
    })

    $('#checkout_city').on('change', function () {
        $('#checkout_district option').remove();
        $('#checkout_village option').remove();
        var regency_id = null;
        var district_id = null;

        regency_id = $(this).val();
        $.ajax({
            type: 'GET',
            url: '{{route('indonesia.district')}}',
            data: {'regency_id': regency_id},
            success: function (response) {
                $('#checkout_district').append(response);
                district_id = $('#checkout_district').val();

                $.ajax({
                    type: 'GET',
                    url: '{{route('indonesia.village')}}',
                    data: {'district_id': district_id},
                    success: function (response) {
                        $('#checkout_village').append(response);
                    }
                });
            }
        });
    })

    $('#checkout_district').on('change', function () {
        $('#checkout_village option').remove();
        var district_id = null;
        district_id = $(this).val();
        $.ajax({
            type: 'GET',
            url: '{{route('indonesia.village')}}',
            data: {'district_id': district_id},
            success: function (response) {
                $('#checkout_village').append(response);
            }
        });

    })
</script>
</body>
</html>