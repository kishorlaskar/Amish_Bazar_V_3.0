@extends('frontend_shop_page_layout')
@section('page_level_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection
@section('content')

    <header>

        <!-- navbar -->

        <div class="fixed-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container-fluid">
                    <a id="off-btn"><img src="{{asset('frontend/images/icons/menu.png')}}" alt=""></a>
                    <a class="navbar-brand" href="{{route('home-page.index')}}"><img
                            src="{{asset('frontend/images/logos/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home-page.index')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('shop-page.index')}}">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog-page.index')}}">Blog</a>
                            </li>
                            <li class="nav-item single-line d-flex">
                                <a class="nav-link cart-show">
                                    <button data-toggle="modal" data-target="#cart"
                                            class="cart-image yellow-btn d-flex align-items-center justify-content-center">
                                        <img src="{{asset('frontend/images/icons/bcart.png')}}" alt="">
                                    </button>
                                    {{--                                    <div class="red-dot"></div>--}}
                                </a>
                                <a class="nav-link">
                                    <button data-toggle="modal" data-target="#login"
                                            class="people-image yellow-btn d-flex align-items-center justify-content-center">
                                        <img src="{{asset('frontend/images/icons/people.png')}}" alt="">
                                    </button>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>

    </header>

    <br><br>

    <main>

        <!-- Modal -->

        <!-- modal login -->

        <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="login">
                        <h3 class="text-center">Welcome</h3>
                        <br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 modal-button text-center">
                                    <form action="">
                                        <input class="form-control" type="email" placeholder="Email Address">
                                        <p></p>
                                        <input class="form-control" type="password" placeholder="Password">
                                        <br>
                                        <button type="button" class="yellow-btn">Log In</button>
                                    </form>
                                    <br>
                                    <br>
                                    <p class="reg">New here ? <a data-toggle="modal" data-target="#registration"
                                                                 data-dismiss="modal">Create an account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal registration -->

        <div class="modal fade" id="registration">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="registration">
                        <h3 class="text-center">Sign Up for Free</h3>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Non
                            nulla arcu habitant
                            sollicitudin.</p>
                        <br>
                        <form action="">
                            <div class="container-fluid">
                                <div class="row modal-button">
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="text" placeholder="Username">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input class="form-control" type="password" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="yellow-btn">Register</button>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal cart -->

        <div class="modal fade" id="cart">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="cart-items">
                        <br>
                        <h4 class="text-center">My Cart</h4>
                        <p></p>
                        <hr>
                        <p></p>
                        <br>
                        <div class="row modal-button ">
                            <div class="col-md-1 col-sm-1 col-1"></div>
                            <div id="modal_cart_items" class="col-md-10 col-sm-10 col-10 cart_item_class">

                                @foreach($cart_items as $item)


                                    <div class="all_cart_items" id="item{{$item->id}}"
                                         data-id="all_items_cart_id{{$item->id}}">
                                        <div class="row">
                                            <div

                                                class="cart-font col-md-8 col-sm-8 col-8">{{$item->product->product_name}}</div>
                                            <div class="col-md-4 col-sm-4 col-4">৳
                                                <span

                                                    id="subTotal{{$item->id}}">{{number_format($item->product->price*$item->product_quantity)}}</span>
                                            </div>
                                            <div class="col-md-12 col-sm-10 col-10 ">
                                                <p></p>
                                                <div class="row ">
                                                    <div class="col-md-4 col-sm-4 col-4">
                                                        <p class="single d-flex align-items-center justify-content-center">
                                                            ৳

                                                            <span
                                                                id="itemTotal1">{{$item->product->price}}</span>/kg
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item"
                                                        data-id="{{$item->product_id}}">
                                                        <p id="cartMinus{{$item->id}}"
                                                           class="cartMinus d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset('frontend/images/icons/minus.png') }}"
                                                                 alt="">
                                                        </p>
                                                        <p class="items"><span
                                                                class="cart_quantity"
                                                                id="item_quantity-{{$item->id}}">{{$item->product_quantity}}</span>
                                                        </p>


                                                        <p id="cartPlus{{$item->id}}"
                                                           class="cartPlus d-flex justify-content-center align-items-center ">
                                                            <img src="{{ asset('frontend/images/icons/plus.png') }}"
                                                                 alt="">
                                                        </p>


                                                    </div>
                                                    <div class="col-md-4 col-sm-2 col-2">
                                                        <p id="cartCross{{$item->id}}"
                                                           class="d-flex align-items-center justify-content-center cartCross"
                                                           data-id="{{$item->id}}">
                                                            <img src="{{ asset('frontend/images/icons/cross.png') }}"
                                                                 alt="">
                                                        </p>
                                                        <input type="hidden" data-id="{{$item->cart_id}}"
                                                               id="hidden_cart_id">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>


                                @endforeach

                                <div id='no-items' class="text-center">
                                    {{--                                <h5>No Items in Cart</h5>--}}
                                </div>
                            </div>
                            <div class="col-md-1"></div>

                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-1 col-sm- col-1"></div>
                            <div class="col-md-10 col-sm-10 col-10">
                                <div class="cart-font d-flex justify-content-between">
                                    <p>Gross Total</p>
                                    <p>৳ <span id="total">{{$total_amount}}</span></p>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button class="yellow-btn">Checkout</button>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <!-- single blog -->

        <section>
            <div class="container-fluid">
                <div class="single-product w-90">
                    <div class="row">
                        <div class="col-md-6">
                            <img id="main-image" src="{{ asset($product->product_image) }}" alt="">
                            <div class="owl-carousel">
                                <div class="item">
                                    <img class="sub-images" src="{{ asset($product->product_image) }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="sub-images" src="{{ asset($product->product_image) }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="sub-images" src="{{ asset($product->product_image) }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="sub-images" src="{{ asset($product->product_image) }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="sub-images" src="{{ asset($product->product_image) }}" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6>{{ $product->product_name }}</h6>
                            <small>
                                {{ $product->description }}
                            </small>
                            <p></p>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-4">
                                    <p class="single d-flex align-items-center justify-content-center">৳
                                        <span id="itemTotal">   {{ $product->price }}</span>/kg</p>
                                </div>
{{--                                <div class="col-md-6 col-sm-6 col-6 d-flex align-items-center">--}}
{{--                                    <p id="minus" class="cartMinus d-flex align-items-center justify-content-center">--}}
{{--                                        <img src="./images/icons/minus.png" alt="">--}}
{{--                                    </p>--}}
{{--                                    <p class="items"><span id="itemQuantity">1</span></p>--}}
{{--                                    <p id="plus" class="cartPlus d-flex align-items-center justify-content-center">--}}
{{--                                        <img src="./images/icons/plus.png" alt="">--}}
{{--                                    </p>--}}
{{--                                </div>--}}
                            </div>
                            <hr>
                            <p>- Lorem ipsum dolor sit amet <br>
                                - Consectetur adipiscing elit <br>
                                - Non nulla arcu habitant.</p>

{{--                            <div class="product_cart" id="{{ $product->id }}" data-id="{{$product->id}}">--}}
{{--                                <div style="display: none" id="item-plus-minus-{{$product->id}}"--}}
{{--                                     data-id="{{$product->id}}"--}}
{{--                                     class="cart-plus-minus">--}}

{{--                                    <div class="plus-minus d-flex test">--}}
{{--                                        <button class="page-minus" id="product-minus-{{$product->id}}">--}}
{{--                                            <strong class="d-flex align-items-center justify-content-center">-</strong>--}}
{{--                                        </button>--}}
{{--                                        <p class="d-flex align-items-center justify-content-center">--}}
{{--                                    <span id="product-item-quantity-{{$product->id}}"--}}
{{--                                          class="product-item-quantity">0</span> in Cart--}}

{{--                                        </p>--}}

{{--                                        <button id="product-plus-{{$product->id}}" class="page-plus">--}}
{{--                                            <strong class="d-flex align-items-center justify-content-center">+</strong>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}

{{--                                </div>--}}


{{--                                <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">--}}
{{--                                <div class="view-all yellow-sh">--}}
{{--                                <button type="button" id='item-zero-{{$product->id}}' data-id="{{ $product->id }}"--}}
{{--                                        class="yellow-btn cart-add">--}}
{{--                                    Add to cart--}}
{{--                                </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="view-all yellow-sh">--}}
{{--                                <button class="yellow-btn">Add to Cart</button>--}}
{{--                            </div>--}}
                        </div>
                    </div>


                </div>
                <br>
                <hr>
            </div>
        </section>

        <!-- customer review -->

        <section>
            <section>
                <div class="container-fluid w-90">
                    <br>
                    <h5>Customer Reviews</h5>
                    <p></p>
                    <div class="total-review">
                        <div class="d-flex">
                            <p>5 Stars</p>
                            <div class="line"></div>
                        </div>
                        <div class="d-flex">
                            <p>4 Stars</p>
                            <div class="line2"></div>
                        </div>
                        <div class="d-flex">
                            <p>3 Stars</p>
                            <div class="line"></div>
                        </div>
                        <div class="d-flex">
                            <p>2 Stars</p>
                            <div class="line3"></div>
                        </div>
                        <div class="d-flex">
                            <p>1 Stars</p>
                            <div class="line"></div>
                        </div>
                    </div>
                    <br>
                </div>
            </section>
            <!--  -->
            <section>
                <div class="container-fluid w-90">
                    <div class="review ">
                        <div class=" d-flex justify-content-between">
                            <div class="">
                                <h6>Saimam Hasan</h6>
                                <div class="rate">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                            <small>4 June, 2020</small>
                        </div>
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa lacinia mauris ullamcorper non
                            nunc risus nisl. Odio vitae porttitor euismod lectus scelerisque. Tellus nulla elit placerat
                            curabitur laoreet elit malesuada viverra neque. Vel felis tortor velit quisque dolor enim at
                            varius leo. In ultrices ac eu nec lacus eget nulla vestibulum, augue. Enim mauris, lorem
                            bibendum condimentum porta aenean at. Blandit nisi.</p>
                    </div>
                    <br>
                    <div class="review">
                        <div class=" d-flex justify-content-between">
                            <div class="">
                                <h6>Suva Karmaker</h6>
                                <div class="rate">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                            <small>4 June, 2020</small>
                        </div>
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa lacinia mauris ullamcorper non
                            nunc risus nisl. Odio vitae porttitor euismod lectus scelerisque. Tellus nulla elit placerat
                            curabitur laoreet elit malesuada viverra neque. Vel felis tortor velit quisque dolor enim at
                            varius leo. In ultrices ac eu nec lacus eget nulla vestibulum, augue. Enim mauris, lorem
                            bibendum condimentum porta aenean at. Blandit nisi.</p>
                        <div class="small-pic">
                            <img src="{{asset('frontend/images/blogs/blog4_1.png')}}" alt="">
                            <img src="{{asset('frontend/images/blogs/blog4_2.png')}}" alt="">
                            <img src="{{asset('frontend/images/blogs/blog4_1.png')}}" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="review">
                        <div class=" d-flex justify-content-between">
                            <div class="">
                                <h6>Suva Karmaker</h6>
                                <div class="rate">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                            </div>
                            <small>4 June, 2020</small>
                        </div>
                        <p></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa lacinia mauris ullamcorper non
                            nunc risus nisl. Odio vitae porttitor euismod lectus scelerisque. Tellus nulla elit placerat
                            curabitur laoreet elit malesuada viverra neque. Vel felis tortor velit quisque dolor enim at
                            varius leo. In ultrices ac eu nec lacus eget nulla vestibulum, augue. Enim mauris, lorem
                            bibendum condimentum porta aenean at. Blandit nisi.</p>

                    </div>
                    <br><br>
                    <hr>
                </div>
            </section>
        </section>

        <br><br>

        <!-- related products -->

        <section>
            <div class="container-fluid">
                <div class="products">
                    <div class="row">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                                    <div class="" id="{{ $product->id }}" data-id="{{$product->id}}">
                                        <img src="{{ asset($product->product_image) }}" alt="">
                                        <div class="product-info text-center">
                                            <a href="#">
                                                <h6>{{ $product->product_name }}</h6>
                                            </a>
                                            <small>{{ $product->quantity }}</small>
                                            <br>
                                            <strong>৳ {{ $product->price }}</strong>
                                        </div>
                                        <div class="product_cart" id="{{ $product->id }}" data-id="{{$product->id}}">
                                            <div style="display: none" id="item-plus-minus-{{$product->id}}" class="cart-plus-minus"
                                                 data-id="{{$product->id}}">
                                                <div class="plus-minus d-flex ">
                                                    <button id="product-minus-{{$product->id}}" class="page-minus"><strong
                                                            class="d-flex align-items-center justify-content-center">-</strong></button>
                                                    <p class="d-flex align-items-center justify-content-center">
{{--                                                        <span--}}
{{--                                                            class="product-item-quantity"--}}
{{--                                                            id="product-item-quantity-{{$product->id}}">0</span> in Cart--}}
                                                        @if($product->cart_product !==null)
                                                            @if($product->cart_product->product_id == $product->id)
                                                                <span id="product-item-quantity-{{$product->id}}"
                                                                      class="product-item-quantity">{{number_format(($product->cart_product->product_quantity)-1)}}</span>
                                                                in Cart

                                                            @endif

                                                        @else
                                                            <span id="product-item-quantity-{{$product->id}}"
                                                                  class="product-item-quantity">0</span> in Cart
                                                        @endif
                                                    </p>
                                                    <button id="product-plus-{{$product->id}}" class="page-plus"><strong
                                                            class="d-flex align-items-center justify-content-center">+</strong></button>
                                                </div>
                                            </div>
                                            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                            <button id='item-zero-{{$product->id}}' data-id="{{ $product->id }}" class="yellow-btn cart-add">Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="view-all yellow-sh text-center">
                    <br><br>
                    <button class="text-center yellow-btn blog-anchor"><a href="{{route('shop-page.index')}}">View all Products</a>
                    </button>
                </div>
            </div>
        </section>

    </main>




@endsection


<!-- js script -->
@section('page_plugin_script')
    {{--<script src="./js/cart.js"></script>--}}
{{--    <script src="{{asset('frontend/js/single-product-js.js')}}"></script>--}}
{{--    <script src="{{asset('frontend/js/add-to-cart.js')}}"></script>--}}
{{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"--}}
{{--            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"--}}
{{--            crossorigin="anonymous">--}}
{{--    </script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"--}}
{{--            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"--}}
{{--            crossorigin="anonymous">--}}
{{--    </script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"--}}
{{--            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"--}}
{{--            crossorigin="anonymous">--}}
{{--    </script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('frontend/js/single-product-carousel.js')}}">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>

@endsection

@section('page_level_script')

    <script>

        var config = {
            routes: {

                get_product: "{!! route('products.get') !!}",
                product_add_to_cart_operation: "{!! route('add_to_cart.products') !!}",
                get_cart_items: "{!! route('cart-items.get') !!}",
                cart_items_delete: "{!! route('cart-items.delete') !!}",
                cart_total: "{!! route('cart-items.total') !!}",

                category_wise_product: "{!! route('category_wise_product.get') !!}",
                {{--slider_price_value: "{!! route('price_wise_product.get') !!}",--}}


            }
        };

        function cartCross() {

            $(".cartCross").off("click").on('click', function (event) {

                var cart_product_id = $(this).data('id');
                var cart_id = $('#hidden_cart_id').data('id');

                console.log(cart_product_id, cart_id);

                $.ajax({
                    url: config.routes.cart_items_delete,
                    type: "get",
                    data: {

                        cart_product_id: cart_product_id,
                        cart_id: cart_id,

                    },

                    success: function (data) {
                        cartTotal();
                    },
                    error: function (data, errorThrown) {


                    }
                });


            });
        }




        function cartTotal() {
            $.ajax({
                url: config.routes.cart_total,
                type: "get",

                success: function (data) {

                    console.log(data.total_amount);

                    $("#total").text(data.total_amount);
                    $("#total_amount_side").text(data.total_amount);
                    $("#total_cart_item").text(data.total_item_in_cart);

                },
                error: function (data, errorThrown) {


                }
            });


        }
        function test_cart() {

            $('.my_cart_item').off("click").on('click', function (e) {


                var product_id = $(this).data('id');
                // var product_quantity = "";
                var product_quantity = ($(this).find('.cart_quantity').text());
                // var cart_quantity = ($(this).find('.cart_quantity').text());


                // if (cart_quantity == 0) {
                //
                //     product_quantity = ($(this).find('.product-item-quantity').text());
                // } else {
                //     product_quantity = ($(this).find('.cart_quantity').text());
                // }


                console.log(product_id, product_quantity);


                $.ajax({
                    url: config.routes.product_add_to_cart_operation,
                    type: "get",
                    data: {
                        product_id: product_id,
                        product_quantity: product_quantity,
                    },
                    success: function (data) {

                        cartTotal();
                    }

                })


            });
        }

        $(document).ready(function () {


            test_cart();
            modal_operation();

            //



            function modal_operation() {

                $.ajax({
                    url: config.routes.get_cart_items,
                    type: "get",


                    success: function (data) {


                        cartTotal();
                        cartCross();

                        let totalItem = Object.keys(data.carts).length;
                        const noItems = document.getElementById('no-items');

// no items in cart

                        function displayNone() {
                            if (totalItem < 0) {
                                noItems.style.display = 'block';
                            }
                        }

                        $.each(data.carts, function (key, value) {
                            let plus1 = document.getElementById('cartPlus' + value.id);
                            let minus1 = document.getElementById('cartMinus' + value.id);
                            let cross1 = document.getElementById('cartCross' + value.id);
                            let item1 = document.getElementById('item' + value.id);
                            // console.log(minus1)

                            // plus handler

                            plus1.addEventListener('click', function () {
                                const quantity = document.getElementById('item_quantity-' + value.id).innerText;
                                const quantityNumber = parseInt(quantity);
                                const item1Quantity = addQuantity('item_quantity-' + value.id, 1, quantityNumber);
                                const onePrice = singlePrice('subTotal' + value.id, item1Quantity - 1);
                                addPrice('subTotal' + value.id, item1Quantity, onePrice);
                                total('total', onePrice);
                            });


                            minus1.addEventListener('click', function () {
                                const quantity = document.getElementById('item_quantity-' + value.id).innerText;
                                const quantityNumber = parseInt(quantity);
                                // console.log(quantityNumber);
                                if (quantityNumber > 1) {
                                    const item1Quantity = addQuantity('item_quantity-' + value.id, -1, quantityNumber);
                                    const onePrice = singlePrice('subTotal' + value.id, item1Quantity + 1);
                                    addPrice('subTotal' + value.id, item1Quantity, onePrice);
                                    total('total', (-1 * onePrice));
                                }
                            });

                            cross1.addEventListener('click', function () {
                                const subTotal = document.getElementById('subTotal' + value.id).innerText;
                                // console.log(subTotal);
                                const subTotalNumber = parseInt(subTotal);
                                total('total', (-1 * subTotalNumber));
                                totalItem--;
                                displayNone();
                                item1.style.display = 'none';

                            })

                        });

                        $('.product_cart').on('click',function (e) {


                            // e.preventDefault();
                            var product_id = $(this).data('id');
                            var product_quantity = ($(this).find('.product-item-quantity').text());
                            // var cart_quantity = ($(this).find('.cart_quantity').text());


                            // if (cart_quantity == 0) {
                            //
                            //     product_quantity = ($(this).find('.product-item-quantity').text());
                            // } else {
                            //     product_quantity = ($(this).find('.cart_quantity').text());
                            // }


                            $.ajax({
                                url: config.routes.product_add_to_cart_operation,
                                type: "get",
                                data: {
                                    product_id: product_id,
                                    product_quantity: product_quantity,
                                },
                                success: function (data) {
                                    if (data.status === "first_order_created") {
                                        cartTotal();
                                        // $('#modal_cart_items').empty();
                                        var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                        $('#modal_cart_items').append('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="/frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="/frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="/frontend/images/icons/cross.png" alt=""></p>  <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">  </div>      </div>               </div>                       </div>       <hr>         </div>');

                                        cartCross();
                                        test_cart();

                                        let plus1 = document.getElementById('cartPlus' + data.cart_product.id);
                                        let minus1 = document.getElementById('cartMinus' + data.cart_product.id);
                                        let cross1 = document.getElementById('cartCross' + data.cart_product.id);
                                        let item1 = document.getElementById('item' + data.cart_product.id);
                                        // console.log(minus1)

                                        // plus handler

                                        plus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, 1, quantityNumber);
                                            const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity - 1);
                                            addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                            total('total', onePrice);
                                        });


                                        minus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            // console.log(quantityNumber);
                                            if (quantityNumber > 1) {
                                                const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, -1, quantityNumber);
                                                const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity + 1);
                                                addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                                total('total', (-1 * onePrice));
                                            }
                                        });

                                        cross1.addEventListener('click', function () {
                                            const subTotal = document.getElementById('subTotal' + data.cart_product.id).innerText;
                                            // console.log(subTotal);
                                            const subTotalNumber = parseInt(subTotal);
                                            total('total', (-1 * subTotalNumber));
                                            totalItem--;
                                            displayNone();
                                            item1.style.display = 'none';

                                        })

                                    }
                                    else if (data.status === "order_created_after_first_order") {
                                        // $('#modal_cart_items').empty();
                                        cartTotal();
                                        var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                        $('#modal_cart_items').append('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="/frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="/frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="/frontend/images/icons/cross.png" alt=""></p>  <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">  </div>      </div>               </div>                       </div>       <hr>         </div>');
                                        cartCross();
                                        test_cart();


                                        let plus1 = document.getElementById('cartPlus' + data.cart_product.id);
                                        let minus1 = document.getElementById('cartMinus' + data.cart_product.id);
                                        let cross1 = document.getElementById('cartCross' + data.cart_product.id);
                                        let item1 = document.getElementById('item' + data.cart_product.id);
                                        // console.log(minus1)

                                        // plus handler

                                        plus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, 1, quantityNumber);
                                            const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity - 1);
                                            addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                            total('total', onePrice);
                                        });


                                        minus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            // console.log(quantityNumber);
                                            if (quantityNumber > 1) {
                                                const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, -1, quantityNumber);
                                                const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity + 1);
                                                addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                                total('total', (-1 * onePrice));
                                            }
                                        });

                                        cross1.addEventListener('click', function () {
                                            const subTotal = document.getElementById('subTotal' + data.cart_product.id).innerText;
                                            // console.log(subTotal);
                                            const subTotalNumber = parseInt(subTotal);
                                            total('total', (-1 * subTotalNumber));
                                            totalItem--;
                                            displayNone();
                                            item1.style.display = 'none';

                                        })

                                    }
                                    else if (data.status === "existing_updated") {
                                        cartTotal();
                                        $('#item' + data.cart_product.id).empty();
                                        var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                        $('#item' + data.cart_product.id).replaceWith('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="/frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="/frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="/frontend/images/icons/cross.png" alt=""></p> <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">   </div>      </div>               </div>                       </div>       <hr>         </div>');
                                        cartCross();
                                        test_cart();


                                        let plus1 = document.getElementById('cartPlus' + data.cart_product.id);
                                        let minus1 = document.getElementById('cartMinus' + data.cart_product.id);
                                        let cross1 = document.getElementById('cartCross' + data.cart_product.id);
                                        let item1 = document.getElementById('item' + data.cart_product.id);
                                        // console.log(minus1)

                                        // plus handler

                                        plus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, 1, quantityNumber);
                                            const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity - 1);
                                            addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                            total('total', onePrice);
                                        });


                                        minus1.addEventListener('click', function () {
                                            const quantity = document.getElementById('item_quantity-' + data.cart_product.id).innerText;
                                            const quantityNumber = parseInt(quantity);
                                            // console.log(quantityNumber);
                                            if (quantityNumber > 1) {
                                                const item1Quantity = addQuantity('item_quantity-' + data.cart_product.id, -1, quantityNumber);
                                                const onePrice = singlePrice('subTotal' + data.cart_product.id, item1Quantity + 1);
                                                addPrice('subTotal' + data.cart_product.id, item1Quantity, onePrice);
                                                total('total', (-1 * onePrice));
                                            }
                                        });

                                        cross1.addEventListener('click', function () {
                                            const subTotal = document.getElementById('subTotal' + data.cart_product.id).innerText;
                                            // console.log(subTotal);
                                            const subTotalNumber = parseInt(subTotal);
                                            total('total', (-1 * subTotalNumber));
                                            totalItem--;
                                            displayNone();
                                            item1.style.display = 'none';

                                        })

                                    }
                                }

                            });


                        });


                    }


                });


            }


            const cartMinus = document.getElementsByClassName('page-minus');
            const cartPlus = document.getElementsByClassName('page-plus');
            const cartItemsAdd = document.getElementsByClassName('cart-add');

            // console.log(cartItemsAdd);

            // const cartModalPlus = document.getElementsByClassName('cartPlus');

            // cart add

            $.ajax({
                url: config.routes.get_product,
                type: "get",
                data: {},
                success: function (data) {

                    // console.log(data.products);
                    // cartTotal();
                    $.each(data.products, function (key, value) {

                        if (value.cart_product !== null) {
                            // console.log(value.cart_product.product_id, value.id);
                            if (value.cart_product.product_id === value.id) {
                                let item = cartItemsAdd[key];
                                item.style.display = "none";
                                // console.log(value.id);
                                document.getElementById("item-plus-minus-" + value.id).style.display = "block";
                                const quantity = document.getElementById("product-item-quantity-" + value.id).innerText;
                                const quantityNumber = parseInt(quantity);
                                updatedQuantity(("product-item-quantity-" + value.id), 1, quantityNumber);


                            }
                        }

                        cartItemsAdd[key].onclick = function () {
                            let item = cartItemsAdd[key];
                            item.style.display = "none";
                            // console.log(value.id);
                            document.getElementById("item-plus-minus-" + value.id).style.display = "block";
                            const quantity = document.getElementById("product-item-quantity-" + value.id).innerText;
                            const quantityNumber = parseInt(quantity);
                            updatedQuantity(("product-item-quantity-" + value.id), 1, quantityNumber);
                        }
                    });


                    $.each(data.products, function (key, value) {

                        cartPlus[key].onclick = function () {
                            const quantity = document.getElementById("product-item-quantity-" + value.id).innerText;
                            const quantityNumber = parseInt(quantity);
                            updatedQuantity(("product-item-quantity-" + value.id), 1, quantityNumber);
                        }
                    });


                    $.each(data.products, function (key, value) {

                        cartMinus[key].onclick = function () {
                            let item = cartMinus[key];
                            const quantity = document.getElementById("product-item-quantity-" + value.id).innerText;
                            const quantityNumber = parseInt(quantity);
                            if (quantity > 1) {
                                updatedQuantity(("product-item-quantity-" + value.id), -1, quantityNumber);
                            } else {
                                updatedQuantity(("product-item-quantity-" + value.id), -1, quantityNumber);
                                document.getElementById("item-plus-minus-" + value.id).style.display = "none";
                                document.getElementById("item-zero-" + value.id).style.display = "block";
                            }
                        }
                    });


                },
                error: function (data, errorThrown) {


                }
            });


            // updated quantity

            function updatedQuantity(id, number, quantityNumber) {
                const updatedQuantity = quantityNumber + number;
                document.getElementById(id).innerText = updatedQuantity;
            }


            // adding or removing Quantity

            function addQuantity(id, number, quantityNumber) {
                const updatedQuantity = quantityNumber + number;
                document.getElementById(id).innerText = updatedQuantity;
                return updatedQuantity;
            }

            // adding or removing price

            function addPrice(id, quantity, onePrice) {
                const price = document.getElementById(id).innerText;
                // console.log(price)
                const priceNumber = parseFloat(price);
                const updatedPrice = quantity * onePrice;
                document.getElementById(id).innerText = (updatedPrice).toFixed(0);
                return updatedPrice;
            }

            //
            // calculate single price

            function singlePrice(id, quantity) {
                const price = document.getElementById(id).innerText;
                const priceNumber = parseFloat(price);
                const singlePrice = priceNumber / quantity;
                return singlePrice;
            }

            // calculate total price

            function total(id, singlePrice) {
                const total = document.getElementById(id).innerText;
                // const totalNumber = parseFloat(total);
                let totalNumber = parseFloat(total);
                if (totalNumber < 0) {
                    totalNumber = 0;
                }
                document.getElementById(id).innerText = (totalNumber + singlePrice).toFixed(0);
            }


        })


    </script>
@endsection
