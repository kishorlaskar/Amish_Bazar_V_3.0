@extends('frontend_shop_page_layout')
@section('page_level_style')
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
    <main>
        <!-- Modal -->

        <!-- modal login -->
        <input type="hidden" name="hidden_category_id" id="hidden_id" data-id="{{$hidden_category_id}}" value="{{$hidden_category_id}}">

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

        <!-- fixed icon -->

        <div class="fix">
            <a data-toggle="modal" data-target="#cart">
                <img src="{{asset('frontend/images/icons/fix.png')}}" alt="">
                <div class="fix-info">
                    {{--                    <p>50 Items</p>--}}
                    {{--                    <h6>৳ 45000</h6>--}}
                    <p><span id="total_cart_item">{{$cart_count}} </span> Item</p>
                    <h6>৳ <span id="total_amount_side">{{$total_amount}}</span></h6>
                </div>
            </a>
        </div>

        <!-- all products -->

        <div class="container-fluid shop-products">

            <!-- sidebar -->

            <div id="see-side" class="see-side">
                <!-- <div id="mySidenav" class="sidenav"> -->
                <div id="custom" class="custom">
                    <a href="" class="menu d-flex align-items-center">
                        <p></p>
                        <img src="{{asset('frontend/images/icons/coronavirus.png')}}" alt="">
                        <p>COVID-19 Protections</p>
                    </a>


                    @foreach($categories as $cat_item)
                        <a href="" data-id="{{$cat_item->id}}" class="menu d-flex align-items-center sidebar_category">
                            <p></p>
                            <img style="width: 70px;height: 70px"
                                 src="{{ asset('frontend/images/'.$cat_item->category_image)  }}" alt="">

                            <p>{{$cat_item->category_name}}</p>
                        </a>
                    @endforeach
                    {{--                    <a href="" class="side-menu-last menu d-flex align-items-center">--}}
                    {{--                        <p></p>--}}
                    {{--                        <img src="{{asset('frontend/images/icons/fish.png')}}" alt="">--}}
                    {{--                        <p>Fish</p>--}}
                    {{--                    </a>--}}
                    <br>
                    <div id="range" class="range">
                        <h6>Price Range</h6>
                        <input type="range" id="myinput" min="200" max="1000">
                        <br>
                        <small>৳ 200 - 1000</small>
                    </div>
                </div>

            </div>

            <!-- products -->

            <div id="all-products" class="row all-products products">
                @foreach($products as $product)

                    <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">

                        <div class="" id="{{ $product->id }}" data-id="{{$product->id}}">
                            <img src="{{ asset($product->product_image) }}" alt="">
                            <div class="product-info text-center special_info">
                                <a href="{{route('single_product.get',$product->id)}}">
                                    <h6>{{ $product->product_name }}</h6>
                                </a>
                                <small>{{ $product->quantity }}</small>
                                <br>
                                <strong>৳ {{ $product->price }}</strong>

                            </div>


                            <div class="product_cart" id="{{ $product->id }}" data-id="{{$product->id}}">
                                @if($product->cart_product->product_id == $product->id))
                                <div style="" id="item-plus-minus-{{$product->id}}"
                                     data-id="{{$product->id}}"
                                     class="cart-plus-minus">

                                    <div class="plus-minus d-flex test">
                                        <button class="page-minus" id="product-minus-{{$product->id}}">
                                            <strong class="d-flex align-items-center justify-content-center">-</strong>
                                        </button>
                                        <p class="d-flex align-items-center justify-content-center">

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

                                        <button id="product-plus-{{$product->id}}" class="page-plus">
                                            <strong class="d-flex align-items-center justify-content-center">+</strong>
                                        </button>
                                    </div>

                                </div>

@else
                                <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                <button type="button" id='item-zero-{{$product->id}}' data-id="{{ $product->id }}"
                                        class="yellow-btn cart-add">
                                    Add to cart
                                </button>
                                    @endif
                            </div>

                        </div>
                    </div>

                @endforeach


                {{--            <div class="col-md-12">--}}
                {{--                <div class="pagination-custom text-center">--}}
                {{--                    <a href="">--}}
                {{--                        <p>1</p>--}}
                {{--                    </a>--}}
                {{--                    <a class="red" href="">--}}
                {{--                        <p>2</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>3</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>...</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>20</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>21</p>--}}
                {{--                    </a>--}}
                {{--                    <a href="">--}}
                {{--                        <p>22</p>--}}
                {{--                    </a>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>

    </main>
@endsection

@section('page_plugin_script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
@endsection

@section('page_level_script')





    <scirpt>
        $( ".plus-class" ).click(function() {
        $id= data()jhgfdajhdajh
        $.ajax(){
        fjgdhfjsfsdfs number of = 5;
        span.vale();
        fshf
        }
        $( ".minus-class" ).click(function() {
        $id= data()jhgfdajhdajh
        $.ajax(){
        fjgdhfjsfsdfs number of = 5;
        span.vale();
        }
        $(.filtervcbun ).click(function() {
        kvxckvxckvx
        product.div().emty();
        $(){
        products. carts ... append( <div id="all-products" class="row all-products products">
            @foreach($products as $product)

                <div class="col-md-4 col-lg-4 col-12 col-sm-6 col-xl-3">

                    <div class="" id="{{ $product->id }}" data-id="{{$product->id}}">
                        <img src="{{ asset($product->product_image) }}" alt="">
                        <div class="product-info text-center special_info">
                            <a href="{{route('single_product.get',$product->id)}}">
                                <h6>{{ $product->product_name }}</h6>
                            </a>
                            <small>{{ $product->quantity }}</small>
                            <br>
                            <strong>৳ {{ $product->price }}</strong>

                        </div>


                        <div class="product_cart" id="{{ $product->id }}" data-id="{{$product->id}}">
                            @($product->cart_product->product_id == $product->id)if)
                            <div style="" id="item-plus-minus-{{$product->id}}"
                                 data-id="{{$product->id}}"
                                 class="cart-plus-minus">

                                <div class="plus-minus d-flex test">
                                    <button class="page-minus" id="product-minus-{{$product->id}}">
                                        <strong class="d-flex align-items-center justify-content-center">-</strong>
                                    </button>
                                    <p class="d-flex align-items-center justify-content-center">

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

                                    <button id="product-plus-{{$product->id}}" class="page-plus">
                                        <strong class="d-flex align-items-center justify-content-center">+</strong>
                                    </button>
                                </div>

                            </div>

                            @else
                                <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                <button type="button" id='item-zero-{{$product->id}}' data-id="{{ $product->id }}"
                                        class="yellow-btn cart-add">
                                    Add to cart
                                </button>
                            @endif
                        </div>
                        )

        }
        }
{{--        $( "#target" ).click();--}}
        });
    </scirpt>
@endsection
