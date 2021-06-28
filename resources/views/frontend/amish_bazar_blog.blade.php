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
                    <a class="navbar-brand" href="{{route('home-page.index')}}"><img src="{{asset('frontend/images/logos/logo.png')}}" alt=""></a>
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
                                    <div class="red-dot"></div>
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
    <!-- modal -->

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
                                <p class="reg">
                                    New here ? <a data-toggle="modal" data-target="#registration" data-dismiss="modal">Create an account</a>
                                </p>
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
                        sollicitudin.
                    </p>
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
                            <div class="col-md-10 col-sm-10 col-10">
                                <div id="item1">
                                    <div class="row">
                                        <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                        <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal1">400</span></div>
                                        <div class="col-md-12 col-sm-10 col-10">
                                            <p></p>
                                            <div class="row ">
                                                <div class="col-md-4 col-sm-4 col-4">
                                                    <p class="single d-flex align-items-center justify-content-center">৳
                                                        <span id="itemTotal1">200</span>/kg</p>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                    <p id="cartMinus1"
                                                       class="cartMinus d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                    </p>
                                                    <p class="items"><span id="itemQuantity1">2</span></p>
                                                    <p id="cartPlus1"
                                                       class="cartPlus d-flex justify-content-center align-items-center ">
                                                        <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-sm-2 col-2">
                                                    <p id="cartCross1"
                                                       class="cartCross d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div id="item2">
                                    <div class="row">
                                        <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                        <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal2">400</span></div>
                                        <div class="col-md-12 col-sm-10 col-10">
                                            <p></p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-4">
                                                    <p class="single d-flex align-items-center justify-content-center">৳
                                                        <span id="itemTotal2">200</span>/kg</p>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                    <p id="cartMinus2"
                                                       class="cartMinus d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                    </p>
                                                    <p class="items"><span id="itemQuantity2">2</span></p>
                                                    <p id="cartPlus2"
                                                       class="cartPlus d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-sm-2 col-2">
                                                    <p id="cartCross2"
                                                       class="cartCross d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div id="item3">
                                    <div class="row">
                                        <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                        <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal3">400</span></div>
                                        <div class="col-md-12 col-sm-10 col-10">
                                            <p></p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-4">
                                                    <p class="single d-flex align-items-center justify-content-center">৳
                                                        <span id="itemTotal3">200</span>/kg</p>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                    <p id="cartMinus3"
                                                       class="cartMinus d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                    </p>
                                                    <p class="items"><span id="itemQuantity3">2</span></p>
                                                    <p id="cartPlus3"
                                                       class="cartPlus d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-sm-2 col-2">
                                                    <p id="cartCross3"
                                                       class="cartCross d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div id="item4">
                                    <div class="row">
                                        <div class="cart-font col-md-8 col-sm-8 col-8">Chicken Meat</div>
                                        <div class="col-md-4 col-sm-4 col-4">৳ <span id="subTotal4">400</span></div>
                                        <div class="col-md-12 col-sm-10 col-10">
                                            <p></p>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-4">
                                                    <p class="single d-flex align-items-center justify-content-center">৳
                                                        <span id="itemTotal4">200</span>/kg</p>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-6 d-flex align-items-center">
                                                    <p id="cartMinus4"
                                                       class="cartMinus d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/minus.png')}}" alt="">
                                                    </p>
                                                    <p class="items"><span id="itemQuantity4">2</span></p>
                                                    <p id="cartPlus4"
                                                       class="cartPlus d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/plus.png')}}" alt="">
                                                    </p>
                                                </div>
                                                <div class="col-md-4 col-sm-2 col-2">
                                                    <p id="cartCross4"
                                                       class="cartCross d-flex align-items-center justify-content-center">
                                                        <img src="{{asset('frontend/images/icons/cross.png')}}" alt="">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id='no-items' class="text-center">
                                    <h5>No Items in Cart</h5>
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
                                    <p>৳ <span id="total">1600</span></p>
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

    <!-- blogs -->

    <section>
        <div class="container-fluid">
            <div class="blog-review">
                <div class="blog-width m-auto">
                    <div class="row">
                        <div class="blog-1 col-md-6 col-sm-6 col-12">
                            <a href="singleBlog.html"><img src="{{asset('frontend/images/blogs/blog4.jpeg')}}" alt=""></a>
                        </div>
                        <div class="blog-information col-md-6 col-sm-6 col-12">
                            <h4><a href="singleBlog.html">Chicken is important</a></h4>
                            <small>Suva Karmaker | 6 June, 2020</small>
                            <p></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At lacus neque, nisl, morbi
                                non
                                non metus nulla nibh. Morbi commodo tempor lorem tempor maecenas. Fermentum et
                                sapien
                                ipsum vulputate blandit dignissim mi, feugiat eu. Id est auctor tristique nam ipsum,
                                viverra et. Fermentum ultrices tortor pharetra ut congue.
                            </p>
                        </div>
                        <div class="blog-information col-md-6 col-sm-6 col-12">
                            <h4><a href="singleBlog.html">Chicken is important</a></h4>
                            <small>Suva Karmaker | 6 June, 2020</small>
                            <p></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At lacus neque, nisl, morbi
                                non
                                non metus nulla nibh. Morbi commodo tempor lorem tempor maecenas. Fermentum et
                                sapien
                                ipsum vulputate blandit dignissim mi, feugiat eu. Id est auctor tristique nam ipsum,
                                viverra et. Fermentum ultrices tortor pharetra ut congue.
                            </p>
                        </div>
                        <div class="blog-2 col-md-6 col-sm-6 col-12">
                            <a href="singleBlog.html"><img src="{{asset('frontend/images/blogs/blog4.jpeg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>

    <!-- related blogs -->

    <section>
        <div class="container-fluid">
            <div class="blog-width m-auto">
                <br>
                <h4>Related Blogs</h4>
                <div class="row">
                    <div class="col-md-4 col-12 col-sm-6 col-lg-4 col-xl-3">
                        <div class="blog-info">
                            <img src="{{asset('frontend/images/blogs/blog1.jpeg')}}" alt="">
                            <div class="blog-details">
                                <a href="singleBlog.html"><h6>Chicken is important</h6></a>
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
                                <a href="singleBlog.html"><h6>Dul risus</h6></a>
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
                                <a href="singleBlog.html"><h6>Elementum cras</h6></a>
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
                                <a href="singleBlog.html"><h6>Delicious prawn</h6></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, maiores.
                                </p>
                                <small>23 January, 2020</small>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br>
                <br>
                <hr>
            </div>
        </div>
    </section>

    <br><br>

    <!-- our products -->

    <section>
        <div class="container-fluid">
            <div class="products">
                <div class="">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product cart">
                                <img src="{{asset('frontend/images/shop-items/amish1.png')}}" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Beef Raw Meat</h6>
                                    </a>
                                    <small>500 gm</small>
                                    <br>
                                    <strong>৳ 350</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-0" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-0" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-0">0</span> in Cart</p>
                                        <button id="product-plus-0" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-0' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="{{asset('frontend/images/shop-items/amish2.png')}}" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Loitta Fish</h6>
                                    </a>
                                    <small>250 gm</small>
                                    <br>
                                    <strong>৳ 450</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-1" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-1" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-1">0</span> in Cart</p>
                                        <button id="product-plus-1" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-1' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="{{asset('frontend/images/shop-items/amish3.png')}}" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Chicken Raw Meat</h6>
                                    </a>
                                    <small>250 gm</small>
                                    <br>
                                    <strong>৳ 350</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-2" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-2" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-2">0</span> in Cart</p>
                                        <button id="product-plus-2" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-2' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="{{asset('frontend/images/shop-items/amish4.png')}}" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Lamb Raw Meat</h6>
                                    </a>
                                    <small>500 gm</small>
                                    <br>
                                    <strong>৳ 750</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-3" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-3" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-3">0</span> in Cart</p>
                                        <button id="product-plus-3" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-3' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="{{asset('frontend/images/shop-items/amish5.png')}}" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Prawn Raw Meat</h6>
                                    </a>
                                    <small>500 gm</small>
                                    <br>
                                    <strong>৳ 850</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-4" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-4" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-4">0</span> in Cart</p>
                                        <button id="product-plus-4" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-4' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="{{asset('frontend/images/shop-items/amish6.png')}}" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Sheep Raw Meat</h6>
                                    </a>
                                    <small>500 gm</small>
                                    <br>
                                    <strong>৳ 550</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-5" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-5" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-5">0</span> in Cart</p>
                                        <button id="product-plus-5" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-5' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 col-12 col-sm-6 col-xl-2">
                            <div class="product">
                                <img src="{{asset('frontend/images/shop-items/amish7.png')}}" alt="">
                                <div class="product-info text-center">
                                    <a href="singleProduct.html">
                                        <h6>Rohu Raw Meat</h6>
                                    </a>
                                    <small>500 gm</small>
                                    <br>
                                    <strong>৳ 250</strong>
                                </div>
                                <div style="display: none" id="item-plus-minus-6" class="cart-plus-minus">
                                    <div class="plus-minus d-flex ">
                                        <button id="product-minus-6" class="page-minus"><strong
                                                class="d-flex align-items-center justify-content-center">-</strong></button>
                                        <p class="d-flex align-items-center justify-content-center"><span
                                                class="product-item-quantity" id="product-item-quantity-6">0</span> in Cart</p>
                                        <button id="product-plus-6" class="page-plus"><strong
                                                class="d-flex align-items-center justify-content-center">+</strong></button>
                                    </div>
                                </div>
                                <button id='item-zero-6' class="yellow-btn cart-add">Add to cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="view-all yellow-sh text-center">
            <br><br>
            <button class="text-center yellow-btn blog-anchor"><a href="{{route('shop-page.index')}}">View all Products</a></button>
        </div>
    </section>
    </main>


@endsection

@section('page_plugin_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
            crossorigin="anonymous"></script>
@endsection

@section('page_level_script')

@endsection
