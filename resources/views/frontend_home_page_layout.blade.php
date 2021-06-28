<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('frontend/images/icons/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <title>AMISH BAZAR</title>

    @yield('page_level_style')

</head>

<body>

{{--<header>--}}

{{--    <!-- navbar -->--}}

{{--   @include('frontend.partials.navbar')--}}

{{--</header>--}}

{{--<main>--}}

    <!-- Modal -->

    <!-- modal login -->

{{--    <div id="login" class="modal fade" role="dialog">--}}
{{--        <div class="modal-dialog modal-dialog-centered">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="login">--}}
{{--                    <h3 class="text-center">Welcome</h3>--}}
{{--                    <br>--}}
{{--                    <div class="container-fluid">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12 modal-button text-center">--}}
{{--                                <form action="">--}}
{{--                                    <input class="form-control" type="email" placeholder="Email Address">--}}
{{--                                    <p></p>--}}
{{--                                    <input class="form-control" type="password" placeholder="Password">--}}
{{--                                    <br>--}}
{{--                                    <button type="button" class="yellow-btn">Log In</button>--}}
{{--                                </form>--}}
{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <p class="reg">New here ? <a data-toggle="modal" data-target="#registration"--}}
{{--                                                             data-dismiss="modal">Create an account</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- modal registration -->--}}

{{--    <div class="modal fade" id="registration">--}}
{{--        <div class="modal-dialog modal-dialog-centered modal-lg">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="registration">--}}
{{--                    <h3 class="text-center">Sign Up for Free</h3>--}}
{{--                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Non--}}
{{--                        nulla arcu habitant--}}
{{--                        sollicitudin.</p>--}}
{{--                    <br>--}}
{{--                    <form action="">--}}
{{--                        <div class="container-fluid">--}}
{{--                            <div class="row modal-button">--}}
{{--                                <div class="col-md-6 col-sm-6 col-12">--}}
{{--                                    <input class="form-control" type="email" placeholder="Email Address">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-6 col-12">--}}
{{--                                    <input class="form-control" type="text" placeholder="Username">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-6 col-12">--}}
{{--                                    <input class="form-control" type="text" placeholder="Your Name">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-6 col-12">--}}
{{--                                    <input class="form-control" type="text" placeholder="Address">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-6 col-12">--}}
{{--                                    <input class="form-control" type="password" placeholder="Password">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-6 col-12">--}}
{{--                                    <input class="form-control" type="password" placeholder="Confirm Password">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12 text-center">--}}
{{--                                    <button type="button" class="yellow-btn">Register</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- modal cart -->--}}

{{--    <div class="modal fade" id="cart">--}}
{{--        <div class="modal-dialog modal-dialog-centered modal-md">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="cart-items">--}}
{{--                    <br>--}}
{{--                    <h4 class="text-center">My Cart</h4>--}}
{{--                    <p></p>--}}
{{--                    <hr>--}}
{{--                    <p></p>--}}
{{--                    <br>--}}
{{--                    <div class="row modal-button ">--}}
{{--                        <div class="col-md-1 col-sm-1 col-1"></div>--}}
{{--                        <div id="modal_cart_items" class="col-md-10 col-sm-10 col-10 cart_item_class">--}}

{{--                            @foreach($cart_items as $item)--}}


{{--                                <div class="all_cart_items" id="item{{$item->id}}"--}}
{{--                                     data-id="all_items_cart_id{{$item->id}}">--}}
{{--                                    <div class="row">--}}
{{--                                        <div--}}

{{--                                            class="cart-font col-md-8 col-sm-8 col-8">{{$item->product->product_name}}</div>--}}
{{--                                        <div class="col-md-4 col-sm-4 col-4">৳--}}
{{--                                            <span--}}

{{--                                                id="subTotal{{$item->id}}">{{number_format($item->product->price*$item->product_quantity)}}</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12 col-sm-10 col-10 ">--}}
{{--                                            <p></p>--}}
{{--                                            <div class="row ">--}}
{{--                                                <div class="col-md-4 col-sm-4 col-4">--}}
{{--                                                    <p class="single d-flex align-items-center justify-content-center">--}}
{{--                                                        ৳--}}

{{--                                                        <span--}}
{{--                                                            id="itemTotal1">{{$item->product->price}}</span>/kg--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <div--}}
{{--                                                    class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item"--}}
{{--                                                    data-id="{{$item->product_id}}">--}}
{{--                                                    <p id="cartMinus{{$item->id}}"--}}
{{--                                                       class="cartMinus d-flex align-items-center justify-content-center">--}}
{{--                                                        <img src="{{ asset('frontend/images/icons/minus.png') }}"--}}
{{--                                                             alt="">--}}
{{--                                                    </p>--}}
{{--                                                    <p class="items"><span--}}
{{--                                                            class="cart_quantity"--}}
{{--                                                            id="item_quantity-{{$item->id}}">{{$item->product_quantity}}</span>--}}
{{--                                                    </p>--}}


{{--                                                    <p id="cartPlus{{$item->id}}"--}}
{{--                                                       class="cartPlus d-flex justify-content-center align-items-center ">--}}
{{--                                                        <img src="{{ asset('frontend/images/icons/plus.png') }}"--}}
{{--                                                             alt="">--}}
{{--                                                    </p>--}}


{{--                                                </div>--}}
{{--                                                <div class="col-md-4 col-sm-2 col-2">--}}
{{--                                                    <p id="cartCross{{$item->id}}"--}}
{{--                                                       class="d-flex align-items-center justify-content-center cartCross"--}}
{{--                                                       data-id="{{$item->id}}">--}}
{{--                                                        <img src="{{ asset('frontend/images/icons/cross.png') }}"--}}
{{--                                                             alt="">--}}
{{--                                                    </p>--}}
{{--                                                    <input type="hidden" data-id="{{$item->cart_id}}"--}}
{{--                                                           id="hidden_cart_id">--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <hr>--}}
{{--                                </div>--}}


{{--                            @endforeach--}}

{{--                            <div id='no-items' class="text-center">--}}
{{--                                --}}{{--                                <h5>No Items in Cart</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-1"></div>--}}

{{--                        <div class="col-md-12">--}}
{{--                            <hr>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-1 col-sm- col-1"></div>--}}
{{--                        <div class="col-md-10 col-sm-10 col-10">--}}
{{--                            <div class="cart-font d-flex justify-content-between">--}}
{{--                                <p>Gross Total</p>--}}
{{--                                <p>৳ <span id="total">{{$total_amount}}</span></p>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <div class="text-center">--}}
{{--                                <button class="yellow-btn">Checkout</button>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-1"></div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- introduction -->

    @yield('content')


{{--</main>--}}
<!-- footer -->

@include('frontend.partials.footer')

<!-- js file -->

<script src="{{asset('frontend/js/cart.js')}}"></script>
<script src="{{asset('frontend/js/add-to-cart.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

@yield('page_plugin_script')
@yield('page_level_script')


</body>

</html>
