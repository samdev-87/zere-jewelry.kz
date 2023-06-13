@extends('layouts.app')

@section('title', 'Басты бет')

@section('content')

    <!--slider area start-->
    <div class="slider_area owl-carousel">
        <div class="single_slider" data-bgimg="{{ asset('img/slider/slider1.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <p>жаңа бұйымдар - 10% жеңілдік</p>
                            <h1>zere collection</h1>
                            <p class="slider_price">басталу бағасы <span>45 990 теңге</span></p>
                            <a class="button" href="shop.html">сатып алу</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider" data-bgimg="{{ asset('img/slider/slider2.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <p>комплект - 10% жеңілдік</p>
                            <h1>zere toi style</h1>
                            <p class="slider_price">басталу бағасы <span>89 990 теңге</span></p>
                            <a class="button" href="shop.html">сатып алу</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider area end-->

    <!--banner area start-->
    <section class="banner_section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('img/bg/banner1.jpg') }}" alt=""></a>
                            <div class="banner_content">
                                <p>Сақина Дизайны</p>
                                <h2>Класс Түрі</h2>
                                <span>45 000 тг. бастап</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('img/bg/banner2.jpg') }}" alt=""></a>
                            <div class="banner_content">
                                <p>Ерекше Дизайны</p>
                                <h2>Класс Түрі</h2>
                                <span>55 000 тг. бастап</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner bottom">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{ asset('img/bg/banner3.jpg') }}" alt=""></a>
                            <div class="banner_content">
                                <p>Заманауи дизайны</p>
                                <h2>Класс Түрі</h2>
                                <span>30% жеңілдікпен сату</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="messages_info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="index.html#">Alias, quibusdam.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section p_section1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="index.html#featured" role="tab"
                                       aria-controls="featured" aria-selected="true">Тандаулы</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="index.html#arrivals" role="tab"
                                       aria-controls="arrivals" aria-selected="false">Жаңа түсілім</a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="index.html#onsale" role="tab" aria-controls="onsale"
                                       aria-selected="false">Жаппай сатылым</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="featured" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html">
                                                        <img src="{{ asset('img/product/product1.jpg') }}" alt="">
                                                    </a>
                                                    <a class="secondary_img" href="product-details.html">
                                                        <img src="{{ asset('img/product/product2.jpg') }}" alt="">
                                                    </a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top"
                                                                       title="Add to Wishlist" data-bs-toggle="tooltip"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$55.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product10.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product12.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product11.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$50.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">men</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product11.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">men</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product13.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product12.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top"
                                                                       title="Add to Wishlist" data-bs-toggle="tooltip"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="arrivals" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product10.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product11.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top"
                                                                       title="Add to Wishlist" data-bs-toggle="tooltip"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$75.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product13.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">men</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product11.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">men</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$55.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product13.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product12.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="onsale" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top"
                                                                       title="Add to Wishlist" data-bs-toggle="tooltip"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product7.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$45.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product8.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product9.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product10.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product11.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product12.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product13.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product2.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product3.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product1.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product4.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product10.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product13.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">men</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$85.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product11.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">men</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product13.jpg') }}"
                                                            alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product12.jpg') }}"
                                                            alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Clothing,</a>
                                                        <a href="index.html#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product6.jpg') }}" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img
                                                            src="{{ asset('img/product/product5.jpg') }}" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="index.html#" data-bs-toggle="modal"
                                                           data-bs-target="#modal_box" data-placement="top"
                                                           data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="index.html#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="index.html#"><i
                                                                            class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span
                                                                            class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html"
                                                                                           title="add to cart">add to
                                                                        cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i
                                                                            class="ion-ios-settings-strong"></i></a>
                                                                </li>
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
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->

    <!--banner fullwidth start-->
    <section class="banner_fullwidth">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="banner_text">
                        <p>Sale Off 20% All Products</p>
                        <h2>New Trending Collection</h2>
                        <span>We Believe That Good Design is Always in Season</span>
                        <a href="shop.html">shopping Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section p_bottom p_section1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Ең Көп Сатылатын Өнімдер</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_container bottom">
                            <div class="custom-row product_row1">
                                @foreach($viewData['products'] as $product)
                                    <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{ route('product.show', ['id' => $product['id']]) }}">
                                                <img src="{{ asset('/img/'.$product['img']['primary']) }}" alt="{{ $product['name'] }}">
                                            </a>
                                            <a class="secondary_img" href="{{ route('product.show', ['id' => $product['id']]) }}">
                                                <img src="{{ asset('/img/'.$product['img']['secondary']) }}" alt="{{ $product['name'] }}">
                                            </a>
                                            <div class="quick_button">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                   data-placement="top" data-original-title="quick view">жылдам қарау</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                @foreach($product['categories'] as $cat)
                                                    <a href="index.html#">{{ $cat }}</a>
                                                @endforeach
                                            </div>
                                            <h3><a href="product-details.html">{{ $product['name'] }}</a></h3>
                                            @if(isset($product['price']['old'])) <span class="old_price">{{ $product['price']['old'] }} тг.</span> @endif
                                            <span class="current_price">{{ is_array($product['price']) ? $product['price']['current'] : $product['price'] }} тг.</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="ion-ios-star-outline"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="ion-ios-star-outline"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="ion-ios-star-outline"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="ion-ios-star-outline"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="ion-ios-star-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>{{ $product['description'] }}</p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li>
                                                            <a href="wishlist.html" data-placement="top"
                                                               title="Add to Wishlist" data-bs-toggle="tooltip">
                                                                <span class="icon icon-Heart"></span>
                                                            </a>
                                                        </li>
                                                        <li class="add_to_cart">
                                                            <a href="cart.html" title="add to cart">add to cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->

    <!--blog section area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Жаңалықтар</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_wrapper blog_column3 owl-carousel">
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/blog1.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Blog image post</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>

                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/blog2.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/blog3.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Video</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/blog2.jpg') }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Maecenas ultricies</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                        posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section area end-->

    <!--Newsletter area start-->
    <div class="newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_content">
                        <h2>Our Newsletter</h2>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Email address..."/>
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Newsletter area start-->
@stop
