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
                                    <li><a href="cart.html">Себет</a></li>
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
                                <a href="index.html#">Басты бет</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.html#">Өнімдер</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.html#">Блог</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.html#">Жаңалықтар</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="my-account.html">Аккаунт</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">Біз туралы</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html">Байланыс</a>
                            </li>
                        </ul>
                    </div>
                    <div class="Offcanvas_footer">
                        <span><a href="index.html#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                        <ul>
                            <li class="facebook"><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="index.html#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="index.html#"><i class="fa fa-linkedin"></i></a></li>
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
                            <li class="language"><a href="index.html#"> Қазақша <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="index.html#">Орысша</a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="index.html#">KZT <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="index.html#">USD</a></li>
                                </ul>
                            </li>
                            <li class="top_links"><a href="index.html#">Аккаунт <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_links">
                                    <li><a href="cart.html">Себет</a></li>
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
                            <a href="index.html#"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="index.html#">
                                    <input placeholder="Өнімді іздеу..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="cart_link">
                            <a href="index.html#"><i class="ion-android-cart"></i><span class="cart_text_quantity"> $138.00</span> <i class="fa fa-angle-down"></i></a>
                            <span class="cart_quantity">2</span>
                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="cart_close">
                                    <div class="cart_text">
                                        <h3>cart</h3>
                                    </div>
                                    <div class="mini_cart_close">
                                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="index.html#"><img src="{{ asset('img/s-product/product.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="index.html#">Letraset animal</a>

                                        <span class="quantity">Qty: 1</span>
                                        <span class="price_cart">$60.00</span>

                                    </div>
                                    <div class="cart_remove">
                                        <a href="index.html#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="index.html#"><img src="{{ asset('img/s-product/product2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="index.html#">Natural passages</a>
                                        <span class="quantity">Qty: 1</span>
                                        <span class="price_cart">$69.00</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="index.html#"><i class="ion-android-close"></i></a>
                                    </div>
                                </div>
                                <div class="cart_total">
                                    <span>Subtotal:</span>
                                    <span>138.00</span>
                                </div>
                                <div class="mini_cart_footer">
                                    <div class="cart_button view_cart">
                                        <a href="cart.html">View cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a class="active" href="checkout.html">Checkout</a>
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
                                    <li><a href="{{ route('blog.index') }}">Блог</a></li>
                                    <li><a href="{{ route('news.index') }}">жаңалықтар</a></li>
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
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="widgets_container contact_us">
                        <h3>About Monsta</h3>
                        <div class="footer_contact">
                            <p>Address: Your address goes here.</p>
                            <p>Phone: <a href="tel:0123456789">0123456789</a></p>
                            <p>Email: demo@example.com</p>
                            <ul>
                                <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="index.html#"><i class="ion-social-rss"></i></a></li>
                                <li><a href="index.html#"><i class="ion-social-googleplus"></i></a></li>

                                <li><a href="index.html#"><i class="ion-social-youtube"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="index.html#">Sample Page</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                    <div class="widgets_container widget_menu">
                        <h3>My Account</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="faq.html">Frequently Questions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="widgets_container product_widget">
                        <h3>Top Rated Products</h3>
                        <div class="simple_product">
                            <div class="simple_product_items">
                                <div class="simple_product_thumb">
                                    <a href="index.html#"><img src="{{ asset('img/s-product/product5.jpg') }}" alt=""></a>
                                </div>
                                <div class="simple_product_content">
                                    <div class="tag_cate">
                                        <a href="index.html#">Clothing,</a>
                                        <a href="index.html#">Potato chips</a>
                                    </div>
                                    <div class="product_name">
                                        <h3><a href="index.html#">Donec eu animal</a></h3>
                                    </div>
                                    <div class="product_price">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="simple_product_items">
                                <div class="simple_product_thumb">
                                    <a href="index.html#"><img src="{{ asset('img/s-product/product6.jpg') }}" alt=""></a>
                                </div>
                                <div class="simple_product_content">
                                    <div class="tag_cate">
                                        <a href="index.html#">Women</a>
                                    </div>
                                    <div class="product_name">
                                        <h3><a href="index.html#">Dummy animal</a></h3>
                                    </div>
                                    <div class="product_price">
                                        <span class="old_price">$74.00</span>
                                        <span class="current_price">$69.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_middel">
            <div class="row">
                <div class="col-12">
                    <div class="footer_middel_menu">
                        <ul>
                            <li><a href="index.html#">Home</a></li>
                            <li><a href="index.html#">Online Store</a></li>
                            <li><a href="index.html#">Promotion</a></li>
                            <li><a href="index.html#">Privacu Policy</a></li>
                            <li><a href="index.html#">Terms Of Use</a></li>
                            <li><a href="index.html#">Sitemap</a></li>
                            <li><a href="index.html#">Support</a></li>
                            <li><a href="index.html#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-12">
                    <div class="copyright_area">
                        <p>&copy; 2022 <a href="index.html" class="text-uppercase">MONSTA</a>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com">HasThemes</a></p>
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
                                            <a href="index.html#"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="index.html#"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="index.html#"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="index.html#"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                            <a class="nav-link active" data-bs-toggle="tab" href="index.html#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="index.html#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-bs-toggle="tab" href="index.html#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-bs-toggle="tab" href="index.html#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
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
                                    <a href="product-details.html">See all features</a>
                                </div>
                                <div class="modal_add_to_cart mb-15">
                                    <form action="index.html#">
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
                                        <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="index.html#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="index.html#"><i class="fa fa-linkedin"></i></a></li>
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
<!--news letter popup start-->


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
<script src="{{ asset('js/bpopup.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
