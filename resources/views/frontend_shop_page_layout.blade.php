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

{{--    <div class="fixed-top">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white">--}}
{{--            <div class="container-fluid">--}}
{{--                <a id="off-btn"><img src="./images/icons/menu.png" alt=""></a>--}}
{{--                <a class="navbar-brand" href="index.html"><img src="./images/logos/logo.png" alt=""></a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse"--}}
{{--                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                        aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <li class="nav-item ">--}}
{{--                            <a class="nav-link" href="{{route('home-page.index')}}">Home <span class="sr-only">(current)</span></a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item active">--}}
{{--                            <a class="nav-link" href="{{route('shop-page.index')}}shop.html">Shop</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{route('blog-page.index')}}blog.html">Blog</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item single-line d-flex">--}}
{{--                            <a class="nav-link cart-show">--}}
{{--                                <button data-toggle="modal" data-target="#cart"--}}
{{--                                        class="cart-image yellow-btn d-flex align-items-center justify-content-center">--}}
{{--                                    <img src="{{asset('frontend/images/icons/bcart.png')}}" alt="">--}}
{{--                                </button>--}}
{{--                                <div class="red-dot"></div>--}}
{{--                            </a>--}}
{{--                            <a class="nav-link">--}}
{{--                                <button data-toggle="modal" data-target="#login"--}}
{{--                                        class="people-image yellow-btn d-flex align-items-center justify-content-center">--}}
{{--                                    <img src="{{asset('frontend/images/icons/people.png')}}" alt="">--}}
{{--                                </button>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </div>--}}

{{--</header>--}}

{{--<main>--}}

 @yield('content')

{{--</main>--}}

<br><br><br>

<!-- footer -->


@include('frontend.partials.footer')

<script src="{{ asset('frontend/js/product-menu.js') }}"></script>
{{--<script src="{{ asset('frontend/js/cart.js') }}"></script>--}}
{{--<script src="{{ asset('frontend/js/add-to-cart.js') }}"></script>--}}
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
