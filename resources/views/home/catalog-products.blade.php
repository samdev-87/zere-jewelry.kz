@extends('layouts.home')

@section('title', $viewData['title'])

@section('content')

    <style>
        /*======================================
        Start Shop Sidebar CSS
        ========================================*/
        .shop-sidebar .single-widget {
            margin-top: 30px;
            padding-right: 30px;
        }
        .shop-sidebar .single-widget .title {
            position: relative;
            font-size: 18px;
            font-weight: 500;
            text-transform: capitalize;
            margin-bottom: 25px;
            display: block;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }
        .shop .range .label-input input {
            border: none;
            margin: 0;
            font-weight: 600;
            font-size: 14px;
            color: #222;
            background: transparent;
        }
        .filter_button{
            /* height:20px; */
            text-align: center;
            background:#F7941D;
            padding:8px 16px;
            margin-top:10px;
            color: white;
        }
        /* Shop Price */
        .shop-sidebar .range .price-filter {
            display: block;
            margin-top: 20px;
        }
        .shop-sidebar .range #slider-range {
            box-shadow: none;
            border: none;
            height: 4px;
            background: #C99A2E;
            color: #C99A2E;
            border-radius: 0;
        }
        .shop-sidebar .range #slider-range .ui-slider-range {
            box-shadow: none;
            background: #222;
            border-radius: 0;
            border: none;
        }
        .shop-sidebar .range .ui-slider-handle.ui-state-default.ui-corner-all {
            width: 14px;
            height: 14px;
            line-height: 10px;
            background: #222;
            border: none;
            border-radius: 100%;
            top: -5px;
        }
        .shop-sidebar .range .label-input {
            margin-top: 15px;
        }
        .shop-sidebar .range .label-input span{
            margin-right:5px;
            color:#282828;
        }
        .shop-sidebar .range .ui-slider-handle.ui-state-default.ui-corner-all {
            background: #C99A2E;
            color: #C99A2E;
            cursor:pointer;
        }
        .shop-sidebar .range .label-input input {
            border: none;
            margin: 0;
            font-weight: 600;
            font-size: 14px;
            color: #222;
            background: transparent;
        }
        .shop-sidebar .range .check-box-list {
            margin-top: 15px;
        }
        .shop-sidebar .range .check-box-list li {
            margin-bottom: 5px;
        }
        .shop-sidebar .range .check-box-list li:last-child{
            margin:0;
        }
        .shop-sidebar .range .check-box-list li label input {
            display: inline-block;
            margin-right: 6px;
            position: relative;
            top: 1px;
        }
        .shop-sidebar .range .check-box-list li label {
            margin: 0;
            font-size: 14px;
            font-weight: 400;
            color:#333;
            cursor:pointer;
        }
        .shop-sidebar .range .check-box-list .count{
            margin-left:5px;
            color:#666;
        }
        /* Category List */
        .shop-sidebar .categor-list {
            margin-top: 10px;
        }
        .shop-sidebar .categor-list li{

        }
        .shop-sidebar .categor-list li {
            margin-bottom: 10px;
        }
        .shop-sidebar .categor-list li:last-child{
            margin-bottom:0px;
        }
        .shop-sidebar .categor-list li a {
            display: inline-block;
            color: #666;
            font-weight: 400;
            font-size: 14px;
            text-transform: capitalize;
        }
        .shop-sidebar .categor-list li a:hover{
            color:#C99A2E;
        }
        /* Recent Post */
        .shop-sidebar .single-post {
            position: relative;
            margin-top: 30px;
            padding-bottom: 30px;
            border-bottom: 1px solid #ddd;
        }
        .shop-sidebar .single-post.first{
            padding-top:0px;
        }
        .shop-sidebar .single-post:last-child{
            padding-bottom:0px;
            border:none;
        }
        .shop-sidebar .single-post .image img{
            height: 80px;
            width: 80px;
            position:absolute;
            left:0;
            top:0;
            border-radius:100%;
        }
        .shop-sidebar .single-post .content{
            padding-left:100px;
        }
        .shop-sidebar .single-post .content h5 {
            line-height: 18px;
        }
        .shop-sidebar .single-post .content h5 a {
            color: #222;
            font-weight: 500;
            font-size: 14px;
            font-weight: 500;
            display: block;
        }
        .shop-sidebar .single-post .content h5 a:hover{
            color:#C99A2E;
        }
        .shop-sidebar .single-post .reviews li{
            display:inline-block;
        }
        .shop-sidebar .single-post .reviews li i{
            color:#999;
        }
        .shop-sidebar .single-post .reviews li.yellow i{
            color:#C99A2E;
        }
        /*======================================
           End Shop Sidebar CSS
        ========================================*/

        /*======================================
           Start Shop Single CSS
        ========================================*/
        .shop.single .product-gallery .slides li{
            position:relative;
        }
        .shop.single .product-gallery .slides li img{
            width:100%;
        }
        .shop.single .flex-control-thumbs li {
            width: 20%;
            position: relative;
            margin: 0 8px 10px -3px;
        }
        .shop.single .flex-control-thumbs li img {
            border: none;
            padding: 0;
            border:1px solid transparent;
        }
        .shop.single .product-des .short h4 {
            font-size: 22px;
            font-weight: 600;
            margin-top: -5px;
            line-height: 28px;
        }
        .shop.single .product-des .rating li{
            display:inline-block;
        }
        .shop.single .product-des .rating li i{
            color:#C99A2E;
        }
        .shop.single .product-des .rating li.dark i{
            color:#555;
        }
        .shop.single .product-des .price s{
            color:#333;
        }
        .shop.single .product-des .price span{
            display:inline-block;
            margin-right:15px;
            color:#C99A2E;
        }
        .shop.single .product-des .color h4 {
            font-size: 18px;
            font-weight: 600;
        }
        .shop.single .product-des .color h4 span {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-top: 4px;
        }
        .shop.single .product-des .color ul{
            margin-top: 10px;
        }
        .shop.single .product-des .color ul li{
            display:inline-block;
            margin-right:5px;
        }
        .shop.single .product-des .color ul li:last-child{
            margin-right:0;
        }
        .shop.single .product-des .color ul li a{
            height:30px;
            width:30px;
            line-height:30px;
            text-align:center;
            display:block;
            background:#333;
        }
        .shop.single .product-des .color ul li a i{
            font-size:11px;
            color:#fff;
            opacity:0;
            visibility:hidden;
            -webkit-transition:all 0.4s ease;
            -moz-transition:all 0.4s ease;
            transition:all 0.4s ease;
        }
        .shop.single .product-des .color ul li a:hover i{
            opacity:1;
            visibility:visible;
        }
        .shop.single .product-des .size h4{
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-top: 0px;
        }
        .shop.single .product-des .size ul{
            display:inline-block;
            margin-top: 10px;
        }
        .shop.single .product-des .size ul li {
            display: inline-block;
            margin-right: 5px;
        }
        .shop.single .product-des .size ul li:last-child{
            margin-right:0;
        }
        .shop.single .product-des .size ul li a {
            display: block;
            height: 30px;
            width: 36px;
            border: 1px solid #eee;
            text-align: center;
            line-height: 30px;
            font-size: 14px;
        }
        .shop.single .product-des .size ul li a:hover{
            color:#C99A2E;
        }
        .shop.single .quantity h6 {
            display: inline-block;
            margin-right: 10px;
            font-size: 15px;
            font-weight: 500;
        }
        .shop.single .cat a:hover{
            color:#C99A2E;
        }
        /* Product Tab */
        .shop.single .nav-tabs li {
            margin-right: 10px;
        }
        .shop.single .nav-tabs li:last-child{
            margin-right:0;
        }
        .shop.single .nav-tabs li a {
            border: 0px solid;
            border-radius: 0px;
            background: #fff;
            color: #333;
            padding: 10px 30px;
            font-weight: 500;
            font-size: 14px;
            border: 1px solid #eee;
        }
        .shop.single .nav-tabs li a i{
            margin-right:10px;
        }
        .shop.single .nav-tabs li:hover a{
            background:#C99A2E;
            color:#fff;
            border-color:transparent;
        }
        .shop.single .single-des h4{
            margin-bottom:15px;
            font-weight:500;
            font-size:22px;

        }
        .shop.single .single-des ul{}
        .shop.single .single-des ul li {
            color: #555;
            display: block;
            margin-bottom: 10px;
            position:relative;
            padding-left:20px;
        }
        .shop.single .single-des ul li::before {
            position: absolute;
            content: "";
            left: 0;
            top: 9px;
            height: 7px;
            width: 7px;
            background: #C99A2E;
            border-radius: 50%;
        }
        .shop.single .item-info tbody td {
            border: 1px solid #e6e6e6;
            padding: 10px;
        }
        .shop.single .avg-ratting h4 {
            font-size: 18px;
            margin: 0;
        }
        .shop.single .avg-ratting h4 span{
            font-size:14px;
        }
        .shop.single .rating-author img {
            width: 60px;
            border-radius: 100%;
            height: 60px;
        }
        .shop.single .rating-des h6 {
            font-size: 14px;
            font-weight: 600;
            line-height: 18px;
        }
        .shop.single .ratting-main .single-rating ul{}
        .shop.single .ratting-main .single-rating ul li{
            display:inline-block;
        }
        .shop.single .ratting-main .single-rating ul li i{
            color:#C99A2E;
            font-size:14px;
        }
        .shop.single .review-inner label {
            display: inline-block;
            margin: 0 5px 0 0;
        }
        .shop.single .review-inner .ratings ul{
            display:inline-block;
        }
        .shop.single .ratting-main .single-rating ul {
            display: inline-block;
            margin-right: 5px;
        }
        .shop.single .comment-review .add-review h5{
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 7px;
        }
        .shop.single .comment-review .add-review p{
            color:#333;
        }
        .shop.single .comment-review h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 7px;
            margin-top:20px;
        }
        .shop.single .comment-review .rating li {
            display:inline-block;
        }
        .shop.single .comment-review .rating li i{
            color:#C99A2E;
            font-size: 14px;
        }
        .shop.single .rating-des p{
            margin-top:5px;
        }
        .shop.single .avg-ratting h4 {
            font-size: 20px;
            color: #333;
        }
        .shop.single .form .form-group input {
            width: 100%;
            height: 45px;
            padding: 10px 20px;
            background: #fff;
            border: 1px solid #ddd;
            resize: none;
            border-radius: 0;
            color: #333;
        }
        .shop.single .form .form-group button {
            border: none;
            padding: 17px 50px;
        }
        .shop.single .form .form-group textarea {
            width: 100%;
            height:200px;
            padding: 20px;
            background:#fff;
            border:1px solid #ddd;
            resize:none;
            border-radius:0;
            color:#333;
        }
        .shop.single .form .form-group label {
            color: #333;
            position: relative;
        }
        .shop.single .form .form-group label span {
            color: #ff2c18;
            display: inline-block;
            position: absolute;
            right: -12px;
            top: 4px;
            font-size: 16px;
        }
        /*======================================
           End Shop Single CSS
        ========================================*/

    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <form action="{{--{{route('shop.filter')}}--}}" method="POST">
                    @csrf
                    <div class="shop-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Каталог</h3>
                            <ul class="categor-list">
                                @if($viewData['menu'])
                                    @foreach($viewData['menu'] as $cat_info)
                                        <li><a href="{{ route('catalog.products',$cat_info->uuid) }}">{{ $cat_info->name }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <!--/ End Single Widget -->

                        <!-- Shop By Price -->
                        <div class="single-widget range">
                            <h3 class="title">По Цене</h3>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range" data-min="0" data-max="1000000"></div>
                                    <div class="product_filter">
                                        <button type="submit" class="filter_button">Фильтр</button>
                                        <div class="label-input">
                                            <span>Диапазон:</span>
                                            <input style="" type="text" id="amount" readonly/>
                                            <input type="hidden" name="price_range" id="price_range" value="@if(!empty($_GET['price'])){{$_GET['price']}}@endif"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Shop By Price -->

                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Новинки</h3>
                            {{-- {{dd($recent_products)}} --}}
                            @foreach($viewData['recent_products'] as $product)
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="{{ asset('img/product/' . $product->vendor . '.jpg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            <a href="{{route('product.show',$product->uuid)}}">{{$product->name}}</a>
                                        </h5>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            @endforeach
                        </div>
                        <!--/ End Single Widget -->

                    </div>
                </form>
            </div>

            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach($viewData['catalog']->products as $product)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <img src="{{ asset('img/product/' . $product->vendor . '.jpg') }}" alt="" class="img-fluid">
                                        <p class="card-text">{{ $product->name }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-body-secondary">Камни: Фианит<br>Проба: 585<br>Средний вес: {{ $product->average_weight }} г</small>
                                            <div class="btn-group">
                                                <a href="{{ route('home.product-detail', $product->uuid) }}" class="btn btn-sm btn-outline-secondary">Купить</a>
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

@endsection
