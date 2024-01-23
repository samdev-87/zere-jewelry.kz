<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ZERE - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- CSS
    ========================= -->
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--modernizr min js here-->
    <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<!--Offcanvas menu area start-->
<div class="off_canvars_overlay"></div>

<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="welcome_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span>"Eveniet, sed!"</span></p>
                    </div>

                    <div class="top_right text-right">
                        <ul>
                            <li class="language">
                                <a href="#"> Қазақша <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#"> Орысша</a></li>
                                </ul>
                            </li>
                            <li class="currency">
                                <a href="#">KZT <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </li>
                            <li class="top_links">
                                <a href="#">Аккаунт <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="{{ route('cart.index') }}">Себет</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="home_contact">
                        <div class="contact_box">
                            <label>Мекен жайы</label>
                            <p>Шымкент</p>
                        </div>
                        <div class="contact_box">
                            <label>Телефон нөмірі</label>
                            <p><a href="tel:77071210987">+77071210987</a></p>
                        </div>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="{{ route('home.index') }}">Басты бет</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Өнімдер</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Блог</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Жаңалықтар</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Біз туралы</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Байланыс</a>
                            </li>
                        </ul>
                    </div>
                    <div class="Offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@zere.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<!--header area start-->
<header class="header_area">
    <!--header top start-->
    <div class="header_top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7 col-md-12">
                    <div class="welcome_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span>"Laboriosam, mollitia"</span></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="top_right text-right">
                        <ul>
                            <li class="language"><a href="#"> Қазақша <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#">Орысша</a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="#">KZT <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </li>
                            <li class="top_links"><a href="#">Аккаунт <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="{{ route('cart.index') }}">Себет</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header top start-->

    <!--header middel start-->
    <div class="header_middel">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="home_contact">
                        <div class="contact_box">
                            <label>Мекен жайы</label>
                            <p>Шымкент</p>
                        </div>
                        <div class="contact_box">
                            <label>Телефон нөмірі</label>
                            <p><a href="tel:77071210987">+7 707 121 09 87</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="logo">
                        <a href="{{ route('home.index') }}"><img src="{{ asset('img/logo/logo-b.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7 col-6">
                    <div class="middel_right">
                        <div class="search_btn">
                            <a href="#"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="#">
                                    <input placeholder="Өнімді іздеу..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="cart_link">
                            <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity"> $0.00</span> <i class="fa fa-angle-down"></i></a>
                            <span class="cart_quantity">0</span>
                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="cart_close">
                                    <div class="cart_text">
                                        <h3>Себет</h3>
                                    </div>
                                    <div class="mini_cart_close">
                                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="{{ asset('img/s-product/product.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Letraset animal</a>

                                        <span class="quantity">Qty: 1</span>
                                        <span class="price_cart">$60.00</span>

                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_total">
                                    <span>Қорытынды:</span>
                                    <span></span>
                                </div>
                                <div class="mini_cart_footer">
                                    <div class="cart_button view_cart">
                                        <a href="{{ route('cart.index') }}">Себетті көру</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a class="active" href="#">Тапсырыс беру</a>
                                    </div>
                                </div>

                            </div>
                            <!--mini cart end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header middel end-->

    <!--header bottom satrt-->
    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="logo_sticky">
                            <a href="{{ route('home.index') }}"><img src="{{ asset('img/logo/logo-b.png') }}" alt=""></a>
                        </div>
                        <div class="main_menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{ route('home.index') }}">Басты бет</a></li>
                                    <li><a href="{{ route('product.index') }}">Өнімдер</a></li>
{{--                                    <li><a href="{{ route('news.index') }}">жаңалықтар</a></li>--}}
                                    <li><a href="#">Біз туралы</a></li>
                                    <li><a href="#">Байланыс</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--header bottom end-->
</header>
<!--header area end-->

@yield('content')

<!--footer area start-->
<footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-12">
                    <div class="copyright_area">
                        <p>&copy; 2023 <span class="text-uppercase">ZERE</span>.</p>
                        <img src="{{ asset('img/icon/papyel2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Donec eu furniture</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price" >$78.99</span>
                                </div>
                                <div class="see_all">
                                    <a href="#">See all features</a>
                                </div>
                                <div class="modal_add_to_cart mb-15">
                                    <form action="#">
                                        <input min="0" max="100" step="2" value="1" type="number">
                                        <button type="submit">add to cart</button>
                                    </form>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area start-->

<!--news letter popup start-->
<div class="newletter-popup">
    <div id="boxes" class="newletter-container">
        <div id="dialog" class="window">
            <div id="popup2">
                <span class="b-close"><span>close</span></span>
            </div>
            <div class="box">
                <div class="newletter-title">
                    <h2>Newsletter</h2>
                </div>
                <div class="box-content newleter-content">
                    <label class="newletter-label">Enter your email address to subscribe our notification of our new post &amp; features by email.</label>
                    <div id="frm_subscribe">
                        <form name="subscribe" id="subscribe_popup">
                            <!-- <span class="required">*</span><span>Enter you email address here...</span>-->
                            <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail" placeholder="Enter you email address here...">
                            <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                            <div id="notification"></div>
                            <a class="theme-btn-outlined" onclick="email_subscribepopup()"><span>Subscribe</span></a>
                        </form>
                        <div class="subscribe-bottom">
                            <input type="checkbox" id="newsletter_popup_dont_show_again">
                            <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                        </div>
                    </div>
                    <!-- /#frm_subscribe -->
                </div>
                <!-- /.box-content -->
            </div>
        </div>

    </div>
    <!-- /.box -->
</div>

<!-- JS
============================================ -->

<!-- Plugins JS -->
<!--jquery min js-->
<script src="{{ asset('js/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/owl.carousel.main.js') }}"></script>
<script src="{{ asset('js/jquery.nice.select.js') }}"></script>
<script src="{{ asset('js/scrollup.js') }}"></script>
<script src="{{ asset('js/ajax.chimp.js') }}"></script>
<script src="{{ asset('js/jquery.ui.js') }}"></script>
<script src="{{ asset('js/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('js/imagesloaded.js') }}"></script>
<script src="{{ asset('js/isotope.main.js') }}"></script>
<script src="{{ asset('js/jqquery.ripples.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
