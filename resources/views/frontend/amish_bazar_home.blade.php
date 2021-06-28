@extends('frontend_home_page_layout')
@section('page_level_style')
@endsection
@section('content')


    <header>

        <!-- navbar -->

        {{--   @include('frontend.partials.navbar')--}}

        <div class="fixed-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home-page.index')}}"><img
                            src="{{asset('frontend/images/logos/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('home-page.index')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('shop-page.index')}}">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog-page.index')}}">Blog</a>
                            </li>
                            <li class="nav-item custom-nav">
                                @if(  Auth::user() ==null)
                                    <a class="nav-link">
                                        <div class="index-login">
                                            <button data-toggle="modal" data-target="#login" class="yellow-btn">
                                                <p>Log In</p>
                                            </button>
                                        </div>
                                    </a>
                                @else
                                    <div class="dropdown mt-2 show">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            {{Auth::user()->name}}
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>

                                        </div>
                                    </div>
                                @endif

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


    </header>


    <main>
        <section class="introduction">
            <div class="container-fluid intro">
                <div class="row intro-info">
                    <div class="col-md-1 col-sm-1 col-1 space"></div>
                    <div class="col-md-10 col-sm-10 col-12">
                        <h1>From Farm to You</h1>
                        <p>Get responsibly sourced fresh protein products right at your doorstop.</p>

                        {{--                    <button class='yellow-btn'>Register Now</button>--}}

                        @if(  Auth::user() ==null)
                            <button data-toggle="modal" data-target="#registration" class='yellow-btn'>Register Now</button>
                        @else
                            <button  style="display: none" class='yellow-btn'>Register Now</button>
                        @endif


                    </div>
                </div>
            </div>
            <br>
        </section>


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
                                    {{--                                    <form action="">--}}
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        {{--                                        <input class="form-control" type="email" placeholder="Email Address">--}}
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <p></p>
                                        {{--                                        <input class="form-control" type="password" placeholder="Password">--}}
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <br>
                                        {{--                                        <button type="button" class="yellow-btn">Log In</button>--}}
                                        <button type="submit" class="yellow-btn">
                                            {{ __('Login') }}
                                        </button>
                                        {{--                                    </form>--}}
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="container-fluid">
                                <div class="row modal-button">

                                    <div class="col-md-6 col-sm-6 col-12">
                                        {{--                                    <input class="form-control" type="email" placeholder="Email Address">--}}
                                        <input id="email_2" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email"
                                               placeholder="Email Address">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        {{--                                    <input class="form-control" type="text" placeholder="Username">--}}

                                        <input id="user_name_id" type="text" placeholder="User Name"
                                               class="form-control @error('user_name') is-invalid @enderror"
                                               name="user_name" value="{{ old('user_name') }}" required
                                               autocomplete="User Name" autofocus>

                                        @error('user_name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        {{--                                    <input class="form-control" type="text" placeholder="Your Name">--}}
                                        <input id="name" type="text" placeholder="Your name"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        {{--                                    <input class="form-control" type="text" placeholder="Address">--}}

                                        <input id="address_id" type="text" placeholder="Address"
                                               class="form-control @error('address') is-invalid @enderror"
                                               name="address" value="{{ old('address') }}" autofocus>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        {{--                                    <input class="form-control" type="password" placeholder="Password">--}}

                                        <input id="password_2" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" placeholder="password" required
                                               autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        {{--                                    <input class="form-control" type="password" placeholder="Confirm Password">--}}
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password"
                                               placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="yellow-btn">  {{ __('Register') }}</button>
                                    </div>

                                </div>
                                <br>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <!-- fixed icon -->

        <div class="fix">
            <a data-toggle="modal" data-target="#cart">
                <img src="{{asset('frontend/images/icons/fix.png')}}" alt="">
                <div class="fix-info">
                    <p><span id="total_cart_item">{{$cart_count}} </span> Item</p>
                    <h6>৳ <span id="total_amount_side">{{$total_amount}}</span></h6>
                </div>
            </a>
        </div>

        <!-- category -->

        <section>
            <div class="red-sh category text-center">
                <h2>Shop by Category</h2>
                <p></p>
                <div class="products-anchor">
                    <button class="red-btn"><a href="{{route('shop-page.index')}}">View All Products</a></button>
                </div>
                <br><br><br>
                <div class="container">
                    <div class="all-category d-flex justify-content-center">

                        @foreach($categories as $cat_item)
                            <div class="cat-info cat-info-1 d-flex align-items-center justify-content-center">
                                <a href="{{route('home_category_product.get',$cat_item->id)}}"
                                   data-id="{{$cat_item->id}}" id="{{$cat_item->id}}">
                                    <div class="">
                                        <img src="{{ asset('frontend/images/'.$cat_item->category_image)  }}" alt="">
                                        <br>
                                        <small>{{$cat_item->category_name}}</small>


                                    </div>
                                </a>
                            </div>
                        @endforeach
                        {{--                    <div class="cat-info d-flex align-items-center justify-content-center">--}}
                        {{--                        <a href="#">--}}
                        {{--                            <div class="">--}}
                        {{--                                <img src="{{asset('frontend/images/category-icons/cow.png')}}" alt="">--}}
                        {{--                                <br>--}}
                        {{--                                <small>Cow</small>--}}
                        {{--                            </div>--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="cat-info d-flex align-items-center justify-content-center">--}}
                        {{--                        <a href=#"">--}}
                        {{--                            <div class="">--}}
                        {{--                                <img src="{{asset('frontend/images/category-icons/sheep.png')}}" alt="">--}}
                        {{--                                <br>--}}
                        {{--                                <small>Lamb</small>--}}
                        {{--                            </div>--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="cat-info d-flex align-items-center justify-content-center">--}}
                        {{--                        <a href="#">--}}
                        {{--                            <div class="">--}}
                        {{--                                <img src="{{asset('frontend/images/category-icons/fish.png')}}" alt="">--}}
                        {{--                                <br>--}}
                        {{--                                <small>Fish</small>--}}
                        {{--                            </div>--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="cat-info d-flex align-items-center justify-content-center">--}}
                        {{--                        <a href="#">--}}
                        {{--                            <div class="">--}}
                        {{--                                <img src="{{asset('frontend/images/category-icons/horse.png')}}" alt="">--}}
                        {{--                                <br>--}}
                        {{--                                <small>Horse</small>--}}
                        {{--                            </div>--}}
                        {{--                        </a>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </div>
        </section>

        <br><br>

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
                                {{--                            <div class="text-center">--}}
                                {{--                                <button class="yellow-btn">Checkout</button>--}}
                                {{--                            </div>--}}
                                @if( Auth::user()==null)
                                    <div class="text-center">
                                        {{--                                    <form action="{{route('home')}}">--}}
                                        <button data-toggle="modal" data-target="#login" id="checkout_btn"
                                                class="yellow-btn">Checkout
                                        </button>
                                        {{--                                    </form>--}}
                                    </div>
                                @else
                                    <div class="text-center">
                                        <form action="{{route('home')}}">
                                            <button class="yellow-btn">Checkout</button>
                                        </form>
                                    </div>

                                @endif
                                <br>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <!-- popular products -->

        <section>
            <div class="category container-fluid">
                <div class="red-sh text-center products-anchor">
                    <h2>Popular Products</h2>
                    <p></p>
                    <button class="red-btn"><a href="{{route('shop-page.index')}}">View All Products</a></button>
                </div>
                <br>
                <div class="row products">
                    @foreach($products as $product)
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="" id="{{ $product->id }}" data-id="{{$product->id}}">
                                <img src="{{ asset($product->product_image) }}" alt="">
                                <div class="product-info text-center">
                                    <a href="{{route('single_product.get',$product->id)}}">
                                        <h6>{{ $product->product_name }}</h6>
                                    </a>
                                    <small>{{ $product->quantity }}</small>
                                    <br>
                                    <strong>৳ {{ $product->price }}</strong>
                                </div>
                                <div class="product_cart" id="{{ $product->id }}" data-id="{{$product->id}}">
                                    <div style="display: none" id="item-plus-minus-{{$product->id}}"
                                         class="cart-plus-minus"
                                         data-id="{{$product->id}}">
                                        <div class="plus-minus d-flex ">
                                            <button id="product-minus-{{$product->id}}" class="page-minus"><strong
                                                    class="d-flex align-items-center justify-content-center">-</strong>
                                            </button>
                                            <p class="d-flex align-items-center justify-content-center">
                                                {{--                                        <span--}}
                                                {{--                                            class="product-item-quantity"--}}
                                                {{--                                            id="product-item-quantity-{{$product->id}}">0</span> in Cart--}}
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
                                                    class="d-flex align-items-center justify-content-center">+</strong>
                                            </button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                    <button id='item-zero-{{$product->id}}' data-id="{{ $product->id }}"
                                            class="yellow-btn cart-add">Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


        <!-- blogs -->

        <section class="blog">
            <div class="yellow-sh text-center blog-anchor">
                <h2>Our Blogs</h2>
                <p>see our blog story to decide yourself</p>
                <button class="red-btn"><a href="{{route('blog-page.index')}}">View All</a></button>
            </div>
            <br>
            <div class="container-fliud">
                <div class="m-auto blog-width">
                    <div class="row">
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog1.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Chicken is important</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog2.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Dul risus</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog3.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Elementum cras</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog3.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Delicious prawn</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog1.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>Rui mach</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="blog-info">
                                <img src="{{asset('frontend/images/blogs/blog2.jpeg')}}" alt="">
                                <div class="blog-details">
                                    <a href="singleBlog.html">
                                        <h6>lamb stack</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                    </p>
                                    <small>23 January, 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br>


        @if(Auth::user())
            <input type="hidden" id="hidden_user_id" data-id="{{Auth::user()->id}}" value="{{Auth::user()->id}}">

        @else
            <input type="hidden" id="hidden_user_id" data-id="null" value="null">
        @endif

    </main>




@endsection

@section('page_plugin_script')
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
                {{--                home_category_wise_product: "{!! route('category.home') !!}",--}}
                {{--                home_category_wise_product: "{!! route('home_category_product.get') !!}",--}}

                {{--category_wise_product: "{!! route('category_wise_product.get') !!}",--}}
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


            // cart_test();

            // cartTotal();
            test_cart();
            modal_operation();


            $('#checkout_btn').on('click', function () {

                var user_id = $('#hidden_user_id').data('id');

                console.log(user_id);
                if (user_id == null) {
                    $('#cart').hide();

                }
            });

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
                        // $('.product_cart, .my_cart_item').on('click', function (e) {
                        $('.product_cart').on('click', function (e) {

                            // alert('I am here');

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
                                        $('#modal_cart_items').append('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="frontend/images/icons/cross.png" alt=""></p>  <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">  </div>      </div>               </div>                       </div>       <hr>         </div>');

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

                                    } else if (data.status === "order_created_after_first_order") {
                                        // $('#modal_cart_items').empty();
                                        cartTotal();
                                        var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                        $('#modal_cart_items').append('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="frontend/images/icons/cross.png" alt=""></p>  <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">  </div>      </div>               </div>                       </div>       <hr>         </div>');
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

                                    } else if (data.status === "existing_updated") {
                                        cartTotal();
                                        $('#item' + data.cart_product.id).empty();
                                        var subTotalPrice = data.cart_product.product.price * data.cart_product.product_quantity;
                                        $('#item' + data.cart_product.id).replaceWith('<div class="all_cart_items" id="item' + data.cart_product.id + '" data-id="all_items_cart_id' + data.cart_product.id + '"><div class="row"><div class="cart-font col-md-8 col-sm-8 col-8">' + data.cart_product.product.product_name + '</div> <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal' + data.cart_product.id + '"> ' + subTotalPrice + ' </span> </div>    <div class="col-md-12 col-sm-10 col-10 ">   <p></p>     <div class="row ">         <div class="col-md-4 col-sm-4 col-4">  <p class="single d-flex align-items-center justify-content-center">৳ <span id="itemTotal1">' + data.cart_product.product.price + '</span>kg</p></div> <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center my_cart_item" data-id="' + data.cart_product.product_id + '">  <p id="cartMinus' + data.cart_product.id + '" class="cartMinus d-flex align-items-center justify-content-center"> <img src="frontend/images/icons/minus.png" alt=""></p>  <p class="items"><span class="cart_quantity" id="item_quantity-' + data.cart_product.id + '">' + data.cart_product.product_quantity + '</span></p> <p id="cartPlus' + data.cart_product.id + '" class="cartPlus d-flex justify-content-center align-items-center"><img src="frontend/images/icons/plus.png" alt=""></p>     </div>    <div class="col-md-4 col-sm-2 col-2"><p id="cartCross' + data.cart_product.id + '" class="d-flex align-items-center justify-content-center cartCross" data-id="' + data.cart_product.id + '"><img src="frontend/images/icons/cross.png" alt=""></p> <input type="hidden" data-id="' + data.cart_product.cart_id + '" id="hidden_cart_id">   </div>      </div>               </div>                       </div>       <hr>         </div>');
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
