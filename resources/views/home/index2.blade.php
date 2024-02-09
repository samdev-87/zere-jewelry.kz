@extends('layouts.home')

@section('title', $viewData['title'])

@section('content')

    <style>
        .carousel-caption {
            font-weight: 600;
            width: 450px;
            height: 350px;
            top: 65px;
            left: 700px;
            border-radius: 10px;
            background: rgba(217, 217, 217, 0.58);
        }
        .fz3h {
            font-size: 3.5rem;
        }
    </style>

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
                    <div class="carousel-caption d-flex flex-column justify-content-end align-items-start text-start p-5 fs-4">
                        <p>Цена на сегодняшний день</p>
                        <span class="bg-warning px-4 py-1 d-inline-block">Золото проба 585</span>
                        <p class="fz3h lh-1 mt-1">18 500 тг/гр</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider/banner-1.jpg') }}" class="d-block w-100" alt="banner-1">
                    <div class="carousel-caption d-flex flex-column justify-content-end align-items-start text-start p-5 fs-4">
                        <p>Цена на сегодняшний день</p>
                        <span class="bg-warning px-4 py-1 d-inline-block">Золото проба 585</span>
                        <p class="fz3h lh-1 mt-1">18 500 тг/гр</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider/banner-1.jpg') }}" class="d-block w-100" alt="banner-1">
                    <div class="carousel-caption d-flex flex-column justify-content-end align-items-start text-start p-5 fs-4">
                        <p>Цена на сегодняшний день</p>
                        <span class="bg-warning px-4 py-1 d-inline-block">Золото проба 585</span>
                        <p class="fz3h lh-1 mt-1">18 500 тг/гр</p>
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
                    @if(file_exists(public_path('img/catalog/' . $viewData['catalogs'][$i]->uuid . '.png')))
                        <img src="{{ asset('img/catalog/' . $viewData['catalogs'][$i]->uuid . '.png') }}" alt="" class="img-fluid">
                    @else
                        <img src="https://via.placeholder.com/376x331" alt="" class="img-fluid">
                    @endif
                </div>
                @if(isset($viewData['catalogs'][$i+1]))
                    <div class="col text-center">
                        <h3><a href="{{ route('catalog.products', ['uuid' => $viewData['catalogs'][$i+1]->uuid]) }}">{{ $viewData['catalogs'][$i+1]->name }}</a></h3>
                        @if(file_exists(public_path('img/catalog/' . $viewData['catalogs'][$i+1]->uuid . '.png')))
                            <img src="{{ asset('img/catalog/' . $viewData['catalogs'][$i+1]->uuid . '.png') }}" alt="" class="img-fluid">
                        @else
                            <img src="https://via.placeholder.com/376x331" alt="" class="img-fluid">
                        @endif
                    </div>
                @endif
                @if(isset($viewData['catalogs'][$i+2]))
                    <div class="col text-center">
                        <h3><a href="{{ route('catalog.products', ['uuid' => $viewData['catalogs'][$i+2]->uuid]) }}">{{ $viewData['catalogs'][$i+2]->name }}</a></h3>
                        @if(file_exists(public_path('img/catalog/' . $viewData['catalogs'][$i+2]->uuid . '.png')))
                            <img src="{{ asset('img/catalog/' . $viewData['catalogs'][$i+2]->uuid . '.png') }}" alt="" class="img-fluid">
                        @else
                            <img src="https://via.placeholder.com/376x331" alt="" class="img-fluid">
                        @endif
                    </div>
                @endif
            </div>
        @endfor
    </div>

    <div class="container">
        <h2 class="text-center m-5">Наши преимущества</h2>

        <div class="row mb-3">
            <div class="col text-center">
                <i class="fa fa-4x fa-flag"></i>
                <h4 class="mt-4 mb-4">Местное производство</h4>
            </div>
            <div class="col text-center">
                <i class="fa fa-4x fa-bank"></i>
                <h4 class="mt-4 mb-4">Большой ассортимент</h4>
            </div>
            <div class="col text-center">
                <i class="fa fa-4x fa-gift"></i>
                <h4 class="mt-4 mb-4">Индивидуальные условия</h4>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col text-center">
                <i class="fa fa-4x fa-ship"></i>
                <h4 class="mt-4 mb-4">Любые объемы доставки</h4>
            </div>
            <div class="col text-center">
                <i class="fa fa-4x fa-star"></i>
                <h4 class="mt-4 mb-4">Новинки каждый месяц</h4>
            </div>
            <div class="col text-center">
                <i class="fa fa-4x fa-home"></i>
                <h4 class="mt-4 mb-4">Гарантия качества</h4>
            </div>
        </div>
    </div>

@stop
