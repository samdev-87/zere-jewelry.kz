@extends('layouts.home')

@section('title', $viewData['title'])

@section('content')

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/img/slider/banner-1.jpg') }}" class="d-block w-100" alt="banner-1">
                    <div class="carousel-caption d-none d-md-block text-end">
                        <h3>18 500 тг/гр</h3>
                        <p>Цена на сегодняшний день <span class="text-warning">Золото проба 585</span></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider/banner-1.jpg') }}" class="d-block w-100" alt="banner-1">
                    <div class="carousel-caption d-none d-md-block text-end">
                        <h3>18 500 тг/гр</h3>
                        <p>Цена на сегодняшний день <span class="text-warning">Золото проба 585</span></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider/banner-1.jpg') }}" class="d-block w-100" alt="banner-1">
                    <div class="carousel-caption d-none d-md-block text-end">
                        <h3>18 500 тг/гр</h3>
                        <p>Цена на сегодняшний день <span class="text-warning">Золото проба 585</span></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h2 class="text-center m-5">Наши новинки</h2>

        <div class="row">
            @foreach($viewData['products'] as $product)
                <div class="col">
                    <img src="{{ asset('img/product/' . $product->vendor . '.jpg') }}" alt="" class="img-fluid">
                    <div class="text-center p-1">{{ $product->name }}</div>
                </div>
            @endforeach
        </div>

    </div>

    <div class="container">
        <h2 class="text-center m-5">Наши ассортимент</h2>

        @for($i = 0; $i < count($viewData['catalogs']);  $i+=3)
            <div class="row mb-3">
                <div class="col text-center">
                    <h3><a href="{{ route('catalog.products', ['uuid' => $viewData['catalogs'][$i]->uuid]) }}">{{ $viewData['catalogs'][$i]->name }}</a></h3>
                    <img src="https://via.placeholder.com/376x331" alt="" class="img-fluid">
                </div>
                @if(isset($viewData['catalogs'][$i+1]))
                    <div class="col text-center">
                        <h3><a href="{{ route('catalog.products', ['uuid' => $viewData['catalogs'][$i+1]->uuid]) }}">{{ $viewData['catalogs'][$i+1]->name }}</a></h3>
                        <img src="https://via.placeholder.com/376x331" alt="" class="img-fluid">
                    </div>
                @endif
                @if(isset($viewData['catalogs'][$i+2]))
                    <div class="col text-center">
                        <h3><a href="{{ route('catalog.products', ['uuid' => $viewData['catalogs'][$i+2]->uuid]) }}">{{ $viewData['catalogs'][$i+2]->name }}</a></h3>
                        <img src="https://via.placeholder.com/376x331" alt="" class="img-fluid">
                    </div>
                @endif
            </div>
        @endfor
    </div>

    <div class="container">
        <h2 class="text-center m-5">Наши преимущества</h2>

        <div class="row mb-3">
            <div class="col text-center">
                <div class="h2">1</div>
                <i class="fa fa-3x fa-flag"></i>
                <h4>Местное производство</h4>
            </div>
            <div class="col text-center">
                <div class="h2">2</div>
                <i class="fa fa-3x fa-bank"></i>
                <h4>Большой ассортимент</h4>
            </div>
            <div class="col text-center">
                <div class="h2">3</div>
                <i class="fa fa-3x fa-gift"></i>
                <h4>Индивидуальные условия</h4>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col text-center">
                <div class="h2">4</div>
                <i class="fa fa-3x fa-ship"></i>
                <h4>Любые объемы доставки</h4>
            </div>
            <div class="col text-center">
                <div class="h2">5</div>
                <i class="fa fa-3x fa-star"></i>
                <h4>Новинки каждый месяц</h4>
            </div>
            <div class="col text-center">
                <div class="h2">6</div>
                <i class="fa fa-3x fa-home"></i>
                <h4>Гарантия качества</h4>
            </div>
        </div>
    </div>

@stop
