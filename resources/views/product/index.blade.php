@extends('layouts.home')

@section('title', $viewData['title'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <form action="{{route('shop.filter')}}" method="POST">
                    @csrf
                    <div class="shop-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Каталог</h3>
                            <ul class="categor-list">
                                @php
                                    $menu = App\Models\Catalog::all();
                                @endphp

                                @if($menu)
                                    @foreach($menu as $cat_info)
                                        <li><a href="{{ route('product-cat',$cat_info->slug) }}">{{ $cat_info->title }}</a></li>
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
                                    @php
                                        $max=DB::table('products')->max('price');
                                        // dd($max);
                                    @endphp
                                    <div id="slider-range" data-min="0" data-max="{{$max}}"></div>
                                    <div class="product_filter">
                                        <button type="submit" class="filter_button">Фильтр</button>
                                        <div class="label-input">
                                            <span>Диапазон:</span>
                                            <input style="" type="text" id="amount" readonly/>
                                            <input type="hidden" name="price_range" id="price_range"
                                                   value="@if(!empty($_GET['price'])){{$_GET['price']}}@endif"/>
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
                            @foreach($recent_products as $product)
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="{{$product->picture_path}}" alt="{{$product->picture_path}}">
                                    </div>
                                    <div class="content">
                                        <h5>
                                            <a href="{{route('product-detail',$product->uuid)}}">{{$product->name}}</a>
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
                        @foreach($viewData['products'] as $product)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <p class="card-text">{{ $product->name }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-body-secondary">Камни: Фианит<br>Проба: 585<br>Вес: 10 г</small>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Купить
                                                </button>
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
