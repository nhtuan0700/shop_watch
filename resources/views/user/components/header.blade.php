<!-- Header Area Start -->
<header class="header headery-style-1">
    <div class="header-top header-top-1">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row">
                    <ul class="social social-round mr--20">
                        <li class="social__item"><a href="twitter.com" class="social__link"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="social__item"><a href="plus.google.com" class="social__link"><i
                                    class="fa fa-google-plus"></i></a></li>
                        <li class="social__item"><a href="facebook.com" class="social__link"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="social__item"><a href="youtube.com" class="social__link"><i
                                    class="fa fa-youtube"></i></a></li>
                        <li class="social__item"><a href="instagram.com" class="social__link"><i
                                    class="fa fa-instagram"></i></a></li>
                    </ul>
                    <p class="header-text">Free shipping on all domestic orders with coupon code
                        <span>“Watches2018”</span></p>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-nav d-flex justify-content-lg-end justify-content-center">
                        <div class="language-selector header-top-nav__item">
                            <div class="dropdown header-top__dropdown"><a class="dropdown-toggle"
                                                                          id="languageID" data-toggle="dropdown" aria-haspopup="true"
                                                                          aria-expanded="false"> EN-GB <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="languageID"><a class="dropdown-item"
                                                                                           href="#"><img src="{{ asset('user/img/header/1.jpg') }}" alt="English">English</a><a
                                        class="dropdown-item" href="#"><img src="{{ asset('user/img/header/2.jpg') }}"
                                                                            alt="Français">Français</a></div>
                            </div>
                        </div>
                        <div class="currency-selector header-top-nav__item">
                            <div class="dropdown header-top__dropdown"><a class="dropdown-toggle"
                                                                          id="currencyID" data-toggle="dropdown" aria-haspopup="true"
                                                                          aria-expanded="false"> USD <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="currencyID"><a class="dropdown-item"
                                                                                           href="#">&euro; Uro</a><a class="dropdown-item" href="#">&pound; Pound
                                        Sterling</a><a class="dropdown-item" href="#">&dollar; Us Dollar</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-info header-top-nav__item">
                            @if(!Auth::check())
                                <div class="dropdown header-top__dropdown"><a class="dropdown-toggle" id="userID"
                                                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tài khoản
                                         <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="userID"><a class="dropdown-item"
                                                                                           href="{{ route('signup') }}">Đăng ký</a><a class="dropdown-item"
                                                                                                                                     href="{{ route('login') }}">Đăng nhập</a></div>
                                </div>
                            @else
                                <div class="dropdown header-top__dropdown"><a class="dropdown-toggle" id="userID"
                                                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="userID"><a class="dropdown-item"
                                                                                           href="{{ route('logout') }}">Đăng xuất</a>  </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-top-1">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-md-5 col-sm-6 order-lg-1 order-2">
                    <div class="contact-info"><img src="{{ asset('user/img/icons/icon_phone.png') }}" alt="Phone Icon">
                        <p>Call us <br>Free Support: (012) 800 456 789</p>
                    </div>
                </div>
                <div class="col-lg-2 col-12 order-lg-2 order-1 text-center"><a href="index.html"
                                                                               class="logo-box mb-md--30"><img src="{{ asset('user/img/logo/logo.png') }}" alt="logo"></a></div>
                <div class="col-lg-5 col-md-7 col-sm-6 order-lg-3 order-3">
                    <div class="header-toolbar">
                        <div class="search-form-wrapper search-hide">
                            <form action="#" class="search-form"><input type="text" name="search" id="search"
                                                                        class="search-form__input" placeholder="Search entire store here.."><button
                                    type="submit" class="search-form__submit"><i
                                        class="icon_search"></i></button></form>
                        </div>
                        <ul class="header-toolbar-icons">
                            <li class="search-box"><a href="#" class="bordered-icon search-btn"
                                                      aria-expanded="false"><i class="icon_search"></i></a></li>
                            <li class="wishlist-icon"><a href="wishlist.html" class="bordered-icon"><i
                                        class="fa fa-heart"></i></a></li>
                            <li class="mini-cart-icon">
                                <div class="mini-cart mini-cart--1"><a
                                        class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown"><span
                                            class="mini-cart__count">0</span><i
                                            class="icon_cart_alt mini-cart__icon"></i><span
                                            class="mini-cart__ammount">80.00 <i
                                                class="fa fa-angle-down"></i></span></a>
                                    <div class="mini-cart__dropdown-menu">
                                        <div class="mini-cart__content" id="miniCart">
                                            <div class="mini-cart__item">
                                                <div class="mini-cart__item--single">
                                                    <div class="mini-cart__item--image"><img
                                                            src="{{ asset('assets/img/products/1-1-450x450.jpg') }}"
                                                            alt="product"></div>
                                                    <div class="mini-cart__item--content">
                                                        <h4 class="mini-cart__item--name"><a
                                                                href="product-details.html">Dell Inspiron 24</a>
                                                        </h4>
                                                        <p class="mini-cart__item--quantity">x1</p>
                                                        <p class="mini-cart__item--price">$100.00</p>
                                                    </div><a class="mini-cart__item--remove" href=""><i
                                                            class="icon_close"></i></a>
                                                </div>
                                                <div class="mini-cart__item--single">
                                                    <div class="mini-cart__item--image"><img
                                                            src="{{ asset('user/img/products/2-2-450x450.jpg') }}"
                                                            alt="product"></div>
                                                    <div class="mini-cart__item--content">
                                                        <h4 class="mini-cart__item--name"><a
                                                                href="product-details.html">Acer Aspire AIO
                                                                <br>-<small>Color Swatch Black</small></a></h4>
                                                        <p class="mini-cart__item--quantity">x1</p>
                                                        <p class="mini-cart__item--price">$100.00</p>
                                                    </div><a class="mini-cart__item--remove" href=""><i
                                                            class="icon_close"></i></a>
                                                </div>
                                            </div>
                                            <div class="mini-cart__calculation">
                                                <p><span class="mini-cart__calculation--item">Sub-Total
                                                                :</span><span
                                                        class="mini-cart__calculation--ammount">$1,070.00</span>
                                                </p>
                                                <p><span class="mini-cart__calculation--item">Eco Tax (-2.00)
                                                                :</span><span
                                                        class="mini-cart__calculation--ammount">$4.00</span></p>
                                                <p><span class="mini-cart__calculation--item">Eco VAT (20%)
                                                                :</span><span
                                                        class="mini-cart__calculation--ammount">$214.00</span>
                                                </p>
                                                <p><span class="mini-cart__calculation--item">Eco Total
                                                                :</span><span
                                                        class="mini-cart__calculation--ammount">$1,288.00</span>
                                                </p>
                                            </div>
                                            <div class="mini-cart__btn"><a href="cart.html"
                                                                           class="btn btn-fullwidth btn-style-1">View Cart</a><a
                                                    href="checkout.html"
                                                    class="btn btn-fullwidth btn-style-1">Checkout</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
        <div class="container position-static">
            <div class="row">
                <div class="col-12 position-static text-center">
                    <nav class="main-navigation">
                        <ul class="mainmenu">
                            <li class="mainmenu__item"><a href="{{ route('index') }}" class="mainmenu__link">Trang chủ</a>
                            </li>
                            <li class="mainmenu__item"><a href="{{ route('product.index') }}" class="mainmenu__link">Sản phẩm</a>
                            </li>
                            <li class="mainmenu__item"><a href="{{ route('blog.index') }}" class="mainmenu__link">Blog</a>
                            </li>
                            <li class="mainmenu__item menu-item-has-children has-children"><a href="#"
                                                                                              class="mainmenu__link">Trang</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('cart.index') }}">Giỏ hàng</a></li>
                                    <li><a href="{{ route('checkout.index') }}">Thanh toán</a></li>
                                </ul>
                            </li>
                            <li class="mainmenu__item"><a href="#" class="mainmenu__link">Liên hệ
                                    </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header><!-- Header Area End -->
