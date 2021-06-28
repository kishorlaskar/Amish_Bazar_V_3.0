<div class="fixed-top">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home-page.index')}}"><img src="{{asset('frontend/images/logos/logo.png')}}" alt=""></a>
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
                        <a class="nav-link">
                            <div class="index-login">
                                <button data-toggle="modal" data-target="#login" class="yellow-btn">
                                    <p>Log In</p>
                                </button>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
