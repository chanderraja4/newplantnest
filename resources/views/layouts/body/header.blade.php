@php
    
    use App\Http\Controllers\CartController;
    
    $total = 0;
    
    if (Session::has('usernew')) {
        $total = CartController::cartItem();
    } else {
    }
@endphp

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            @if (Session::has('usernew'))
                <a href="{{ url('/user/logout') }}">Logout</a>
            @else
                <a href="{{ url('login/user') }}">Sign In</a>
            @endif
            <a href="{{ url('/register/user') }}">Sign Up</a>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="" class="search-switch"><img
                src="{{ asset('frontend/assets/img/icon/search.png') }}" alt=""></a>
        <a href="{{  url('/wishlist')  }}"><img src="{{ asset('frontend/assets/img/icon/heart.png') }}" alt=""></a>
        <a href="{{ url('/cart') }}"><img src="{{ asset('frontend/assets/img/icon/cart.png') }}"
                alt=""> <span></span></a>
        <div class="price">({{ $total }})</div>
        <a href="{{ url('/orderlist') }}" class="ms-2"><img src="{{ asset('frontend/assets/img/icon/order.png') }}"
            alt="" width="30px" height="25px" class="bg-transparent"> <span></span></a>
        
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            @if (Session::has('usernew'))
                                <a href="{{ url('/user/logout') }}">Logout</a>
                            @else
                                <a href="{{ url('user/login') }}">Sign In</a>
                            @endif
                            @if (Session::has('usernew'))
                            {{-- <a href="{{ url('/logout/user') }}">Logout</a> --}}
                            @else
                            <a href="{{ url('/user/register') }}">Sign Up</a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/img/green plant designs-03.png') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{ (request()->is('shop')) ? 'active' : '' }}"><a href="{{ url('shop') }}">Shop</a></li>
                        <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('about') }}">About Us</a></li>

                        <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                        <!-- <li><a href="./blog.html">Plant Care</a></li> -->
                        <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact Us</a></li>
                        <li class="{{ (request()->is('profile')) ? 'active' : '' }}"><a href="{{ url('/profile') }}">My Account</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="" class="search-switch"><img
                            src="{{ asset('frontend/assets/img/icon/search.png') }}" alt=""></a>
                    <a href="{{  url('/wishlist')  }}"><img src="{{ asset('frontend/assets/img/icon/heart.png') }}" alt=""></a>
                    <a href="{{ url('/cart') }}"><img src="{{ asset('frontend/assets/img/icon/cart.png') }}"
                            alt=""> <span></span></a>
                    <div class="price">({{ $total }})</div>
                    <a href="{{ url('/orderlist') }}" class="ms-2"><img src="{{ asset('frontend/assets/img/icon/order.png') }}"
                        alt="" width="30px" height="25px" class="bg-transparent"> <span></span></a>
                    
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
